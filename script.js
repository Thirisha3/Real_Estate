document.addEventListener("DOMContentLoaded", function () {

    /* ================= SELECTORS ================= */
    const header = document.querySelector("header");
    const hamburger = document.getElementById("hamburger");
    const navMenu = document.getElementById("navMenu");
    const dropdowns = document.querySelectorAll(".custom-dropdown");
    const contactForm = document.getElementById("contactForm");

    function isMobile() {
        return window.innerWidth < 992;
    }

    /* ================= HEADER SCROLL ================= */
    if (header) {
        window.addEventListener("scroll", function () {
            header.classList.toggle("scrolled", window.scrollY > 80);
        });
    }

    /* ================= MOBILE MENU TOGGLE ================= */
    if (hamburger && navMenu) {
        hamburger.addEventListener("click", function (e) {
            e.stopPropagation();
            navMenu.classList.toggle("active");
        });

        document.addEventListener("click", function (e) {
            if (isMobile()) {
                if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
                    navMenu.classList.remove("active");
                    dropdowns.forEach(drop => drop.classList.remove("active"));
                }
            }
        });

        window.addEventListener("resize", function () {
            if (!isMobile()) {
                navMenu.classList.remove("active");
                dropdowns.forEach(drop => drop.classList.remove("active"));
            }
        });
    }

    /* ================= MOBILE DROPDOWN ================= */
    dropdowns.forEach(dropdown => {
        const link = dropdown.querySelector("a");
        if (link) {
            link.addEventListener("click", function (e) {
                if (isMobile()) {
                    e.preventDefault();
                    dropdowns.forEach(item => {
                        if (item !== dropdown) item.classList.remove("active");
                    });
                    dropdown.classList.toggle("active");
                }
            });
        }
    });

    /* ================= CONTACT FORM WHATSAPP ================= */
    if (contactForm) {
        contactForm.addEventListener("submit", function (e) {
            e.preventDefault();

            const name = document.getElementById("name").value;
            const phone = document.getElementById("phone").value;
            const email = document.getElementById("email").value;
            const propertyType = document.getElementById("propertyType").value;
            const message = document.getElementById("message").value;

            const whatsappNumber = "918668120275"; // without + symbol

            const whatsappMessage =
                "New Property Enquiry:%0A%0A" +
                "Name: " + name + "%0A" +
                "Phone: " + phone + "%0A" +
                "Email: " + email + "%0A" +
                "Property Type: " + propertyType + "%0A" +
                "Message: " + message;

            const whatsappURL = "https://wa.me/" + whatsappNumber + "?text=" + whatsappMessage;

            window.open(whatsappURL, "_blank");
        });
    }

    /* ================= INTERSECTION OBSERVER ================= */
    const animateElements = [
        ...document.querySelectorAll(".process-step"),
        ...document.querySelectorAll(".trust-card"),
        ...document.querySelectorAll(".property-card"),
        ...document.querySelectorAll(".about-us-container"),
        ...document.querySelectorAll(".about-content h2, .about-content p, .mission-vision"),
        ...document.querySelectorAll(".img-box"),
        ...document.querySelectorAll(".animate"),
        ...document.querySelectorAll(".animate-left"),
        ...document.querySelectorAll(".animate-right")
    ];

    if (animateElements.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                } else {
                    entry.target.classList.remove("active");
                }
            });
        }, { root: null, rootMargin: "0px", threshold: 0.2 });

        animateElements.forEach(el => observer.observe(el));
    }

});