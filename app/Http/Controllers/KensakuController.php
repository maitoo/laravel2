<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Information;

class KensakuController extends Controller
{
  
   public function kankou(Request $request)
   {
       return view('aa.kankou');
   }

   public function kankouarea(Request $request)
   {
       return view('aa.kankouarea');
   }

   public function insyoku(Request $request)
   {
       $items = '';
       return view('aa.insyoku', ['items' => $items]);
   }

   public function insyokuarea(Request $request)
   {
       return view('aa.insyokuarea');
   }

   public function syukuhaku(Request $request)
   {
       return view('aa.syukuhaku');
   }

   public function syukuhakuarea(Request $request)
   {
       return view('aa.syukuhakuarea');
   }

   public function key(Request $request)
    {
        $keyword = $request->input('insyoku');
 
        $query = information::query();
 
        if (!empty($keyword)) {
            $query->where('store_name', 'LIKE', "%{$keyword}%")
                ->orWhere('store_information', 'LIKE', "%{$keyword}%")
                ->orWhere('store_introduction', 'LIKE', "%{$keyword}%")
                ->orWhere('allergies', 'LIKE', "%{$keyword}%")
                ->orWhere('store_stype', 'LIKE', "%{$keyword}%")
                ->orWhere('rural_code', 'LIKE', "%{$keyword}%")
                ->orWhere('area', 'LIKE', "%{$keyword}%")
                ->orWhere('religion', 'LIKE', "%{$keyword}%")
                ->orWhere('url', 'LIKE', "%{$keyword}%")
                ->orWhere('street_address', 'LIKE', "%{$keyword}%");
        }
 
        $items = $query->get();
 
        return view('aa.insyoku', compact('items', 'keyword'));
    }

    public function insyokukey(Request $request)
    {
       
        $keywords = $request->input('keyword');
 
        $query = Information::query();

        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
            $query->where('store_name', $keyword)
                //->Where('store_stype', "飲食店")
                //->where('flag', 1)
                //->orWhere('store_information', 'LIKE', "%{$keyword}%")
                //->orWhere('store_introduction', 'LIKE', "%{$keyword}%")
                ->orWhere('allergies', 'LIKE', "%{$keyword}%")
                ->orWhere('rural_code', 'LIKE', "%{$keyword}%")
                ->orWhere('area', 'LIKE', "%{$keyword}%")
                ->orWhere('religion', 'LIKE', "%{$keyword}%")
                ->orWhere('url', 'LIKE', "%{$keyword}%")
                ->orWhere('street_address', $keyword);
            }
        }

       //$sort = $request->sort;

       $items = $query->where('flag', 1)->orderBy('store_name', 'asc')->get();

       $num = $items->where('flag', 1)->where('store_stype', '飲食店')->count();

       $keyword = implode("    ", $keywords);

        return view('aa.insyoku_table', compact('items', 'keyword', 'num') );
    }

    public function syukuhakukey(Request $request)
    {
        $keywords = $request->input('keyword');
 
        $query = Information::query();

        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
            $query->where('store_name', $keyword)
                //->orWhere('store_information', 'LIKE', "%{$keyword}%")
                //->orWhere('store_introduction', 'LIKE', "%{$keyword}%")
                ->orWhere('allergies', 'LIKE', "%{$keyword}%")
                ->orWhere('rural_code', 'LIKE', "%{$keyword}%")
                ->orWhere('area', 'LIKE', "%{$keyword}%")
                ->orWhere('religion', 'LIKE', "%{$keyword}%")
                ->orWhere('url', 'LIKE', "%{$keyword}%")
                ->orWhere('street_address', $keyword);
            }
        }

       //$sort = $request->sort;

       $items = $query->where('flag', 1)->orderBy('store_name', 'asc')->get();

       $num = $items->where('flag', 1)->where('store_stype', '宿泊')->count();

       $keyword = implode("    ", $keywords);
        
        return view('aa.syukuhaku_table', compact('items', 'keyword', 'num'));
    }

    public function kankoukey(Request $request)
    {
        $keywords = $request->input('keyword');
 
        $query = Information::query();

        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
            $query->where('store_name', $keyword)
                //->orWhere('store_information', 'LIKE', "%{$keyword}%")
                //->orWhere('store_introduction', 'LIKE', "%{$keyword}%")
                ->orWhere('allergies', 'LIKE', "%{$keyword}%")
                ->orWhere('rural_code', 'LIKE', "%{$keyword}%")
                ->orWhere('area', 'LIKE', "%{$keyword}%")
                ->orWhere('religion', 'LIKE', "%{$keyword}%")
                ->orWhere('url', 'LIKE', "%{$keyword}%")
                ->orWhere('street_address', $keyword);
            }
        }

       //$sort = $request->sort;

       $items = $query->where('flag', 1)->orderBy('store_name', 'asc')->get();

       $num = $items->where('flag', 1)->where('store_stype', '観光地')->count();

       $keyword = implode("    ", $keywords);

        return view('aa.kankou_table', compact('items', 'keyword', 'num'));
    }
}