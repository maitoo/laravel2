@extends('layouts.question')
<INPUT border="1" type="button" onclick="history.back()" class="disp-img2">
@section('sub_title', 'よくある質問')

@section('content')
  @foreach($items as $item)
    @isset($item->answer)
    <table>
    <td>
    <span class="under">{{'Q.' . $item->contents_of_question}}</span><br>
    <span>{{'A.' . $item->answer}}</span><br>
    </td>
    </table>
    @endisset
    <br>
    <br>
  @endforeach
@endsection
