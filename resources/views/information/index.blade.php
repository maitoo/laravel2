@extends('layouts.company')
{{--店の登録情報表示--}}
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">


@section('content')
    <form action="/information/keyword" method="GET">
    @csrf
    <input type="text" style= "width:900px;height:50px"; name="keyword" placeholder="       🔍id・メールアドレス等を入力(スペース区切りで複数条件検索可)" value="{{$keyword}}">
    <tr><td><input class="search" type="submit" value="検索"></td></tr><br>

    <label style="color: green; margin: 10px 10px;">
        <input type="radio" name="flag" value=1>
        公開
    </label>
    <label style="color: red; margin: 10px 10px;">
    <input type="radio" name="flag" value=0>
        非公開
    </label>
    </form>

@if ($items->count())

    @if (!null == $keyword || $flag == 1)
        <p style="color: black; margin: -10px -1200px 0 -10px; font-size: 25px;">検索結果は<span style="color: green;">{{$num . "件"}}</span>です</p>
    @else
        <p style="color: black; margin: -10px -1200px 0 -10px;">登録件数は<span style="color: green; font-size: 25px;">{{$num . "件"}}</span>です</p>
    @endif

    @foreach ($items as $item)
    <table border="2" style="width: auto; margin: 10px 300px;">
        <tr><th>写真</th><th>ユーザーid</th><th style="width=200px;">店名</th><th>都道府県</th><th>店の種類</th><th>公開情報</th><th></th><th></th><th></th>
        </tr>

        <tr>
          <td rowspan="10" style="border-top-style: hidden;"><img src="{{ asset($item->photo_pass)}}" width="60" height="50" align="center"></td>

          <td 
          style="border-top-color: black; color:black; border-top-style: hidden; font-size: 20px;" align="center" >
          {{ $item->user_id}}</td>

          <td 
          style="border-top-color: black; color:black; font-size: 20px; width: 100px; border-top-style: hidden;" align="center" >
          {{ $item->store_name}}</td>
        
          <td height="30px;" style="border-top-style: hidden; color:skyblue; font-size: 25px;" align="center">{{ $item->rural_code}} 
          </td>

        @if($item->store_stype == "飲食店")
          <td height="30px;" style="border-top-style: hidden; color:blue; font-size: 25px;" align="center">{{ $item->store_stype}} 
          </td>
        @elseif($item->store_stype == "観光地")
          <td height="30px;" style="border-top-style: hidden; color:gold; font-size: 25px;" align="center">{{ $item->store_stype}} 
          </td>
        @elseif($item->store_stype == "宿泊")
          <td height="30px;" style="border-top-style: hidden; color:green; font-size: 25px;" align="center">{{ $item->store_stype}} 
          </td>
        @endif

        {{--flagが1なら公開、それ以外は非公開--}}
        @empty($item->flag)
            <td style="color: red; font-size: 25px; border-top-style: hidden;">非公開</td>
        @else
            <td style="color: green; font-size: 25px; border-top-style: hidden;">公開</td>
        @endempty

        {{--更新画面へ--}}
            <td style="border-top-style: hidden;"><a href="/information/edit?serial_number={{$item->serial_number}}">更新</a></td>

        {{--削除画面へ--}}
            <td style="border-top-style: hidden;"><a href="/information/del?serial_number={{$item->serial_number}}">削除</a></td>

        {{--詳細画面へ--}}
            <td style="border-top-style: hidden;"><a href="/information/find?serial_number={{$item->serial_number}}">詳細</a></td>

        </tr>

    </table>
    @endforeach 
@else
    <p style="font-size: 50px;">検索結果は<span style="color: red;">0件<span style="color: black;">です</p>
@endif
    {{-- $items->appends(Request::only('keyword'))->links() --}}
@endsection

