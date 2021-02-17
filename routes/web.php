<?php

use Illuminate\Support\Facades\Route;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|{
*/
Route::group(['middleware'=>'set.locale'], function () {
Route::get('/',function (){
  return view('welcome');
});
//企業別情報
Route::get('/company/edit','App\Http\Controllers\CompanyController@edit');
Route::post('/company/edit','App\Http\Controllers\CompanyController@update');
Route::get('/company/find','App\Http\Controllers\CompanyController@find');

Route::get('/company/keyword','App\Http\Controllers\CompanyController@keyword')->middleware('keyword');

//顧客情報管理
Route::get('/customer/edit','App\Http\Controllers\CustomerController@edit');
Route::post('/customer/edit','App\Http\Controllers\CustomerController@update');
Route::get('/customer/keyword','App\Http\Controllers\CustomerController@keyword')->middleware('keyword');

Route::get('/company', 'App\Http\Controllers\CompanyController@index');

Route::get('/kanrisya', 'App\Http\Controllers\KanrisyaController@index');
Route::post('/kanrisya', 'App\Http\Controllers\KanrisyaController@post');

Route::get('/kanrisya2', 'App\Http\Controllers\KanrisyaController2@index');
Route::post('/kanrisya2', 'App\Http\Controllers\KanrisyaController2@post');

Route::get('/kanrisyaDB', 'App\Http\Controllers\KanrisyaInformationController@index');
Route::get('kanrisyaDB/edit', 'App\Http\Controllers\KanrisyaInformationController@edit');
Route::post('kanrisyaDB/update', 'App\Http\Controllers\KanrisyaInformationController@update');
Route::get('kanrisyaDB/del', 'App\Http\Controllers\KanrisyaInformationController@del');
Route::post('kanrisyaDB/remove', 'App\Http\Controllers\KanrisyaInformationController@remove');

Route::get('/company2', 'App\Http\Controllers\CompanyController2@index');
Route::post('/company2', 'App\Http\Controllers\CompanyController2@post');

Route::get('/kigyou', 'App\Http\Controllers\HelloController3@index');
Route::post('/kigyou', 'App\Http\Controllers\HelloController3@post');

Route::get('/company3', 'App\Http\Controllers\CompanyController3@index');
Route::post('/company3', 'App\Http\Controllers\CompanyController3@post');

Route::get('/company4', 'App\Http\Controllers\HelloController3@index');
Route::post('/company4', 'App\Http\Controllers\HelloController3@post');

Route::get('/company6', 'App\Http\Controllers\QuestionController@index');
Route::post('/company6', 'App\Http\Controllers\QuestionController@post');

Route::get('/company7', 'App\Http\Controllers\InformationController@index');
Route::post('/company7', 'App\Http\Controllers\InformationController@post');

Route::get('company/add', 'App\Http\Controllers\CompanyaddController@add');
Route::post('company/create','App\Http\Controllers\CompanyaddController@create');

Route::get('question', 'App\Http\Controllers\QuestionController@index');
Route::get('question2', 'App\Http\Controllers\QuestionController@question2');
Route::post('question/re', 'App\Http\Controllers\QuestionController@re');
Route::get('question/edit', 'App\Http\Controllers\QuestionController@edit');
Route::post('question/update', 'App\Http\Controllers\QuestionController@update');
Route::get('question/add', 'App\Http\Controllers\QuestionController@add');
Route::post('question/create', 'App\Http\Controllers\QuestionController@create');

Route::get('user_q', 'App\Http\Controllers\CustomerController@questionIndex');
Route::get('form', 'App\Http\Controllers\CustomerController@formIndex');
Route::post('form/re', 'App\Http\Controllers\CustomerController@reformIndex');
Route::post('form/create2', 'App\Http\Controllers\QuestionController@create2');

Route::get('hello', 'App\Http\Controllers\HelloController2@index');
Route::post('hello', 'App\Http\Controllers\HelloController2@post');

Route::get('hello/add', 'App\Http\Controllers\HelloController2@add');
Route::post('hello/add', 'App\Http\Controllers\HelloController2@create');

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/kigyou2', 'App\Http\Controllers\HelloController3@index');
Route::post('/kigyou2', 'App\Http\Controllers\HelloController3@post');


//ユーザー側検索
Route::get('/syukuhaku', 'App\Http\Controllers\KensakuController@syukuhaku');
Route::post('/syukuhaku', 'App\Http\Controllers\KensakuController@post');
Route::get('kensakuDB/syukuhaku', 'App\Http\Controllers\KensakuController@syukuhaku');
Route::post('kensakuDB/syukuhaku', 'App\Http\Controllers\KensakuController@post');

Route::get('/insyoku', 'App\Http\Controllers\KensakuController@insyoku');
Route::post('/insyoku', 'App\Http\Controllers\KensakuController@post');
Route::get('kensakuDB/insyoku', 'App\Http\Controllers\KensakuController@insyoku');
Route::post('kensakuDB/insyoku', 'App\Http\Controllers\KensakuController@post');

Route::get('/kankou', 'App\Http\Controllers\KensakuController@kankou');
Route::post('/kankou', 'App\Http\Controllers\KensakuController@post');
Route::get('kensakuDB/kankou', 'App\Http\Controllers\KensakuController@kankou');
Route::post('kensakuDB/kankou', 'App\Http\Controllers\KensakuController@post');


//Route::get('/free', 'App\Http\Controllers\FreeController@index');
//Route::post('/free', 'App\Http\Controllers\FreeController@post');

Route::get('/syukuhakuarea', 'App\Http\Controllers\KensakuController@syukuhakuarea');
Route::get('kensakuDB/syukuhakuarea', 'App\Http\Controllers\KensakuController@syukuhakuarea');

Route::get('/insyokuarea', 'App\Http\Controllers\KensakuController@insyokuarea');
Route::get('kensakuDB/insyokuarea', 'App\Http\Controllers\KensakuController@insyokuarea');
Route::post('kensakuDB/insyokuarea', 'App\Http\Controllers\KensakuController@post');
Route::post('/insyokuarea', 'App\Http\Controllers\KensakuController@post');

Route::get('/kankouarea', 'App\Http\Controllers\KensakuController@kankouarea');
Route::get('kensakuDB/kankouarea', 'App\Http\Controllers\KensakuController@kankouarea');

Route::get('kensakuDB/keyword','App\Http\Controllers\KekkaController@key');

//Route::get('/keyword','App\Http\Controllers\KekkaController@key');

Route::get('insyoku/keyword','App\Http\Controllers\KensakuController@insyokukey')->middleware('keyword');

Route::get('kankou/keyword','App\Http\Controllers\KensakuController@kankoukey')->middleware('keyword');

Route::get('syukuhaku/keyword','App\Http\Controllers\KensakuController@syukuhakukey')->middleware('keyword');

/*Route::get('information','App\Http\Controllers\InformationController@index');
Route::get('information/add', 'App\Http\Controllers\InformationController@add');
Route::post('information/create', 'App\Http\Controllers\InformationController@create');*/
Route::get('information','App\Http\Controllers\InformationController@index');
Route::get('information/add', 'App\Http\Controllers\InformationController@add');
Route::post('create', 'App\Http\Controllers\InformationController@create');
Route::post('confirm', 'App\Http\Controllers\InformationController@confirm');

Route::get('information/edit',
'App\Http\Controllers\InformationController@edit');
Route::post('information/edit', 'App\Http\Controllers\InformationController@update');
Route::get('information/del', 'App\Http\Controllers\InformationController@delete');
Route::post('information/del', 'App\Http\Controllers\InformationController@remove');

Route::get('freemap', 'App\Http\Controllers\MapController@index');


Route::get('settei/add', 'App\Http\Controllers\SetteiController@add');
Route::post('settei/create', 'App\Http\Controllers\SetteiController@create');


Route::get('contanct','App\Http\Controllers\ContactController@top');

Route::post('check','App\Http\Controllers\ContactController@check');

Route::get('kensakuDB','App\Http\Controllers\KekkaController@kensakuDB');

Route::get('map','App\Http\Controllers\MapController@index');

//試し
Route::get('en','App\Http\Controllers\KensakuController@syukuhakuen');

Route::get('kekka_s', 'App\Http\Controllers\KekkaController@kekka_s');
Route::get('kekka_ss', 'App\Http\Controllers\KekkaController@kekka_ss');
Route::get('/kekka_s/keyword','App\Http\Controllers\KekkaController@kekka_skeyword')->middleware('keyword');
Route::get('kekka_i', 'App\Http\Controllers\KekkaController@kekka_i');
Route::get('kekka_ii', 'App\Http\Controllers\KekkaController@kekka_ii');
Route::get('/kekka_i/keyword','App\Http\Controllers\KekkaController@kekka_ikeyword')->middleware('keyword');
Route::get('kekka_k', 'App\Http\Controllers\KekkaController@kekka_k');
Route::get('kekka_kk', 'App\Http\Controllers\KekkaController@kekka_kk');
Route::get('/kekka_k/keyword','App\Http\Controllers\KekkaController@kekka_kkeyword')->middleware('keyword');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/homepage','App\Http\Controllers\CustomerController@role');

Route::get('/login/admin', 'App\Http\Controllers\Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'App\Http\Controllers\Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/admin', 'App\Http\Controllers\Auth\LoginController@adminLogin');
Route::post('/register/admin', 'App\Http\Controllers\Auth\RegisterController@createAdmin')->name('admin-register');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');


Route::get('chat', 'App\Http\Controllers\PostsController@index')->name('top');
Route::resource('posts', 'App\Http\Controllers\PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);
Route::resource('comments', 'App\Http\Controllers\CommentsController', ['only' => ['store']]);

Route::get('/customer','App\Http\Controllers\CustomerController@index');
Route::get('/customer/edit','App\Http\Controllers\CustomerController@edit');
Route::post('/customer/edit','App\Http\Controllers\CustomerController@update');
Route::get('/customer/keyword','App\Http\Controllers\CustomerController@keyword')->middleware('keyword');

Route::get('/company/edit','App\Http\Controllers\InformationController@edit2');
Route::post('/company/edit','App\Http\Controllers\InformationController@update2');
Route::get('/company/find','App\Http\Controllers\InformationController@find2');
Route::get('/company/del','App\Http\Controllers\CompanyController@delete');
Route::post('/company/del','App\Http\Controllers\CompanyController@remove');


Route::get('/company/keyword','App\Http\Controllers\CompanyController@keyword')->middleware('keyword');

Route::get('/information/keyword','App\Http\Controllers\InformationController@keyword')->middleware('keyword');

Route::get('/setlocale/{locale}', function($locale) {
  session()->put('locale', $locale);
  return redirect()->back();
})->name('locale');
});