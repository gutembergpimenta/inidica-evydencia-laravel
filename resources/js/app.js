import './bootstrap';

const btn_mobile = document.querySelector('#btn_mobile')

if (btn_mobile) {
    btn_mobile.addEventListener('click', () => {
        let links_mobile = document.querySelector('#links_mobile')
        let btn_mobile_icon = document.querySelector('#btn_mobile_icon')

        links_mobile.classList.toggle('h-full')
        links_mobile.classList.toggle('h-0')
        btn_mobile_icon.classList.toggle('bi-menu-button-wide')
        btn_mobile_icon.classList.toggle('bi-menu-up')
    })
}

setInterval(() => {
    let url = "https://dreamy-hertz.177-234-144-114.plesk.page/api/getQrCode"
    fetch(url, {
        "method": "GET",
        "headers": {}
    })
    .then(response => {
        console.log(response)
    })
}, 10000);
