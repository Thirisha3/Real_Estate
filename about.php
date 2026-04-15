<?php include 'header.php'; ?>

<section class="about-us-section">
    <!-- Subtle Modern House Line Art SVG -->
    <svg class="background-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 600" preserveAspectRatio="xMidYMid slice">
        <g fill="none" stroke="#C8743A" stroke-width="1.2" opacity="0.07">
            <polygon points="150,350 200,300 250,350" />
            <rect x="180" y="350" width="50" height="50" rx="6" ry="6" />
            <rect x="400" y="250" width="90" height="150" rx="6" ry="6" />
            <line x1="400" y1="290" x2="490" y2="290" />
            <line x1="400" y1="330" x2="490" y2="330" />
            <line x1="400" y1="370" x2="490" y2="370" />
            <polygon points="650,400 700,360 750,400" />
            <rect x="680" y="400" width="60" height="50" rx="6" ry="6" />
        </g>
    </svg>

    <div class="about-us-container animate">
        <h2>Welcome to Right Choice Marketing</h2>
        <h3 class="tagline">Your Right Choice for Real Estate</h3>
        <p>
            Established in 2009, Right Choice Marketing is a RERA-certified real estate consulting firm based in Chennai.
            With a team of 50+ experts, we provide end-to-end solutions for buyers, sellers, and developers.
            Our approach is professional, transparent, and tailored to your property needs.
        </p>
        <a href="contact.php" class="schedule-btn">Schedule a Meeting</a>
    </div>
</section>
<!-- 6. Trust & Certifications -->
<section class="trust-section py-5">
    <div class="container">
        <div class="text-center mb-5 animate">
            <h2>Our Trust & Certifications</h2>
            <p>Certified, experienced, and recognized in the real estate industry</p>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-lg-2 col-md-4 col-6 animate">
                <div class="trust-badge">🏆<span>RERA Certified</span></div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 animate-left">
                <div class="trust-badge">💼<span>Banking Experts</span></div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 animate-right">
                <div class="trust-badge">🌟<span>Awards & Recognition</span></div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 animate">
                <div class="trust-badge">📜<span>Legal Compliance</span></div>
            </div>
        </div>
    </div>
</section>


<!-- ===== OUR STORY / BRAND JOURNEY ===== -->
<section class="our-story-section py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left: Image -->
            <div class="col-lg-6 mb-4 mb-lg-0 animate-left">
                <div class="story-image">
                    <img src="images/Apartment/4/WhatsApp Image 2025-09-29 at 1.28.35 PM.jpeg" alt="Right Choice Marketing Team" class="img-fluid rounded shadow">
                </div>
            </div>

            <!-- Right: Text + Milestones -->
            <div class="col-lg-6 animate-right">
                <h2 class="mb-4">Our Journey & Brand Story</h2>
                <p>
                    Over the years, we have grown by staying committed to transparency, ethical practices, and personalized guidance for every client.
                </p>

                <!-- Milestones / Story in Numbers -->
                <div class="story-milestones mt-4">
                    <div class="milestone animate">
                        <div class="milestone-icon">🏢</div>
                        <div class="milestone-text">
                            <h5>15+ Years</h5>
                            <p>Trusted in Chennai real estate since 2009</p>
                        </div>
                    </div>

                    <div class="milestone animate">
                        <div class="milestone-icon">👥</div>
                        <div class="milestone-text">
                            <h5>50+ Experts</h5>
                            <p>Dedicated consultants serving diverse clients</p>
                        </div>
                    </div>

                    <div class="milestone animate">
                        <div class="milestone-icon">🏠</div>
                        <div class="milestone-text">
                            <h5>5000+ Transactions</h5>
                            <p>Successfully assisted buyers, sellers & developers</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- 3. Our Philosophy / Approach -->
<section class="philosophy-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="animate">Our Philosophy & Approach</h2>
            <p class="animate">We guide every client with integrity, insights, and a client-first approach.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4 animate-left">
                <div class="philosophy-card">
                    <div class="icon">🛡️</div>
                    <h5>Integrity & Transparency</h5>
                    <p>Clear processes, honest guidance, and ethical practices in every transaction.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 animate">
                <div class="philosophy-card">
                    <div class="icon">🤝</div>
                    <h5>Client-Centric Advisory</h5>
                    <p>Every recommendation is tailored to your property goals and lifestyle needs.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 animate-right">
                <div class="philosophy-card">
                    <div class="icon">📊</div>
                    <h5>Market Insights & Strategy</h5>
                    <p>Data-driven insights and proactive strategies help you make confident investments.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include 'footer.php'; ?>

<style>
    /* ===== GLOBAL ANIMATION SETTINGS ===== */
    .animate,
    .animate-left,
    .animate-right {
        opacity: 0;
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

    /* ===== ABOUT US HERO SECTION ===== */
    .about-us-section {
        position: relative;
        background: #fff8f2;
        /* Warm Luxury Off-White */
        padding: 120px 20px;
        text-align: center;
        overflow: hidden;
        min-height: 600px;
    }

    .about-us-section .background-svg {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 120%;
        height: 100%;
        pointer-events: none;
        z-index: 0;
    }

    .about-us-container {
        position: relative;
        max-width: 700px;
        margin: 0 auto;
        z-index: 1;
    }

    .about-us-container h2 {
        font-family: 'Playfair Display', serif;
        font-size: 3rem;
        margin-bottom: 10px;
        color: #2b1e16;
        /* Deep Brown-Black */
    }

    .about-us-container .tagline {
        font-family: 'Poppins', sans-serif;
        font-size: 1.5rem;
        margin-bottom: 30px;
        background: linear-gradient(135deg, #C8743A, #C6A75E);
        /* Terracotta → Gold */
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .about-us-container p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1rem;
        line-height: 1.8;
        color: #5c4a3d;
        margin-bottom: 40px;
    }

    .schedule-btn {
        display: inline-block;
        background: linear-gradient(135deg, #C8743A, #C6A75E);
        color: #fff;
        padding: 15px 35px;
        text-decoration: none;
        font-weight: 600;
        border-radius: 8px;
        transition: 0.3s;
        box-shadow: 0 8px 20px rgba(200, 116, 58, 0.3);
    }

    .schedule-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 30px rgba(198, 167, 94, 0.4);
    }

    /* ===== OUR STORY SECTION ===== */
    .our-story-section {
        background: #fffaf5;
        padding: 80px 20px;
        font-family: 'Poppins', sans-serif;
    }

    .our-story-section h2 {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        color: #2b1e16;
    }

    .our-story-section p {
        font-size: 1rem;
        color: #5c4a3d;
        line-height: 1.8;
    }

    .story-image img {
        width: 100%;
        border-radius: 12px;
        box-shadow: 0 12px 30px rgba(200, 116, 58, 0.15);
        transition: transform 0.3s ease;
    }

    .story-image img:hover {
        transform: scale(1.03);
    }

    /* Milestones */
    .story-milestones {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .milestone {
        display: flex;
        align-items: center;
        background: #fff;
        padding: 15px 20px;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .milestone:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 30px rgba(200, 116, 58, 0.25);
    }

    .milestone-icon {
        font-size: 2rem;
        margin-right: 15px;
        color: #C8743A;
        /* Terracotta */
    }

    .milestone-text h5 {
        font-weight: 600;
        margin-bottom: 5px;
        color: #2b1e16;
    }

    .milestone-text p {
        margin: 0;
        font-size: 0.95rem;
        color: #5c4a3d;
    }

    /* ===== PHILOSOPHY SECTION ===== */
    .philosophy-section {
        background: #fff8f2;
        text-align: center;
    }

    .philosophy-card {
        background: #fff;
        border-radius: 15px;
        padding: 30px 20px;
        box-shadow: 0 12px 25px rgba(200, 116, 58, 0.12);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .philosophy-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 18px 35px rgba(200, 116, 58, 0.2);
    }

    .philosophy-card .icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: #C6A75E;
        /* Premium Gold */
    }

    /* ===== TRUST SECTION ===== */
    .trust-section {
        padding: 60px 0;
        background: linear-gradient(135deg, #C8743A, #C6A75E);
    }

    .trust-section .text-center h2,
    .trust-section .text-center p {
        color: #fff;
    }

    .trust-section .trust-badge {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
        text-align: center;
        font-size: 2rem;
        transition: 0.3s;
        width: 100%;
    }

    .trust-section .trust-badge span {
        display: block;
        font-size: 0.85rem;
        margin-top: 8px;
        color: #5c4a3d;
    }

    .trust-section .trust-badge:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 35px rgba(200, 116, 58, 0.3);
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 992px) {
        .trust-section .col-md-4 {
            flex: 0 0 33.3333%;
            max-width: 33.3333%;
        }
    }

    @media (max-width: 768px) {
        .about-us-section {
            padding: 80px 20px;
            min-height: 500px;
        }

        .about-us-container h2 {
            font-size: 2.2rem;
        }

        .about-us-container .tagline {
            font-size: 1.3rem;
        }

        .trust-section .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
            margin-bottom: 15px;
        }

        .trust-section .trust-badge {
            margin: 0 auto;
        }
    }

    @media (max-width: 480px) {
        .about-us-container h2 {
            font-size: 1.8rem;
        }

        .about-us-container .tagline {
            font-size: 1.1rem;
        }

        .trust-section .col-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>