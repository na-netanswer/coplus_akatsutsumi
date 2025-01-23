import getDevice from './getDevice';
import '@splidejs/splide/css';
import { Splide } from '@splidejs/splide';

// splide初期化
const splideInit = () => {
    const device = getDevice();
    if (!device) return;

    var elms = document.getElementsByClassName('splide');
    if (elms.length > 0) {
        // var bodyClass = document.body.className;
        var bodyId = document.body.id;

        if (bodyId.includes('top')) {
            for ( var i = 0; i < elms.length; i++ ) {
                let slideCount = elms[i].querySelectorAll('.splide__slide').length;
                let options = {
                    type: slideCount > 1 ? 'loop' : 'slide',
                    autoplay: true,
                    pauseOnHover: false,
                    drag: true,
                    pagination: i === 1 ? false : true,
                    arrows: false,
                    rewind: true,
                    speed: 2000,
                    perPage: i === 1 ? 3 : 1,
                    perMove: 1,
                    gap: i === 1 ? '5px' : '0px',
                    ...(i === 1 && { fixedWidth: '140px', fixedHeight: '140px' }), // 2つめのスライドのみ画像のサイズを指定
                };
                new Splide( elms[ i ], options ).mount();
            }
        }
    }
}

export default splideInit