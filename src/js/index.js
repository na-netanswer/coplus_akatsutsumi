import wowInit from "./module/wowInit";
import adjustViewport from "./module/adjustViewport";
import smoothScroll from "./module/smoothScroll";
import showGotop from "./module/showGotop";
import headerScroll from "./module/headerScroll";
import showNav from "./module/showNav";
import splideInit from "./module/splideInit";
import fadeInmenu from "./module/fadeInmenu";
import switchTabByParam from "./module/switchTabByParam";
import switchTab from "./module/switchTab";
import "../scss/style.scss";
import "yakuhanjp";

// ページ読み込み時のアンカーリンク調整
window.addEventListener('load', () => {
    const hash = window.location.hash;
    if (hash) {
      const headerHeight = document.querySelector('.js_header').offsetHeight;
      const target = document.querySelector(hash);
      if (target) {
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({
          top: targetPosition - headerHeight,
        //   behavior: 'smooth'
        });
      }
    }
});

// showNav();
// headerScroll();
splideInit();
smoothScroll();
fadeInmenu();
switchTabByParam();
switchTab();