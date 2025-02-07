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
                    type     : 'loop',
                    perPage: 1.5,
                    focus    : 'center',
                    gap: '10px',
                    pagination: false,
                };
                new Splide( elms[ i ], options ).mount();
            }
        }
    }
}

export default splideInit