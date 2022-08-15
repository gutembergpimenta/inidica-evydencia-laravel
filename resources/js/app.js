import './bootstrap';
const id_instance = '3AFE6CC42FAD40E05FF472EC2BA01B65'
const token = 'E033B9ADBA9FD7F5B09EF2B7'

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
    fetch("https://api.z-api.io/instances/"+id_instance+"/token/"+token+"/qr-code/image", {
        "method": "GET",
        "headers": {}
    })
    .then(response => response.json())
    .then(states =>{
        let img = document.querySelector('#img-qrcode')
        img.setAttribute('src', states.value)
    })
    .catch(err => {
        console.log(err);
    });
}, 10000);
