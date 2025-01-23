<?php
/**
 * 定数設定
 * */
define ('SITE_URL', (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST']); //サイトURL
define ('PAGE_URL', (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);//現在のページのURL（パラメータ含む）
define ('SITE_NAME', '中野コーポラティブハウス'); //サイト名
define ('SEPA', '｜'); //区切り文字
define ('ROOT_DIR', '/setagayaakatsutsumi_ch/'); //ルートディレクトリ
define ('ASSETS_DIR', ROOT_DIR.'assets/'); //アセットディレクトリ
define ('ABSOLUTE_ROOT_DIR', $_SERVER['DOCUMENT_ROOT'].ROOT_DIR); //ルートディレクトリ(絶対パス)

/**
 * ページid設定
 * 
 * @var string $page_id
 * トップページの場合はtop、それ以外の場合は第2階層のディレクトリ名が入ります。
 * bodyのidに設定されます。
 * 
 * @var string $page_sub_id
 * 存在する場合第3階層のディレクトリ名が入ります。
 * bodyのclassに設定されます。
 * */
$url = preg_replace('/\?.+$/', '', $_SERVER["REQUEST_URI"]);//パラメータ以降削除
$path_array = explode('/', substr_replace($url, "", 1,1)); //URLを配列に格納
$path_array = preg_replace('/\..*$/', '', $path_array); //拡張子削除

// page_id設定
if (!$path_array[0] || $path_array[0] === 'index') {
    $page_id = 'top';
} else {
    $page_id = $path_array[0];
}

// page_sub_id設定
$page_sub_id = isset($path_array[1]) ? $path_array[1] : NULL;


/**
 * サイト全体のmeta設定
 * 
 * 各ページの$conf_pageで上書きできます。
 * og_titleとog_descは空欄にするとtitleとdescを読みます。
 */
$conf_master = array(
    'title'         => SITE_NAME,
    'desc'          => '中野コーポラティブハウス　自由設計でつくる新築マンション　中野駅まで徒歩7分　2025年1月中旬説明会開始予定',
    'og_title'      => '',
    'og_desc'       => '',
    'og_url'        => PAGE_URL,
    'og_image'      => '/images/common/og_logo.webp',
    'og_type'       => 'article',
    'og_site_name'  => SITE_NAME,
    'page_id'       => '',
    'page_sub_id'   => '',
);
?>