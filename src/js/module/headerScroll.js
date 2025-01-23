import debounce from './debounce';
import getDevice from './getDevice';

// 一定スクロールでヘッダーの色を変える
const headerScroll = () => {
    const device = getDevice();
    const header = document.querySelector('.ly_header');

    const handleScroll = () => {
        const scrollThreshold = device === 'sp' ? 50 : 100; // spは50px、pcは100px
        if (window.scrollY > scrollThreshold) {
            header.classList.add('is-scroll');
        } else {
            header.classList.remove('is-scroll');
        }
    };

    window.addEventListener('scroll', debounce(handleScroll, 100));
};

export default headerScroll;