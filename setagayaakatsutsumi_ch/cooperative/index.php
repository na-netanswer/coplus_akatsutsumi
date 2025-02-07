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
				<h1 class="tit is-head head__tit">COOPERATIVE HOUSE<span>コーポラティブハウスとは</span></h1>
			</div>
		</div>
	</section><!-- /.head -->
	
	<section class="contents">
		<ul class="contents-list">
			<li class="contents-item _01">
				<div class="ly_inner is_most_wide">
					<h2 class="contents-subtit">
						<picture>
							<source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/cooperative/contents_tit_01.png" alt="ライフスタイルや好みに応じた「自由設計」">
							<img src="<?php echo ASSETS_DIR; ?>img/cooperative/contents_tit_01_sp.png" alt="ライフスタイルや好みに応じた「自由設計」">
						</picture>
					</h2>
					<div class="contents-box">
						<figure class="contents-img">
							<img src="<?php echo ASSETS_DIR; ?>img/cooperative/contents_img_01.png" alt="ライフスタイルや好みに応じた「自由設計」">
						</figure>
						<div class="contents-textarea">
							<ul class="contents-titlist">
								<li class="contents-tititem">1.自分の暮らしに合わせた間取りや、収納計画</li>
								<li class="contents-tititem">2.素材も設備も好みの仕様に変更可能</li>
								<li class="contents-tititem">3.初めての経験でも安心の担当設計者</li>
							</ul>
							<p class="contents-p">自由設計は、コーポラティブハウス最大の魅力の一つです。思い思いのすまいを創るため、担当設計者と共に、間取りや、デザイン、素材選定などを行っていきます。建築の知識がなくても、設計のプロフェッショナルがサポートいたしますので、安心して自分だけの家づくりを楽しんでいただくことができます。</p>
						</div>
					</div>
				</div><!-- /.ly_inner -->
			</li>
			<li class="contents-item _02">
				<div class="ly_inner is_most_wide">
					<h2 class="contents-subtit">
						<picture>
							<source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/cooperative/contents_tit_02.png" alt="2.合理的で納得のいく「価格」">
							<img src="<?php echo ASSETS_DIR; ?>img/cooperative/contents_tit_02_sp.png" alt="2.合理的で納得のいく「価格」">
						</picture>
					</h2>
					<div class="contents-box">
						<figure class="contents-img">
							<img src="<?php echo ASSETS_DIR; ?>img/cooperative/contents_img_02.png" alt="合理的で納得のいく「価格」">
						</figure>
						<div class="contents-textarea">
							<p class="contents-p">通常分譲マンションでは工事費や広告費など様々な価格がブラックボックスになっており、適切な価格の評価が難しいとされておりますが、コーポラティブハウスについては全てのコストを開示した形で進めていきますので、合理的で、納得のいく価格で工事を進めていくことができます。</p>
						</div>
					</div>
				</div><!-- /.ly_inner -->
			</li>
			<li class="contents-item _03">
				<div class="ly_inner is_most_wide">
					<h2 class="contents-subtit">
						<picture>
							<source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/cooperative/contents_tit_03.png" alt="価値ある住まいづくり「プロセス」">
							<img src="<?php echo ASSETS_DIR; ?>img/cooperative/contents_tit_03_sp.png" alt="価値ある住まいづくり「プロセス」">
						</picture>
					</h2>
					<div class="contents-box">
						<figure class="contents-img">
							<img src="<?php echo ASSETS_DIR; ?>img/cooperative/contents_img_03.png" alt="価値ある住まいづくり「プロセス」">
						</figure>
						<div class="contents-textarea">
							<p class="contents-p">どうやって作られていくのか、そのプロセスから体験できるというのもコーポラティブハウスの魅力の一つです。組合結成から、着工、竣工・引き渡しまでの家づくりを入居者の皆と共に体験しながらで、安心なすまいをつくっていきます。<br>また、壁を塗ったり、タイルを貼ったり、子供と一緒にDIYなど、通常の分譲マンションではできない特別な体験をすることもできます。</p>
						</div>
					</div>
				</div><!-- /.ly_inner -->
			</li>
			<li class="contents-item _04">
				<div class="ly_inner is_most_wide">
					<h2 class="contents-subtit">
						<picture>
							<source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/cooperative/contents_tit_04.png" alt="暮らしやすさに繋がる「コミュニティ」の写真">
							<img src="<?php echo ASSETS_DIR; ?>img/cooperative/contents_tit_04_sp.png" alt="暮らしやすさに繋がる「コミュニティ」の写真">
						</picture>
					</h2>
					<div class="contents-box">
						<figure class="contents-img">
							<img src="<?php echo ASSETS_DIR; ?>img/cooperative/contents_img_04.png" alt="暮らしやすさに繋がる「コミュニティ」の写真">
						</figure>
						<div class="contents-textarea">
							<p class="contents-p">コーポラティブハウスならではのコミュニティは暮らしの上で欠かせない要素です。住み始めることには、入居者全員が顔見知りとなりますので、セキュリティーなど様々な面でとても安心なすまい方ができます。お子様や、ペットについてなど住み始める前から入居者同士で理解を深めておくことが、大きなトラブルを回避し、暮らしやすさへと繋がります。</p>
						</div>
					</div>
				</div><!-- /.ly_inner -->
			</li>
		</ul>
	</section>

<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>