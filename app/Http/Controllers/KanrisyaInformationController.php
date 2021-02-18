<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Models\User;
use Illuminate\Http\Request;
use config\pref;
use App\Http\Requests\InformationRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KanrisyaInformationController extends Controller
{
     //登録情報表示画面へ
     public function index(Request $request)
     {
         $items = Information::all();
         $num = $items->count();
         $keyword = "";
         $flag = "";
         return view('information.index', ['items' => $items, 'keyword' => $keyword, 'num' => $num,'flag' => $flag]);
     }
}