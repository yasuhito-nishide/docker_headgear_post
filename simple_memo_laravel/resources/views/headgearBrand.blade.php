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
  <div class="top-message">
    <p>このページでは帽子のブランドを紹介します</p>
    <p></p>
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
    <!--//sidebar-->
    <div class="slide" id="makeimg">
      <img src="images/pexels-northwoods-murphy-1878821.jpg" alt="">
      <img src="images/red-hat-factory-Sf8MWkoLreQ-unsplash.jpg" alt="">
      <img src="images/robbie-noble-JGcaxNi2fQ8-unsplash.jpg" alt="">
    </div>
    <div class="slide" id="makeimg">
      <h2>New Era</h2>
      <h2>New Era</h2>
      <h2>New Era</h2>
      <h2>New Era</h2>
      <h2>New Era</h2>
      <p><strong>ニューエラ（NEW ERA）</strong>は、1920年に創業された、本拠地をアメリカ・ニューヨークに置く、人気帽子ブランドです。

        ニューエラといえば、やはりベースボールキャップ（野球帽）が代名詞。1934年のクリーブランド・インディアンスを皮切りに、現在ではメジャーリーグ (MLB)とマイナーリーグ所属の全チームのキャップを一手に製造・販売するに至っています。

        ニューエラのキャップは、単なる球団アイテムの枠を超えて、ストリートファッションの分野においても広く受け入れられています。購入時につば（バイザー）部分に貼られているサイズ表記のシールを、あえて貼ったまま着用するスタイルが流行するなど。

        これは、日本のプロ球団（NPB）の野球帽には、あまり見られない傾向と言えそうです。

        帽子の種類としては、ベースボールキャップの他にも、ニット帽やバケットハット、ストローハット、布帛ハットなども展開されています。 <br>ニューエラは、MLB（メジャーリーグ・ベースボール）
        唯一の公式選手用キャップオフィシャルサプライヤーとして、59FIFTYを筆頭にあらゆるプロダクトを世へ送り続けています。</p>

    </div>

    <div class="slide2" id="makeimg">
      <img src="images/420-fourtwoo-BIr8rxlnD1s-unsplash.jpg" alt="">
      <img src="images/tan-colored-hat-on-monochrome-background.jpg" alt="">
      <img src="images/victoria-naumenko-MpnEW2ApImE-unsplash.jpg" alt="">
    </div>
    <div class="slide2" id="makeimg">
      <h2>Grass Roots California</h2>
      <h2>Grass Roots California</h2>
      <h2>Grass Roots California</h2>
      <h2>Grass Roots California</h2>
      <h2>Grass Roots California</h2>
      <p>Grassrootsは2009年に制作していたドキュメンタリー映画のために帽子を作り始めました。

        以来、業界の大物アーティストのためにフィットした帽子を制作してきました。 <br>

        メソッド・マンのようなナショナル・アーティストから、ジャム・シーンの大物アーティストまで

        ジェリーガルシアとグリズ、国で最高のカスタム帽子に、Grass Rootsが提供しています。

        彼らが作る帽子のすべてのタイプで最先端の最先端のデザインを採用しています。グラスルーツは

        細部にまで気を配り、お客様に満足していただけるようなサービスを提供することで、業界のリーダーとして成長してきました。<br>

        麻を使った環境に優しい帽子。Grassrootsのシグネチャーであるホログラムとデザインをぜひチェックしてみてください。

        帽子の内側にも ユニークに、自分らしく、そしてムーブメントに参加してみませんか？

        彼らの製品は持続可能性と機能性を兼ね備えています。

        世界を旅しているときも、自宅でスタジオにいるときも。

      </p>


    </div>

    <div class="grid2">
      <div class="youtube">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/EGDGY8uZqks" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="item2"><img src="images/erik-mclean-WIejoQqIvhE-unsplash.jpg" alt=""></div>
      <div class="item2"><img src="images/jasper-garratt-0PJZWB5RvwM-unsplash.jpg" alt=""></div>
      <div class="item2"><img src="images/joaquin-NHjq_GPefeU-unsplash.jpg" alt=""></div>
      <div class="item2"><img src="images/Photo%20by%20Jude%20Stevens%20from%20Pexels.jpg" alt=""></div>
      <div class="item2"><img src="images/nathan-dumlao-yDT0cIb9BgY-unsplash.jpg" alt=""></div>
      <div class="item2"><img src="images/nathan-mullet-Ur742-klaa4-unsplash.jpg" alt=""></div>
      <div class="item2"><img src="images/panama-hat-shop.jpg" alt=""></div>
      <div class="item2"><img src="images/red-hat-factory-VpHp4iXPuSE-unsplash.jpg" alt=""></div>
      <div class="item2"><img src="images/P824650_3L1.jpg" alt=""></div>
      <div class="item2"><img src="images/photo10.jpg" alt=""></div>
    </div>

    <div class="brand1">
      <h2 class="brand2">ブランド紹介</h2>
      <p>おしゃれの必須アイテム帽子。
        ラグジュアリーからお手頃価格なブランドまで、様々なブランドが幅広いアイテムを展開しています。
        そこで当サイトでおすすめのブランドをピックアップしてご紹介致します。</p>
    </div>
    <div id="sec2">
      <header id="sec2head">
        <h2><span><a href="brand.html">BRAND</a></span></h2>
      </header>
      <div class="inner">
        <!--        <ul class="col4">-->
        <li>
          <p class="img"><img src="images/NEWERALOGO.png" width="150" alt=""></p>
          <p>ストリートファッションのアイコンでもあるニューエラ(NewEra)は、世界最大級のアメリカのヘッドウェアとアパレルブランドです。ベースボールキャップを扱うブランドの中でも人気があり、アメリカメジャーリーグベースボール唯一の公式選手用キャップサプライヤーでもあります。</p>
        </li>
        <li>
          <p class="img"><img src="images/carharttLOGO.png" width="150" alt=""></p>
          <p>1889年、社名を「ハミルトン・カーハート・マニュファクチュア」とし、わずか4台のミシンと5人の従業員でワークウェアの生産をスタートさせます。 最初のプロダクトは、丈夫なダック地とデニムで作られた「オーバーオール」。 これが今日まで続く「Carhartt」ブランド誕生の瞬間です。</p>
        </li>
        <li>
          <p class="img"><img src="images/jamesperseLOGO.png" width="150" alt=""></p>
          <p>「ジェームス パース(JAMES PERSE)」はアメリカのハイクオリティーなカジュアルウェアブランド。 1994年にジェームス・パース(James Perse)がアメリカ・ロサンゼルスでブランドをスタートする。 ジェームス パースはハイクオリティーなカジュアルウェア、特にカットソーが有名。</p>
        </li>
        <li>
          <p class="img"><img src="images/ronhermanLOGO.png" width="150" alt=""></p>
          <p>ロンハーマン(Ron Herman)は、カリフォルニア発のセレクトショップ。 世界中から厳選されたウエアやプロダクト、カフェやトリートメントサロンを展開。 オリジナルブランドも取り揃える。 ロンハーマンは、1976年、アメリカ・ロサンゼルスにあるハリウッドのメルローズアベニューで誕生。</p>
        </li>
        <!--        </ul>-->
      </div>
    </div>
  </div>
  <!--#location-->
  <!--  footer-->
  <footer>
    <div class="container">
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
              <li><a href="index.html">Home</a></li>
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
</body></html>
