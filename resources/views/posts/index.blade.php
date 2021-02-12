@extends('layouts.layouts')

@section('content4')
<div class="title0" font-size="20px">
  <div class="title" font-size="20px">
    コミュニティ
  </div>
</div>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<div class="menyu1">
  <div class="menyu2">
	  <a href="../syukuhaku">SYUKUHAKU 🏨</a>
	  <a href="../insyoku">INSYOKU 🍜</a>
	  <a href="../kankou">KANKOU 🗼</a>
	  <a class="active" href="../chat">COMMUNITY (`･ω･´)b</a>
  </div>
</div>
@endsection

@section('content')
    <div class="container mt-4">
    <div class="mb-4">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">
        投稿を新規作成する
    </a>
    </div>
        @foreach ($posts as $post)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {!! nl2br(e(Str::limit($post->body, 200))) !!}
                    </p>
                    <a class="card-link" href="{{ route('posts.show', ['post' => $post]) }}">
                    続きを読む
                    </a>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $post->created_at->format('Y.m.d') }}
                    </span>

                    @if ($post->comments->count())
                        <span class="badge badge-primary">
                            コメント {{ $post->comments->count() }}件
                        </span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center mb-5">
    {{ $posts->links() }}
</div>