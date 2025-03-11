import getDevice from './getDevice';
import '@splidejs/splide/css';
import { Splide } from '@splidejs/splide';

// splide初期化
const splideInit = () => {
    const device = getDevice();
    if (!device) return;

    var elms = document.getElementsByClassName('splide');
    if (elms.length > 0) {
        var bodyId = document.body.id;

        if (bodyId.includes('plan')) { // プランページ
            for (var i = 0; i < elms.length; i++) {
                let slideCount = elms[i].querySelectorAll('.splide__slide').length;
                let options = {
                    type: 'slide',
                    perPage: 3,
                    gap: '30px',
                    pagination: false,
                    breakpoints: {
                        767: {  // スマホ表示時
                            type: 'loop',
                            perPage: 1,
                        },
                    }
                };
                new Splide(elms[i], options).mount();
            }
        }
    }
}

export default splideInit