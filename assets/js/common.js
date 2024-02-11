document.addEventListener("DOMContentLoaded", function () {
    // ПРОВЕРКА НА ТАЧПАДЫ

    if (
        "ontouchstart" in window ||
        (window.DocumentTouch && document instanceof DocumentTouch)
    ) {
    } else {
        document.body.classList.add("no-touch");
    }

    // NAV MOBILE

    const burgerBtn = document.getElementById("burger-btn");
    const navMobile = document.getElementById("nav-m");

    burgerBtn.addEventListener("click", function () {
        navMobile.classList.toggle("open");
    });

    // DROPDOWN

    const dropdowns = document.querySelectorAll(".dropdown");

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener("click", function (event) {
            const btn = this.querySelector(".dropdown__toggle-btn");
            const body = this.querySelector(".dropdown__body");

            btn.classList.toggle("open");
            body.classList.toggle("open");
        });
    });
});
