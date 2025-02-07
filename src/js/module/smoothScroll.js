import scrollTo from './scrollTo';

// スムーススクロール
const smoothScroll = () => {
    const headerisFixed= true; //ヘッダーが追従するかどうか

    const doWhenLoaded = () => {
        // すべてのhref="#"のaタグを取得
        const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');

        // ヘッダーの高さを取得
        let headerH = 0;
        if (headerisFixed) {
            headerH = document.querySelector('.js_header').clientHeight;
        }
    
        // aタグにそれぞれクリックイベントを設定
        for (let i = 0; i < smoothScrollTrigger.length; i++) {
            smoothScrollTrigger[i].addEventListener('click', (e) => {

                // openクラスを削除
                const gnavList = document.querySelector('.gnav._sp .gnav-list');
                const gnavBar = document.querySelector('.gnav._sp .gnav-bar');
                const gnavBarTxt = document.querySelector('.gnav._sp .gnav-bar-txt');

                if (gnavList) {
                    gnavList.classList.remove('open');
                }
                if (gnavBar) {
                    gnavBar.classList.remove('active');
                }
                if (gnavBarTxt) {
                    gnavBarTxt.classList.remove('active');
                }
    
                // ターゲットの位置を取得
                e.preventDefault();
                let href = smoothScrollTrigger[i].getAttribute('href'); // 各a要素のリンク先を取得
                let targetElement = document.getElementById(href.replace('#', '')); // リンク先の要素（コンテンツ）を取得
                let target;
                
                if (targetElement) {
                    const rect = targetElement.getBoundingClientRect().top; // ブラウザからの高さを取得
                    const offset = window.scrollY; // 現在のスクロール量を取得
                    target = rect + offset - headerH; //最終的な位置を割り出す  
                    // console.log(target);
                } else {
                    target = 0; //ターゲットが存在しない場合はTOPに移動
                }
    
                // スクロールさせる
                scrollTo(target);
            });
        }


    }
    window.addEventListener('load', doWhenLoaded);
    window.addEventListener('resize', doWhenLoaded);
}

export default smoothScroll