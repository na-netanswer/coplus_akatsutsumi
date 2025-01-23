// メニューの表示制御
const showNav = () => {
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menu-toggle');
        const navMenu = document.querySelector('.el_nav');
        const navClose = document.querySelector('.el_nav_close');
        const navLinks = document.querySelectorAll('.el_nav_item a');
    
        menuToggle.addEventListener('change', function() {
            if (menuToggle.checked) {
                navMenu.classList.add('is-visible'); // クラス名を付与
            } else {
                navMenu.classList.remove('is-visible'); // クラス名を削除
            }
        });

        navClose.addEventListener('click', function() { // 追加
            navMenu.classList.remove('is-visible'); // クラス名を削除
            menuToggle.checked = false; // チェックを外す

        });

        navLinks.forEach(link => { // 追加
            link.addEventListener('click', function() {
                navMenu.classList.remove('is-visible'); // クラス名を削除
                menuToggle.checked = false; // チェックを外す
            });
        });
    });
}

export default showNav;