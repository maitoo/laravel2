@extends('layouts.comp')
{{--店の登録情報更新--}}

{{--一つ前の画面へ戻る--}}
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">

@section('content')
{{--更新情報表示--}}
  <form action="/customer/edit" method="post">
  <div class="table">
  <table>

      @csrf

      {{--user_idで区別--}}
      <tr><th>id:</th><input type="hidden" name="user_id" value="{{$form->user_id}}"><td>{{$form->user_id}}</td></tr>

      <tr><th>名前:</th><td>{{$form->user_name}}</td></tr>

      <tr><th>メールアドレス:</th><td>{{$form->email}}</td></tr>

      <tr><th>出身国:</th><td>{{$form->country_code}}</td></tr>

      <tr><th>使用言語:</th><td>{{$form->language_code}}</td></tr>

{{--権限(プルダウンで表示)--}}
      <tr><th>権限:</th><td><select name="role" class="form-control">
      <option value="{{$form->role}}" hidden>{{$form->role}}</option>
      <option value="管理者">管理者</option>
      <option value="企業">企業</option>
      <option value="一般">一般</option>
      </select></td></tr>

{{--更新情報登録--}}      
      <tr><th></th><td><input type="submit" value="更新" class="button"></td></tr>
  </table>
  </div>
  </form>
@endsection