@extends('layouts.kanrisyaapp')
   <div class="button_wrapper">
@section('content')
<input class="click" type="button" onclick="location.href='./customer'" value="顧客情報管理">
   <input class="click" type="button" onclick="location.href='./kanrisyaDB'" value="企業情報管理">
   <input class="click" type="button" onclick="location.href='./question'" value="よくある質問">
   </div>
   @endsection
