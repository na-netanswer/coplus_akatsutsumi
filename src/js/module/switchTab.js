const switchTab = () => {
	//タブ切り替え
	const tabs = document.querySelectorAll('.tab-item');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            // アクティブなタブを非アクティブに
            document.querySelector('._active').classList.remove('_active');
            
            // クリックされたタブをアクティブに
            tab.classList.add('_active');
            
            // コンテンツの切り替え
            const contents = document.querySelectorAll('.tab-contsitem');
            contents.forEach(content => content.classList.remove('_show'));
            contents[index].classList.add('_show');
        });
    });
}

export default switchTab;