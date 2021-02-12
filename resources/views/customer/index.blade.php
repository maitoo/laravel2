@extends('layouts.customer')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">


@section('content')
    <form action="/customer/keyword" method="GET">
    @csrf
    <input type="text" style= "width:900px;height:50px"; name="keyword" placeholder="       🔍id・メールアドレスを入力(スペース区切りで複数条件検索可)" value="{{$keyword}}">
    <tr><td><input class="search" type="submit" value="検索"></td></tr><br>
  
    <select name="country_code" class="country">
    @if (!empty($country_code))
      <option value="{{$country_code}}" hidden> {{$country_code}} </option>
    @else
      <option value='' hidden> 出身国 </option>
    @endif
      <option value='日本'> 日本 </option>
      <option value='アメリカ'> アメリカ </option>
      <option value='中国'> 中国 </option>    
    </select>

    <label style="color: green; margin: 10px 10px;">
        <input type="radio" name="role" value="一般">
        一般
    </label>
    <label style="color: blue; margin: 10px 10px;">
    <input type="radio" name="role" value="企業">
        企業
    </label>
    <label style="color: red; margin: 10px 10px;">
    <input type="radio" name="role" value="管理者">
        管理者
    </label>

    </form>

@if ($items->count())

    @if (!null == $keyword || $role == 1 || !empty($country_code))
        <p style="color: black; margin: -10px -1200px 0 -10px;">検索結果は<span style="color: green;">{{$num . "件"}}</span>です</p>
    @else
        <p style="color: black; margin: -10px -1200px 0 -10px;">顧客数は<span style="color: green;">{{$num . "名"}}</span>です</p>
    @endif

    <table border="2">
    <tr><th>id</th><th>顧客者名</th><th>メールアドレス</th><th>出身国</th><th>使用言語</th><th>権限</th><th>更新</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{ $item->user_id}}</td>
            <td>{{ $item->user_name}}</td>
            <td>{{ $item->email}}</td>
            <td>{{ $item->country_code}}</td>
            <td>{{ $item->language_code}}</td>
            @if($item->role == "一般")
            <td style="color: green;">{{ $item->role}}</td>
            @elseif($item->role == "企業")
            <td style="color: blue;">{{ $item->role}}</td>
            @else
            <td style="color: red;">{{ $item->role}}</td>
            @endif
            {{--更新画面へ--}}
            <td><a href="/customer/edit?user_id={{$item->user_id}}">更新</a></td>
        </tr>
    @endforeach
    </table>
@else
    <p style="font-size: 50px;">検索結果は<span style="color: red;">0件<span style="color: black;">です。</p>
@endif

    {{ $items->appends(Request::only('keyword'))->links() }}
@endsection

