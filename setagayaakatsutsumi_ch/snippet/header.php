<?php
// meta情報読み込み
foreach($conf_master as $key => $value){
    if(empty($conf_page[$key])){
        $conf[$key] = $value;
    }else{
        $conf[$key] = $conf_page[$key];
    }
}
// page_id, page_sub_idに指定がある場合上書き
if ($conf['page_id']) {
	$page_id = $conf['page_id'];
}
if ($conf['page_sub_id']) {
	$page_sub_id = $conf['page_sub_id'];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M54QGZR');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="<?php echo $conf['desc'];?>">
<!-- favicon -->
<link rel="shortcut icon" href="<?php echo ASSETS_DIR; ?>img/common/favicon.ico" sizes="any">
<link rel="apple-touch-icon" href="<?php echo ASSETS_DIR; ?>img/common/apple-touch-icon.png">
<!-- End favicon -->
<!-- OGP -->
<meta property="og:title" content="<?php print $conf['og_title'] ? $conf['og_title'] : $conf['title'];?>">
<meta property="og:description" content="<?php print $conf['og_desc'] ? $conf['og_desc'] : $conf['desc'];;?>">
<meta property="og:url" content="<?php echo $conf['og_url'];?>">
<meta property="og:image" content="<?php echo $conf['og_image'];?>">
<meta property="og:type" content="<?php echo $conf['og_type'];?>">
<meta property="og:site_name" content="<?php echo $conf['og_site_name'];?>">
<meta name="twitter:card" content="summary_large_image"> 
<meta name="twitter:site" content="">
<meta property="fb:app_id" content="">
<!-- end OGP -->
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Old+Mincho&display=swap" rel="stylesheet">
<!-- end Google Fonts -->
<!-- CSS -->
<link rel="stylesheet" href="<?php echo ASSETS_DIR; ?>css/style.css">
<!-- end CSS -->
<title><?php echo $conf['title'];?></title>
</head>
<body id="<?php echo $page_id; ?>"<?php print $page_sub_id ? 'class="'.$page_sub_id.'"' : ''; ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M54QGZR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="app">

<!-- # ===================headerエリア_start================= # -->

<header class="ly_header">
	<div class="ly_header_inner">
		<div class="ly_header_logo">
			<a href="/setagayaakatsutsumi_ch/">
				<?php include('logo.php'); ?>
			</a>
		</div>
		<div class="ly_header_col">
			<?php 
			/* <nav class="el_nav">
				<ul class="el_nav_head hp_lg_none">
					<li class="el_nav_head_item">
						<a href="/setagayaakatsutsumi_ch/">
							<?php include('logo.php'); ?>
						</a>
					</li>
					<li class="el_nav_head_item">
						<label class="el_nav_close">
							<span></span>
							<span></span>
						</label>
					</li>
				</ul>
				<ul class="el_nav_list">
					<li class="el_nav_item ly_header_item"><a href="#ABOUT">ABOUT<span>コネストについて</span></a></li>
					<li class="el_nav_item ly_header_item"><a href="#LOCATION">LOCATION<span>ロケーション</span></a></li>
					<li class="el_nav_item ly_header_item"><a href="#FACILITY">FACILITY<span>設備</span></a></li>
					<li class="el_nav_item ly_header_item"><a href="#SYSTEM">SYSTEM<span>システム</span></a></li>
					<li class="el_nav_item ly_header_item"><a href="#PRICE">PRICE<span>費用について</span></a></li>
					<li class="el_nav_item ly_header_item"><a href="#ACCESS">ACCESS<span>アクセス</span></a></li>
					<li class="el_nav_item ly_header_item"><a href="#OUTLINE">OUTLINE<span>物件概要</span></a></li>
				</ul>
				<figure class="el_nav_icon hp_lg_none">
					<a href="/" target="_blank">
						<?php include('c-logo.php'); ?>
					</a>
				</figure>
			</nav> */
			?>
			<a class="ly_header_btn" href="http://campage.jp/cooperative/setagayaakatsutsumi_ch_surv" target="_blank">最新情報<br class="hp_md_none">メール登録<span class="hp_sm_none">はこちら</span><?php include('icon_btn.php'); ?></a>
			<ul class="ly_header_sns_list hp_sm_none">
				<li class="ly_header_sns_item is-instagram"><a href="https://www.instagram.com/coplus.arch/" target="_blank"><img src="<?php echo ASSETS_DIR; ?>img/common/icon_instagram.svg" alt="instagram" width="26" height="26"></a></li>
				<li class="ly_header_sns_item is-facebook"><a href="https://business.facebook.com/COPLUS.inc" target="_blank"><img src="<?php echo ASSETS_DIR; ?>img/common/icon_facebook.svg" alt="facebook" width="26" height="26"></a></li>
			</ul>
			<?php
            /* <div class="el_hamburger ly_header_hamburger">
                <input type="checkbox" id="menu-toggle">
                <label for="menu-toggle" class="el_hamburger_icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div> */
			?>
			<div class="el_c-logo ly_header_c-logo hp_sm_none">
				<a href="/" target="_blank">
					<?php include('c-logo.php'); ?>
				</a>
			</div>
		</div>
	</div>
</header>
<!-- ./ly_header -->

<main class="ly_main">
<!-- # ===================headerエリア_end================= # -->
