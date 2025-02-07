// ハンバーガーメニュー
const fadeInmenu = () => {
    const trigger = document.querySelector('.gnav-trigger');
    const gnavBar = document.querySelector('.gnav-bar');
    const gnavBarTxt = document.querySelector('.gnav-bar-txt');
    const gnavList = document.querySelector(".gnav._sp .gnav-list");
    
    trigger.addEventListener('click', () => {
        gnavBar.classList.toggle('active');
        gnavBarTxt.classList.toggle('active');
        gnavList.classList.toggle('open');
    });
}

export default fadeInmenu;