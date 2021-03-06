@extends('layouts.insyokuareaapp')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img0">
@section('content1')
  <h1>北海道の飲食店情報</h1>
<hr size="1">
  <div class="hoteru">
    <div class="hoteru2">
      <p class="insyoku">飲食店情報</p>
    </div>
  </div>
<hr size="1">
@endsection

@section('content2')

<p>地方エリアから探す</p>

<hr size="1">
<form action="./kekka_i" method="GET">
  <h3><input type="submit" name="area" value="札幌" 
    style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
  <input type="submit" name="area" value="函館・大沼・前松" 
    style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
  <input type="submit" name="area" value="稚内・留萌"
    style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
  <input type="submit" name="area" value="旭川"
    style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
  <input type="submit" name="area" value="知床・北見"
    style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
  <input type="submit" name="area" value="阿寒・根室"
    style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;">
  <input type="submit" name="area" value="十勝"
    style= "width:1200px;height:50px;font-size:20;margin:10px 0 0 0;"></h3>
</form>
@endsection

@section('content4')
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
        <a href="use_q"><i class="fas fa-envelope">
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