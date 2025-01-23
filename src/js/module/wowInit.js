import getDevice from './getDevice';
const WOW = require('wow.js');
import 'animate.css';

// wow.js初期化
const wowInit = () => {
    const device = getDevice();
    if (!device) return;

    const wow = new WOW({
        offset: device === 'sp' ? 100 : 300, //SP : PC
        animateClass: 'animate__animated'
    });
    wow.init();
}

export default wowInit