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

include_once ABSOLUTE_ROOT_DIR.'/snippet/header.php';
?>

<!-- # ===================mainエリア_start================= # -->

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