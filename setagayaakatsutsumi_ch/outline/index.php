<?php
include_once '../snippet/config.php';

// meta設定
$conf_page = array(
    'title'         => 'OUTLINE'.SEPA.SITE_NAME,
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
				<h1 class="tit is-head head__tit">OUTLINE<span>物件概要</span></h1>
			</div>
		</div>
	</section><!-- /.head -->

	<!-- info -->
	<section class="info">
		<div class="ly_inner is_small">
			<div class="info-box">
				<h3 class="info-deftit">≪計画地≫</h3>
				<dl class="info-def">
					<dt class="info-dtit">◆所在地</dt>
					<dd class="info-data">東京都世田谷区赤堤二丁目713番15（地名地番）</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆交通/電車</dt>
					<dd class="info-data">東急世田谷線「松原」駅 徒歩3分／「山下」駅 徒歩11分<br>
					京王線「下高井戸」駅 徒歩13分<br>
					小田急線「豪徳寺」駅 徒歩12分／「経堂」駅 徒歩17分</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆交通／バス</dt>
					<dd class="info-data">小田急バス・京王バス 利用可能</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆用途地域</dt>
					<dd class="info-data">第一種住居地域</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆地目</dt>
					<dd class="info-data">宅地</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆建蔽率</dt>
					<dd class="info-data">60％→70％（準防火地域の耐火建築物）</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆容積率</dt>
					<dd class="info-data">200%</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆敷地面積</dt>
					<dd class="info-data">453.06㎡</dd>
				</dl>
			</div>
			<div class="info-box">
				<h3 class="info-deftit">≪建築建物（予定）≫</h3>
				<dl class="info-def">
					<dt class="info-dtit">◆建築面積</dt>
					<dd class="info-data">311.09㎡</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆専有面積</dt>
					<dd class="info-data">882.61㎡（予定）</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆構造・規模</dt>
					<dd class="info-data">鉄筋コンクリート造・地上５階</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆総戸数</dt>
					<dd class="info-data">14戸</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆建物引渡後の<br class="md-none">権利形態</dt>
					<dd class="info-data">建物専有部分は区分所有権</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆管理形態</dt>
					<dd class="info-data">土地および建物の共用部は専有面積割合による所有権の共有<br>
					区分所有者全員により管理組合を設立後、管理会社に委託予定（巡回管理）</dd>
				</dl>
			</div>
			<div class="info-box">
				<h3 class="info-deftit">≪スケジュール（予定）≫</h3>
				<dl class="info-def">
					<dt class="info-dtit">◆募集時期</dt>
					<dd class="info-data">先着順申込受付中</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆土地引渡時期</dt>
					<dd class="info-data">2025年11月予定</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆建物引渡時期</dt>
					<dd class="info-data">2027年10月予定</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆土地売主</dt>
					<dd class="info-data">株式会社コプラス</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆コーディネイト</dt>
					<dd class="info-data">株式会社コプラス　宅地建物取引業 東京都知事（5）第83563号<br>
					東京都渋谷区南平台町16番29号 グリーン南平台ビル5Ｆ　TEL：<a href="tel:03-5784-4126">03-5784-4126</a></dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆設計・監理</dt>
					<dd class="info-data">株式会社アルコデザインスタジオ（予定）</dd>
				</dl>
				<dl class="info-def">
					<dt class="info-dtit">◆施工</dt>
					<dd class="info-data">未定</dd>
				</dl>
			</div>
		</div>
	</section><!-- /.info -->

	<!-- remarks -->
	<section class="remarks">
		<div class="ly_inner is_small">
			<p class="remarks-txt">コーポラティブ方式とは・・・自ら居住するための住宅を建設しようとする者が、組合を結成し、共同して、事業計画を定め、土地の取得、建物の設計、工事発注その他の業務を行い、住宅を取得し、管理していく方式のことをいいます。（昭和53年3月建設省（現国土交通省）住宅局コーポラティブ方式研究委員会より）</p>
			<p class="remarks-txt">コーディネイターは、具体的な計画の説明に始まり、土地購入の手続きから建設会社の選択、登記・融資手続き、組合運営、入居後の管理など、あらゆるシーンで組合員（入居予定者）の皆様をサポートいたします。</p>
		</div>
	</section><!-- /.remarks -->


<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>