@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="帽子のスタイリング集">
    <meta name="viewport" content="width=device-width">
    <title>headgear</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/headgear.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icon-128x128.png">
</head>
@section('content')

<body id="top">
    <header id="top-logo">
        <img src="images/HEADGEAR.png" alt="">
    </header>
    <!--sidebar-->
    <div id="sidebar">
        <div id="sidebawrap">
            <!--        <h1><img src="images/HEADGEAR.png" width="150" alt=""></h1>-->
            <nav id="mainnav">
                <div class="panel">
                    <ul>
                        <li>こんにちは<br>{{ $name }}さん</li>
                        <li><a class="topmenu" href="{{ url("/")}}">TOP</a></li>
                        <li><a href="{{ url("/headgearPost")}}">POST/投稿</a></li>
                        {{-- <li><a href="woman.html">WOMAN</a></li> --}}
                        <li><a href="{{ url("/headgearBrand")}}">BRAND/紹介</a></li>
                        <li><a href="{{ url("/headgearContact")}}">CONTACT/<br>問い合わせ</a></li>
                        {{-- <li class="register"><a href="{{ route("user.register") }}">アカウントを作成</a></li> --}}
                        <li class="register"><a href="{{ route("headgear.logout") }}">ログアウト</a></li>
                    </ul>
                    <ul id="sns">
                        <li><a href="#"><img src="images/camera.png" width="20" heigth="20" alt="instagram"></a></li>
                        <li><a href="#"><img src="images/facebook.png" alt="facebook" width="20" height="20"></a></li>
                        <li><a href="#"><img src="images/twitter.png" alt="twitter" width="20" heigth="20"></a></li>
                        <li><a href="#"><img src="images/youtube.png" alt="youtube" width="20" height="20"></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--//sidebar-->
    <div class="container">
        <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
        <div class="container">
            {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お名前（10文字以内）<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('name'))
            <p class='alert alert-danger'>{{ $errors->first('name') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('email'))
            <p class='alert alert-danger'>{{ $errors->first('email') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">電話番号</p>
                <div class="col-sm-8">
                    {{ Form::text('tel', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('tel'))
            <p class='alert alert-danger'>{{ $errors->first('tel') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    <label>{{ Form::radio('gender', "男性") }}男性</label>
                    <label>{{ Form::radio('gender', "女性") }}女性</label>
                </div>
            </div>
            @if ($errors->has('gender'))
            <p class='alert alert-danger'>{{ $errors->first('gender') }}</p>
            @endif

            <div class="form-group row">
                <p class="col-sm-4 col-form-label">お問い合わせ内容<span class="badge badge-danger ml-1">必須</span></p>
                <div class="col-sm-8">
                    {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
                </div>
            </div>
            @if ($errors->has('contents'))
            <p class="alert alert-danger">{{ $errors->first('contents') }}</p>
            @endif

            <div class="text-center">
                {{ Form::submit('確認画面へ', ['class' => 'btn btn-primary']) }}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</body>
@endsection
