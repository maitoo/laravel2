<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
//use config\pref;
use App\Http\Requests\InformationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        return view('company.index');
    }
       //削除画面へ
       public function delete(Request $request)
       {
           $item = Information::find($request->serial_number);
           return view('com.del', ['form' => $item]);
       }
       //登録情報削除
       public function remove(Request $request)
       {
           Information::find($request->serial_number)->delete();
           return redirect('/information');
       }
       //キーワード検索
    public function keyword(Request $request)
    {
        $keywords = $request->input('keyword');

        $user_id = Auth::user()->user_id;
 
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
                ->orWhere('street_address', $keyword)
                ->orwhere('flag', $request->flag);
            }
        }

        if (!empty($request->flag) || $request->flag == 0) {
            $query->where('flag', $request->flag);
        }

        if (!empty($keywords)) {
            $keyword = implode("    ", $keywords);
            $flag = 1;
        } else {
            $keyword = "";
            $flag = 1;
        }
 
        $items = $query->get();

        $num = $items->where('user_id', $user_id)->count();
 
        return view('company.index1', compact('items', 'keyword', 'num', 'flag', 'user_id'));
    }
}
