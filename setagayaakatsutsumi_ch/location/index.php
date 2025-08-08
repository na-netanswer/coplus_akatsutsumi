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
	
	<!-- head -->
	<section class="head">
		<div class="ly_inner">
			<div class="head__box">
				<h1 class="tit is-head head__tit">ACCESS<span>アクセス</span></h1>
			</div>
		</div>
	</section><!-- /.head -->

	<!-- access-map -->
	<section class="access-map">
		<div class="ly_inner">
			<p class="access-map__catch">複数の路線にアクセス可能で、<br class="hp_md_none">主要駅を網羅する利便性</p>
			<ul class="access-map__list is-type01">
				<li class="access-map__item">
					<p class="access-map__line">東急世田谷線</p>
					<div class="access-map__nearbox">
						<p class="access-map__station"><span>「松原」</span>駅まで</p>
						<p class="access-map__time">徒歩<span>3</span>分</p>
					</div>
				</li>
				<li class="access-map__item">
					<p class="access-map__line">小田急線</p>
					<div class="access-map__nearbox">
						<p class="access-map__station"><span>「豪徳寺」</span>駅まで</p>
						<p class="access-map__time">徒歩<span>12</span>分</p>
					</div>
				</li>
				<li class="access-map__item">
					<p class="access-map__line">京王線</p>
					<div class="access-map__nearbox">
						<p class="access-map__station"><span>「下高井戸」</span>駅まで</p>
						<p class="access-map__time">徒歩<span>13</span>分</p>
					</div>
				</li>
			</ul>			
			<p class="access-map__img">
				<picture>
					<source media="(max-width: 767px)" srcset="<?php echo ASSETS_DIR; ?>img/access/access_sp.webp">
					<img src="<?php echo ASSETS_DIR; ?>img/access/access_pc.webp" alt="エリアマップ" width="942" height="433">
				</picture>
			</p>
			<div class="access-map__unit">
				<div class="access-map__box">
					<div class="access-map__start-station">
						<p class="access-map__start-station-txt">世田谷線<span>「松原」</span>駅より</p>
					</div>
					<ul class="access-map__list is-type02">
						<li class="access-map__item">
							<div class="access-map__nearbox">
								<p class="access-map__station"><span>「新宿」</span>駅へ</p>
								<p class="access-map__time"><span>17</span>分</p>
							</div>
							<p class="access-map__txt">「下高井戸駅」より<br>京王線に乗換</p>
						</li>
						<li class="access-map__item">
							<div class="access-map__nearbox">
								<p class="access-map__station"><span>「渋谷」</span>駅へ</p>
								<p class="access-map__time"><span>20</span>分</p>
							</div>
							<p class="access-map__txt">「下高井戸駅」より<br>京王線に乗換<br>「明大前駅」より<br>京王井の頭線に乗換</p>

						</li>
						<li class="access-map__item">
							<div class="access-map__nearbox">
								<p class="access-map__station"><span>「下北沢」</span>駅へ</p>
								<p class="access-map__time"><span>10</span>分</p>
							</div>
							<p class="access-map__txt">「山下駅」より<br>小田急線に乗換</p>
						</li>
						<li class="access-map__item">
							<div class="access-map__nearbox">
								<p class="access-map__station"><span>「三軒茶屋」</span>駅へ</p>
								<p class="access-map__time">直通<span>16</span>分</p>
							</div>
							<p class="access-map__txt">世田谷線</p>
						</li>
					</ul>
				</div>
				<div class="access-map__box">
					<div class="access-map__start-station">
						<p class="access-map__start-station-txt">バス停<span>「六所神社前」</span>より</p>
					</div>
					<ul class="access-map__list is-type03">
						<li class="access-map__item">
							<div class="access-map__nearbox">
								<p class="access-map__station">バス停<span>「経堂駅」</span>駅へ</p>
								<p class="access-map__time"><span>9</span>分</p>
							</div>
							<p class="access-map__txt">小田急バス</p>
						</li>
					</ul>
				</div>
			</div>
			<p class="access-map__note">
				※「駅すぱあとfor WEB」より<br>
				※所要時間には乗り換え・待ち時間が含まれています。<br>
				※上記所要時間は通勤時（目的駅に8：30着）における所要時間例です。時間帯、季節などにより異なりますのでご了承ください。
			</p>
		</div>
	</section><!-- ./area-map -->

<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>