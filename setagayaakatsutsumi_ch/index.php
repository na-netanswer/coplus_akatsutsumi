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

	<section class="un_mv">
        <h1 class="un_mv_title">
            <figure class="un_mv_img">
                <picture>
                    <source media="(min-width: 750px)" srcset="<?php echo ASSETS_DIR; ?>img/top/mv_pc.webp">
                    <img src="<?php echo ASSETS_DIR; ?>img/top/mv_sp.webp" alt="ゆっくり流れる時、ていねいに育む自分たちの暮らし 世田谷赤堤コーポラティブハウス 2025年3月上旬説明会開始予定 65㎡～79㎡（予定） 東急世田谷線徒歩3分 小田急線「豪徳寺」駅まで徒歩12分 京王線「下高井戸」駅まで徒歩13分">
                </picture>
            </figure>
        </h1>
	</section>
	
	<?php include_once( './snippet/gnav.php'); ?>

    <div class="un_achievements">
        <div class="ly_inner">
            <div class="un_achievements_box">
                <p class="un_achievements_txt">コーポラティブハウスだからできる<br>自由設計で創る新築マンション</p>
                <div class="un_achievements_btn el_btn"><a href="/coordination/" target="_blank"><span>コーポラティブハウスの実績</span><img src="<?php echo ASSETS_DIR; ?>img/common/icon_next.svg" alt=""></a></div><!-- /.fixed-btn -->
            </div>
        </div>
    </div>

	<section class="un_event">
		<div class="ly_inner">
			<p class="un_event__catch">コーポラティブハウスは「新築マンション」でありながら、個別に間取りやデザインを自由に創っていくことができます。多様化するライフスタイルやワークスタイルにフィットするよう、設計者と検討を重ね、自分自身で思い思いの住まいを創っていくことで、より魅力的で、かつ機能的な住まいが生まれます。</p>
			<figure class="un_event_img"><img src="<?php echo ASSETS_DIR; ?>img/top/session_txt.webp" alt="先行説明会日程"></figure>
			<div class="un_event_btn el_btn"><a href="https://campage.jp/cooperative/setagayaakatsutsumi_ch_setsummeikai_1" target="_blank"><span>先行説明会予約はコチラ</span><img src="<?php echo ASSETS_DIR; ?>img/common/icon_next.svg" alt=""></a></div>
		</div>

	</section><!-- /.textarea -->

                    
	<?php
	//外部からWP関数を使う
	require('../cpwp/wp-blog-header.php');
	?>

	<?php
	$query_option = array(
		'post_type' => 'news',
		'posts_per_page' => 3,
		'tax_query' => array(
			'relation' => 'AND',//デフォルトでandではあるが念のため
			array(
				'taxonomy' => 'news_cat',
				'field'    => 'slug',
				'terms'    => 'setagayaakatsutsumi_ch',
				'operator' => 'IN'
				),
			)
		);

	$myposts = get_posts($query_option);
	?>
	<?php if( $myposts ): ?>
    <section class="info">
        <div class="ly_inner">
            <div class="info-area">
                <h2 class="info-tit">INFORMATION</h2>
                <div class="info-content">
    
                    <?php foreach($myposts as $post): setup_postdata( $post );//ループの開始 ?>
    
                    <!-- 記事loopエリアstart -->
                    <dl class="info-dl">
                        <dt class="info-dt"><?php the_time('Y/m/d'); ?></dt>
                        <dd class="info-dd"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></dd>
                    </dl><!-- 記事loopエリアend -->
    
                    <?php endforeach; wp_reset_postdata(); ?>
    
                    <!-- <dl class="info-dl">
                        <dt class="info-dt">2020/09/25</dt>
                        <dd class="info-dd">プロジェクトホームページを公開しました。</dd>
                    </dl> -->
                </div>
                <div class="info-gotomore"><a href="/news/news_cat/setagayaakatsutsumi_ch/" target="_blank">more >></a></div>
            </div>
		</div><!-- /.inner -->
	</section><!-- /.info -->
	<?php endif; ?>

	<?php
	$query_option = array(
		'post_type' => 'blog',
		'posts_per_page' => 3,
		'tax_query' => array(
			'relation' => 'AND',//デフォルトでandではあるが念のため
			array(
				'taxonomy' => 'blog_cat',
				'field'    => 'slug',
				'terms'    => 'setagayaakatsutsumi_ch',
				'operator' => 'IN'
				),
			)
		);

	$myposts = get_posts($query_option);
	?>
	<?php if( $myposts ): ?>
	<section class="blog">
        <div class="blog-tit">
            <h2>BLOG</h2>
		</div>
		<div class="ly_inner">
			<ul class="blog-list">
				<?php foreach($myposts as $post): setup_postdata( $post );//ループの開始 ?>

				<li class="blog-item">
					<a href="<?php the_permalink(); ?>" target="_blank">
						<figure class="blog-img"><?php the_post_thumbnail('news_thumb'); ?></figure>
						<p class="blog-itit"><?php the_title(); ?></p>
						<p class="blog-date"><?php the_time('Y.m.d'); ?></p>
					</a>
				</li>

				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
			<div class="blog-gotomore"><a href="/blog/blog_cat/setagayaakatsutsumi_ch/" target="_blank">VIEW MORE</a></div>
		</div><!-- /.inner -->
	</section><!-- /.blog -->
	<?php endif; ?>

	<?php /*
	<section class="blog">
        <div class="blog-tit">
            <h2>BLOG</h2>

		</div>
		<div class="ly_inner">
			<ul class="blog-list">
				
				<li class="blog-item">
					<a href="./blog/single.php?pid=18821">
						<figure class="blog-img"><img width="500" height="360" src="http://018.test55.net/cpwp/wp-content/uploads/2020/12/DSC2242-500x360.jpg" class="attachment-news_thumb size-news_thumb wp-post-image" alt="" loading="lazy"></figure>
						<p class="blog-itit">コーポラティブハウス体験談＃14</p>
						<p class="blog-date">2021.01.04</p>
					</a>
				</li>

				
				<li class="blog-item">
					<a href="./blog/single.php?pid=18830">
						<figure class="blog-img"><img width="500" height="360" src="http://018.test55.net/cpwp/wp-content/uploads/2020/12/4c85c234076325c638e2c305400f29d6-500x360.jpg" class="attachment-news_thumb size-news_thumb wp-post-image" alt="" loading="lazy"></figure>
						<p class="blog-itit">千石駅真上のお蕎麦屋さん</p>
						<p class="blog-date">2020.12.30</p>
					</a>
				</li>

				
				<li class="blog-item">
					<a href="./blog/single.php?pid=18820">
						<figure class="blog-img"><img width="500" height="360" src="http://018.test55.net/cpwp/wp-content/uploads/2020/12/6fdf689332339091dbd8fe3f0aa19c8a-500x360.jpg" class="attachment-news_thumb size-news_thumb wp-post-image" alt="" loading="lazy"></figure>
						<p class="blog-itit">コーポラティブハウス体験談＃13</p>
						<p class="blog-date">2020.12.28</p>
					</a>
				</li>

			</ul>
			<div class="blog-gotomore"><a href="/blog/">VIEW MORE</a></div>
		</div><!-- /.inner -->
	</section>
	*/ ?>

	<section id="concept" class="un_concept">
		<div class="un_concept_header">
			<div class="ly_inner un_concept_header_inner">
				<figure class="un_concept_logo"><img src="<?php echo ASSETS_DIR; ?>img/common/logo_w.svg" alt="" width="289" height="100"></figure>
				<div class="un_concept_header_box">
					<h2 class="un_concept_title">住まいは買うものからつくるものへ。<br>
					自由設計で描く、<br class="hp_md_none">あなただけの新築マンション</h2>
					<figure class="un_concept_img"><img src="<?php echo ASSETS_DIR; ?>img/top/concept_01.webp" alt="" width="834" height="617"></figure>
				</div>
			</div>
		</div>
		<div class="ly_inner">
			<div class="un_concept_content">
				<ul class="un_concept_list">
					<li class="un_concept_item hp_sm_none"><img src="<?php echo ASSETS_DIR; ?>img/top/concept_02.webp" alt="" width="374" height="240"></li>
					<li class="un_concept_item"><img src="<?php echo ASSETS_DIR; ?>img/top/concept_03.webp" alt="" width="374" height="240"></li>
				</ul>
				<div class="un_concept_box">
					<h3 class="un_concept_subtitle">ゆっくり流れる時、<br>ていねいに育む<br class="hp_md_none">自分たちの暮らし</h3>
					<p class="un_concept_txt">
						穏やかな街並みと、四季の移ろいを感じる環境の中で、<br>
						ゆったりと時間をかけて暮らしをつくる。<br>
						静けさと温もりが心を満たし、<br class="hp_md_none">日々の営みが豊かに積み重なっていく場所。<br>
						利便性とスローな日常が共存する、光あふれる住まいで、<br>
						新しい自分たちの物語を紡ぎませんか。
					</p>
				</div>
				<figure class="un_concept_bottom_img hp_md_none"><img src="<?php echo ASSETS_DIR; ?>img/top/concept_02.webp" alt="" width="834" height="617"></figure>
			</div>
		</div>


	</section>

	<?php /*
	<section class="slider">
		<div class="ly_inner is_pc">
			<div class="slider-tit"><h2>IMAGE MODEL</h2></div>
			<div class="splide">
				<div class="splide__arrows">
					<button class="splide__arrow splide__arrow--prev">
						<img src="<?php echo ASSETS_DIR; ?>img/common/slide_icon_prev.svg" alt="prev" width="40" height="40">
					</button>
					<button class="splide__arrow splide__arrow--next">
						<img src="<?php echo ASSETS_DIR; ?>img/common/slide_icon_next.svg" alt="next" width="40" height="40">
					</button>
				</div>

				<div class="splide__track">
					<ul class="splide__list mv-sub__list">
						<li class="splide__slide mv-sub__item">
							<img src="<?php echo ASSETS_DIR; ?>img/top/slider_01.webp" alt="" width="960" height="550">
						</li>
						<li class="splide__slide mv-sub__item">
							<img src="<?php echo ASSETS_DIR; ?>img/top/slider_02.webp" alt="" width="960" height="550">
						</li>
						<li class="splide__slide mv-sub__item">
							<img src="<?php echo ASSETS_DIR; ?>img/top/slider_02.webp" alt="" width="960" height="550">
						</li>
					</ul>
				</div>
			</div>
		</div><!-- /.inner -->
	</section>
	*/ ?>

	<?php /*
	<section class="interview">
        <div class="interview-tit">
            <h2>INTERVIEW</h2>
		</div>
		<div class="ly_inner">
			<ul class="interview-list">
				
				<li class="interview-item">
					<a href="./interview/single.php?pid=18821">
						<figure class="interview-img"><img width="500" height="360" src="http://018.test55.net/cpwp/wp-content/uploads/2020/12/DSC2242-500x360.jpg" class="attachment-news_thumb size-news_thumb wp-post-image" alt="" loading="lazy"></figure>
						<p class="interview-itit">コーポラティブハウス体験談＃14</p>
						<p class="interview-date">2021.01.04</p>
					</a>
				</li>
				<li class="interview-item">
					<a href="./interview/single.php?pid=18830">
						<figure class="interview-img"><img width="500" height="360" src="http://018.test55.net/cpwp/wp-content/uploads/2020/12/4c85c234076325c638e2c305400f29d6-500x360.jpg" class="attachment-news_thumb size-news_thumb wp-post-image" alt="" loading="lazy"></figure>
						<p class="interview-itit">千石駅真上のお蕎麦屋さん</p>
						<p class="interview-date">2020.12.30</p>
					</a>
				</li>
				<li class="interview-item">
					<a href="./interview/single.php?pid=18820">
						<figure class="interview-img"><img width="500" height="360" src="http://018.test55.net/cpwp/wp-content/uploads/2020/12/6fdf689332339091dbd8fe3f0aa19c8a-500x360.jpg" class="attachment-news_thumb size-news_thumb wp-post-image" alt="" loading="lazy"></figure>
						<p class="interview-itit">コーポラティブハウス体験談＃13</p>
						<p class="interview-date">2020.12.28</p>
					</a>
				</li>
			</ul>
		</div><!-- /.inner -->
	</section>
	*/ ?>

	<section class="interview">
		<div class="interview-tit">
			<h2>INTERVIEW</h2>
		</div>
		<div class="ly_inner">
			<?php
			$query_option = array(
				'post_type' => 'owners',
				'posts_per_page' => 3,
			);

			$myposts = get_posts($query_option);
			?>
			
			<?php if($myposts): ?>
			<ul class="interview-list">
				<?php foreach($myposts as $post): setup_postdata($post); ?>
				<li class="interview-item">
					<a href="<?php the_permalink(); ?>" target="_blank">
						<figure class="interview-img"><?php the_post_thumbnail('news_thumb'); ?></figure>
						<p class="interview-itit"><?php the_title(); ?></p>
					</a>
				</li>
				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
			<?php endif; ?>
		</div><!-- /.inner -->
	</section>



<!-- # ===================mainエリア_end================= # -->

<?php include_once ABSOLUTE_ROOT_DIR.'/snippet/footer.php'; ?>