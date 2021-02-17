@extends('layouts.comp')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
@section('content')
  <div class="table">
  <table border="2">
        <tr>
          <th>ユーザーid:</th><td>{{ $item->user_id}}</td>
        </tr>

        <tr>
          <th>店名:</th><td>{{ $item->store_name}}</td>
        </tr>

        <tr>
          <th>店情報:</th><td>{{ $item->store_information}}</td>
        </tr>

        <tr>
          <th>紹介文:</th><td>{{ $item->store_introduction}}</td>
        </tr>

        <tr>
          <th>都道府県:</th><td>{{ $item->rural_code}}</td>
        </tr>

        <tr>
          <th>エリア:</th><td>{{ $item->area}}</td>
        </tr>

        <tr>
          <th>店の種類:</th><td>{{ $item->store_stype}}</td>
        </tr>

        <tr>
          <th>URL:</th><td>{{ $item->url}}</td>
        </tr>

        <tr>
          <th>住所:</th><td>{{ $item->street_address}}</td>
        </tr>

        <tr>
          <th>写真:</th><td><img src="{{asset($item->photo_pass)}}" width="50" height="40" align="center"></td>
        </tr>

        <tr>{{--flagが1なら公開、それ以外は非公開--}}
            <th>公開情報</th>
            @empty($item->flag)
            <td style="color: red">非公開</td>
            @else
            <td style="color: green;">公開</td>
            @endempty
        </tr>

        <tr>
          <th></th><td><a href="/information/edit?serial_number={{$item->serial_number}}" class="button" style="width: 140px; margin: 0 460px;">更新画面へ</a></td>
        </tr>

        <tr>
          <th></th><td><a href="/information/del?serial_number={{$item->serial_number}}" class="button" style="width: 140px; margin: 0 460px;">削除画面へ</a></td>
        </tr>
    </table>
    </div>
@endsection