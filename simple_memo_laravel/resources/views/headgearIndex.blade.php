@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="帽子のスタイリング集">
  <meta name="viewport" content="width=device-width">
  
  <title>headgear</title>

  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
  <!--  swipe.jsのCDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css" />
  <!--  /CDN終わり-->
  <link rel="stylesheet" href="css/headgear.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  

  <link rel="icon" type="image/png" href="images/icon-128x128.png">
</head>

<body id="top">
  <header id="top-logo">
    <img src="images/HEADGEAR.png" alt="">
  </header>
  <div class="top-message">
    <p>当サイトは帽子の投稿サイトです、投稿されたスナップ写真やブランドを紹介します。</p>
  </div>
  <div id="wrapper">

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
  </div>
  <!--//sidebar-->



  <!--    swiper.js始まり-->
  <div class="swiper-container">
    <!-- 全スライドをまとめるラッパー -->
    <div class="swiper-wrapper">
      <!-- 各スライド -->
      <div class="swiper-slide"><img src="images/keitravis-squire-ZQ9jFw8UtME-unsplash.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/erik-mclean-HoT-2_nHFpA-unsplash.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/cap-top.jpg" alt=""></div>
    </div>

    <!-- ページネーションを表示する場合 -->
    <div class="swiper-pagination"></div>

    <!-- 前後スライドへのナビゲーションボタン(矢印)を表示する場合 -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- スクロールバーを表示する場合 -->
    <div class="swiper-scrollbar"></div>
  </div>
  <!--   swiper.js終わり-->
  <section class="sec1">
    <h2><a href="{{ url("/headgearPost")}}">POST/投稿</a></h2>
  </section>
  <!--    swiper.js始まり-->
  <div class="swiper-container">
    <!-- 全スライドをまとめるラッパー -->
    <div class="swiper-wrapper">
      <!-- 各スライド -->
      <div class="swiper-slide"><img src="images/adult-1867618_1920.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/sin-flow-iReDydgc9YY-unsplash.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/woman.jpg" alt=""></div>
    </div>

    <!-- ページネーションを表示する場合 -->
    <div class="swiper-pagination"></div>

    <!-- 前後スライドへのナビゲーションボタン(矢印)を表示する場合 -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- スクロールバーを表示する場合 -->
    <div class="swiper-scrollbar"></div>
  </div>
  <!--   swiper.js終わり-->
  <section class="sec1">
    <h2><a href="{{ url("/headgearPost")}}">POST/投稿</a></h2>
  </section>
  <div class="brand1">
    <h2>ブランド紹介</h2>
    <p>おしゃれの必須アイテム帽子。
      ラグジュアリーからお手頃価格なブランドまで、様々なブランドが幅広いアイテムを展開しています。
      そこで当サイトでおすすめのブランドをピックアップしてご紹介致します。</p>
  </div>
  <div id="sec2">
    <header id="sec2head">
      <h2><span><a href="{{ url("/headgearBrand")}}">BRAND/紹介</a></span></h2>
    </header>
    <div class="inner">
      <!--        <ul class="col4">-->
      <li>
        <p class="img"><img src="images/NEWERALOGO.png" width="150" alt=""></p>
        <p>
          ストリートファッションのアイコンでもあるニューエラ(NewEra)は、世界最大級のアメリカのヘッドウェアとアパレルブランドです。ベースボールキャップを扱うブランドの中でも人気があり、アメリカメジャーリーグベースボール唯一の公式選手用キャップサプライヤーでもあります。
        </p>
      </li>
      <li>
        <p class="img"><img src="images/carharttLOGO.png" width="150" alt=""></p>
        <p>1889年、社名を「ハミルトン・カーハート・マニュファクチュア」とし、わずか4台のミシンと5人の従業員でワークウェアの生産をスタートさせます。 最初のプロダクトは、丈夫なダック地とデニムで作られた「オーバーオール」。
          これが今日まで続く「Carhartt」ブランド誕生の瞬間です。</p>
      </li>
      <li>
        <p class="img"><img src="images/jamesperseLOGO.png" width="150" alt=""></p>
        <p>「ジェームス パース(JAMES PERSE)」はアメリカのハイクオリティーなカジュアルウェアブランド。 1994年にジェームス・パース(James Perse)がアメリカ・ロサンゼルスでブランドをスタートする。
          ジェームス パースはハイクオリティーなカジュアルウェア、特にカットソーが有名。</p>
      </li>
      <li>
        <p class="img"><img src="images/ronhermanLOGO.png" width="150" alt=""></p>
        <p>ロンハーマン(Ron Herman)は、カリフォルニア発のセレクトショップ。 世界中から厳選されたウエアやプロダクト、カフェやトリートメントサロンを展開。 オリジナルブランドも取り揃える。
          ロンハーマンは、1976年、アメリカ・ロサンゼルスにあるハリウッドのメルローズアベニューで誕生。</p>
      </li>
      <!--        </ul>-->
    </div>
  </div>
  </div>
  <!--#location-->
  <!--  footer-->
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
  <!--  jQueryのsnippet-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!--  swipe.jsのCDN-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
  <!--  /swipe.jsのCDN-->
  <script src="js/headgear.js">
    $(function () {

      var myswiper = new Swiper('.swiper-container', {
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        },
        effect: 'coverflow',
        slidesPerView: 2, // or 'auto'
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: true,

        },
        pagination: {
          el: '.swiper-pagination',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

      });

    });
  </script>

</body>

</html>