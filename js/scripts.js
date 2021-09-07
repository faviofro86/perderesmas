const menuBtn = document.getElementById('menuBtn');
const menuBtnCerrar = document.getElementById('menuBtnCerrar');
const menuMobile = document.getElementById('menuMobile');



menuBtn.addEventListener('click', () => {
    menuMobile.classList.add('active');
});

menuBtnCerrar.addEventListener('click', () => {
    menuMobile.classList.remove('active');
});