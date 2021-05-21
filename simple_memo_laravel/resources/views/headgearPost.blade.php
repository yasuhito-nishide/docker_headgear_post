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

<body id="top">
  <header id="top-logo">
    <img src="images/HEADGEAR.png" alt="">
  </header>
  <div id="sidebar">
    <div id="sidebawrap">
      <!--              <h1><img src="images/HEADGEAR.png" width="150" alt=""></h1>-->
      <nav id="mainnav">
        <div class="panel">
          <ul>
            <li>こんにちは<br>{{ $name }}さん</li>
              <li><a class="topmenu" href="{{ url('/')}}">TOP</a></li>
              <li><a href="{{ url('/headgearPost')}}">POST/投稿</a></li>
              {{-- <li><a href="woman.html">WOMAN</a></li> --}}
              <li><a href="{{ url('/headgearBrand')}}">BRAND/紹介</a></li>
              <li><a href="{{ url('/headgearContact')}}">CONTACT/<br>問い合わせ</a></li>
              {{-- <li class="register"><a href="{{ route('user.register') }}">アカウントを作成</a></li> --}}
              <li class="register"><a href="{{ route('headgear.logout') }}">ログアウト</a></li>
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
  <h2 id="head-tag">POST/投稿</h2>
  <p class="message1">お気に入りの帽子の投稿ページです。 <br>帽子の写真を投稿してください。</p>

  @if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<p class="uploadText">投稿する</p>
<form 
  class="uploadMain"
	method="post"
	action="{{ route('upload_image') }}"
	enctype="multipart/form-data"
>
	@csrf
  <input class="upText" type="text" name="title" value="ブランド名を入力してください。">
	<input class="upload" type="file" name="image" accept="image/png, image/jpeg, image/jpg">
	<input type="submit" value="Upload">
  </form>
  
    
  <div class="wrapper grid">
    @foreach($images as $image)
    <form method="POST">
      @csrf
    <input type="hidden" name="edit_id" value="{{$image->id}}"/>
    <div class="item">
      <img src="{{Storage::url($image->file_path)}}" alt="">
      <div class="item2">
          <button type="submit" class="btn btn-danger" formaction="{{ route('post.delete') }}"><i class="fas fa-trash-alt"></i></button>
        <p>BRAND|| <br>{{ $image->title }}</p>
      </div>
    </div>
    </form>
    @endforeach
    <div class="item">
      <img src="images/blacknit.jpg" alt="">
      <div class="item2">
        <p>US/New York</p>
        <p>BRAND|| <br>Poler</p>
      </div>
    </div>
    <div class="item">
      <img src="images/hathat.jpg" alt="">
      <div class="item2">
        <p>CH/Shanxi</p>
        <p>BRAND|| <br>No Brand</p>
      </div>
    </div>
    <div class="item">
      <img src="images/tyler-nix-SRYbC3Kv5gE-unsplash.jpg" alt="">
      <div class="item2">
        <p>UK/Glasgow</p>
        <p>BRAND|| <br>Obey</p>
      </div>
    </div>
    <div class="item">
      <img src="images/kids2-unsplash.jpg" alt="">
      <div class="item2">
        <p>IT/Roma</p>
        <p>BRAND|| <br>New Era</p>
      </div>
    </div>
    <div class="item">
      <img src="images/joe-ciciarelli-FwVnAY_xMaY-unsplash.jpg" alt="">
      <div class="item2">
        <p>US/Cicago</p>
        <p>BRAND ||<br>Fear Of God</p>

      </div>
    </div>
    <div class="item">
      <img src="images/erik-mclean-HoT-2_nHFpA-unsplash.jpg" alt="">
      <div class="item2">
        <p>DE/Berlin</p>
        <p>BRAND|| <br>Bailey</p>
      </div>
    </div>
    <div class="item">
      <img src="images/pexels-luca-nardone-3651597.jpg" alt="">
      <div class="item2">
        <p>TR/Ankara</p>
        <p>BRAND|| <br>James Lock</p>
      </div>
    </div>
    <div class="item">
      <img src="images/richard-gazon-lIRJBv2wI60-unsplash.jpg" alt="">
      <div class="item2">
        <p>US/California</p>
        <p>BRAND|| <br>Grass Roots</p>
      </div>
    </div>
    <div class="item">
      <img src="images/people-man_VPOJ33PDSO.jpg" alt="">
      <div class="item2">
        <p>FR/Paris</p>
        <p>BRAND|| <br>Adidas</p>
      </div>
    </div>
    <div class="item">
      <img src="images/habib-ayoade-NhWW_RW1qO0-unsplash.jpg" alt="">
      <div class="item2">
        <p>FR/Paris</p>
        <p>BRAND|| <br>Ogbeni</p>
      </div>
    </div>
    <div class="item">
      <img src="images/beach-man-water.jpg" alt="">
      <div class="item2">
        <p>US/Hawaii</p>
        <p>BRAND|| <br>Cayler And Sons</p>
      </div>
    </div>
    <div class="item">
      <img src="images/daniel-schaffer-8RNASX2ZokA-unsplash.jpg" alt="">
      <div class="item2">
        <p>FR/Paris</p>
        <p>BRAND|| <br>Cayler And Sons</p>
      </div>
    </div>
    <div class="item">
      <img src="images/giovanna-gomes-xbSFDSlw2Yc-unsplash.jpg" alt="">
      <div class="item2">
        <p>DE/Berlin</p>
        <p>BRAND|| <br>Tommy Hillfiger</p>
      </div>
    </div>
    <div class="item">
      <img src="images/jessica-radanavong-mrYkTuAesKE-unsplash.jpg" alt="">
      <div class="item2">
        <p>JP/Tokyo</p>
        <p>BRAND|| <br>Riverside</p>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer-cta pt-5 pb-5">
      <div class="footer-content pt-5 pb-5">
        <div class="row">
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
        <div class="footer-widget">
          <div class="footer-widget-heading">
            <h3>Subscribe</h3>
          </div>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">about</a></li>
            <li><a href="#">services</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Our Services</a></li>
            <li><a href="#">Expert Team</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Latest News</a></li>
          </ul>
          <div class="subscribe-form">
            <form action="#">
              <input type="text" placeholder="Email Address">
              <button><i class="fab fa-telegram-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
    </div>
    <p class="p-tag2">メールマガジン登録⇡</p>

    <div class="copyright-area">
      <div class="copyright-text">
        <p>(c)YasuhitoNishide</p>
        <p></p>
      </div>
    </div>
  </footer>
</body>