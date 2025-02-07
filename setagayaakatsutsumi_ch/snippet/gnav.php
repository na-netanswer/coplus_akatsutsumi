
	<nav class="gnav _pc">
		<ul class="gnav-list">
			<li class="gnav-item"><a href="<?php echo ($page_id === 'top') ? '#concept' : ROOT_DIR.'#concept'; ?>">CONCEPT<span>コンセプト</span></a></li>
			<li class="gnav-item is-no"><a href="<?php echo ROOT_DIR; ?>plan/">PLAN<span>プラン</span></a></li>
			<li class="gnav-item"><a href="<?php echo ROOT_DIR; ?>location/">LOCATION<span>ロケーション</span></a></li>
			<li class="gnav-item"><a href="<?php echo ROOT_DIR; ?>access/">ACCESS<span>交通アクセス</span></a></li>
			<li class="gnav-item"><a href="<?php echo ROOT_DIR; ?>outline/">OUTLINE<span>物件概要</span></a></li>
			<li class="gnav-item">
				<ul class="gnav-minilist">
					<li class="gnav-miniitem"><a href="<?php echo ROOT_DIR; ?>cooperative/">» コーポラティブハウスとは</a></li>
					<li class="gnav-miniitem"><a href="<?php echo ROOT_DIR; ?>design/">» 自由設計について</a></li>
				</ul>
			</li>
			<?php if( $page_id !== 'top'): ?>
			<li class="gnav-item _sns">
				<ul class="gnav-snslist">
					<li class="gnav-snsitem is-instagram"><a href="https://www.instagram.com/coplus.arch/" target="_blank"><img src="<?php echo ASSETS_DIR; ?>img/common/icon_instagram.svg" alt="instagram" width="30" height="30"></a></li>
					<li class="gnav-snsitem is-facebook"><a href="https://business.facebook.com/COPLUS.inc" target="_blank"><img src="<?php echo ASSETS_DIR; ?>img/common/icon_facebook.svg" alt="facebook" width="30" height="30"></a></li>
				</ul>
			</li>
			<?php endif; ?>
			<li class="cta-bnr"><a href="https://campage.jp/cooperative/daizawa2_nonmebmak_copy_20230902160932" target="_blank">説明会<span>予約はコチラ</span></a></li>
		</ul>
	</nav><!-- /.gnav -->

	<nav class="gnav _sp">
		<div class="gnav-trigger">
            <div class="gnav-bar"><span></span></div>
			<div class="gnav-bar-txt">MENU</div>
        </div>
        <ul class="gnav-list header_expand">
			<li class="gnav-item"><a href="<?php echo ($page_id === 'top') ? '#concept' : ROOT_DIR.'#concept'; ?>">コンセプト</a></li>
			<li class="gnav-item is-no"><a href="<?php echo ROOT_DIR; ?>plan/">プラン</a></li>
            <li class="gnav-item"><a href="<?php echo ROOT_DIR; ?>location/">ロケーション</a></li>
            <li class="gnav-item"><a href="<?php echo ROOT_DIR; ?>access/">交通アクセス</a></li>
            <li class="gnav-item"><a href="<?php echo ROOT_DIR; ?>outline/">物件概要</a></li>
            <li class="gnav-item"><a href="<?php echo ROOT_DIR; ?>cooperative/">コーポラティブハウスとは</a></li>
            <li class="gnav-item"><a href="<?php echo ROOT_DIR; ?>design/">自由設計について</a></li>
			<li class="gnav-item _contact"><a href="https://campage.jp/cooperative/daizawa2_nonmebmak_copy_20230902160932" target="_blank">説明会予約はこちら<i><img src="<?php echo ASSETS_DIR; ?>img/common/icon_next_brown.svg" alt=""></i></a></li>
        </ul>
	</nav><!-- /.gnav -->