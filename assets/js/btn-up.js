document.addEventListener('DOMContentLoaded', () => {
    let toTopBtn = document.querySelector('.up-box');
    window.onscroll = function () {
        if (window.pageYOffset > 580) {
            toTopBtn.style.display = 'block'
        } else {
            toTopBtn.style.display = 'none'
        }
    }

    // плавный скролл наверх 
    toTopBtn.addEventListener('click', function () {
        window.scrollBy({
            top: -document.documentElement.scrollHeight,
            behavior: 'smooth'
        });
    });
});