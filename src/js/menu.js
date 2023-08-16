
const btnOpen = document.querySelector('#btn-open');
const btnClose = document.querySelector('#btn-close');
const pushElement = document.querySelector('#main-content');
const body = document.querySelector('body');
const overlay = document.createElement('DIV');

btnOpen.addEventListener('click', function () {
    addMenu();
});

btnClose.addEventListener('click', function () {
    closeMenu();
})

function addMenu() {
    document.getElementById('sidenav').style.width = "15%";
    pushElement.classList.add('pushMenu');
    overlay.classList.add('overlay');

    body.appendChild(overlay);
    overlay.onclick = function () {
        pushElement.classList.remove('pushMenu');
        document.getElementById('sidenav').style.width = "0";
        overlay.classList.remove('overlay');
    }
}

function closeMenu() {
    document.getElementById('sidenav').style.width = "0";
    pushElement.classList.remove('pushMenu');
    overlay.classList.remove('overlay');
}

