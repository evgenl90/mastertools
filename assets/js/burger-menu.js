
document.querySelector('.burger-menu').onclick = function() {
    document.querySelector('.mobile-menu').style.display = 'block';
}

document.querySelector('.mobile-menu__close').onclick = function() {
    document.querySelector('.mobile-menu').style.display = 'none';
}