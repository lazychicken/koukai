<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>熊本大学　公開講座</title>
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/linecons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<!--
<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>
-->
<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>

<!--for charts-->
<script type="text/javascript" src="js/amcharts.js"></script>
<script type="text/javascript" src="js/pie.js"></script>
<script type="text/javascript" src="js/light.js"></script>



<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)
			});

	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });

	  });


		    });
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}

</script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">

      <!-- スマートフォンサイズで表示されるメニューボタンとテキスト -->
      <div class="navbar-header">

<!--
          メニューボタン

          data-toggle : ボタンを押したときにNavbarを開かせるために必要
          data-target : 複数navbarを作成する場合、ボタンとナビを紐づけるために必要
-->

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-menu-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- タイトルなどのテキスト -->
        <a class="navbar-brand" href="#top_content"><img src="img/logob.png"></a>

      </div>

      <!-- グローバルナビの中身 -->
      <div class="collapse navbar-collapse" id="nav-menu-1">

        <!-- 各ナビゲーションメニュー -->
        <ul class="nav navbar-nav navbar-right">

          <!-- 通常のリンク -->
					<li><a href="#top_content">ホーム</a></li>
          <li><a href="#service2"> IDとは？</a></li>
          <li><a href="#work_outer">プログラム</a></li>
          <li><a href="#Portfolio">講座の様子</a></li>
          <li><a href="#client_outer">参加者の声</a></li>
          <li><a href="#book">書籍紹介</a></li>
          <li><a href="#contact">参加申込</a></li>

        </ul>

      </div>
    </div>
  </nav>

<!--Header_section
<header id="header_outer">
  <div class="container">
    <div class="header_section">
      <nav class="nav navbar-fixed-top" id="nav">
				<div class="logo"><a href="javascript:void(0)"><img src="img/logob.png" alt=""></a></div>
				<div class="nav">
        <ul class="toggle">
          <li><a href="#top_content">ホーム</a></li>
          <li><a href="#service2"> IDとは？</a></li>
          <li><a href="#work_outer">プログラム</a></li>
          <li><a href="#Portfolio">講座の様子</a></li>
          <li><a href="#client_outer">参加者の声</a></li>
          <li><a href="#team">書籍紹介</a></li>
          <li><a href="#contact">参加申込</a></li>
        </ul>
        <ul class="">
          <li><a href="#top_content">ホーム</a></li>
          <li><a href="#service2">IDとは？</a></li>
          <li><a href="#work_outer">プログラム</a></li>
          <li><a href="#Portfolio">講座の様子</a></li>
          <li><a href="#client_outer">参加者の声</a></li>
          <li><a href="#team">書籍紹介</a></li>
          <li><a href="#contact">参加申込</a></li>
        </ul>
			</div>
      </nav>
     <a class="res-nav_click animated wobble wow"  href="javascript:void(0)"><i class="fa-bars"></i></a> </div>
  </div>
</header> -->
<!-- Header_section-->

<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container">
      <div class="top_content">
				<div class="top_h1 delay-03s animated wow  fadeInDown">
					<h1><span class="taitoru">教え方教えます</span></h1>
				</div>
        <div class="row">
          <div class="col-lg-7 col-sm-7">
            <div class="top_left_cont flipInY wow animated">
              <h3>2016年度　熊本大学公開講座</h3>
              <h2>インストラクショナルデザイン 入門編/応用編<br/>2016年度のお申込みは締め切りました。来年度のご応募をお待ちしております。</h2>
              
              <a href="#service2" class="learn_more2">詳細</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Top_content-->

<!--Service-->
<section  id="service2">
  <div class="container">
		<div class="service_area2">
			<h2>インストラクショナルデザイン公開講座とは</h2>
			<div class="col-lg-8 col-sm-8 wow fadeInLeft delay-05s">
				<p> 急に教える立場になって、どう教えてよいかわからない、これまで先輩や前任者のやり方を見よう見まねで教育をしてきたが本当に効果的な教育といえるか悩んでいる等、業界を問わず教育にお悩みの方は多いのではないでしょうか。
				</br>そんなあなたにおすすめなのが本講座で紹介するインストラクショナルデザイン（以下、ID）です。IDとは、教育・研修をより効果的・効率的・魅力的にするための方法論です。
	  		</br>IDを身につければ、教育のお悩みを解決する道具を手に入れることができます。
			</br>本講座では、短時間でID研究の第一人者である鈴木克明先生など講師陣から、IDのエッセンスを学ぶことができます。講座を通じ、学習者を動機づけるための手法や、学びを支援するための働きかけに関する理論を事例ともに学び、みなさんのお悩みを解決する糸口をつかみます。学校教職員・医療従事者・企業の研修・教育担当者など、教育にお悩みのすべての方におすすめです。</p>
				</br>
				</br>本講座は入門編、応用編があります。
				</br>*どちらも各会場で同一の内容です。各会場での1回のみの受講となります。
				</br>*対面の公開講座終了後には懇親会を会場周辺で開催する予定です。講師陣や他の受講者と親睦を深めるまたとないチャンスですので、ぜひご参加下さい。開催期日が近づきましたら、詳細を申込者へご案内いたします。
	  		</br>
				</br>入門編
				</br>講義や講師との質疑を通じてインストラクショナルデザイン(ID)の基礎を学びます。また、講師が提示する教育事例に対してグループワークを行うことで、IDを使う練習を行っていきます。
				</br>
				</br>応用編
				</br>入門編で学んだIDの基礎知識をベースに、みなさんが実際に取り組まれている教育事例の改善案を検討していきます。
      </br>*昨年度までに入門編を受講された方も、応用編を受講可能です。ただし、その際には別途課題の提出をお願いする予定です。
			</div>
			<div class="col-lg-4 col-sm-4 wow fadeInLeft delay-05s">
				<div class="suzuki delay-03s animated wow  zoomIn">
					<figure id="ksuzuki"><img src="img/ksuzuki_s.jpg" alt="suzuki_katuaki" >
		  			</br>
						<figcaption>鈴木　克明(すずき　かつあき)
							</br>熊本大学大学院教授教授システム学専攻長
							</br><a href="http://www.gsis.kumamoto-u.ac.jp/ksuzuki/suzuki-j.html">ウェブサイト</a>
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>

<section  id="service">
  <div class="container">
		<div class="service_area">
      <h2>インストラクショナルデザイン公開講座３つの魅力</h2>
      <div class="row">
				<div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <h3 class="animated fadeInUp wow">1. ID理論に基いて設計されたプログラムなので、IDを体験的に学べます</h3>
            <div class="service_icon delay-03s animated wow  zoomIn">  <img src="img/spanay.png" alt=""></div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <h3 class="animated fadeInUp wow">2. 日本におけるID研究の第一人者がみなさんのお悩みにお応えします</h3>
            <div class="service_icon icon2  delay-03s animated wow zoomIn">  <img src="img/timep.png" alt=""> </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="service_block">
            <h3 class="animated fadeInUp wow">3. eラーニングと対面講座を組み合わせた、新しいスタイルで学べます</h3>
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <img src="img/harty.png" alt=""></div>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>

<section id="bosyuu">
	<div class="container">
		<div class="bosyuu_inner">
			<h2>以下の項目に一つでも当てはまる方は</br>ぜひご参加ください！</h2>
				<h3 class="enter no1 delay-01s animated wow fadeInRight">□ 急に教員・人材育成担当者になり、どこから手をつけたらよいかわからない</h3>
				<h3 class="enter no1 delay-02s animated wow fadeInRight">□ これまで先輩の見よう見まねで授業を行ってきたが、効果的な教育なのか不安に感じている</h3>
				<h3 class="enter no1 delay-03s animated wow fadeInRight">□ 実は「授業・研修なんてヤメてしまえ！」と思っている</h3>
				<h3 class="enter no1 delay-04s animated wow fadeInRight">□ 教育の効果を上げることにあきらめかけている</h3>
				<h3 class="enter no1 delay-05s animated wow fadeInRight">□ 授業・研修中に参加者が内職しているのを目撃した</h3>
				<h3 class="enter no1 delay-06s animated wow fadeInRight">□ 「授業・研修の効果は何？」と聞かれて、答えに詰まってしまった経験がある</h3>
				<h3 class="enter no1 delay-07s animated wow fadeInRight">□ 同僚から「また、研修ですか？」と不満を言われてしまったことがある</h3>
				<h3 class="enter no1 delay-08s animated wow fadeInRight">□ そのほか、教育でお悩みのすべての方</h3>
  	</div>
	</div>
</section>
<!--Service-->

<section id="work_outer"><!--main-section-start-->
<div class="top_cont_latest">
  <div class="container">
    <h2>プログラムの流れ 2015年度</h2>
    <div class="work_section">
<!--ここから　入門編ここから　までは不必要-->

<!-- 入門編ここから -->
	<div class="row">
		<div class="col-lg-6 col-sm-6 wow fadeInLeft delay-05s">
			<h3>入門編</h3>
			<h3 class="enter no1 delay-01s animated wow fadeInDown">事前学習(eラーニング)</h3>
			<div class="zizen">
				<h4 class="enter no1 delay-06s animated wow fadeInRight">・ID基礎力を問う腕試しクイズ</h4>
				<h4 class="enter no1 delay-07s animated wow fadeInRight">・ID関連用語についての小レポート提出と相互レビュー</h4>
				<h4 class="enter no1 delay-08s animated wow fadeInRight">・IDの基礎を学べるリンク集</h4>
			</div>
			<h3 class="enter no1 delay-02s animated wow fadeInDown">↓</h3>
			<h3 class="enter no1 delay-02s animated wow fadeInDown">当日のプログラム</h3>
					<table class="table">
						<thead>
							<tr class="active">
								<th>開始</th>
								<th>終了</th>
								<th>内容</th>
					  </thead>
						<tbody>
							<tr class="active">
								<td>10:00</td>
								<td>10:15</td>
								<td>オープニング</td>
							</tr>
							<tr class="active">
								<td>10:10</td>
								<td>10:25</td>
								<td>事前課題の概要報告</td>
							</tr>
							<tr class="active">
								<td>10:25</td>
								<td>11:25</td>
								<td>質問への回答コーナー</td>
							</tr>
							<tr class="active">
								<td>11:25</td>
								<td>11:35</td>
								<td>休憩</td>
							</tr>
							<tr class="active">
								<td>11:35</td>
								<td>12:35</td>
								<td>ID基礎講義</td>
							</tr>
							<tr class="active">
								<td>12:35</td>
								<td>13:30</td>
								<td>ランチ休憩</td>
							</tr>
							<tr class="active">
								<td>13:00</td>
								<td>14:45</td>
								<td>ARCS事例紹介1</td>
							</tr>
							<tr class="active">
								<td>14:45</td>
								<td>14:55</td>
								<td>休憩</td>
							</tr>
							<tr class="active">
								<td>14:55</td>
								<td>15:55</td>
								<td>ARCSの事例紹介2</td>
							</tr>
							<tr class="active">
								<td>15:55</td>
								<td>16:00</td>
								<td>休憩</td>
							</tr>
							<tr class="active">
								<td>16：00</td>
								<td>16:20</td>
								<td>振り返り　事後課題について</td>
							</tr>
							<tr class="active">
								<td>16:20</td>
								<td>16:30</td>
								<td>クロージング</td>
							</tr>
						</tbody>
					</table>
        <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>

			<h3 class="enter no1 delay-02s animated wow fadeInDown">↓</h3>
			<h3 class="enter no1 delay-02s animated wow fadeInDown">事後学習(eラーニング)</h3>
			<div class="zizen">
					<h4 class="enter no1 delay-06s animated wow fadeInRight">・ID基礎力を問う実力チェッククイズ</h4>
					<h4 class="enter no1 delay-07s animated wow fadeInRight">・IDの応用に関する小レポート提出と相互レビュー</h4>
					<h4 class="enter no1 delay-08s animated wow fadeInRight">・発展学習のためのリンク集</h4>
			</div>
			<h3 class="enter no1 delay-02s animated wow fadeInDown">↓</h3>
			<h3 class="enter no1 delay-02s animated wow fadeInDown">デジタルバッジをゲット</h3>
	</div>
<!--基礎編ここまで -->
<!-- 応用編ここまで -->
	<div class="row">
		<div class="col-lg-6 col-sm-6 wow fadeInRight delay-05s">
			<h3>応用編</h3>
			<h3 class="enter no1 delay-01s animated wow fadeInDown">事前学習(eラーニング)</h3>
      <div class="zizen">
					<h4 class="enter no1 delay-06s animated wow fadeInLeft">・教育の分析・改善ワークシートの提出と相互レビュー</h4>
					<h4 class="enter no1 delay-07s animated wow fadeInLeft">・ID関連用語についての小レポート提出と相互レビュー</h4>
			</div>
			<h3 class="enter no1 delay-02s animated wow fadeInDown">↓</h3>
			<h3 class="enter no1 delay-02s animated wow fadeInDown">当日のプログラム</h3>
			<table class="table">
				<thead>
					<tr class="active">
						<th>開始</th>
						<th>終了</th>
						<th>内容</th>
				</thead>
				<tbody>
					<tr class="active">
						<td>10:00</td>
						<td>10:20</td>
						<td>オープニング</td>
					</tr>
					<tr class="active">
						<td>10:20</td>
						<td>10:55</td>
						<td>グループで事前課題を共有する</td>
					</tr>
					<tr class="active">
						<td>10:55</td>
						<td>11:00</td>
						<td>ペアリング1</td>
					</tr>
					<tr class="active">
						<td>11:00</td>
						<td>11:35</td>
						<td>ペアで改善案を議論する</td>
					</tr>
					<tr class="active">
						<td>11:35</td>
						<td>11:45</td>
						<td>休憩</td>
					</tr>
          <tr class="active">
            <td>11:45</td>
            <td>12:00</td>
            <td>グループメンバーにペアワークの結果を伝える1</td>
          </tr>
					<tr class="active">
						<td>12:00</td>
						<td>12:15</td>
						<td>鈴木先生への質問を考える1</td>
					</tr>
					<tr class="active">
						<td>12:15</td>
						<td>13:00</td>
						<td>鈴木先生に質問しよう1</td>
					</tr>
					<tr class="active">
						<td>13:00</td>
						<td>13:55</td>
						<td>ランチ休憩</td>
					</tr>
          <tr class="active">
            <td>13:55</td>
            <td>14:00</td>
            <td>ペアリング2</td>
          </tr>
          <tr class="active">
            <td>14:00</td>
            <td>14:30</td>
            <td>ペアで改善案を議論する2</td>
          </tr>
          <tr class="active">
            <td>14:30</td>
            <td>14:35</td>
            <td>席移動</td>
          </tr>
					<tr class="active">
						<td>14:35</td>
						<td>14:50</td>
						<td>グループにペアワークの結果を伝える2</td>
					</tr>
          <tr class="active">
            <td>14:50</td>
            <td>15:00</td>
            <td>休憩</td>
          </tr>
          <tr class="active">
            <td>15:00</td>
            <td>15:15</td>
            <td>鈴木先生への質問を考える2</td>
          </tr>
          <tr class="active">
            <td>15:15</td>
            <td>16:00</td>
            <td>鈴木先生に質問しよう2</td>
          </tr>
					<tr class="active">
						<td>16:00</td>
						<td>16:10</td>
						<td>全体質疑、総括</td>
					</tr>
					<tr class="active">
						<td>16:10</td>
						<td>16:25</td>
						<td>クロージング</td>
					</tr>
				</tbody>
			</table>
		 <figure class="col-lg-6 col-sm-6  text-right wow fadeInUp delay-02s"> </figure>

		<h3 class="enter no1 delay-02s animated wow fadeInDown">↓</h3>
		<h3 class="enter no1 delay-02s animated wow fadeInDown">事後学習(eラーニング)</h3>
    <div class="zizen">
			<h4 class="enter no1 delay-06s animated wow fadeInLeft">・講座の振り返りと今後のアクションプランを盛り込んだ最終レポート提出と相互レビュー</h4>
  	</div>
		<h3 class="enter no1 delay-02s animated wow fadeInDown">↓</h3>
		<h3 class="enter no1 delay-02s animated wow fadeInDown">デジタルバッジをゲット</h3>
	</div>
</div>
</section>

<!-- デジタルバッジの説明-->
<section id="bage">
	<div class="container">
		<div class="service_area2">
			<h2>習得の証　デジタルバッジ</h2>
			<div class="col-lg-8 col-sm-8 wow fadeInLeft delay-05s">
				<p>各講座の合格基準をすべて満たした方に発行します。講座で取り組んだ課題やアクティビティを集めたあなた専用ページをご提供します。デジタルバッジを活用して、講座で学んだことを振り返ることができます。
				</br>詳しくは<a href="kamanoicom2015.pdf">こちら</a>
			</div>
			<div class="col-lg-4 col-sm-4 wow fadeInLeft delay-05s">
				<div class="suzuki delay-03s animated wow  zoomIn">
					<figure id="bage"><img src="img/bage2.png" alt="bage_nyuumon" >
		  			</br>
						<figcaption>デジタルバッジ
						</br>2015年度　応用編版
						</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</div>
</section>

<!--デジタルバッジのセッションここまで -->


<!-- スケジュール-->
<section id="suke"><!--main-section-start-->
<div class="container">
<h2>スケジュール</h2>
<h2>入門編</h2>
	<div class="service_area">
		<div class="row">

			<div class="col-lg-2">
				<div class="service_block">
					<div class="service_icon delay-03s animated wow  zoomIn"> <img src="img/castlep.png" alt=""> </div>
					<h3 class="animated fadeInUp wow">熊本</h3>
					<p class="animated fadeInDown wow">
						2016/10/15</br>
						10:00-16:30</br></br>
						会場：熊本大学 くすの木会館 レセプションルーム</br>
						住所：熊本市中央区黒髪2-39-1</br></br>
						¥7,500</br>
						＊受付終了</br></p>
				</div>
			</div>

			<div class="col-lg-2">
				<div class="service_block">
					<div class="service_icon delay-03s animated wow  zoomIn"> <img src="img/tty.png" alt=""> </div>
					<h3 class="animated fadeInUp wow">東京</h3>
					<p class="animated fadeInDown wow">
						2016/11/6</br>
						10:00-16:30</br></br>
						会場：東京工業大学キャンパス・イノベーションセンター508号</br>
						住所：東京都港区芝浦3-3-6</br></br>
						¥7,500</br>
						＊受付終了</br></p>
				</div>
			</div>

			<div class="col-lg-2">
				<div class="service_block">
					<div class="service_icon icon3  delay-03s animated wow zoomIn"> <img src="img/tigerp.png" alt=""> </div>
					<h3 class="animated fadeInUp wow">大阪</h3>
					<p class="animated fadeInDown wow">
						2016/11/12</br>
						10:00-16:30</br></br>
						会場:大阪研修センター江坂中会議室C</br>
						住所:大阪府吹田市江坂町1丁目13−41</br></br>
						¥7,500</br>
						＊受付終了</br></p>
					

				</div>
			</div>

			<div class="col-lg-2">
				<div class="service_block">
					<div class="service_icon icon2  delay-03s animated wow zoomIn"> <img src="img/nobunagay.png" alt=""> </div>
					<h3 class="animated fadeInUp wow">名古屋</h3>
					<p class="animated fadeInDown wow">
						2016/11/13</br>
						10:00-16:30</br></br>
						会場：ウインクあいち・愛知県産業労働センター1108号室</br>
						住所：名古屋市中村区名駅4-4-38</br></br>
						¥7,500</br>
						＊受付終了</br></p>
				</p>
				</div>
			</div>

			<div class="col-lg-2">
				<div class="service_block">
					<div class="service_icon icon2  delay-03s animated wow zoomIn"> <img src="img/ra-menp.png" alt=""></div>
					<h3 class="animated fadeInUp wow">福岡</h3>
					<p class="animated fadeInDown wow">
						2016/11/20</br>
						10:00-16:30</br></br>
						会場:天神クリスタルビル　2階Cホール</br>
						住所：福岡市中央区天神4-6-7</br></br>
						¥7,500</br>
						＊受付終了</br>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section id="suke2">
<div class="container">
	<h2>応用編</h2>
	<div class="service_area">
		<div class="row">

			<div class="col-lg-4">
				<div class="service_block">
					<div class="service_icon delay-03s animated wow  zoomIn"> <img src="img/tigery.png" alt=""></div>
					<h3 class="animated fadeInUp wow">大阪</h3>
					<p class="animated fadeInDown wow">
						2017/1/14</br>
						10:00-16:30</br></br>
						会場:大阪研修センター江坂中会議室C</br>
						住所:大阪府吹田市江坂町1丁目13−41</br></br>
						¥7,500</br>
						＊受付終了</br></p>
						
				</div>
			</div>

			<div class="col-lg-4">
				<div class="service_block">
					<div class="service_icon delay-03s animated wow  zoomIn"> <img src="img/ra-menp.png" alt=""></div>
					<h3 class="animated fadeInUp wow">福岡</h3>
					<p class="animated fadeInDown wow">
						2017/1/15</br>
						10:00-16:30</br></br>
						会場:天神チクモクビル　大ホール</br>
						住所：福岡市中央区天神3丁目10-27</br></br>
						¥7,500</br>
						＊受付終了</br></p>
				</div>
			</div>

			<div class="col-lg-4">
				<div class="service_block">
					<div class="service_icon delay-03s animated wow  zoomIn"> <img src="img/tty.png" alt=""></div>
					<h3 class="animated fadeInUp wow">東京</h3>
					<p class="animated fadeInDown wow">
						2017/1/22</br>
						10:00-16:30</br></br>
						会場：東京工業大学キャンパス・イノベーションセンター508号</br>
						住所：東京都港区芝浦3-3-6</br></br>
						¥7,500</br>
						＊受付終了</br></p>
				</br></p>
				</div>
			</div>

		</div>
	</div>
  <!--<div class="work_pic"><img src="img/dashboard_pic.png" alt=""></div>-->
</div>
</section>
<!--main-section-end-->

<!--new_portfolio-->

<!-- Portfolio -->
<section id="Portfolio" class="content">

  <!-- Container -->
  <div class="container portfolio-title">

    <!-- Section Title -->
    <div class="section-title">
      <h2>これまでの様子</h2>
    </div>
    <!--/Section Title -->

  </div>
  <!-- Container -->

  <div class="portfolio-top"></div>

  <!-- Portfolio Plus Filters -->
  <div class="portfolio">

    <!-- Portfolio Filters -->
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
          <h5>All</h5>
          </a></li>
				<li><a class="" href="#" data-filter=".tokyo2015">
					<h5>2015 東京</h5>
					</a></li>
				<li><a class="" href="#" data-filter=".fukuoka2015">
					<h5>2015 福岡</h5>
					</a></li>
      </ul>
    </div>
    <!--/Portfolio Filters -->

    <!-- Portfolio Wrap -->
    <div class="isotope" style="position: relative; overflow: hidden; height: 480px;" id="portfolio-wrap">

			<!-- Portfolio Item With PrettyPhoto  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   tokyo2015">
        <div class="portfolio-image"> <img src="photo/tokyo2015nyuumon7.jpg"  alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">2015</h4>
            <p class="project-categories">入門編</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item With PrettyPhoto  -->

      <!-- Portfolio Item Video Expander  -->
			<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   tokyo2015">
        <div class="portfolio-image"> <img src="photo/tokyo2015nyuumon8.jpg"  alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">2015</h4>
            <p class="project-categories">入門編</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item Video Expander  -->

      <!-- Portfolio Item Normal Expander -->
			<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   tokyo2015">
        <div class="portfolio-image"> <img src="photo/tokyo2015nyuumon9.jpg"  alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">2015</h4>
            <p class="project-categories">入門編</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item Normal Expander -->

      <!-- Portfolio Item FullScreen Expander -->
			<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   tokyo2015">
        <div class="portfolio-image"> <img src="photo/tokyo2015nyuumon10.jpg"  alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">2015</h4>
            <p class="project-categories">入門編</p>
          </div>
        </div>
        </a> </div>
      <!-- Portfolio Item FullScreen Expander -->

      <!-- Portfolio Item FullScreen Expander -->
			<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   fukuoka2015">
        <div class="portfolio-image"> <img src="photo/fukuoka2015nyuumon1.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">2015</h4>
            <p class="project-categories">入門編</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item FullScreen Expander -->

      <!-- Portfolio Item Normal Expander -->
			<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   fukuoka2015">
        <div class="portfolio-image"> <img src="photo/fukuoka2015nyuumon2.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">2015</h4>
            <p class="project-categories">入門編</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item Normal Expander -->

      <!-- Portfolio Item External Project  -->
			<div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   fukuoka2015">
        <div class="portfolio-image"> <img src="photo/fukuoka2015nyuumon3.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">2015</h4>
            <p class="project-categories">入門編</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item External Project  -->

      <!-- Portfolio Item With PrettyPhoto  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   fukuoka2015">
        <div class="portfolio-image"> <img src="photo/fukuoka2015nyuumon4.jpg" alt="Portfolio 1"> </div>
        <div class="project-overlay">
          <div class="project-info">
            <div class="zoom-icon"></div>
            <h4 class="project-name">2015</h4>
            <p class="project-categories">入門編</p>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item With PrettyPhoto  -->



    </div>
    <!--/Portfolio Wrap -->

  </div>
  <!--/Portfolio Plus Filters -->

  <div class="portfolio-bottom"></div>

  <!-- Project Page Holder-->
  <div id="project-page-holder">
    <div class="clear"></div>
    <div id="project-page-data"></div>
  </div>
  <!--/Project Page Holder-->

</section>
<!--/Portfolio -->

<!--new_portfolio-->

<!--
<section class="main-section paddind" id="Portfolio">
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
	</div>


</section>

-->

<section class="main-section" id="client_outer"><!--main-section client-part-start-->
  <h2>参加者の声</h2>
	<div class="client_area">
		<!--ここから -->
    <div class="client_section animated  fadeInUp wow">
      <div class="client_profile">
        <div class="client_profile_pic"><img src="img/manp.png" alt=""></div>
        <h3>参加者</h3>
			</div>
      <div class="quote_section">
        <div class="quote_arrow"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b>IDの諸理論のものさしに照らし合わせて、プログラムを精査し、また、その中から、「自社に合った」オリジナルなやり方・考え方を作り上げていきたいと思います。まさに、「学ぶ楽しさ」を身をもって体験させていただきました。本当にありがとうございます <small><img src="img/quote_sign_right.png" alt=""></small> </p>
      </div>
      <div class="clear"></div>
    </div>
			<!--ここまで -->
			<!-- ここから-->
    <div class="client_section animated  fadeInDown wow">
      <div class="client_profile flt">
        <div class="client_profile_pic"><img src="img/na-suy.png" alt=""></div>
        <h3>参加者</h3>
      </div>
      <div class="quote_section flt">
        <div class="quote_arrow2"></div>
        <p><b><img src="img/quote_sign_left.png" alt=""></b> 事前課題も含めた一連の研修が、IDの理論に基づいて設計されているので、自分で体感することが理解を深めることにもつながった <small><img src="img/quote_sign_right.png" alt=""></small> </p>
      </div>
      <div class="clear"></div>
    </div>
		<!--ここまで -->
		<!--ここから -->
		<div class="client_section animated  fadeInUp wow">
			<div class="client_profile">
				<div class="client_profile_pic"><img src="img/womanp.png" alt=""></div>
				<h3>参加者</h3>
			</div>
			<div class="quote_section">
				<div class="quote_arrow"></div>
				<p><b><img src="img/quote_sign_left.png" alt=""></b>私自身は、もっと学びたいという気持ちになった。こういう心境に自分が提供する側になったときに導いているか、きちんと見つめたいと思う <small><img src="img/quote_sign_right.png" alt=""></small> </p>
			</div>
			<div class="clear"></div>
		</div>
			<!--ここまで -->
  </div>
</section>


<!--  グラフ-
-->
<section class="gurafu">
	<div class="container">
		<div class="client_section animated  fadeInUp wow">
			<h2>講座の収穫</h2>
			<h6>今後、類似した問題に直面した時の解決の手がかりがつかめた</h6>
   		<div id="chartdiv"></div>
　	</div>
	</div>
</section>

<section class="gurafu3">
	<div class="container">
		<div class="client_section animated  fadeInUp wow">
			<h2>満足度</h2>
			<h6>このような講座を今後も続けてほしい</h6>
   		<div id="chartdiv3"></div>
　	</div>
	</div>
</section>

<section class="gurafu2">
	<div class="container">
		<div class="client_section animated  fadeInUp wow">
			<h2>参加者</h2>
			<h6>2015年度　入門編</h6>
   		<div id="chartdiv2"></div>
　	</div>
	</div>
</section>

<!--main-section client-part-end-->
<section>
 <div class="c-logo-part"><!--c-logo-part-start-->
  <div class="container">
    <ul class="delay-06s animated  bounce wow">
      <li><a href="http://www2.gsis.kumamoto-u.ac.jp/~idportal/"><img src="img/logo_id.gif" alt=""></a></li>
    </ul>
 	</div>
 </div>
</section>
<!--c-logo-part-end-->
<section class="main-section book" id="book"><!--main-section book-start-->
  <div class="container">
    <h2>書籍紹介</h2>
    <h6>インストラクショナルデザイン関係書籍のご紹介</h6>

    <div class="team-leader-block clearfix">
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/arcs_book.jpg" alt="">
          <ul>
            <li><a href="https://www.amazon.co.jp/dp/4762827215">amazon</a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">学習意欲をデザインする―ARCSモデルによるインストラクショナルデザイン</h3>
<!--
        <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
        <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
-->
      </div>
      <div class="team-leader-box">
        <div class="team-leader  wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/kensyu_book.jpg" alt="">
          <ul>
            <li><a href="https://www.amazon.co.jp/dp/4762828947">amazon</a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">研修設計マニュアル: 人材育成のためのインストラクショナルデザイン</h3>
<!--
        <span class="wow fadeInDown delay-06s">Product Manager</span>
        <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
-->
      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/id_book.jpg" alt="">
          <ul>
            <li><a href="https://www.amazon.co.jp/dp/4762825735/">amazon</a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">インストラクショナルデザインの原理</h3>
<!--
        <span class="wow fadeInDown delay-09s">Accountant</span>
        <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
-->
				</div>

<div class="team-leader-box">
	<div class="team-leader wow fadeInDown delay-03s">
		<div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
		<img src="img/id_model.jpg" alt="">
		<ul>
			<li><a href="https://www.amazon.co.jp/dp/4762829145/">amazon</a></li>
		</ul>
	</div>
	<h3 class="wow fadeInDown delay-06s">インストラクショナルデザインの理論とモデル: 共通知識基盤の構築に向けて</h3>
</div>

<div class="team-leader-box">
	<div class="team-leader wow fadeInDown delay-03s">
		<div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
		<img src="img/id_tool.jpg" alt="">
		<ul>
			<li><a href="https://www.amazon.co.jp/dp/4762829269/">amazon</a></li>
		</ul>
	</div>
	<h3 class="wow fadeInDown delay-06s">インストラクショナルデザインの道具箱101</h3>
</div>



      </div>
    </div>
  </div>
</section>
<!--main-section team-book-->


<footer class="footer_section" id="contact">
  <div class="container">
    <section class="main-section contact" id="contact">
      <div class="contact_section">
        <h2>お申し込み</h2>
        <div class="row">
            <div class="contact_block">
              	<div class="contact_block_icon rollIn animated wow"><img src="img/weby.png" alt=""></div>
	　<span>お申し込みは締め切りしました。</span></div>
				</div>
			</div>
		</section>
	</div>

	<div class="container">
		  <div class="contact_section">
				<h2>お問合せ</h2>
				<div class="row">
          <div class="col-lg-6">
            <div class="contact_block">
              <div class="contact_block_icon icon2 rollIn animated wow"><img src="img/telep.png" alt=""></div>
              <span>096-342-3121</span> </div>
          </div>
          <div class="col-lg-6">
            <div class="contact_block">
              <div class="contact_block_icon icon3 rollIn animated wow"><img src="img/maily.png" alt=""></div>
              <span> manabou@jimu.kumamoto-u.ac.jp</span> </div>
          </div>
        </div>
      </section>
  </div>
	</footer>
<!--
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>
-->
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
    document.getElementById('').onclick = function() {
      var section = document.createElement('section');
    	section.className = 'wow fadeInDown';
	  	section.className = 'wow shake';
	  	section.className = 'wow zoomIn';
	  	section.className = 'wow lightSpeedIn';
      this.parentNode.insertBefore(section, this);
    };
  </script>
<script type="text/javascript">
	$(window).load(function(){

		$('a').bind('click',function(event){
			var $anchor = $(this);
      /*
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:*/
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);

			event.preventDefault();
		});
	})
</script>

<!--<script type="text/javascript">

$(window).load(function(){


  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 350,
      columns = null;


  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });

  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }

  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
         });
         return false;
    });

});

</script>


-->

<script type="text/javascript">


  jQuery(document).ready(function($){
// Portfolio Isotope
	var container = $('#portfolio-wrap');


	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 200,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();
	  	return false;
	});


		function splitColumns() {
			var winWidth = $(window).width(),
				columnNumb = 1;


			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}

			return columnNumb;
		}

		function setColumns() {
			var winWidth = $(window).width(),
				columnNumb = splitColumns(),
				postWidth = Math.floor(winWidth / columnNumb);

			container.find('.portfolio-item').each(function () {
				$(this).css( {
					width : postWidth + 'px'
				});
			});
		}

		function setProjects() {
			setColumns();
			container.isotope('reLayout');
		}

		container.imagesLoaded(function () {
			setColumns();
		});


		$(window).bind('resize', function () {
			setProjects();
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});

//charts
var chart = AmCharts.makeChart("chartdiv", {
  "type": "pie",
  "startDuration": 0,
   "theme": "light",
  "addClassNames": true,
  "legend":{
   	"position":"right",
    "marginRight":100,
    "autoMargins":false
  },
  "innerRadius": "30%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": [{
    "anke": "とてもそう思う",
    "no": 61
  }, {
    "anke": "そう思う",
    "no": 105
  }, {
    "anke": "思わない",
    "no": 3
  }, {
		"anke": "全く思わない",
		"no": 0
	}
],
  "valueField": "no",
  "titleField": "anke",
  "export": {
    "enabled": true
  }
});


var chart = AmCharts.makeChart("chartdiv3", {
  "type": "pie",
  "startDuration": 0,
   "theme": "light",
  "addClassNames": true,
  "legend":{
   	"position":"right",
    "marginRight":100,
    "autoMargins":false
  },
  "innerRadius": "30%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": [{
    "anke": "とてもそう思う",
    "no": 123
  }, {
    "anke": "そう思う",
    "no": 45
  }, {
    "anke": "思わない",
    "no": 1
  }, {
		"anke": "全く思わない",
		"no": 0
	}
],
  "valueField": "no",
  "titleField": "anke",
  "export": {
    "enabled": true
  }
});
var chart = AmCharts.makeChart("chartdiv2", {
  "type": "pie",
  "startDuration": 0,
   "theme": "light",
  "addClassNames": true,
  "legend":{
   	"position":"right",
    "marginRight":100,
    "autoMargins":false
  },
  "innerRadius": "30%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": [{
    "job": "医療関係者",
    "no": 71
  }, {
    "job": "大学関係者",
    "no": 57
  }, {
    "job": "企業",
    "no": 31
  }, {
    "job": "その他",
    "no": 20
  }],
  "valueField": "no",
  "titleField": "job",
  "export": {
    "enabled": true
  }
});


chart.addListener("init", handleInit);

chart.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);
}

</script>
</body>
</html>
