/*
==========================================
        MC PREMIUM NAVBAR
==========================================
*/

document.addEventListener("DOMContentLoaded", () => {

    const navbar = document.getElementById("mcNavbar");
    const hamburger = document.getElementById("mcHamburger");
    const drawer = document.getElementById("mcDrawer");
    const overlay = document.getElementById("mcOverlay");
    const closeBtn = document.getElementById("mcClose");

    /*==============================
            Progress Bar
    ==============================*/

    const progress = document.createElement("div");
    progress.className = "mc-scroll-progress";
    document.body.appendChild(progress);

    /*==============================
            Scroll Navbar
    ==============================*/

    function updateNavbar() {

        if (window.scrollY > 40) {

            navbar.classList.add("scrolled");

        } else {

            navbar.classList.remove("scrolled");

        }

        const totalHeight =
            document.documentElement.scrollHeight - window.innerHeight;

        const percentage =
            (window.scrollY / totalHeight) * 100;

        progress.style.width = percentage + "%";

    }

    updateNavbar();

    window.addEventListener("scroll", updateNavbar);

    /*==============================
            Open Drawer
    ==============================*/

    function openDrawer() {

        drawer.classList.add("active");

        overlay.classList.add("active");

        hamburger.classList.add("active");

        document.body.style.overflow = "hidden";

    }

    /*==============================
            Close Drawer
    ==============================*/

    function closeDrawer() {

        drawer.classList.remove("active");

        overlay.classList.remove("active");

        hamburger.classList.remove("active");

        document.body.style.overflow = "";

    }

    /*==============================
            Events
    ==============================*/

    hamburger.addEventListener("click", openDrawer);

    closeBtn.addEventListener("click", closeDrawer);

    overlay.addEventListener("click", closeDrawer);

    /*==============================
            Close on Link
    ==============================*/

    document.querySelectorAll(".mc-drawer a").forEach(link => {

        link.addEventListener("click", () => {

            closeDrawer();

        });

    });

    /*==============================
            ESC Close
    ==============================*/

    document.addEventListener("keydown", function (e) {

        if (e.key === "Escape") {

            closeDrawer();

        }

    });

    /*==============================
            Resize
    ==============================*/

    window.addEventListener("resize", () => {

        if (window.innerWidth > 991) {

            closeDrawer();

        }

    });

});