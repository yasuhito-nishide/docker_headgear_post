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
    <form action="{{ route('contact.confirm') }}" method="POST">
      @csrf
        <h2 class="form-1">お問い合わせ</h2>
        <div class="form-box">
            <span class="item-name">name</span>
            <div class="text-wrap">
                <input type="text" id="name" name="name" value="{{ old('name') }}">
                @if($errors->has('name'))
                <p class="error-message">{{$errors->first('name')}}</p>
                @endif
            </div>
        </div>
        <div class="form-box">
            <span class="item-name">mail</span>
            <div class="text-wrap">
                <input type="text" id="email" name="email" value="{{ old('email')}}">
                @if($errors->has('email'))
                <p class="error-message">{{$errors->first('email')}}</p>
                @endif
            </div>
        </div>
        <div class="box">
            <span class="item-name"></span>
            <div class="select-wrap">
                <span>お問い合わせ内容/タイトル</span>
                <input type="text" name="title" value="{{ old('title') }}">
                @if($errors->has('title'))
                <p class="error-message">{{$errors->first('title')}}</p>
                @endif
            </div>
        </div>
        <div class="box">
            <span class="item-name">お問い合わせ内容</span>

            <div class="textarea-wrap">
                <textarea name="body" rows="8" cols="80">{{ old('body' )}}</textarea>
                @if($errors->has('body'))
                <p class="error-message">{{$errors->first('body')}}</p>
                @endif
            </div>
        </div>
        <div class="submit-wrap">
            <input type="submit" value="送信">
        </div>
    </form>
    <div class="copyright-area">
        <div class="copyright-text">
            <p>(c)YasuhitoNishide</p>
        </div>
    </div>
</body>
@endsection
