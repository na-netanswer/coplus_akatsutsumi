<?php
include_once '../snippet/config.php';

// meta設定
$conf_page = array(
    'title'         => 'DESIGN'.SEPA.SITE_NAME,
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
	
        <!-- designhead -->
        <section class="designhead">
            <div class="ly_inner">
                <div class="designhead-area">
                    <div class="designhead-txtarea">
                        <h1 class="designhead-tit"><img src="<?php echo ASSETS_DIR; ?>img/design/tit.png" alt="自由設計"></h1>
                        <p class="designhead-txt">
                            設計者との対話を通じて、<br>
                            暮らしにフィットする<br>
                            住まいをつくる。
                        </p>
                    </div>
                    <figure class="designhead-img"><img src="<?php echo ASSETS_DIR; ?>img/design/head_icons.png" alt=""></figure>           
                </div>     
            </div>
        </section><!-- designhead -->

        <!-- mv -->
        <div class="mv">
            <div class="ly_inner is_most_wide is_pc">
                <figure class="mv-img"><img src="<?php echo ASSETS_DIR; ?>img/design/mv.png" alt="HOW TO CREATE HOUSE ?"></figure>
            </div>
        </div><!-- mv -->

        <!-- flow -->
        <section class="flow">
            <section class="flow-section">
                <div class="ly_inner is_most_wide">
                    <div class="flow-area">
                        <figure class="flow-img">
                            <picture>
                                <source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/design/flow_01_pc.png">
                                <img src="<?php echo ASSETS_DIR; ?>img/design/flow_01_sp.png" alt="">
                            </picture>
                        </figure>
                        <div class="flow-content _step01">
                            <div class="flow-desc">
                                <h2 class="flow-tit"><img src="<?php echo ASSETS_DIR; ?>img/design/flow_tit_01.png" alt="STEP 1 間取りタイプを選ぶ"></h2>
                                <p class="flow-txt">ご家族の希望やライフスタイルにあわせて方位や面積からベースとなるプランを選びます。</p>
                            </div>
                            <div class="flow-comments">
                                <p class="flow-comment _male">公私ともに来客が多いから、プライベートとパブリックで空間をハッキリ分けたいし、メゾネットっていいかも。</p>
                                <p class="flow-comment _female">うちは共働きだから、日中の陽当りもいいけど広さ重視かな。友達をたくさん呼びたいね。</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <section class="flow-section _step02">
                <div class="ly_inner is_most_wide">
                    <div class="flow-area _step02">
                        <figure class="flow-img">
                            <picture>
                                <source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/design/flow_02_pc.png">
                                <img src="<?php echo ASSETS_DIR; ?>img/design/flow_02_sp.png" alt="">
                            </picture>
                        </figure>
                        <div class="flow-content _step02">
                            <div class="flow-desc">
                                <h2 class="flow-tit"><img src="<?php echo ASSETS_DIR; ?>img/design/flow_tit_02.png" alt="STEP 2 間取りを創る"></h2>
                                <p class="flow-txt">個室の数やリビングの広さ、収納の多さといった条件をもとに、設計者と間取りを創っていきます。</p>
                            </div>
                            <div class="flow-comments">
                                <p class="flow-comment _male">部屋数は多い方が良いと思い込んでいたけど、それぞれの個室よりも家族がくつろげる広いリビングがある方が良いかも。</p>
                                <p class="flow-comment _female">夫婦で家事を分担したいので、二人でも使いやすい家事動線の家がいいな。</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="flow-section">
                <div class="ly_inner is_most_wide">
                    <div class="flow-area">
                        <figure class="flow-img _step03">
                            <picture>
                                <source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/design/flow_03_pc.png">
                                <img src="<?php echo ASSETS_DIR; ?>img/design/flow_03_sp.png" alt="">
                            </picture>
                        </figure>
                        <div class="flow-content _step03">
                            <div class="flow-desc">
                                <h2 class="flow-tit"><img src="<?php echo ASSETS_DIR; ?>img/design/flow_tit_03.png" alt="STEP 3 設備仕様を決める"></h2>
                                <p class="flow-txt">キッチン・洗面・浴室・照明・収納といった住宅設備の仕様について、予算や機能、デザインなどで決めていきます。</p>
                            </div>
                            <div class="flow-comments">
                                <p class="flow-comment _male">高機能で便利な設備よりも、モノの質感や色の統一感にしっかりこだわりたいね。</p>
                                <p class="flow-comment _female">お風呂の時間を楽しみたいから、今の家よりもしっかり足を伸ばせるサイズの浴槽にしたいな。</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <section class="flow-section">
                <div class="ly_inner is_most_wide">
                    <div class="flow-area">
                        <figure class="flow-img _step04">
                            <picture>
                                <source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/design/flow_04_pc.png">
                                <img src="<?php echo ASSETS_DIR; ?>img/design/flow_04_sp.png" alt="">
                            </picture>
                        </figure>
                        <div class="flow-content _step04">
                            <div class="flow-desc">
                                <h2 class="flow-tit"><img src="<?php echo ASSETS_DIR; ?>img/design/flow_tit_04.png" alt="STEP 4 仕上げを決める"></h2>
                                <p class="flow-txt">お部屋の印象を左右する床・壁・天井・建具・造作家具・素材などを、家具やインテリアにあわせて決めていきます。</p>
                            </div>
                            <div class="flow-comments">
                                <p class="flow-comment _male">お気に入りのテーブルがリビングの主役になるように、部屋自体はつくり込みすぎないでシンプルな仕上がりが良いと思う。</p>
                                <p class="flow-comment _female">キッチンの前には水色のタイル、洗面台の前には素敵なモザイクタイルを貼りたいな。</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <section class="flow-section">
                <div class="ly_inner is_most_wide">
                    <div class="flow-area">
                        <figure class="flow-img _step05">
                            <picture>
                                <source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/design/flow_05_pc.png">
                                <img src="<?php echo ASSETS_DIR; ?>img/design/flow_05_sp.png" alt="">
                            </picture>
                        </figure>
                        <div class="flow-content _step05">
                            <div class="flow-desc">
                                <h2 class="flow-tit"><img src="<?php echo ASSETS_DIR; ?>img/design/flow_tit_05.png" alt="STEP 5 見積内容を決める"></h2>
                                <p class="flow-txt">選定した間取りや仕様、仕上げをもとに設計者が作成した図面等で施工会社へ見積もりをとり、ご予算の調整を行います。</p>
                            </div>
                            <div class="flow-comments">
                                <p class="flow-comment _male">造り付けの家具は少し小さくして予算を抑えようか。でも、肌が直接触れる床材にはこだわってお金をかけてもいいかな。</p>
                                <p class="flow-comment _female">手間と時間がかかってでも、希望がきちんとカタチになった理想の家をつくりたいよね。</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
        </section><!-- flow -->

<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>