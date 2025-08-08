<?php
include_once '../snippet/config.php';

// meta設定
$conf_page = array(
    'title'         => 'DESIGN'.SEPA.SITE_NAME,
    'desc'          => '',
    'og_title'      => '',
    'og_desc'       => '',
    'og_url'        => '',
    'og_image'      => '',
    'og_type'       => 'website',
    'og_site_name'  => '',
    'page_id'       => '',
    'page_sub_id'   => '',
);

include_once ABSOLUTE_ROOT_DIR.'/snippet/header.php';
?>

<!-- # ===================mainエリア_start================= # -->

	<!-- head -->
	<section class="head">
		<div class="ly_inner">
			<div class="head__box">
				<h1 class="tit is-head head__tit">DESIGN<span>全体設計</span></h1>
			</div>
		</div>
	</section><!-- /.head -->

	<section class="un_top">
		<div class="un_top__img">
			<img src="<?php echo ASSETS_DIR; ?>img/overall/item_01.webp" alt="電車">
		</div>
		<div class="un_top__box">
			<h2 class="un_top__tit">
				せっかくの長い人生を、<br>
				自分らしく、ゆっくりと。
			</h2>
			<p class="un_top__txt">
				六所の森の鳥のさえずりが聞こえてきそうな計画地。<br>
				路面電車が走り、世田谷の原風景が感じられるのどかなこの地に、「SLOW LIFE」をテーマにした住まいをつくります。<br>
				<br>
				自由設計だからこそ、時間をかけて、わくわくしながら、自分らしい暮らしを形にできる。<br>
				私たちは、人生100年時代にふさわしい住まいの選択肢として、コーポラティブハウスをご提案します。
			</p>
		</div>
	</section>

	<section class="un_sec">
		<div class="un_sec__box">
			<p class="un_sec__en">OPEN BALCONY</p>
			<h2 class="un_sec__tit">光を取り込む配棟計画</h2>
			<p class="un_sec__txt">
				南北の縦長敷地でありながらも、南面を増やすために建物を雁行配置。同時に外壁率を高めることで、多様な窓の設置が可能になります。南東に開かれたスクエアバルコニーはプランターやベンチを置くなど、多目的に活用できます。太陽と季節の移ろいをゆっくりと感じられる、自分らしいバルコニーをデザインしませんか。
			</p>
			<figure class="un_sec__madori">
				<img src="<?php echo ASSETS_DIR; ?>img/overall/item_02_01.webp" alt="マドリ" width="419" height="412">
			</figure>
		</div>
		<div class="un_sec__img">
			<img src="<?php echo ASSETS_DIR; ?>img/overall/item_02_02.webp" alt="" width="599" height="550">
		</div>
	</section>

	<section class="un_sec is-approach">
		<div class="un_sec__box">
			<p class="un_sec__en">2WAY APPROACH</p>
			<h2 class="un_sec__tit">
				２つのアプローチで<br>
				構成したエントランス
			</h2>
			<p class="un_sec__txt">
				道路面から高低差がある敷地の特性を活かし、2つのアプローチをデザイン。オートロックドアのメインエントランスは大きな階段でアプローチし、シンプルで端正な佇まいの中にメールや宅配ボックスを設置します。<br>
				サブエントランスへは、スロープと彩り豊かな緑道を設け、動線上にゴミ置場や駐輪場を配置。利便性とバリアフリーに配慮した計画をしています。
			</p>
			<figure class="un_sec__madori">
				<picture>	
					<source srcset="<?php echo ASSETS_DIR; ?>img/overall/item_03_02.webp" media="(min-width: 768px)">
					<img src="<?php echo ASSETS_DIR; ?>img/overall/item_03_01.webp" alt="マドリ" width="419" height="412">
				</picture>
			</figure>
		</div>
		<div class="un_sec__img">
			<picture>
				<source srcset="<?php echo ASSETS_DIR; ?>img/overall/item_03_01.webp" media="(min-width: 768px)">
				<img src="<?php echo ASSETS_DIR; ?>img/overall/item_03_02.webp" alt="" width="599" height="550">
			</picture>
		</div>
	</section>

	<section class="un_sec is-inherit">
		<div class="un_sec__box">
			<p class="un_sec__en">INHERIT DESIGN</p>
			<h2 class="un_sec__tit">継承する外観と外構デザイン</h2>
			<p class="un_sec__txt">
				建物は外観が街並みに溶け込み、未来へと受け継がれる大切なものです。 だからこそ、完成した時が最高点ではありません。時間が経つほどに魅力を増し、住まう方はもちろん、地域の方々にも親しまれるようなデザインを私たちはめざしています。<br>
				<br>
				外壁には、薄付仕上塗材とコンクリート化粧打放をベースに、せっき質タイルをファサードのアクセントに採用します。 これらの素材は職人の手仕事によりできあがる唯一無二のものであり、歳月を重ねるごとに落ち着いた表情を醸し出してくれます。 バルコニーの手摺は乳白ガラスを採用することで、プライバシーを確保しながら明るく開放的な雰囲気を演出します（一部のバルコニー、ルーフテラスを除きます）。<br>
				<br>
				また植栽計画においては、日本の四季を感じさせる花々や実、紅葉が楽しめる樹種を選定。計画地の既存樹木の一部を移植し、これまでの風景を受け継いでいきます。
			</p>
		</div>
		<div class="un_sec__img">
			<img src="<?php echo ASSETS_DIR; ?>img/overall/item_04_01.webp" alt="" width="527" height="874">
		</div>
	</section>

	<section class="un_slide">
		<div class="splide un_slide__splide">
			<div class="splide__arrows">
				<button class="splide__arrow splide__arrow--prev">
					<img src="<?php echo ASSETS_DIR; ?>img/common/icon_next_brown.svg" alt="prev" width="40" height="40">
				</button>
				<button class="splide__arrow splide__arrow--next">
					<img src="<?php echo ASSETS_DIR; ?>img/common/icon_next_brown.svg" alt="next" width="40" height="40">
				</button>
			</div>

			<div class="splide__track">
				<ul class="splide__list">
					<li class="splide__slide un_slide__item">
						<figure class="un_slide__img"><img src="<?php echo ASSETS_DIR; ?>img/overall/item_05_01.webp" alt="せっき質タイル" width="323" height="215"></figure>
						<h3 class="un_slide__tit">せっき質タイル</h3>
						<p class="un_slide__txt">タイル自体に焼き物らしい様々な表情があり、レンガのような質感です</p>
					</li>
					<li class="splide__slide un_slide__item">
						<figure class="un_slide__img"><img src="<?php echo ASSETS_DIR; ?>img/overall/item_05_02.webp" alt="薄付仕上塗材" width="323" height="215"></figure>
						<h3 class="un_slide__tit">薄付仕上塗材</h3>
						<p class="un_slide__txt">左官材のようなざらっとした質感で、光を柔らかく反射します</p>
					</li>
					<li class="splide__slide un_slide__item">
						<figure class="un_slide__img"><img src="<?php echo ASSETS_DIR; ?>img/overall/item_05_03.webp" alt="コンクリート化粧打放" width="323" height="215"></figure>
						<h3 class="un_slide__tit">コンクリート化粧打放</h3>
						<p class="un_slide__txt">コンクリートそのものの風合いを活かした仕上げです</p>
					</li>
				</ul>
			</div>
		</div>
	</section>

<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>