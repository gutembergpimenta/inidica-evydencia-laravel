import './bootstrap';

const btn_mobile = document.querySelector('#btn_mobile')

if (btn_mobile) {
    btn_mobile.addEventListener('click', () => {
        let links_mobile = document.querySelector('#links_mobile')
        let btn_mobile_icon = document.querySelector('#btn_mobile_icon')
    
        links_mobile.classList.toggle('calc-menu-h-screen')
        links_mobile.classList.toggle('h-0')
        btn_mobile_icon.classList.toggle('bi-menu-button-wide')
        btn_mobile_icon.classList.toggle('bi-menu-up')
    })
}