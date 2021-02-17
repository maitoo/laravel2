@extends('layouts.kekka_iapp')

<link href='https://fonts.googleapis.com/css?family=Noto+Serif+JP' rel="stylesheet">
<style>
  .pagination { font-size:15pt; margin:0 0 0 550px;}
  .pagination li { display:inline-block }
</style>
<div class="title0" font-size="20px">
  <div class="title" font-size="20px">
    飲食
  </div>
</div>


@section('content2')

@endsection
@section('content3')
<link href='https://fonts.googleapis.com/css?family=Noto+Serif+JP' rel="stylesheet">
<div class="saikensaku">
<form action="/insyoku/keyword" method="GET">
    @csrf
    <input required type="text" style= "width:800px;height:50px"; name="keyword" placeholder="    🔍検索(スペース区切りで複数条件検索可)" value="{{$keyword}}">
    <input class="btn-square-slant" type="submit" value="検索">
</form>
</div>

<div class="sen"><hr size="1"></div>

@endsection

@section('content')
@if ($num > 0)
@foreach ($items as $item)
@if (!empty($item->flag) and $item->store_stype == "飲食店")
<div class="table2">
    <table border="1" >
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho">
    @csrf
        <tr>
          <td rowspan="10" style="border-right-style: hidden;"><a href="{{ $item->url}}"><div class="gazou"><img src="{{ asset($item->photo_pass)}}" width="450" height="380"></td></div>
        </tr>
        <tr>
          <td  height="300px;" 
          style="border-top-color: black; color:red; font-size: 70px;" align="left"><div class="gazou"><a href="{{ $item->url}}">
          {{ $item->store_name}}</td></div>
        </tr>
        <tr>
        <td class="info4" height="45px;" style="border-top-style: hidden; color:skyblue; font-size: 30px;" align="left"><div class="ks">{{ $item->rural_code}} {{ $item->area}}</div></td>
        </tr>
        <tr>
          <td class="info8" height="45px;" style="border-top-style: hidden;" align="left"><div class="ks2">{{ $item->street_address}}</div></td>
        </tr>
        <tr>
          <td class="info" height="90px;" style="border-top-style: hidden;"align="left"><div class="ks3"><div class="tenpo">~店舗情報~</div>{{ $item->store_information}}</div></td>
        </tr>
          <td class="info2" height="200px;" style="border-bottom-color: black;border-top-style: hidden;" align="left"><div class="ks4"><div class="tenpo">~備考~</div>{{ $item->store_introduction}}</div></td>
        </tr>
    </table>
  </div>
    @endif
    @endforeach
@else
  <p style="font-size: 50px;">検索結果は<span style="color: red;">0件<span style="color: black;">です</p>
@endif
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
          <a href="http://localhost:8000/"><i class="fas fa-microphone-alt">
          </i>言語を変更する</a>
          <a href="http://localhost:8000/"><i class="fas fa-envelope">
          </i>Q&A</a>
          <a href="http://localhost:8000/"><i class="fas fa-phone">
          </i>お問い合わせ</a>
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
	  <a href="../syukuhaku">SYUKUHAKU 🏨</a>
	  <a class="active" href="../insyoku">INSYOKU 🍜</a>
	  <a href="../kankou">KANKOU 🗼</a>
	  <a href="../chat">FREE (`･ω･´)b</a>
  </div>
</div>