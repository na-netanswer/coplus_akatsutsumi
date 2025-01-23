// デバイス判定
const getDevice = () => {
    if (window.innerWidth > 768) {
        return 'pc';
    } else {
        return 'sp';
    }
}

export default getDevice