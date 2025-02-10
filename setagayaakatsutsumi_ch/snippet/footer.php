<!-- # ===================footerエリア_start================= # -->
</main><!-- /.main -->

<section class="un_map">
	<div class="ly_inner is_pc">
		<div class="un_map_unit">
			<div class="un_map-info">
				<figure class="un_map-img"><img src="<?php echo ASSETS_DIR; ?>img/common/logo_w.svg" alt="世田谷赤堤コーポラティブハウス"></figure>
				<div class="un_map_box">
					<p class="un_map_text">お問合せは</p>
					<p class="un_map_tel"><a href="tel:0120-940-612">0120-940-612</a></p>
					<p class="un_map_time">営業時間：10：00〜18：00（定休日：水曜日※祝日除く）</p>
				</div>
			</div>
			<div class="un_map-gmap">
				<div id="gmap"></div>
			</div>
		</div>
	</div>
</section>

<div class="un_service">
	<div class="ly_inner is_pc">
		<p class="un_service_title">コプラスの会員サービス</p>
		<p class="un_service_img"><img src="<?php echo ASSETS_DIR; ?>img/common/title-service.png" alt="club coplus" width="337" height="54"></p>
		<p class="un_service_text">会員先行で新規コーポラティブハウスの<br>ご案内・申込受付を行っています。<br><a class="service_link button" href="/membership/" target="_blank">詳しくはこちら</a></p>
	</div>
</div>

<footer class="footer">
	<figure class="logo"><a href="https://cooperativehouse.jp/" target="_blank"><img src="<?php echo ASSETS_DIR; ?>img/common/logo.svg" alt=""></a></figure>
</footer>



<!-- # ===================footerエリア_end================= # -->
</div><!-- #app -->

<!-- Start: Adobe Fonts -->
<script>
(function(d) {
var config = {
	kitId: 'cmf4pjj',
	scriptTimeout: 3000,
	async: true
},
h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);
</script>
<!-- End: Adobe Fonts -->
<script src="<?php echo ASSETS_DIR; ?>js/main.js"></script>
<script>
    function initMap() {
        const location = { lat: 35.65817865492579, lng: 139.64216115462983 }; // 世田谷赤堤の座標
        const map = new google.maps.Map(document.getElementById('gmap'), {
            zoom: 15,
            center: location,
            minZoom: 13,
            maxZoom: 18
        });
        const marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: {
                url: '/setagayaakatsutsumi_ch/assets/img/common/gmap_pin.webp', // カスタムピン画像のパスを指定
                scaledSize: new google.maps.Size(96, 96), // ピンのサイズを指定（ピクセル単位）
                anchor: new google.maps.Point(48, 48) // 画像の中心点を基準点として設定（width/2, height/2）
            }
        });
    }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUhVDUQZmDc_InQxsFiaT0LB-aXiU0Sts&callback=initMap"></script>
</body>
</html>