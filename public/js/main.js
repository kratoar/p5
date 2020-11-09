

document.addEventListener('DOMContentLoaded', function() {
    console.log("Ready !");

    document.getElementById('mini-menu-toggle').addEventListener('click', function() {
        this.classList.toggle('opened');
        setTimeout(function() {
            document.querySelector('.header-nav').classList.toggle('first');
        }, 300);
    });
});