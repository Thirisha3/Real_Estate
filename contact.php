<?php include 'header.php'; ?>
<section id="contact" class="contact-section py-5">
    <div class="container">
        <div class="row align-items-start g-5">

            <!-- LEFT SIDE – CONTACT INFO -->
            <div class="col-lg-5 animate">
                <div class="contact-info">

                    <h2 class="section-title mb-4">Contact Us</h2>
                    <p class="section-subtitle mb-5">
                        We are ready to assist you with buying, selling, or investing in premium properties.
                    </p>

                    <div class="info-item mb-4">
                        <h6>PHONE</h6>
                        <p>+91 86681 20275</p>
                    </div>

                    <div class="info-item mb-4">
                        <h6>EMAIL</h6>
                        <p>sell.rcm@gmail.com</p>
                    </div>

                    <div class="info-item">
                        <h6>OFFICE ADDRESS</h6>
                        <p>
                            1/85, Behind Sathya Showroom,<br>
                            Kelambakkam, OMR,<br>
                            Chennai – 603103
                        </p>
                    </div>

                </div>
            </div>

            <!-- RIGHT SIDE – FORM -->
            <div class="col-lg-7 animate">
                <div class="contact-form-wrapper">

                    <form id="contactForm" class="contact-form p-5">

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <input type="text" id="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 mb-4">
                                <input type="tel" id="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <input type="email" id="email" class="form-control" placeholder="Email Address" required>
                        </div>

                        <div class="mb-4">
                            <select id="propertyType" class="form-select" required>
                                <option value="" disabled selected>Choose Residential Type</option>
                                <option value="Villa">Villa</option>
                                <option value="Plot">Plot</option>
                                <option value="Apartment">Apartment</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <textarea id="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            SEND MESSAGE
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<style>
    /* ================= GLOBAL FONT ================= */
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* ================= CONTAINER ================= */
    .container {
        max-width: 1100px;
        margin: auto;
        padding: 120px 15px 40px;
        /* added top space for header */
    }

    /* ================= CONTACT SECTION BACKGROUND ================= */
    .contact-section {
        background: #fff8f2;
        /* Warm Luxury Off-White */
        padding: 100px 0;
    }

    /* ================= LEFT SIDE ================= */
    .contact-info {
        padding-right: 60px;
    }

    /* ================= TITLE ================= */
    .section-title {
        font-size: 2.6rem;
        font-weight: 700;
        line-height: 1.2;
        color: #2b1e16;
        /* Deep Brown-Black */
        position: relative;
    }

    /* Gold underline effect */
    .section-title::after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: #C6A75E;
        /* Premium Gold */
        margin-top: 15px;
        border-radius: 2px;
    }

    /* ================= SUBTITLE ================= */
    .section-subtitle {
        color: #5c4a3d;
        /* Muted Dark Brown */
        font-size: 1.15rem;
        line-height: 1.8;
        margin-top: 20px;
    }

    /* ================= INFO LABEL ================= */
    .info-item h6 {
        font-size: 0.9rem;
        letter-spacing: 1.5px;
        font-weight: 600;
        color: #C8743A;
        /* Accent Terracotta */
        margin-bottom: 10px;
    }

    /* ================= INFO CONTENT ================= */
    .info-item p {
        margin: 0;
        font-size: 1.15rem;
        color: #2b1e16;
        /* Deep Brown-Black */
        line-height: 1.6;
    }

    /* ================= FORM WRAPPER ================= */
    .contact-form-wrapper {
        background: #ffffff;
        border-radius: 15px;
        padding: 40px;
        box-shadow: 0 20px 50px rgba(200, 116, 58, 0.08);
        /* Soft Terracotta Shadow */
    }

    /* ================= FORM ================= */
    .contact-form {
        border-radius: 0;
    }

    /* ================= INPUT FIELDS ================= */
    .contact-form .form-control,
    .contact-form .form-select {
        border-radius: 8px;
        border: 1px solid #e5ddd6;
        padding: 14px;
        font-size: 0.95rem;
        transition: all 0.3s ease;
        background: #fff8f2;
        /* Warm Luxury Off-White */
    }

    .contact-form .form-control:focus,
    .contact-form .form-select:focus {
        border-color: #C8743A;
        /* Accent Terracotta */
        box-shadow: 0 0 0 3px rgba(200, 116, 58, 0.15);
        background: #ffffff;
    }

    /* ================= BUTTON ================= */
    .submit-btn {
        width: 100%;
        background: linear-gradient(135deg, #C8743A, #C6A75E);
        /* Terracotta → Premium Gold */
        color: #ffffff;
        padding: 15px;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(198, 167, 94, 0.3);
        /* Premium Gold Shadow */
    }

    /* ================= DESKTOP ENHANCEMENT ================= */
    @media (min-width: 992px) {
        .section-title {
            font-size: 3rem;
        }

        .section-subtitle {
            font-size: 1.25rem;
        }

        .info-item p {
            font-size: 1.25rem;
        }
    }

    /* ================= SCROLL ANIMATION ================= */
    .animate,
    .animate-left,
    .animate-right {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.8s ease-out;
    }

    .animate-left {
        transform: translateX(-30px);
    }

    .animate-right {
        transform: translateX(30px);
    }

    .animate.active,
    .animate-left.active,
    .animate-right.active {
        opacity: 1;
        transform: translate(0, 0);
    }

    /* ================= MOBILE FORM IMPROVEMENT ================= */
    @media (max-width: 767px) {
        .contact-form-wrapper {
            padding: 40px 20px;
            /* Add padding inside form container */
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(200, 116, 58, 0.08);
            max-width: 100%;
        }

        /* Make inputs full width and taller */
        .contact-form .form-control,
        .contact-form .form-select,
        .contact-form textarea {
            width: 100%;
            padding: 16px 20px;
            /* taller for tapping */
            font-size: 1.05rem;
            border-radius: 10px;
            margin-bottom: 15px;
            /* consistent spacing */
            box-sizing: border-box;
        }

        /* Make textarea taller */
        .contact-form textarea {
            min-height: 120px;
            resize: vertical;
        }

        /* Submit button */
        .submit-btn {
            width: 100%;
            padding: 16px;
            font-size: 1.05rem;
            border-radius: 10px;
            margin-top: 10px;
        }

        /* Center container for mobile */
        .contact-form-wrapper {
            margin: 0 auto;
        }
    }
</style>