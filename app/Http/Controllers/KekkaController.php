<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\Information;

use Illuminate\Pagination\paginator;
use App\Person;

class KekkaController extends Controller
{
   /*public function kensakuDB(Request $request)
   {
       $items = DB::table('people')->simplePaginate(5);
       $items = DB::select('select * from Information where area = "札幌" and religion = "宿泊"');
       return view('aa.kensakuDB', ['items' => $items]);
   }*/

   public function kensakuDB(Request $request)
   {
       $items = Information::all();
       return view('aa.kensakuDB', ['items' => $items]);
   } 

   public function find(Request $request)
   {
       $items = Information::find($request->syukuhaku);
       return view('aa.kensakuDB', ['items' => $items]);
   }

   public function key(Request $request)
    {
        $keyword = $request->input('syukuhaku');
 
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
 
        return view('aa.kensakuDB', compact('items', 'keyword'));
    }

    public function kekka_s(Request $request)
    {
        $items = DB::table('information')->where('area', $request->area)->orderBy('store_name', 'asc')->get();
       $keyword = '';
       $num = $items->where('flag', 1)->where('store_stype', '宿泊')->count();
       $param = ['items' => $items, 'keyword' => $keyword, 'num' => $num];
       return view('kensaku.kekka_s', $param);
    }

   public function kekka_i(Request $request)
   {
       //$sort = $request->sort;
       $items = DB::table('information')->where('area', $request->area)->orderBy('store_name', 'asc')->get();
       $keyword = '';
       $num = $items->where('flag', 1)->where('store_stype', '飲食店')->count();
       $param = ['items' => $items, 'keyword' => $keyword, 'num' => $num];
       return view('kensaku.kekka_i', $param);
   }

   public function kekka_k(Request $request)
   {
    $items = DB::table('information')->where('area', $request->area)->orderBy('store_name', 'asc')->get();
       $keyword = '';
       $num = $items->where('flag', 1)->where('store_stype', '観光')->count();
       $param = ['items' => $items, 'keyword' => $keyword, 'num' => $num];
       return view('kensaku.kekka_k', $param);
}

public function kekka_ikeyword(Request $request)
    {
        $keywords = $request->input('keyword');
 
        $query = information::query();
        
        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
            $query->where('store_name', $keyword)
                ->orWhere('user_id', $keyword)
                ->orWhere('allergies', $keyword)
                ->orWhere('store_stype', $keyword)
                ->orWhere('rural_code', $keyword)
                ->orWhere('area', $keyword)
                ->orWhere('religion', $keyword)
                ->orWhere('url', $keyword)
                ->orWhere('street_address', $keyword);
            }
        }

        $items = $query->get();

        //$num = $items->count();

        $keyword = implode("    ", $keywords);
 
        $items = $query->orderBy('store_name', 'asc')->get();

        $num = $items->where('flag', 1)->where('store_stype', '飲食店')->count();
 
        return view('kensaku.kekka_i', compact('items', 'keyword', 'num'));
    }

    public function kekka_skeyword(Request $request)
    {
        $keywords = $request->input('keyword');
 
        $query = information::query();
        
        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
            $query->where('store_name', $keyword)
                ->orWhere('user_id', $keyword)
                ->orWhere('allergies', $keyword)
                ->orWhere('store_stype', $keyword)
                ->orWhere('rural_code', $keyword)
                ->orWhere('area', $keyword)
                ->orWhere('religion', $keyword)
                ->orWhere('url', $keyword)
                ->orWhere('street_address', $keyword);
            }
        }

        $items = $query->get();

        //$num = $items->count();

        $keyword = implode("    ", $keywords);
 
        $items = $query->orderBy('store_name', 'asc')->get();

        $num = $items->where('flag', 1)->where('store_stype', '宿泊')->count();
 
        return view('kensaku.kekka_s', compact('items', 'keyword', 'num'));
    }

    public function kekka_kkeyword(Request $request)
    {
        $keywords = $request->input('keyword');
 
        $query = information::query();
        
        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
            $query->where('store_name', $keyword)
                ->orWhere('user_id', $keyword)
                ->orWhere('allergies', $keyword)
                ->orWhere('store_stype', $keyword)
                ->orWhere('rural_code', $keyword)
                ->orWhere('area', $keyword)
                ->orWhere('religion', $keyword)
                ->orWhere('url', $keyword)
                ->orWhere('street_address', $keyword);
            }
        }

        $items = $query->get();

        //$num = $items->count();

        $keyword = implode("    ", $keywords);
 
        $items = $query->orderBy('store_name', 'asc')->get();

        $num = $items->where('flag', 1)->where('store_stype', '観光')->count();
 
        return view('kensaku.kekka_k', compact('items', 'keyword', 'num'));
    }
}