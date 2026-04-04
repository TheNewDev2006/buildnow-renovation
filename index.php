<?php include 'layouts/template-top.php'; ?>
<?php include 'layouts/header-7.php'; ?>
<?php require_once 'config/Personalization.php'; Personalization::init(); ?>
<div id="smooth-wrapper">
    <div id="smooth-content">


        <!-- Hero Section Start -->
        <section id="home" class="hero-section-7 hero-7 bg-cover fix"
            style="background-image: url('assets/img/home-7/hero-bg-image.jpg');">
            <h1 class="hero-title-1">Renovation </h1>
            <div class="hero-image float-bob-x">
                <img src="assets/img/home-7/hero-image-01.png" alt="img">
            </div>
            <div class="row justify-content-between g-4 align-items-end">
                <div class="col-xl-4 wow fadeInUp" data-wow-delay=".3s">
                    <h2 class="hero-title-2">empower your home renovation</h2>
                </div>
                <div class="col-xl-6">
                    <form action="#" id="contact-form" class="hero-contact-form-box">
                        <h3 class="wow fadeInUp">Stay In touch With <?php echo htmlspecialchars(Personalization::get('business_name'), ENT_QUOTES, 'UTF-8'); ?></h3>
                        <div class="row g-4 align-items-center justify-content-center">
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                                <div class="form-clt">
                                    <div class="icon">
                                        <img src="assets/img/home-7/hero-icon-01.svg" alt="img">
                                    </div>
                                    <input type="text" name="name" id="name" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".4s">
                                <div class="form-clt">
                                    <div class="icon">
                                        <img src="assets/img/home-7/hero-icon-02.svg" alt="img">
                                    </div>
                                    <input type="text" name="email" id="email2" placeholder="Your email">
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".6s">
                                <div class="form-clt">
                                    <div class="icon">
                                        <img src="assets/img/home-7/hero-icon-03.svg" alt="img">
                                    </div>
                                    <input type="text" name="phone" id="phone" placeholder="Your phone">
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8s">
                                <div class="form-clt">
                                    <textarea name="message" id="message" placeholder="Your message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                <div class="contact-button">
                                    <button type="submit" class="theme-btn-main style-2">
                                        <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i>
                                        </span>
                                        <span class="theme-btn">GET A FREE QUOTE</span>
                                        <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- About Section Start -->
        <section id="about" class="about-section-7 section-padding fix">
            <div class="about-wrapper-7">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-3 col-lg-12 wow fadeInUp" data-wow-delay=".2s">
                        <div class="about-left-items-7">
                            <img class="wow img-custom-anim-left" src="assets/img/home-7/about-01.jpg" alt="img">
                            <div class="about-sm-thumb wow img-custom-anim-right" data-wow-delay=".3s">
                                <img src="assets/img/home-7/about-02.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="about-middle-content-7">
                            <div class="client-image wow fadeInUp">
                                <img src="assets/img/home-7/about-client.png" alt="img">
                            </div>
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp">
                                    About Us
                                </span>
                                <h2 class="">
                                    Our Residential Services Cover Custom Homes, Additions, And Renovations, Ensuring
                                    Comfort
                                </h2>
                                <p class="mt-3 wow fadeInUp" data-wow-delay=".3s">
                                    We build multi-family and affordable housing communities, industrial facilities,
                                    public and private healthcare facilities, fitness centers.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-12">
                        <div class="about-right-image wow img-custom-anim-right">
                            <img src="assets/img/home-7/about-03.jpg" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-bottom-area-7">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="about-thumb-7 wow img-custom-anim-left">
                                <img src="assets/img/home-7/about-04.jpg" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                            <div class="about-middle-area">
                                <div class="counter-area">
                                    <div class="counter-content-items">
                                        <h2>$<span class="count">46</span>K+</h2>
                                        <p>Kids need help</p>
                                    </div>
                                    <div class="counter-content-items">
                                        <h2>$<span class="count">150</span>+</h2>
                                        <p>Raised now</p>
                                    </div>
                                    <div class="counter-content-items">
                                        <h2><span class="count">75</span>K+</h2>
                                        <p>Volunteers</p>
                                    </div>
                                </div>
                                <a class="theme-btn-main style-2 wow fadeInUp" data-wow-delay=".5s" href="about.php">
                                    <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i>
                                    </span>
                                    <span class="theme-btn">ABOUT COMPANY</span>
                                    <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="about-thumb-7 wow img-custom-anim-right" data-wow-delay=".3s">
                                <img src="assets/img/home-7/about-05.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Service Section Start -->
        <section id="services" class="service-section-7 section-padding fix header-bg">
            <div class="container">
                <div class="section-title-area">
                    <div class="section-title">
                        <span class="sub-title text-white wow fadeInUp">
                            OUR Services
                        </span>
                        <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim text-white">
                            Our Thoughts For Developing <br> Your Stylish Life Level.
                        </h2>
                    </div>
                    <div class="countent-items">
                        <h2><span class="count">54</span>+</h2>
                        <p>
                            EXPERIENCE
                        </p>
                    </div>
                </div>
            </div>
            <div class="service-wrapper-7">
                <div class="swiper service-slider-7">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-card-items-7">
                                <div class="service-thumb">
                                    <img src="assets/img/home-7/service-01.jpg" alt="img">
                                    <img src="assets/img/home-7/service-01.jpg" alt="img">
                                </div>
                                <div class="service-content">
                                    <div class="icon">
                                        <img src="assets/img/home-7/service-icon-01.svg" alt="img">
                                    </div>
                                    <h4><a href="service-details.php">Intermodal Shipping</a></h4>
                                    <p>
                                        After more than twenty years of success in the wood products industry, Bilder
                                        family founded.
                                    </p>
                                    <a href="service-details.php" class="link-btn">Read More <i
                                            class="fa-solid fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-7">
                                <div class="service-thumb">
                                    <img src="assets/img/home-7/service-02.jpg" alt="img">
                                    <img src="assets/img/home-7/service-02.jpg" alt="img">
                                </div>
                                <div class="service-content">
                                    <div class="icon">
                                        <img src="assets/img/home-7/service-icon-02.svg" alt="img">
                                    </div>
                                    <h4><a href="service-details.php">Const. Management</a></h4>
                                    <p>
                                        After more than twenty years of success in the wood products industry, Bilder
                                        family founded.
                                    </p>
                                    <a href="service-details.php" class="link-btn">Read More <i
                                            class="fa-solid fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-7">
                                <div class="service-thumb">
                                    <img src="assets/img/home-7/service-03.jpg" alt="img">
                                    <img src="assets/img/home-7/service-03.jpg" alt="img">
                                </div>
                                <div class="service-content">
                                    <div class="icon">
                                        <img src="assets/img/home-7/service-icon-03.svg" alt="img">
                                    </div>
                                    <h4><a href="service-details.php">Interior Design</a></h4>
                                    <p>
                                        After more than twenty years of success in the wood products industry, Bilder
                                        family founded.
                                    </p>
                                    <a href="service-details.php" class="link-btn">Read More <i
                                            class="fa-solid fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-7">
                                <div class="service-thumb">
                                    <img src="assets/img/home-7/service-04.jpg" alt="img">
                                    <img src="assets/img/home-7/service-04.jpg" alt="img">
                                </div>
                                <div class="service-content">
                                    <div class="icon">
                                        <img src="assets/img/home-7/service-icon-04.svg" alt="img">
                                    </div>
                                    <h4><a href="service-details.php">Project Planning</a></h4>
                                    <p>
                                        After more than twenty years of success in the wood products industry, Bilder
                                        family founded.
                                    </p>
                                    <a href="service-details.php" class="link-btn">Read More <i
                                            class="fa-solid fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-card-items-7">
                                <div class="service-thumb">
                                    <img src="assets/img/home-7/service-05.jpg" alt="img">
                                    <img src="assets/img/home-7/service-05.jpg" alt="img">
                                </div>
                                <div class="service-content">
                                    <div class="icon">
                                        <img src="assets/img/home-7/service-icon-05.svg" alt="img">
                                    </div>
                                    <h4><a href="service-details.php">Energy and Environment</a></h4>
                                    <p>
                                        After more than twenty years of success in the wood products industry, Bilder
                                        family founded.
                                    </p>
                                    <a href="service-details.php" class="link-btn">Read More <i
                                            class="fa-solid fa-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Impacts Section Start -->
        <section class="impacts-section-7 section-padding fix pt-0">
            <div class="container">
                <div class="impact-wrapper-7">
                    <div class="row g-4">
                        <div class="col-xl-4">
                            <div class="impacts-left-items">
                                <div class="section-title">
                                    <span class="sub-title wow fadeInUp">
                                        OUR IMPACTS
                                    </span>
                                </div>
                                <div class="impects-items wow fadeInUp" data-wow-delay=".2s">
                                    <div class="impects-text-img">
                                        <img src="assets/img/home-7/impects-text.png" alt="img">
                                    </div>
                                    <a href="contact.php" class="circle-icon">
                                        <i class="fa-regular fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8">
                            <div class="impacts-right-items">
                                <div class="section-title mb-0">
                                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Modern Building Challenges
                                        & Solutions of Construction</h2>
                                </div>
                                <p class="impact-text wow fadeInUp" data-wow-delay=".3s">
                                    We build multi-family and affordable housing communities, industrial facilities,
                                    public and private healthcare facilities, fitness centers and office buildings. We
                                    improve the supply chain management process, increase operational efficiencies and
                                    build environments that foster creativity.
                                </p>
                                <a class="theme-btn-main style-2 wow fadeInUp" data-wow-delay=".5s" href="about.php">
                                    <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i>
                                    </span>
                                    <span class="theme-btn">ABOUT COMPANY</span>
                                    <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i>
                                    </span>
                                </a>
                                <div class="row g-4">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".2s">
                                        <div class="icon-box-area">
                                            <div class="top-icon">
                                                <div class="icon">
                                                    <img src="assets/img/home-7/impact-icon-01.svg" alt="img">
                                                </div>
                                                <h4>Award Winning</h4>
                                            </div>
                                            <p>
                                                After a global pandemic destroys civilization, a hardened survivor takes
                                                charge of a 14-year-old girl who may be humanity's last hope.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="icon-box-area">
                                            <div class="top-icon">
                                                <div class="icon">
                                                    <img src="assets/img/home-7/impact-icon-02.svg" alt="img">
                                                </div>
                                                <h4>Best Quality</h4>
                                            </div>
                                            <p>
                                                After a global pandemic destroys civilization, a hardened survivor takes
                                                charge of a 14-year-old girl who may be humanity's last hope.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Complet Feature Section Start -->
        <section class="complet-feature-section-7 section-padding fix bg-cover"
            style="background-image: url('assets/img/home-7/complet-feature-bg.jpg');">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-xxl-6 col-xl-5">
                        <div class="complet-feature-left-items-style-7">
                            <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">Completely Reimagine <br> Your
                                Space</h2>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-7">
                        <div class="complet-feature-right-items-style-7">
                            <div class="row g-4">
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                    <div class="complet-feature-box-items">
                                        <div class="icon">
                                            <img src="assets/img/home-7/complet-icon-01.svg" alt="img">
                                        </div>
                                        <h3>Corporate Responsibility</h3>
                                        <ul class="list-items">
                                            <li>
                                                Threat detection systems
                                            </li>
                                            <li>
                                                Firewall and antivirus setup
                                            </li>
                                            <li>
                                                Data encryption protocols
                                            </li>
                                            <li>
                                                Security audits & compliance
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                                    <div class="complet-feature-box-items">
                                        <div class="icon">
                                            <img src="assets/img/home-7/complet-icon-02.svg" alt="img">
                                        </div>
                                        <h3>Experts With Team Spirit</h3>
                                        <ul class="list-items">
                                            <li>
                                                Threat detection systems
                                            </li>
                                            <li>
                                                Firewall and antivirus setup
                                            </li>
                                            <li>
                                                Data encryption protocols
                                            </li>
                                            <li>
                                                Security audits & compliance
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                                    <div class="complet-feature-box-items">
                                        <div class="icon">
                                            <img src="assets/img/home-7/complet-icon-03.svg" alt="img">
                                        </div>
                                        <h3>Diversity, Equity & Inclusion</h3>
                                        <ul class="list-items">
                                            <li>
                                                Threat detection systems
                                            </li>
                                            <li>
                                                Firewall and antivirus setup
                                            </li>
                                            <li>
                                                Data encryption protocols
                                            </li>
                                            <li>
                                                Security audits & compliance
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                                    <div class="complet-feature-box-items">
                                        <div class="icon">
                                            <img src="assets/img/home-7/complet-icon-04.svg" alt="img">
                                        </div>
                                        <h3>Trusted & Transparent</h3>
                                        <ul class="list-items">
                                            <li>
                                                Threat detection systems
                                            </li>
                                            <li>
                                                Firewall and antivirus setup
                                            </li>
                                            <li>
                                                Data encryption protocols
                                            </li>
                                            <li>
                                                Security audits & compliance
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brand Section Start -->
        <div class="brand-section-7">
            <div class="swiper brand-slider-7">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-box-7">
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-01.png" alt="img">
                            </span>
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-01.png" alt="img">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box-7">
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-02.png" alt="img">
                            </span>
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-02.png" alt="img">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box-7">
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-03.png" alt="img">
                            </span>
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-03.png" alt="img">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box-7">
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-04.png" alt="img">
                            </span>
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-04.png" alt="img">
                            </span>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box-7">
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-05.png" alt="img">
                            </span>
                            <span class="brand-img-1">
                                <img src="assets/img/home-7/brand-05.png" alt="img">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Project Section Start -->
        <section id="projects" class="project-section-7 section-padding fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">
                        OUR WORKING PROCESS
                    </span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        Recently Completed <br> Projects
                    </h2>
                </div>
            </div>
            <div class="project-wrapper-7">
                <div class="swiper project-slider-7">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-box-area-style-7">
                                <div class="project-thumb">
                                    <img src="assets/img/home-7/project-01.jpg" alt="img">
                                    <img src="assets/img/home-7/project-01.jpg" alt="img">
                                </div>
                                <div class="project-content">
                                    <h2>01</h2>
                                    <span><a href="project.php" class="text-box">APARTMENT</a></span>
                                    <h3><a href="project-details.php">Apartment Building</a></h3>
                                    <div class="location-area">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <p>
                                            Colonial Rd, Brooklyn, NY 11209
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-box-area-style-7">
                                <div class="project-thumb">
                                    <img src="assets/img/home-7/project-02.jpg" alt="img">
                                    <img src="assets/img/home-7/project-02.jpg" alt="img">
                                </div>
                                <div class="project-content">
                                    <h2>02</h2>
                                    <span><a href="project.php" class="text-box">APARTMENT</a></span>
                                    <h3><a href="project-details.php">Building Apartment</a></h3>
                                    <div class="location-area">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <p>
                                            Colonial Rd, Brooklyn, NY 11209
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-box-area-style-7">
                                <div class="project-thumb">
                                    <img src="assets/img/home-7/project-03.jpg" alt="img">
                                    <img src="assets/img/home-7/project-03.jpg" alt="img">
                                </div>
                                <div class="project-content">
                                    <h2>03</h2>
                                    <span><a href="project.php" class="text-box">APARTMENT</a></span>
                                    <h3><a href="project-details.php">Business Building</a></h3>
                                    <div class="location-area">
                                        <div class="icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                        <p>
                                            Colonial Rd, Brooklyn, NY 11209
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video-section Start -->
        <div class="video-section fix bg-cover" style="background-image: url(assets/img/home-7/vedio-image.jpg);">
            <div class="container">
                <div class="video-wrapper">
                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I" class="video-btn ripple video-popup">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Feature-Impact-section Start -->
        <section class="feature-impact-section">
            <div class="container">
                <div class="feature-impact-wrapper bg-color-3">
                    <div class="right-shape float-bob-x">
                        <img src="assets/img/home-7/shape1.png" alt="img">
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-xl-5 col-lg-7">
                            <div class="feature-impact-left-style-1">
                                <div class="build-shape">
                                    <img src="assets/img/home-7/shape-2.png" alt="img">
                                </div>
                                <div class="section-title">
                                    <span class="sub-title style-2 text-white wow fadeInUp">
                                        WHO WE ARE
                                    </span>
                                    <h2 class="text-white tx-title sec_title  tz-itm-title tz-itm-anim">
                                        Building The Next <br> Generation Of <br> Efficient Industr <br>ial Systems
                                    </h2>
                                    <a class="theme-btn-main style-2 wow fadeInUp" data-wow-delay=".5s"
                                        href="contact.php">
                                        <span class="theme-btn-arrow-left"> <i class="fa-solid fa-arrow-up-right"></i>
                                        </span>
                                        <span class="theme-btn">READ MORE</span>
                                        <span class="theme-btn-arrow-right"> <i class="fa-solid fa-arrow-up-right"></i>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-5">
                            <div class="feature-impact-content-style-1">
                                <h4 class="wow fadeInUp" data-wow-delay=".3s">
                                    Building the Future of the <br> Construction Industry, One <br> Project at a Time.
                                </h4>
                                <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="cont-item">
                                        <h6>Global Business services</h6>
                                        <div class="icon-item">
                                            <img src="assets/img/home-1/icon/15.svg" alt="img">
                                            <h2><span class="count">594</span>+</h2>
                                        </div>
                                    </div>
                                    <div class="cont-item">
                                        <h6>Real-Time Live Support</h6>
                                        <div class="icon-item">
                                            <img src="assets/img/home-1/icon/16.svg" alt="img">
                                            <h2><span class="count">498</span>B</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial Section Start -->
        <section class="testimonial-section-7 section-padding fix">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-7">
                        <div class="swiper testimonial-slider-7">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-left-content-style-7">
                                        <div class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <h4>
                                            Working with new, has been an absolte fame changer for our business from the
                                            very first meeting, thei team dem nsdeep understanding
                                        </h4>
                                        <div class="info-item">
                                            <img src="assets/img/home-1/testimonial/client.png" alt="img">
                                            <div class="content">
                                                <h6>Shophia Smith</h6>
                                                <span>Managing Director</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-1 d-none d-xl-block">
                        <div class="array-button">
                            <button class="array-prev">
                                <i class="far fa-chevron-left"></i>
                            </button>
                            <button class="array-next">
                                <i class="far fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="testimonial-box-item-style-new">
                            <h2>4.9<sub>/ 5</sub></h2>
                            <p>
                                We’ve delivered 150+ projects that help companies generate real results.
                            </p>
                            <img src="assets/img/home-1/testimonial/google.png" alt="img">
                            <div class="group-image">
                                <img src="assets/img/home-1/testimonial/group.png" alt="img">
                            </div>
                            <h6>
                                Our Website 75000+ VIP <br> Customer
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section Start -->
        <section id="contact" class="contact-section-7 section-padding fix header-bg">
            <div class="contact-wrapper-7">
                <div class="row g-4 align-items-center">
                    <div class="col-xl-5">
                        <div class="contact-left-items-style-7 fix">
                            <img data-speed=".8" src="assets/img/home-7/contact-01.jpg" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="contact-content-right-style-7">
                            <div class="section-title">
                                <span class="sub-title wow fadeInUp text-white">
                                    OUR IMPACTS
                                </span>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim text-white">Let’s Contact with
                                    Us</h2>
                            </div>
                            <ul class="contact-information-list">
                                <li class="wow fadeInUp" data-wow-delay=".6s">
                                    <div class="icon">
                                        <img src="assets/img/home-7/contact-icon-01.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>Contact us:</h5>
                                        <p><a href="tel:<?php echo preg_replace('/[^\d]/', '', Personalization::get('phone')); ?>">Call Consulting: <?php echo htmlspecialchars(Personalization::get('phone'), ENT_QUOTES, 'UTF-8'); ?></a></p>
                                        <p><a href="mailto:<?php echo htmlspecialchars(Personalization::get('email'), ENT_QUOTES, 'UTF-8'); ?>">Send Email:
                                                <?php echo htmlspecialchars(Personalization::get('email'), ENT_QUOTES, 'UTF-8'); ?></a></p>
                                    </div>
                                </li>
                                <li class="wow fadeInUp" data-wow-delay=".8s">
                                    <div class="icon">
                                        <img src="assets/img/home-7/contact-icon-02.svg" alt="img">
                                    </div>
                                    <div class="content">
                                        <h5>Our Location:</h5>
                                        <p><?php echo htmlspecialchars(Personalization::get('address'), ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                </li>
                            </ul>
                            <div class="contact-content-style-7">
                                <form action="contact.php" id="contact-form1" method="POST" class="contact-form-items">
                                    <div class="row g-4">
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name331" placeholder="Your name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="email11" placeholder="Email address">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name22" placeholder="Phone number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt">
                                                <input type="text" name="name" id="name24" placeholder="Company name">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".9s">
                                            <div class="form-clt">
                                                <textarea name="message" id="message1"
                                                    placeholder="Your message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <button type="submit" class="theme-btn-main style-2">
                                                <span class="theme-btn-arrow-left"> <i
                                                        class="fa-solid fa-arrow-up-right"></i> </span>
                                                <span class="theme-btn">MAKE AN APPOINTMENT</span>
                                                <span class="theme-btn-arrow-right"> <i
                                                        class="fa-solid fa-arrow-up-right"></i> </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Faq-section Start -->
        <section class="faq-section section-padding fix bg-color-3">
            <div class="faq-shape">
                <img src="assets/img/home-3/faq-shape.png" alt="img">
            </div>
            <div class="container">
                <div class="row g-4">
                    <div class="col-xxl-5 col-lg-6">
                        <div class="faq-content-style-3">
                            <div class="section-title mb-0">
                                <span class="sub-title color wow fadeInUp">
                                    OUR FAQ
                                </span>
                                <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                                    Answers to Common Renovation Questions
                                </h2>
                            </div>
                            <div class="circle">
                                <div class="circle-image">
                                    <img src="assets/img/home-3/text.png" alt="img">
                                    <i class="fa-solid fa-arrow-up-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-lg-6">
                        <div class="faq-items-style-3">
                            <div class="accordion" id="accordionExample">
                                <!-- Item 2 -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".2s">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How does your renovation process work from start to finish?
                                        </button>
                                    </h2>
                                    <!-- Added role="region" -->
                                    <div id="collapseTwo" class="accordion-collapse collapse" role="region"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                We start with a consultation and site assessment, then provide a clear
                                                scope, timeline, and budget. Once approved, our team handles design,
                                                execution, and quality checks with regular progress updates.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 3 -->
                                <div class="accordion-item wow fadeInUp" data-wow-delay=".4s">
                                    <h2 class="accordion-header" id="headingthree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsethree"
                                            aria-expanded="false" aria-controls="collapsethree">
                                            Can you include energy-efficient upgrades in the project?
                                        </button>
                                    </h2>
                                    <!-- Added role="region" -->
                                    <div id="collapsethree" class="accordion-collapse collapse" role="region"
                                        aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Yes. We can integrate insulation improvements, efficient lighting,
                                                ventilation updates, and smart systems to improve comfort and reduce
                                                long-term operating costs.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 4 -->
                                <div class="accordion-item  wow fadeInUp" data-wow-delay=".6s">
                                    <h2 class="accordion-header" id="headingfour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefour"
                                            aria-expanded="false" aria-controls="collapsefour">
                                            What makes your team different from other contractors?
                                        </button>
                                    </h2>
                                    <!-- Added role="region" -->
                                    <div id="collapsefour" class="accordion-collapse collapse" role="region"
                                        aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                We focus on transparent communication, detailed planning, and
                                                consistent craftsmanship. You get one accountable team and a process
                                                designed to keep quality high and surprises low.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Item 5 -->
                                <div class="accordion-item  wow fadeInUp" data-wow-delay=".8s">
                                    <h2 class="accordion-header" id="headingfive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                            aria-expanded="false" aria-controls="collapsefive">
                                            Do you provide support if I am managing the project remotely?
                                        </button>
                                    </h2>
                                    <!-- Added role="region" -->
                                    <div id="collapsefive" class="accordion-collapse collapse" role="region"
                                        aria-labelledby="headingfive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Absolutely. We offer remote consultations, milestone reports, and photo
                                                or video updates so you can track decisions and progress from anywhere.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item  wow fadeInUp" data-wow-delay=".2s">
                                    <h2 class="accordion-header" id="headingsix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                            aria-expanded="false" aria-controls="collapsesix">
                                            How do you handle timeline and budget control?
                                        </button>
                                    </h2>
                                    <!-- Added role="region" -->
                                    <div id="collapsesix" class="accordion-collapse collapse" role="region"
                                        aria-labelledby="headingsix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Before work begins, we define milestones and cost checkpoints.
                                                Throughout delivery, we review progress against plan and flag any
                                                change requests early so you stay in control.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-0 wow fadeInUp" data-wow-delay=".4s">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Who is this service best suited for?
                                        </button>
                                    </h2>
                                    <!-- Added role="region" -->
                                    <div id="collapseOne" class="accordion-collapse collapse show" role="region"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                Homeowners, property investors, and businesses planning renovations,
                                                expansions, or upgrades benefit most. If you need dependable execution
                                                with clear communication, we are a strong fit.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Section Start -->
        <section id="news" class="news-section-7 section-padding fix">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sub-title wow fadeInUp">
                        Insights
                    </span>
                    <h2 class="tx-title sec_title  tz-itm-title tz-itm-anim">
                        Renovation Tips and Project Insights
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay=".2s">
                        Practical guidance to help you plan smarter, avoid common mistakes, and get better renovation
                        outcomes.
                    </p>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="news-card-item-style-7">
                            <div class="news-image">
                                <img src="assets/img/home-7/news-01.jpg" alt="img" class="hover-img">
                                <img src="assets/img/home-7/news-01.jpg" alt="img" class="hover-img">
                                <div class="user-box">
                                    <div class="user-item">
                                        <div class="user-image">
                                            <img src="assets/img/home-7/user-icon.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <span>Posted by:</span>
                                            <h6><?php echo htmlspecialchars(Personalization::get('business_name'), ENT_QUOTES, 'UTF-8'); ?></h6>
                                        </div>
                                    </div>
                                    <a href="news-details.php" class="arrow-icon"><i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="news-content">
                                <span>Renovation</span>
                                <ul class="news-list">
                                    <li>January 05, 2026</li>
                                    <li class="style-2">3 min read</li>
                                </ul>
                                <h3>
                                    <a href="news-details.php">Backyard Renovation Trends That Add Real Property Value</a>
                                </h3>
                                <p>
                                    Learn which exterior upgrades improve usability and boost curb appeal without overextending your budget.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="news-card-item-style-7">
                            <div class="news-image">
                                <img src="assets/img/home-7/news-02.jpg" alt="img" class="hover-img">
                                <img src="assets/img/home-7/news-02.jpg" alt="img" class="hover-img">
                                <div class="user-box">
                                    <div class="user-item">
                                        <div class="user-image">
                                            <img src="assets/img/home-7/user-icon.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <span>Posted by:</span>
                                            <h6><?php echo htmlspecialchars(Personalization::get('business_name'), ENT_QUOTES, 'UTF-8'); ?></h6>
                                        </div>
                                    </div>
                                    <a href="news-details.php" class="arrow-icon"><i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="news-content">
                                <span>Renovation</span>
                                <ul class="news-list">
                                    <li>January 05, 2026</li>
                                    <li class="style-2">4 min read</li>
                                </ul>
                                <h3>
                                    <a href="news-details.php">Kitchen Renovation Tips to Maximize Storage and Flow</a>
                                </h3>
                                <p>
                                    Use these layout and material decisions to create a kitchen that feels larger and functions better every day.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="news-card-item-style-7">
                            <div class="news-image">
                                <img src="assets/img/home-7/news-03.jpg" alt="img" class="hover-img">
                                <img src="assets/img/home-7/news-03.jpg" alt="img" class="hover-img">
                                <div class="user-box">
                                    <div class="user-item">
                                        <div class="user-image">
                                            <img src="assets/img/home-7/user-icon.svg" alt="img">
                                        </div>
                                        <div class="content">
                                            <span>Posted by:</span>
                                            <h6><?php echo htmlspecialchars(Personalization::get('business_name'), ENT_QUOTES, 'UTF-8'); ?></h6>
                                        </div>
                                    </div>
                                    <a href="news-details.php" class="arrow-icon"><i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="news-content">
                                <span>Renovation</span>
                                <ul class="news-list">
                                    <li>January 05, 2026</li>
                                    <li class="style-2">5 min read</li>
                                </ul>
                                <h3>
                                    <a href="news-details.php">Key Planning Steps Before You Start a Major Renovation</a>
                                </h3>
                                <p>
                                    A simple planning checklist that helps prevent delays, scope creep, and budget overruns.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'layouts/footer-5.php'; ?>

    </div>
</div>

<?php include 'layouts/vendor-script.php' ?>

<script src="assets/js/cynix-url-params.js"></script>
</body>

</html>