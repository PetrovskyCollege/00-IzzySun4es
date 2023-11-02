function toggleMenu() {
    var mobileMenu = document.getElementById("mobileMenu");
    if (mobileMenu.style.display === "block" || mobileMenu.style.display === "") {
        mobileMenu.style.display = "none";
    } else {
        mobileMenu.style.display = "block";
    }
}

// Обработчик изменения размера окна
window.addEventListener("resize", function () {
    var mobileMenu = document.getElementById("mobileMenu");
    var navbarLeft = document.querySelector(".navbar-left");
    var navbarRight = document.querySelector(".navbar-right");

    if (window.innerWidth > 700) {
        mobileMenu.style.display = "none"; // Закрываем бургер-меню при увеличении экрана
        navbarLeft.style.display = "flex"; // Показываем основное меню
        navbarRight.style.display = "flex";
    } else {
        navbarLeft.style.display = "none"; // Скрываем основное меню при уменьшении экрана
        navbarRight.style.display = "none";
    }
});