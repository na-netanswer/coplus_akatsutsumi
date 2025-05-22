<?php
include_once '../snippet/config.php';

// meta設定
$conf_page = array(
    'title'         => 'LOCATION'.SEPA.SITE_NAME,
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
				<h1 class="tit is-head head__tit">LOCATION<span>ロケーション</span></h1>
			</div>
		</div>
	</section><!-- /.head -->

	<!-- geo -->
	<section class="geo">
		<figure class="geo__map hp_md_none"><img src="<?php echo ASSETS_DIR; ?>img/location/map.webp" alt="map"></figure>
		<div class="ly_inner">
			<div class="geo__box">
				<figure class="geo__map hp_sm_none"><img src="<?php echo ASSETS_DIR; ?>img/location/map.webp" alt="map"></figure>
				<div class="geo__textarea">
					<h3 class="geo__subtit">ゆったりとしたまちで叶える<br>理想の暮らし</h3>
					<p class="geo__txt">地域と密接した世田谷線「松原駅」から徒歩3分。<br>
					世田谷線の各駅を降りると、<br class="hp_sm_none">「六所神社」や「豪徳寺」など昔ながらの場所が点在し<br class="hp_sm_none">商店街には個人経営のお店が並びます。<br>
					放課後にはすぐ近くの「赤松公園」であそび、<br>
					晴れた週末には少し足を伸ばして「羽根木公園」へ。<br>
					世田谷区アドレスで日々の暮らしをゆっくりとたのしむ。<br>
					ここには、都市の便利さと人と緑の安らぎが調和する<br>
					新しい暮らしの形があります。</p>
				</div>
			</div>
			<div class="geo__imgbox">
				<ul class="geo__list">
					<?php 
					$items = [
						[
							'cap' => '赤堤六所神社',
						],
						[
							'cap' => 'オオゼキ松原店',
						],
						[
							'cap' => '赤松 ぼっくり公園',
						],
						[
							'cap' => '飲食店「HATOS OUTSIDE」',
						],
						[
							'cap' => 'ケーキ屋「LIFENRI リフェンリ」',
						],
					]
					?>
					<?php foreach ( $items as $key => $item ) : $i = $key + 1;?>
					<li class="geo__item">
						<figure class="geo__pic">
							<img src="<?php echo ASSETS_DIR; ?>img/location/geo_0<?php echo $i; ?>.webp" alt="<?php echo $item['cap']; ?>">
							<p class="geo__cap"><?php echo $item['cap']; ?></p>
						</figure>
					</li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</section><!-- /.geo -->

<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>