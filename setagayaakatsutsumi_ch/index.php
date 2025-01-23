<?php
include_once 'snippet/config.php';

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

<section class="bl_mv">
    <h1 class="bl_mv_title">
        <picture>
            <source media="(max-width: 768px)" srcset="<?php echo ASSETS_DIR; ?>img/top/mv_sp.webp">
            <img src="<?php echo ASSETS_DIR; ?>img/top/mv_pc.webp" alt="世田谷赤堤コーポラティブハウス" width="1280" height="640">
        </picture>
    </h1>
</section>
<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>