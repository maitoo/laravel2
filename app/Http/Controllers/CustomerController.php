<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Question;
use App\Models\Information;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CustomerController extends Controller
{
   
    public function role(Request $request)
    {
        $key = Auth::user()->role;
        if (Auth::check()) {
            if ($key == "管理者") {
                $items = Question::all();
                return view('kanrisya.index', ['items' => $items]);
            } elseif ($key == "企業") {
                $user_id = Auth::user()->user_id;
                //$items = Information::where('user_id', $user_id);
                $items = Information::all();
                $num = $items->where('user_id', $user_id)->count();
                $keyword = "";
                return view('company.index', compact('user_id', 'items', 'keyword', 'num'));
            } else {
                return view('aa.syukuhaku');
            }
        } else {
            // ログインしていなかったら、Login画面を表示
            return view('auth.login');
        }
    }

    //よくある質問画面へ
    public function questionIndex(Request $request)
    {
        $items = Question::all();
        return view('question.question', ['items' => $items]);
    }
    //お問い合わせ入力画面へ
    public function formIndex(Request $request)
    {
        return view('question.form');
    }
    //お問い合わせ内容確認画面へ
    public function reformIndex(Request $request)
    {
        $user_id = Auth::user()->user_id;
        $question = $request->question;
        return view('question.form2', ['question' => $question, 'user_id' => $user_id]);
    }
    //顧客情報管理画面へ
    public function index(Request $request)
    {
        $items = User::all();
        $num = $items->count();
        $items = User::simplePaginate(10);
        $keyword ="";
        $role= 0;
        $country_code = "";
        return view('customer.index', compact('items', 'keyword', 'num', 'role', 'country_code'));
    }

    //更新画面へ
    public function edit(Request $request)
    {
        $item = User::find($request->user_id);
        return view('customer.edit', ['form' => $item]);
    }
    //登録情報更新
    public function update(Request $request)
    {
        $information = User::find($request->user_id);
        $form = $request->all();
        unset($form['_token']);
        $information->fill($form)->save();
        return redirect('customer');
    }
    //キーワード検索
    public function keyword(Request $request)
    {
        $keywords = $request->input('keyword');
 
        $query = User::query();
 
        if (!empty($keywords)) {
            foreach ($keywords as $keyword) {
            $query->where('user_id', $keyword)
                ->orWhere('email', $keyword)
                ->orWhere('country_code', $request->country_code)
                ->orWhere('role', $request->role);
            }
        }

        if (!empty($request->role) && !empty($request->country_code)) {
            $query->where('role', $request->role)
            ->where('country_code', $request->country_code);
        }
        
        if (!empty($request->role)) {
            $query->where('role', $request->role);
        }

        if (!empty($request->country_code)) {
            $query->where('country_code', $request->country_code);
        }
        
        $items = $query->get();

        $num = $items->count();

        if (!empty($keywords)) {
            $keyword = implode("    ", $keywords);
            $role = $request->role;
            $country_code = $request->country_code;
        } elseif (!empty($request->country_code)) {
            $keyword = "";
            $role = 0;
            $country_code = $request->country_code;
        } elseif (!empty($request->role)) {
            $keyword = "";
            $role = 1;
            $country_code = "";
        } else {
            $keyword = "";
            $role = 0;
            $country_code = "";
        }

        $items = $query->simplePaginate(10);
 
        return view('customer.index', compact('items', 'keyword', 'num', 'role', 'country_code'));
    }


}
