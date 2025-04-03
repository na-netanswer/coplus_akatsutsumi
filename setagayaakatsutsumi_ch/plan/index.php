<?php
include_once '../snippet/config.php';

// meta設定
$conf_page = array(
    'title'         => '',
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
$publish = true; //プランを公開するかどうか
include_once ABSOLUTE_ROOT_DIR.'/snippet/header.php';
?>

<!-- # ===================mainエリア_start================= # -->

	<!-- head -->
	<section class="head">
		<div class="ly_inner">
			<div class="head__box">
				<h1 class="tit is-head head__tit">PLAN<span>プラン</span></h1>
			</div>
		</div>
	</section><!-- /.head -->
	
	<?php if ($publish) : ?>
	<!-- tab -->
	<section class="tab">
		<ul class="tab-contslist">
			<li class="tab-contsitem is-a _show">
				<div class="ly_inner is_small">
					<ul class="tab-list">
						<li class="tab-item is-a _active"><a href="#a">A-UNIT PLAN</a></li>
						<li class="tab-item is-c"><a href="#c">C-UNIT PLAN</a></li>
					</ul>
				</div>
				<section id="a" class="unit">
					<figure class="unit-pic">
						<picture>
							<source media="(max-width: 767px)" srcset="<?php echo ASSETS_DIR; ?>img/plan/a-unit_head_sp.webp">
							<img src="<?php echo ASSETS_DIR; ?>img/plan/a-unit_head_pc.webp" alt="A-UNIT" width="1280" height="400">
						</picture>
					</figure>
					<p class="unit-tit">A-UNIT</p>
				</section>

				<div class="ly_inner is_small">
					<section class="info">
						<h2 id="a-free_01" class="info-tit">A-UNIT FREE PLAN<span>フリープラン（コーディネーター提案例）</span></h2>
						<div class="info-area">
							<h3 class="info-plantit">外とつながる開放的な家</h3>
							<figure class="info-free-pic">
								<picture>
									<source media="(max-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/plan/a-unit_free_sp.webp">
									<img src="<?php echo ASSETS_DIR; ?>img/plan/a-unit_free_pc.webp" alt="" width="1000" height="1260">
								</picture>
							</figure>
							<section class="slider">
								<div class="splide">
									<div class="splide__arrows">
										<button class="splide__arrow splide__arrow--prev">
											<img src="<?php echo ASSETS_DIR; ?>img/common/slide_icon_prev.svg" alt="prev" width="40" height="40">
										</button>
										<button class="splide__arrow splide__arrow--next">
											<img src="<?php echo ASSETS_DIR; ?>img/common/slide_icon_next.svg" alt="next" width="40" height="40">
										</button>
									</div>

									<div class="splide__track">
										<ul class="splide__list mv-sub__list">
											<li class="splide__slide mv-sub__item">
												<img src="<?php echo ASSETS_DIR; ?>img/plan/a-unit_free_slide_01.webp" alt="小上がりに設けたワークスペース" width="323" height="215">
											</li>
											<li class="splide__slide mv-sub__item">
												<img src="<?php echo ASSETS_DIR; ?>img/plan/a-unit_free_slide_02.webp" alt="リビングと連続し、光の差し込むインナーバルコニー" width="323" height="215">
											</li>
											<li class="splide__slide mv-sub__item">
												<img src="<?php echo ASSETS_DIR; ?>img/plan/a-unit_free_slide_03.webp" alt="掃除もしやすい土間キッチン" width="323" height="215">
											</li>
										</ul>
									</div>
								</div>
							</section>
						</div>
						<h2 id="a-basic" class="info-tit">A-UNIT BASIC PLAN<span>参考プラン</span></h2>
						<div class="info-area _bottom">
							<div class="info-box">
								<div class="info-unit is-column">
									<ul class="info-list">
										<li class="info-item _square">東・西・北に開かれた角部屋で、戸建てのような開放感</li>
										<li class="info-item _square">専用庭付き。ガーデニングをしたり、プールやアウトドアチェアを置いたり・・・楽しみ方は自分次第</li>
									</ul>
								</div>
								<ul class="info-list is-info">
									<!-- <li class="info-item _price">7,000<span class="is-middle">万円台後半</span><span class="is-small">（予定）</span></li> -->
									<li class="info-item _area">63.25<span>㎡ （19.13坪)</span></li>
									<li class="info-item _floor">1F / 2LDK+S</li>
								</ul>
							</div>
							
							<div class="info-pic is-basic">
								<figure class="info-pic-madori"><img src="<?php echo ASSETS_DIR; ?>img/plan/a-unit_basic_01.webp" alt="間取り01" width="692" height="323"></figure>
								<figure class="info-pic-img"><img src="<?php echo ASSETS_DIR; ?>img/plan/a-unit_basic_02.webp" alt="部屋位置" width="294" height="461"></figure>
							</div>
						</div>
					</section>

				</div>
			</li>
			<li class="tab-contsitem is-c _show">
				<div class="ly_inner is_small">
					<ul class="tab-list">
						<li class="tab-item is-a"><a href="#a">A-UNIT PLAN</a></li>
						<li class="tab-item is-c _active"><a href="#c">C-UNIT PLAN</a></li>
					</ul>
				</div>
				<section id="c" class="unit">
					<figure class="unit-pic">
						<picture>
							<source media="(max-width: 767px)" srcset="<?php echo ASSETS_DIR; ?>img/plan/c-unit_head_sp.webp">
							<img src="<?php echo ASSETS_DIR; ?>img/plan/c-unit_head_pc.webp" alt="C-UNIT" width="1280" height="400">
						</picture>
					</figure>
					<p class="unit-tit">C-UNIT</p>
				</section>
				<div class="ly_inner is_small">
					<section class="info">
						<h2 id="c-free_01" class="info-tit">C-UNIT FREE PLAN<span>フリープラン（コーディネーター提案例）</span></h2>
						<div class="info-area">
							<h3 class="info-plantit">天井高を活かしたゆとりのある家</h3>
							<figure class="info-free-pic">
								<picture>
									<source media="(max-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/plan/c-unit_free_sp.webp">
									<img src="<?php echo ASSETS_DIR; ?>img/plan/c-unit_free_pc.webp" alt="" width="951" height="1260">
								</picture>
							</figure>
							<section class="slider">
								<div class="splide">
									<div class="splide__arrows">
										<button class="splide__arrow splide__arrow--prev">
											<img src="<?php echo ASSETS_DIR; ?>img/common/slide_icon_prev.svg" alt="prev" width="40" height="40">
										</button>
										<button class="splide__arrow splide__arrow--next">
											<img src="<?php echo ASSETS_DIR; ?>img/common/slide_icon_next.svg" alt="next" width="40" height="40">
										</button>
									</div>

									<div class="splide__track">
										<ul class="splide__list mv-sub__list">
											<li class="splide__slide mv-sub__item">
												<img src="<?php echo ASSETS_DIR; ?>img/plan/c-unit_free_slide_01.webp" alt="小上り下は収納力大" width="323" height="215">
											</li>
											<li class="splide__slide mv-sub__item">
												<img src="<?php echo ASSETS_DIR; ?>img/plan/c-unit_free_slide_02.webp" alt="セミオープンで家族の気配を感じる小上り" width="323" height="215">
											</li>
											<li class="splide__slide mv-sub__item">
												<img src="<?php echo ASSETS_DIR; ?>img/plan/c-unit_free_slide_03.webp" alt="2ボウルの広々とした洗面台" width="323" height="215">
											</li>
										</ul>
									</div>
								</div>
							</section>
						</div>
						<h2 id="c-basic" class="info-tit">C-UNIT BASIC PLAN<span>参考プラン</span></h2>
						<div class="info-area _bottom">
							<div class="info-box">
								<div class="info-unit is-column">
									<ul class="info-list">
										<li class="info-item _square">朝日が気持ち良く風通しのいい、南東の角部屋</li>
										<li class="info-item _square">天井高2.7mで開放的</li>
										<li class="info-item _square">道路面から床面が0.8m上がっており、周囲の目が気にならない</li>
									</ul>
								</div>
								<ul class="info-list is-info">
									<!-- <li class="info-item _price">9,000<span class="is-middle">万円台後半</span><span class="is-small">（予定）</span></li> -->
									<li class="info-item _area">73.23<span>㎡ （22.15坪)</span></li>
									<li class="info-item _floor">1F／2LDK+S</li>
								</ul>
							</div>
							
							<div class="info-pic is-basic">
								<figure class="info-pic-madori"><img src="<?php echo ASSETS_DIR; ?>img/plan/c-unit_basic_01.webp" alt="間取り01" width="458" height="578"></figure>
								<figure class="info-pic-img"><img src="<?php echo ASSETS_DIR; ?>img/plan/c-unit_basic_02.webp" alt="部屋位置" width="294" height="461"></figure>
							</div>
						</div>
					</section>

				</div>
			</li>
		</ul>
	</section><!-- /.tab -->

	<!-- remarks -->
	<section class="remarks">
		<div class="ly_inner is_small">
			<p>
				記載の金額は取得目安価格となります。<br>
				取得目安価格はあくまでもコーディネイターの提案例（上記標準プラン）で建設した場合の目安価格であり、建物の設計・建物建築工事・価格は最終的に組合員の総意で決定していただききます。取得目安価格には土地代金・建物代金（システムキッチン、ユニットバス等、住宅設備機器、内装仕上げ材含む）の他、設計料、コーディネイト料が含まれます。<br>
				掲載の室内写真はコプラスがコーディネイトしたコーポラティブハウスの実例写真です。
			</p>
		</div><!-- /.ly_inner -->
	</section><!-- /.remarks -->
	
	<?php else: ?>
	<p class="yokoku">８月下旬公開予定</p>
	
	<?php endif; ?>

<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>