// メニューの表示制御
const switchTabByParam = () => {
    const url = new URL(window.location.href); //URLを取得
    const params = url.searchParams; //パラメータオブジェクトを取得
    if (params.get('unit') != 'h') return; //unitパラメータがh以外なら終了

    // 要素取得
    const tabs = document.querySelectorAll('.tab-item');
    const contents = document.querySelectorAll('.tab-contsitem');
    const targetTab = document.querySelector('.tab-item.is-h');
    const targetContent = document.querySelector('.tab-contsitem.is-h');

    // 一旦全て隠す
    tabs.forEach(tab => tab.classList.remove('_active'));
    contents.forEach(content => content.classList.remove('_show'));
    
    // タブ切り替え
    targetTab.classList.add('_active');
    targetContent.classList.add('_show');
}

export default switchTabByParam;