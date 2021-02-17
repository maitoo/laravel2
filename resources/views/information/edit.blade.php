@extends('layouts.comp')
{{--店の登録情報更新--}}

{{--一つ前の画面へ戻る--}}
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('content')
{{--更新情報表示--}}
  <form action="/information/edit" method="post">
  <div class="table">
  <table>

      @csrf

      {{--serial_numberで区別--}}
      <input type="hidden" name="serial_number" value="{{$form->serial_number}}">
{{--店名--}}
      <tr><th>店名:</th><td>{{$form->store_name}}</td></tr>

{{--店情報--}}
      <tr><th>店情報:</th><td>{{$form->store_information}}</td></tr>

{{--紹介文--}}
      <tr><th>紹介文:</th><td>{{$form->store_introduction}}</td></tr>

{{--地方(プルダウンで表示)--}}
     <tr><th>地方:</th><td>{{$form->rural_code}}</td></tr>

{{--エリア(プルダウンで表示)--}}
      <tr><th>エリア:</th><td>{{$form->area}}</td></tr>

{{--店の種類(プルダウンで表示)--}}
      <tr><th>店の種類:</th><td>{{$form->store_stype}}</td></tr>

{{--リンク--}}
      <tr><th>URL:</th><td>{{$form->url}}</td></tr>

{{--住所--}}
      <tr><th>住所:</th><td>{{$form->street_address}}</td></tr>

{{--写真--}}      
      <tr><th>写真:</th><td><img src="{{asset($form->photo_pass)}}" width="50" height="40" align="center"></td></tr>

{{--公開、非公開の切り替え--}}
      <tr><th>公開</th><td><label><input name="flag" type="hidden" value= "0" ><input name="flag" type="checkbox" value="1" class="check">公開する</label></td></tr>

{{--更新情報登録--}}      
      <tr><th></th><td><input type="submit" value="更新" class="button"></td></tr>
  </table>
  </div>
  </form>
@endsection