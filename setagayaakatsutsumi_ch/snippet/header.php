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
	
<?php if( $page_id == 'top'): ?>
	<!-- header -->
	<header class="header js_header">
		<p class="header__logo">
			<a href="<?php echo ROOT_DIR; ?>">
				<picture>
					<source media="(max-width: 1319px)" srcset="<?php echo ASSETS_DIR; ?>img/common/logo_sp.svg">
					<img src="<?php echo ASSETS_DIR; ?>img/common/logo_pc.svg" alt="世田谷赤堤コーポラティブハウス" width="450" height="57">
				</picture>
			</a>
		</p>
		<div class="cta-bnr hp_xl_none"><a href="https://campage.jp/cooperative/setagayaakatsutsumi_ch_setsummeikai_1" target="_blank">説明会予約は<br>こちら ></a></div>
		<ul class="header__list hp_xl_max_none">
			<li class="header__item is-contact"><a href="https://campage.jp/cooperative/setagayaakatsutsumi_ch_setsummeikai_1" target="_blank">説明会予約はこちら</a></li>
			<li class="header__item is-instagram"><a href="https://www.instagram.com/coplus.arch/" target="_blank"><img src="<?php echo ASSETS_DIR; ?>img/common/icon_instagram.svg" alt="instagram" width="30" height="30"></a></li>
			<li class="header__item is-facebook"><a href="https://business.facebook.com/COPLUS.inc" target="_blank"><img src="<?php echo ASSETS_DIR; ?>img/common/icon_facebook.svg" alt="facebook" width="30" height="30"></a></li>
			<li class="header__item is-coplus"><a href="https://cooperativehouse.jp/" target="_blank"><img src="<?php echo ASSETS_DIR; ?>img/common/coplus_logo.svg" alt="coplus" width="94" height="19"></a></li>
		</ul>
	</header><!-- ./header -->
<?php else: ?>
	<header class="header js_header">
		<figure class="header__logo">
			<a href="<?php echo ROOT_DIR; ?>">
				<picture>
					<source media="(max-width: 1319px)" srcset="<?php echo ASSETS_DIR; ?>img/common/logo_sp.svg">
					<img src="<?php echo ASSETS_DIR; ?>img/common/PC_header.svg" alt="世田谷赤堤コーポラティブハウス" width="450" height="57">
				</picture>
			</a>
		</figure>
		<div class="header__gnav-area">
			<div class="cta-bnr hp_xl_none"><a href="https://campage.jp/cooperative/setagayaakatsutsumi_ch_setsummeikai_1" target="_blank">説明会予約は<br>こちら ></a></div>
			<?php include(dirname(__FILE__)."/gnav.php"); ?>
		</div>
	</header>
<?php endif; ?>

<main class="ly_main">
<!-- # ===================headerエリア_end================= # -->
