@extends('layouts.layouts')

<link href='https://fonts.googleapis.com/css?family=Noto+Serif+JP' rel="stylesheet">

<div class="title0" font-size="20px">
  <div class="title" font-size="20px">
    コミュニティ
  </div>
</div>

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
	  <a href="../insyoku">INSYOKU 🍜</a>
	  <a href="../kankou">KANKOU 🗼</a>
	  <a class="active" href="../chat">COMMUNITY (`･ω･´)b</a>
  </div>
</div>