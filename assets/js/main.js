const fiturElements = document.querySelectorAll('.fitur-scroll');

function checkScrollFitur() {
    console.log("cek");
    fiturElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        if (rect.top < window.innerHeight) {
            el.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', checkScrollFitur);
window.addEventListener('load', checkScrollFitur);