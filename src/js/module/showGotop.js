const showGotop = () => {
    const target = document.querySelector('.js_gotop');
	const offset = 300; //TOPから何px地点で発火するか
    
    // observerのオプション
    const options = {
        rootMargin: `${offset}px 0px ${document.body.clientHeight}px`,
        threshold: 1
    }
    
    // 交差した時に呼ばれる関数
    const doWhenIntersect = (entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                target.classList.add('is_show');
            } else {
                target.classList.remove('is_show');
            }
        });
    }

    // 要素の交差を監視
    const observer = new IntersectionObserver(doWhenIntersect, options);
    observer.observe(document.body);
}

export default showGotop;

