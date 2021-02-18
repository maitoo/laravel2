@extends('layouts.syukuhakuapp')

<link href='https://fonts.googleapis.com/css?family=Noto+Serif+JP' rel="stylesheet">
<style>
  .pagination { font-size:15pt; margin:0 0 0 550px;}
  .pagination li { display:inline-block }
</style>

<div class="title0" font-size="20px">
  <div class="title" font-size="20px">
    {{__('messages.syukuhaku_title')}}
  </div>
</div>

@section('content1')

  <hr size="1">
  <p>{{__('messages.insyoku_serch')}}</p>
  <hr size="1">
  </form>
@endsection


@section('content2')
<form action="/syukuhaku/keyword" method="get">
@csrf
<input required type="text"  style= "width:900px;height:50px"; name="keyword" placeholder="🔍{{__('messages.syukuhaku_serch_form')}}">
<input  class="btn-square-slant" type="submit" value="検索"></imput>
</form>
@endsection


@section('content3')
<hr size="1">
  <p>{{__('messages.serch_region')}}</p>
<hr size="1">
<hr size="1">

  <h2>{{__('messages.hokkaido_region')}}</h2>

  <hr size="1">

  
  <h3><input type="submit" value="{{__('messages.hokkaido')}}" onclick="location.href='./syukuhakuarea'" 
    style= "width:200px;height:50px;font-size:20;"></input></h3>
  

  <hr size="1">

  <h4>{{__('messages.tohoku_region')}}</h4>

  <hr size="1">

  <h3><input type="submit" value="{{__('messages.aomori')}}" 
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.iwate')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.miyagi')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.akita')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.yamagata')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.hukusima')}}"
    style= "width:200px;height:50px;font-size:20;"></h3>

  <hr size="1">

  <h5>{{__('messages.kanto_region')}}</h5>

  <hr size="1">
  
  <h3><input type="submit" value="{{__('messages.ibaraki')}}" 
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.tochigi')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.gunnma')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.saitama')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.chiba')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.tokyo')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.kanagawa')}}"
    style= "width:200px;height:50px;font-size:20;"></h3>

  <hr size="1">

  <h6>{{__('messages.chubu_region')}}</h6>

  <hr size="1">

  <h3><input type="submit" value="{{__('messages.niigata')}}" 
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.toyama')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.ishikawa')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.hukui')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.yamanashi')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.nagano')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.gihu')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.sizuoka')}}"
    style= "width:200px;height:50px;font-size:20;">  
  <input type="submit" value="{{__('messages.aiti')}}"
    style= "width:200px;height:50px;font-size:20;"></h3>

  <hr size="1">

  <div class="kinki">
    <div class="kinki2">
      {{__('messages.kinki_region')}}
    </div>
  </div>

  <hr size="1">

  <h3><input type="submit" value="{{__('messages.mie')}}" 
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.shiga')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.kyoto')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.osaka')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.hyogo')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.nara')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.wakayama')}}"
    style= "width:200px;height:50px;font-size:20;"></h3>
  
  <hr size="1">

  <div class="tyuugoku">
    <div class="sikoku">
      {{__('messages.chugoku_sikoku_region')}}
    </div>
  </div>

  <hr size="1">

  <h3><input type="submit" value="{{__('messages.tottori')}}" 
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.shimane')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.okayama')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.hiroshima')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.yamagata')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.tokushima')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.kagawa')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.ehime')}}"
    style= "width:200px;height:50px;font-size:20;">  
  <input type="submit" value="{{__('messages.kouchi')}}"
    style= "width:200px;height:50px;font-size:20;"></h3>

  <hr size="1">

  <div class="kyuusyuu">
    <div class="kyuusyuu2">
        {{__('messages.kyushu_okinawa_region')}}
    </div>
  </div>

  <hr size="1">
      
  <h3><input type="submit" value="{{__('messages.hukuoka')}}" 
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.saga')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.nagasaki')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.kumamoto')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.oita')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.miyazaki')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.kagoshima')}}"
    style= "width:200px;height:50px;font-size:20;">
  <input type="submit" value="{{__('messages.okinawa')}}"
    style= "width:200px;height:50px;font-size:20;"></h3>

@endsection

@section('content5')
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
  <header>
    <div class="menu-drawer">
      <input type="checkbox" id="chk" />
      <label class="btn" for="chk"></label>
      <label class="other" for="chk"></label>
      <div class="content">
        <h2><i class="fas fa-list-ul"></i>メニュー</h2>
        <div class="menu">
        <a href="/user_q"><i class="fas fa-envelope">
          </i>Q&A</a>
          <a href="/form"><i class="fas fa-phone">
          </i>お問い合わせ</a>
          <a href="setlocale/ja">日本語</a>
          <a href="setlocale/en">英語</a>
          <a href="setlocale/zh">中国語</a>
        </div>
      </div>
    </div>
  </header>
</body>
@endsection
@section('content4')
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<div class="menyu1">
  <div class="menyu2">
	  <a class="active" href="./syukuhaku">SYUKUHAKU 🏨</a>
	  <a href="./insyoku">INSYOKU 🍜</a>
	  <a href="./kankou">KANKOU 🗼</a>
	  <a href="./chat">COMMUNITY (`･ω･´)b</a>
  </div>
</div>