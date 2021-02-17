<?php

namespace App\Http\Controllers;

use App\Model\Information;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CompanyaddController extends Controller
{
  
   public function index(Request $request)
   {
    $items = Information::all();
    return view('company.info', ['items' => $items]);
   }

  public function add(Request $request)
  {
    $user_id = Auth::user()->user_id;
    return view('company.add',compact('user_id'));
  }
  public function create(Request $request)
  {
   // $this->validate($request, information::$rules);
    $information = new Information;
    $form = $request->all();
    unset($form['_token']);
    $information->timestamps = false;
    $information->fill($form)->save();
    return redirect('/company7');
  }
}