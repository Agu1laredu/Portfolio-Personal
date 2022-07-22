const body = document.getElementById('body');
const toggle = document.getElementById('toggle');
toggle.onclick = function() {
    toggle.classList.toggle('active');
    body.classList.toggle('active');
}