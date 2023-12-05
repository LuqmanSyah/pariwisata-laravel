const hamburgerIcon = document.getElementById("hamburger-icon");
const active = document.getElementById("sidebar");
hamburgerIcon.addEventListener("click", function () {
    active.classList.toggle("active");
});

const closeSide = document.getElementById('close');
closeSide.addEventListener('click', function () {
    active.classList.toggle('active');
})
