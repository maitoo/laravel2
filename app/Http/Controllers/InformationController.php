<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
//use config\pref;
use App\Http\Requests\InformationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class InformationController extends Controller
{
    //登録情報表示画面へ
    public function index(Request $request)
    {
        $items = Information::all();
        $num = $items->count();
        $items = Information::simplePaginate(9);
        $keyword = "";
        $flag = "";
        return view('information.index', ['items' => $items, 'keyword' => $keyword, 'num' => $num, 'flag' => $flag]);
    }
    //店情報登録画面へ
    public function add(Request $request)
    {
        $user_id = Auth::user()->user_id;
    return view('company.add', ['user_id' => $user_id]);
    }
    //企業登録情報追加
    public function create(InformationRequest $request)
    {
        $post_data = $request->except('photo_pass');
        $photo_pass = $request->file('photo_pass');
        $temp_path = $photo_pass->store('public/temp');
        $filename = str_replace('public/', 'storage/', $temp_path);
    
        $param = array(
        'user_id' => $request->user_id,
        'store_name' => $request->store_name,
        'store_information' => $request->store_information,
        'store_introduction' => $request->store_introduction,
        'store_stype' => $request->store_stype,
        'rural_code' => $request->rural_code,
        'area' => $request->area,
        'url' => $request->url,
        'street_address' => $request->street_address,
        'photo_pass' => $filename,
        );

        DB::table('information')->insert($param);
        $items = Information::all();
        $num = $items->count();
        $items = Information::simplePaginate(9);
        $keyword = "";
        $flag = "";
        return view('company.index', ['items' => $items, 'keyword' => $keyword, 'num' => $num, 'flag' => $flag]);
        return view('company.create', compact('data') );
    }

    //更新画面へ
    public function edit(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('information.edit', ['form' => $item]);
    }
    //登録情報更新
    public function update(Request $request)
    {
        $information = Information::find($request->serial_number);
        $form = $request->all();
        unset($form['_token']);
        $information->fill($form)->save();
        return redirect('kanrisyaDB');
    }
    //削除画面へ
    public function delete(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('information.del', ['form' => $item]);
    }
    //登録情報削除
    public function remove(Request $request)
    {
        Information::find($request->serial_number)->delete();
        return redirect('/kanrisyaDB');
    }

    //詳細画面へ
    public function find(Request $request)
    {
        $item = Information::find($request->serial_number);
        return view('information.find', ['item' => $item]);
    }
    //キーワード検索
    public function keyword(Request $request)
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
                ->orWhere('street_address', $keyword)
                ->orwhere('flag', $request->flag);
            }
        }

        if (!empty($request->flag) || $request->flag == 0) {
            $query->where('flag', $request->flag);
        }

        $items = $query->get();

        $num = $items->count();

        if (!empty($keywords)) {
            $keyword = implode("    ", $keywords);
            $flag = $request->flag;
        } else {
            $keyword = "";
            $flag = 1;
        }
 
        $items = $query->simplePaginate(9);
 
        return view('information.index', compact('items', 'keyword', 'num', 'flag'));
    }
}
