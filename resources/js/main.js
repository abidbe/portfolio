// resources/js/main.js

// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var options = {
        strings: ["Web Developer", "Mobile Developer"],
        typeSpeed: 100,
        backSpeed: 100,
        backDelay: 700,
        loop: true,
        showCursor: true,
        cursorChar: "|",
    };

    var typed = new Typed("#typed", options);
});

document.addEventListener("DOMContentLoaded", function () {
    const nav = document.querySelector("nav");
    const navTop = nav.offsetTop;

    function stickyNavigation() {
        if (window.scrollY >= navTop) {
            nav.classList.add("sticky-nav");
        } else {
            nav.classList.remove("sticky-nav");
        }
    }

    window.addEventListener("scroll", stickyNavigation);
});

document.addEventListener('DOMContentLoaded', function() {
    const nav = document.querySelector('nav');
    const navTop = nav.offsetTop;

    function blurNavigation() {
        if (window.scrollY >= navTop) {
            nav.classList.add('blur-nav');
        } else {
            nav.classList.remove('blur-nav');
        }
    }

    window.addEventListener('scroll', blurNavigation);
});



