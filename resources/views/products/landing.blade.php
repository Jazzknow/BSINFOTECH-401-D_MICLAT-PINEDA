<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="32x32" type="image/png" href="{{ asset('images/product_logo_tab.png') }}">
    <!-- 
    - primary meta tags
  -->
    <title>MP Restaurant - Homepage</title>
    <meta name="title" content="Grilli - Amazing & Delicious Food">
    <meta name="description" content="This is a Restaurant html template made by codewithsadee">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
        rel="stylesheet">

    <!-- 
    - custom css link
  -->

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./images/sliderdish-1.jpg">
    <link rel="preload" as="image" href="./images/hero-slider-2.jpg">
    <link rel="preload" as="image" href="./images/hero-slider-3.jpg">

</head>

<body id="top">

    <!-- 
    - #PRELOADER
  -->

    <div class="preload" data-preaload>
        <div class="circle"></div>
        <p class="text">MP-Restaurant</p>
    </div>





    <!-- 
    - #TOP BAR
  -->

    <div class="topbar">
        <div class="container">

            <address class="topbar-item">
                <div class="icon">
                    <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">
                    Restaurant St, Tanza, Cavite, PH
                </span>
            </address>

            <div class="separator"></div>

            <div class="topbar-item item-2">
                <div class="icon">
                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">Daily : 8.00 am to 10.00 pm</span>
            </div>

            <a href="tel:+11234567890" class="topbar-item link">
                <div class="icon">
                    <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">+1 123 456 7890</span>
            </a>

            <div class="separator"></div>

            <a href="mailto:booking@restaurant.com" class="topbar-item link">
                <div class="icon">
                    <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
                </div>

                <span class="span">booking@restaurant.com</span>
            </a>

            <div class="topbar-item dashboard">
                <a href="{{ route('products.index') }}" class="topbar-item link"><span class=" span">Go to
                        Dashboard</span></a>
            </div>
        </div>
    </div>





    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <img src="{{ asset('images/product_logo.png') }}" style="height: 75px; width: 250px;"
                    alt="Miclat-Pineda Restaurant">
            </a>

            <nav class="navbar" data-navbar>

                <button class="close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                </button>

                <a href="#" class="logo">
                    <img src="{{ asset('images/logo.svg') }}" width="160" height="50" alt="Grilli - Home">
                </a>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="#home" class="navbar-link hover-underline active">
                            <div class="separator"></div>

                            <span class="span">Home</span>
                        </a>
                    </li>

                    <li class="navbar-item">
                        <a href="#about" class="navbar-link hover-underline">
                            <div class="separator"></div>

                            <span class="span">About Us</span>
                        </a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link hover-underline">
                            <div class="separator"></div>

                            <span class="span">Product</span>
                        </a>
                    </li>

                    <li class="navbar-item">
                        <a href="#" class="navbar-link hover-underline">
                            <div class="separator"></div>

                            <span class="span">Contact</span>
                        </a>
                    </li>

                </ul>

                <div class="text-center">
                    <p class="headline-1 navbar-title">Visit Us</p>

                    <address class="body-4">
                        Restaurant St, Delicious City, <br>
                        London 9578, UK
                    </address>

                    <p class="body-4 navbar-text">Open: 9.30 am - 2.30pm</p>

                    <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">booking@grilli.com</a>

                    <div class="separator"></div>

                    <p class="contact-label">Booking Request</p>

                    <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
                        +88-123-123456
                    </a>
                </div>

            </nav>

            <a href="#" class="btn btn-secondary" style="padding: 10px 20px;">
                <span class="text text-1">Find A Table</span>

                <span class="text text-2" aria-hidden="true">Find A Table</span>
            </a>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </button>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>





    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="hero text-center" aria-label="home" id="home">

                <ul class="hero-slider" data-hero-slider>

                    <li class="slider-item active" data-hero-slider-item>

                        <div class="slider-bg">
                            <img src="{{ asset('images/hero-slider-1.jpg') }}" width="1880" height="950" alt=""
                                class="img-cover">
                        </div>

                        <p class="label-2 section-subtitle slider-reveal">Tradational & Hygine</p>

                        <h1 class="display-1 hero-title slider-reveal">
                            For the love of <br>
                            delicious food
                        </h1>

                        <p class="body-2 hero-text slider-reveal">
                            Come with family & feel the joy of mouthwatering food
                        </p>

                        <a href="#" class="btn btn-primary slider-reveal">
                            <span class="text text-1">View Our Menu</span>

                            <span class="text text-2" aria-hidden="true">View Our Menu</span>
                        </a>

                    </li>

                    <li class="slider-item" data-hero-slider-item>

                        <div class="slider-bg">
                            <img src="{{ asset('images/hero-slider-2.jpg') }}" width="1880" height="950" alt=""
                                class="img-cover">
                        </div>

                        <p class="label-2 section-subtitle slider-reveal">delightful experience</p>

                        <h1 class="display-1 hero-title slider-reveal">
                            Flavors Inspired by <br>
                            the Seasons
                        </h1>

                        <p class="body-2 hero-text slider-reveal">
                            Come with family & feel the joy of mouthwatering food
                        </p>

                        <a href="#" class="btn btn-primary slider-reveal">
                            <span class="text text-1">View Our Menu</span>

                            <span class="text text-2" aria-hidden="true">View Our Menu</span>
                        </a>

                    </li>

                    <li class="slider-item" data-hero-slider-item>

                        <div class="slider-bg">
                            <img src="{{ asset('images/hero-slider-3.jpg') }}" width="1880" height="950" alt=""
                                class="img-cover">
                        </div>

                        <p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>

                        <h1 class="display-1 hero-title slider-reveal">
                            Where every flavor <br>
                            tells a story
                        </h1>

                        <p class="body-2 hero-text slider-reveal">
                            Come with family & feel the joy of mouthwatering food
                        </p>

                        <a href="#" class="btn btn-primary slider-reveal">
                            <span class="text text-1">View Our Menu</span>

                            <span class="text text-2" aria-hidden="true">View Our Menu</span>
                        </a>

                    </li>

                </ul>

                <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
                    <ion-icon name="chevron-back"></ion-icon>
                </button>

                <button class="slider-btn next" aria-label="slide to next" data-next-btn>
                    <ion-icon name="chevron-forward"></ion-icon>
                </button>

                <a href="#" class="hero-btn has-after">
                    <img src="{{ asset('images/hero-icon.png') }}" width="48" height="48" alt="booking icon">

                    <span class="label-2 text-center span">Book A Table</span>
                </a>

            </section>


            <!-- 
        - #ABOUT
      -->

            <section class="section about text-center" aria-labelledby="about-label" id="about">
                <div class="container">

                    <div class="about-content">

                        <p class="label-2 section-subtitle" id="about-label">Our Story</p>

                        <h2 class="headline-1 section-title">Every Flavor Tells a Story</h2>

                        <p class="section-text">
                            Lorem Ipsum is simply dummy text of the printingand typesetting industry lorem Ipsum has
                            been the
                            industrys standard dummy text ever since the when an unknown printer took a galley of type
                            and scrambled
                            it to make a type specimen book It has survived not only five centuries, but also the leap
                            into.
                        </p>

                        <div class="contact-label">Book Through Call</div>

                        <a href="tel:+804001234567" class="body-1 contact-number hover-underline">+80 (400) 123 4567</a>

                        <a href="#" class="btn btn-primary">
                            <span class="text text-1">Read More</span>

                            <span class="text text-2" aria-hidden="true">Read More</span>
                        </a>

                    </div>

                    <figure class="about-banner">
                        <img src="{{ asset('images/restaurant.jpg')}}" width="570" height="570" loading="lazy"
                            alt="about banner" class="w-100" data-parallax-item data-parallax-speed="1">

                        <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
                            <img src="{{ asset('images/sliderdish-1.jpg') }}" width="285" height="285" loading="lazy"
                                alt="" class="w-100">
                        </div>

                        <div class="abs-img abs-img-2 has-before">
                            <img src="{{ asset('images/badge-2.png') }}" width="133" height="134" loading="lazy" alt="">
                        </div>

                    </figure>

                    <img src="{{ asset('images/shape-3.png') }}" width="197" height="194" loading="lazy" alt=""
                        class="shape">
                </div>
            </section>









            <!-- 
        - #FEATURES
      -->

            <section class="section features text-center" aria-label="features">
                <div class="container">

                    <p class="section-subtitle label-2">Why Choose Us</p>

                    <h2 class="headline-1 section-title">Our Strength</h2>

                    <ul class="grid-list">

                        <li class="feature-item">
                            <div class="feature-card">

                                <div class="card-icon">
                                    <img src="{{ asset('images/features-icon-1.png') }}" width="100" height="80"
                                        loading="lazy" alt="icon">
                                </div>

                                <h3 class="title-2 card-title">Hygienic Food</h3>

                                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="feature-card">

                                <div class="card-icon">
                                    <img src="{{ asset('images/features-icon-2.png') }}" width="100" height="80"
                                        loading="lazy" alt="icon">
                                </div>

                                <h3 class="title-2 card-title">Fresh Environment</h3>

                                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="feature-card">

                                <div class="card-icon">
                                    <img src="{{ asset('images/features-icon-3.png') }}" width="100" height="80"
                                        loading="lazy" alt="icon">
                                </div>

                                <h3 class="title-2 card-title">Skilled Chefs</h3>

                                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="feature-card">

                                <div class="card-icon">
                                    <img src="{{ asset('images/features-icon-4.png') }}" width="100" height="80"
                                        loading="lazy" alt="icon">
                                </div>

                                <h3 class="title-2 card-title">Event & Party</h3>

                                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

                            </div>
                        </li>

                    </ul>

                    <img src="{{ asset('images/shape-7.png') }}" width="208" height="178" loading="lazy" alt="shape"
                        class="shape shape-1">

                    <img src="{{ asset('images/shape-8.png') }}" width="120" height="115" loading="lazy" alt="shape"
                        class="shape shape-2">

                </div>
            </section>





            <!-- 
        - #EVENT
      -->

            <section class="section event bg-black-10" aria-label="event">
                <div class="container">

                    <p class="section-subtitle label-2 text-center">Foods</p>

                    <h2 class="section-title headline-1 text-center">Product List</h2>

                    <ul class="grid-list">
                        <?php foreach ($product as $products): ?>
                        <li>
                            <div class="event-card has-before hover:shine">
                                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                                    <img src="{{ asset($products->photo) }}" width="350" height="450" loading="lazy"
                                        alt="{{ $products->product_name }}" class="img-cover">

                                    <time class="publish-date label-2"
                                        datetime="2022-09-15">{{ $products->price }}</time>
                                </div>

                                <div class="card-content">
                                    <p class="card-subtitle label-2 text-center">{{ $products->sub_name }}</p>

                                    <h3 class="card-title title-2 text-center">
                                        {{ $products->product_name }}
                                    </h3>

                                    <p class="card-text text-center">
                                        {{ $products->description }}
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="#" class="btn btn-primary">
                        <span class="text text-1">View Our Product</span>

                        <span class="text text-2" aria-hidden="true">View Our Product</span>
                    </a>

                </div>
            </section>

        </article>
    </main>


    <!-- 
        - #RESERVATION
      -->

    <section class="reservation" style="margin-top: 20%;">
        <div class="container">

            <div class="form reservation-form bg-black-10">

                <form action="" class="form-left">

                    <h2 class="headline-1 text-center">Online Reservation</h2>

                    <p class="form-text text-center">
                        Booking request <a href="tel:+88123123456" class="link">+88-123-123456</a>
                        or fill out the order form
                    </p>

                    <div class="input-wrapper">
                        <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field">

                        <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off"
                            class="input-field">
                    </div>

                    <div class="input-wrapper">

                        <div class="icon-wrapper">
                            <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                            <select name="person" class="input-field">
                                <option value="1-person">1 Person</option>
                                <option value="2-person">2 Person</option>
                                <option value="3-person">3 Person</option>
                                <option value="4-person">4 Person</option>
                                <option value="5-person">5 Person</option>
                                <option value="6-person">6 Person</option>
                                <option value="7-person">7 Person</option>
                            </select>

                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="icon-wrapper">
                            <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                            <input type="date" name="reservation-date" class="input-field">

                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                        <div class="icon-wrapper">
                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                            <select name="person" class="input-field">
                                <option value="08:00am">08 : 00 am</option>
                                <option value="09:00am">09 : 00 am</option>
                                <option value="010:00am">10 : 00 am</option>
                                <option value="011:00am">11 : 00 am</option>
                                <option value="012:00am">12 : 00 am</option>
                                <option value="01:00pm">01 : 00 pm</option>
                                <option value="02:00pm">02 : 00 pm</option>
                                <option value="03:00pm">03 : 00 pm</option>
                                <option value="04:00pm">04 : 00 pm</option>
                                <option value="05:00pm">05 : 00 pm</option>
                                <option value="06:00pm">06 : 00 pm</option>
                                <option value="07:00pm">07 : 00 pm</option>
                                <option value="08:00pm">08 : 00 pm</option>
                                <option value="09:00pm">09 : 00 pm</option>
                                <option value="10:00pm">10 : 00 pm</option>
                            </select>

                            <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                        </div>

                    </div>

                    <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

                    <button type="submit" class="btn btn-secondary">
                        <span class="text text-1">Book A Table</span>

                        <span class="text text-2" aria-hidden="true">Book A Table</span>
                    </button>

                </form>

                <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

                    <h2 class="headline-1 text-center">Contact Us</h2>

                    <p class="contact-label">Booking Request</p>

                    <a href="tel:+88123123456" class="body-1 contact-number hover-underline">+88-123-123456</a>

                    <div class="separator"></div>

                    <p class="contact-label">Location</p>

                    <address class="body-4">
                        Restaurant St, Tanza, Cavite, PH
                    </address>

                    <p class="contact-label">Lunch Time</p>

                    <p class="body-4">
                        Monday to Sunday <br>
                        11.00 am - 2.30pm
                    </p>

                    <p class="contact-label">Dinner Time</p>

                    <p class="body-4">
                        Monday to Sunday <br>
                        05.00 pm - 10.00pm
                    </p>

                </div>

            </div>

        </div>
    </section>


    <!-- 
    - #FOOTER
  -->

    <footer class="footer section has-bg-image text-center"
        style="background-image: url('./assets/images/footer-bg.jpg')">
        <div class="container">

            <div class="footer-top grid-list">

                <div class="footer-brand has-before has-after">

                    <a href="#" class="logo" style="margin-left: 150px;">
                        <img src="{{ asset('images/product_logo.png')}}" style="height: 75px; width: 250px;"
                            alt="Miclat-Pineda Restaurant" loading="lazy">
                    </a>

                    <address class="body-4">
                        Restaurant St, Tanza, Cavite, PH
                    </address>

                    <a href="mailto:booking@grilli.com" class="body-4 contact-link">booking@grilli.com</a>

                    <a href="tel:+88123123456" class="body-4 contact-link">Booking Request : +88-123-123456</a>

                    <p class="body-4">
                        Open : 09:00 am - 01:00 pm
                    </p>

                    <div class="wrapper">
                        <div class="separator"></div>
                        <div class="separator"></div>
                        <div class="separator"></div>
                    </div>

                    <p class="title-1">Get News & Offers</p>

                    <p class="label-1">
                        Subscribe us & Get <span class="span">25% Off.</span>
                    </p>

                    <form action="" class="input-wrapper">
                        <div class="icon-wrapper">
                            <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                            <input type="email" name="email_address" placeholder="Your email" autocomplete="off"
                                class="input-field">
                        </div>

                        <button type="submit" class="btn btn-secondary">
                            <span class="text text-1">Subscribe</span>

                            <span class="text text-2" aria-hidden="true">Subscribe</span>
                        </button>
                    </form>

                </div>

                <ul class="footer-list">

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Home</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">About Us</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Product</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Contact</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
                    </li>

                    <li>
                        <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
                    </li>

                </ul>

            </div>

            <div class="footer-bottom">

                <p class="copyright">
                    &copy; 2024 MP-Restaurant. All Rights Reserved
                </p>

            </div>

        </div>
    </footer>





    <!-- 
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script>
        'use strict';



        /**
         * PRELOAD
         * 
         * loading will be end after document is loaded
         */

        const preloader = document.querySelector("[data-preaload]");

        window.addEventListener("load", function () {
            // Add 5 second delay before removing preloader
            setTimeout(() => {
                preloader.classList.add("loaded");
                document.body.classList.add("loaded");
            }, 3000); // 5000 milliseconds = 5 seconds
        });



        /**
         * add event listener on multiple elements
         */

        const addEventOnElements = function (elements, eventType, callback) {
            for (let i = 0, len = elements.length; i < len; i++) {
                elements[i].addEventListener(eventType, callback);
            }
        }



        /**
         * NAVBAR
         */

        const navbar = document.querySelector("[data-navbar]");
        const navTogglers = document.querySelectorAll("[data-nav-toggler]");
        const overlay = document.querySelector("[data-overlay]");

        const toggleNavbar = function () {
            navbar.classList.toggle("active");
            overlay.classList.toggle("active");
            document.body.classList.toggle("nav-active");
        }

        addEventOnElements(navTogglers, "click", toggleNavbar);



        /**
         * HEADER & BACK TOP BTN
         */

        const header = document.querySelector("[data-header]");
        const backTopBtn = document.querySelector("[data-back-top-btn]");

        let lastScrollPos = 0;

        const hideHeader = function () {
            const isScrollBottom = lastScrollPos < window.scrollY;
            if (isScrollBottom) {
                header.classList.add("hide");
            } else {
                header.classList.remove("hide");
            }

            lastScrollPos = window.scrollY;
        }

        window.addEventListener("scroll", function () {
            if (window.scrollY >= 50) {
                header.classList.add("active");
                backTopBtn.classList.add("active");
                hideHeader();
            } else {
                header.classList.remove("active");
                backTopBtn.classList.remove("active");
            }
        });



        /**
         * HERO SLIDER
         */

        const heroSlider = document.querySelector("[data-hero-slider]");
        const heroSliderItems = document.querySelectorAll("[data-hero-slider-item]");
        const heroSliderPrevBtn = document.querySelector("[data-prev-btn]");
        const heroSliderNextBtn = document.querySelector("[data-next-btn]");

        let currentSlidePos = 0;
        let lastActiveSliderItem = heroSliderItems[0];

        const updateSliderPos = function () {
            lastActiveSliderItem.classList.remove("active");
            heroSliderItems[currentSlidePos].classList.add("active");
            lastActiveSliderItem = heroSliderItems[currentSlidePos];
        }

        const slideNext = function () {
            if (currentSlidePos >= heroSliderItems.length - 1) {
                currentSlidePos = 0;
            } else {
                currentSlidePos++;
            }

            updateSliderPos();
        }

        heroSliderNextBtn.addEventListener("click", slideNext);

        const slidePrev = function () {
            if (currentSlidePos <= 0) {
                currentSlidePos = heroSliderItems.length - 1;
            } else {
                currentSlidePos--;
            }

            updateSliderPos();
        }

        heroSliderPrevBtn.addEventListener("click", slidePrev);

        /**
         * auto slide
         */

        let autoSlideInterval;

        const autoSlide = function () {
            autoSlideInterval = setInterval(function () {
                slideNext();
            }, 7000);
        }

        addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseover", function () {
            clearInterval(autoSlideInterval);
        });

        addEventOnElements([heroSliderNextBtn, heroSliderPrevBtn], "mouseout", autoSlide);

        window.addEventListener("load", autoSlide);



        /**
         * PARALLAX EFFECT
         */

        const parallaxItems = document.querySelectorAll("[data-parallax-item]");

        let x, y;

        window.addEventListener("mousemove", function (event) {

            x = (event.clientX / window.innerWidth * 10) - 5;
            y = (event.clientY / window.innerHeight * 10) - 5;

            // reverse the number eg. 20 -> -20, -5 -> 5
            x = x - (x * 2);
            y = y - (y * 2);

            for (let i = 0, len = parallaxItems.length; i < len; i++) {
                x = x * Number(parallaxItems[i].dataset.parallaxSpeed);
                y = y * Number(parallaxItems[i].dataset.parallaxSpeed);
                parallaxItems[i].style.transform = `translate3d(${x}px, ${y}px, 0px)`;
            }

        });
    </script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
<style>
    /*-----------------------------------*\
  #index.css
\*-----------------------------------*/

    /**
 * copyright 2022 codewithsadee
 */

    /*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

    :root {
        /**
     * COLORS
     */

        --gold-crayola: hsl(38, 61%, 73%);
        --quick-silver: hsla(0, 0%, 65%, 1);
        --davys-grey: hsla(30, 3%, 34%, 1);
        --smoky-black-1: hsla(40, 12%, 5%, 1);
        --smoky-black-2: hsla(30, 8%, 5%, 1);
        --smoky-black-3: hsla(0, 3%, 7%, 1);
        --eerie-black-1: hsla(210, 4%, 9%, 1);
        --eerie-black-2: hsla(210, 4%, 11%, 1);
        --eerie-black-3: hsla(180, 2%, 8%, 1);
        --eerie-black-4: hsla(0, 0%, 13%, 1);
        --white: hsla(0, 0%, 100%, 1);
        --white-alpha-20: hsla(0, 0%, 100%, 0.2);
        --white-alpha-10: hsla(0, 0%, 100%, 0.1);
        --black: hsla(0, 0%, 0%, 1);
        --black-alpha-80: hsla(0, 0%, 0%, 0.8);
        --black-alpha-15: hsla(0, 0%, 0%, 0.15);

        /**
     * GRADIENT COLOR
     */

        --loading-text-gradient: linear-gradient(90deg,
                transparent 0% 16.66%,
                var(--smoky-black-3) 33.33% 50%,
                transparent 66.66% 75%);
        --gradient-1: linear-gradient(to top,
                hsla(0, 0%, 0%, 0.9),
                hsla(0, 0%, 0%, 0.7),
                transparent);

        /**
     * TYPOGRAPHY
     */

        /* font-family */
        --fontFamily-forum: "Forum", cursive;
        --fontFamily-dm_sans: "DM Sans", sans-serif;

        /* font-size */
        --fontSize-display-1: calc(1.3rem + 6.7vw);
        --fontSize-headline-1: calc(2rem + 2.5vw);
        --fontSize-headline-2: calc(1.3rem + 2.4vw);
        --fontSize-title-1: calc(1.6rem + 1.2vw);
        --fontSize-title-2: 2.2rem;
        --fontSize-title-3: 2.1rem;
        --fontSize-title-4: calc(1.6rem + 1.2vw);
        --fontSize-body-1: 2.4rem;
        --fontSize-body-2: 1.6rem;
        --fontSize-body-3: 1.8rem;
        --fontSize-body-4: 1.6rem;
        --fontSize-label-1: 1.4rem;
        --fontSize-label-2: 1.2rem;

        /* font-weight */
        --weight-regular: 400;
        --weight-bold: 700;

        /* line-height */
        --lineHeight-1: 1em;
        --lineHeight-2: 1.2em;
        --lineHeight-3: 1.5em;
        --lineHeight-4: 1.6em;
        --lineHeight-5: 1.85em;
        --lineHeight-6: 1.4em;

        /* letter-spacing */
        --letterSpacing-1: 0.15em;
        --letterSpacing-2: 0.4em;
        --letterSpacing-3: 0.2em;
        --letterSpacing-4: 0.3em;
        --letterSpacing-5: 3px;

        /**
     * SPACING
     */

        --section-space: 70px;

        /**
     * SHADOW
     */

        --shadow-1: 0px 0px 25px 0px hsla(0, 0%, 0%, 0.25);

        /**
     * BORDER RADIUS
     */

        --radius-24: 24px;
        --radius-circle: 50%;

        /**
     * TRANSITION
     */

        --transition-1: 250ms ease;
        --transition-2: 500ms ease;
        --transition-3: 1000ms ease;
    }

    /*-----------------------------------*\
    #RESET
  \*-----------------------------------*/

    *,
    *::before,
    *::after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    li {
        list-style: none;
    }

    a,
    img,
    data,
    span,
    input,
    button,
    select,
    ion-icon,
    textarea {
        display: block;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    img {
        height: auto;
    }

    input,
    button,
    select,
    textarea {
        background: none;
        border: none;
        font: inherit;
    }

    input,
    select,
    textarea {
        width: 100%;
        outline: none;
    }

    button {
        cursor: pointer;
    }

    address {
        font-style: normal;
    }

    html {
        font-size: 10px;
        scroll-behavior: smooth;
    }

    body {
        background-color: var(--eerie-black-1);
        color: var(--white);
        font-family: var(--fontFamily-dm_sans);
        font-size: var(--fontSize-body-4);
        font-weight: var(--weight-regular);
        line-height: var(--lineHeight-5);
        overflow: hidden;
        height: 300vh;
    }

    body.loaded {
        overflow: overlay;
    }

    body.nav-active {
        overflow: hidden;
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        background-color: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background-color: var(--gold-crayola);
    }

    /*-----------------------------------*\
    #TYPOGRAPHY
  \*-----------------------------------*/

    .display-1,
    .headline-1,
    .headline-2,
    .title-1,
    .title-2,
    .title-3,
    .title-4 {
        color: var(--white);
        font-family: var(--fontFamily-forum);
        font-weight: var(--weight-regular);
        line-height: var(--lineHeight-2);
    }

    .display-1 {
        font-size: var(--fontSize-display-1);
        line-height: var(--lineHeight-1);
    }

    .headline-1 {
        font-size: var(--fontSize-headline-1);
    }

    .headline-2 {
        font-size: var(--fontSize-headline-2);
        line-height: var(--lineHeight-6);
    }

    .title-1 {
        font-size: var(--fontSize-title-1);
    }

    .title-2 {
        font-size: var(--fontSize-title-2);
    }

    .title-3 {
        font-size: var(--fontSize-title-3);
    }

    .title-4 {
        font-size: var(--fontSize-title-4);
    }

    .body-1 {
        font-size: var(--fontSize-body-1);
        line-height: var(--lineHeight-6);
    }

    .body-2 {
        font-size: var(--fontSize-body-2);
        line-height: var(--lineHeight-4);
    }

    .body-3 {
        font-size: var(--fontSize-body-3);
    }

    .body-4 {
        font-size: var(--fontSize-body-4);
    }

    .label-1 {
        font-size: var(--fontSize-label-1);
    }

    .label-2 {
        font-size: var(--fontSize-label-2);
    }

    /*-----------------------------------*\
    #REUSED STYLE
  \*-----------------------------------*/

    .container {
        padding-inline: 16px;
    }

    .separator {
        width: 8px;
        height: 8px;
        border: 1px solid var(--gold-crayola);
        transform: rotate(45deg);
    }

    .contact-label {
        font-weight: var(--weight-bold);
    }

    .contact-number {
        color: var(--gold-crayola);
        max-width: max-content;
        margin-inline: auto;
    }

    .hover-underline {
        position: relative;
        max-width: max-content;
    }

    .hover-underline::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 5px;
        border-block: 1px solid var(--gold-crayola);
        transform: scaleX(0.2);
        opacity: 0;
        transition: var(--transition-2);
    }

    .hover-underline:is(:hover, :focus-visible)::after {
        transform: scaleX(1);
        opacity: 1;
    }

    .contact-number::after {
        bottom: -5px;
    }

    .text-center {
        text-align: center;
    }

    .img-cover {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .section-subtitle {
        position: relative;
        color: var(--gold-crayola);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-2);
        margin-block-end: 12px;
    }

    .section-subtitle::after {
        content: url("../images/separator.svg");
        display: block;
        width: 100px;
        margin-inline: auto;
        margin-block-start: 5px;
    }

    .btn {
        position: relative;
        color: var(--gold-crayola);
        font-size: var(--fontSize-label-2);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-5);
        max-width: max-content;
        border: 2px solid var(--gold-crayola);
        padding: 12px 45px;
        overflow: hidden;
        z-index: 1;
    }

    .btn::before {
        content: "";
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%);
        width: 200%;
        height: 200%;
        border-radius: var(--radius-circle);
        background-color: var(--gold-crayola);
        transition: var(--transition-2);
        z-index: -1;
    }

    .btn .text {
        transition: var(--transition-1);
    }

    .btn .text-2 {
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        min-width: max-content;
        color: var(--smoky-black-1);
    }

    .btn:is(:hover, :focus-visible)::before {
        bottom: -50%;
    }

    .btn:is(:hover, :focus-visible) .text-1 {
        transform: translateY(-40px);
    }

    .btn:is(:hover, :focus-visible) .text-2 {
        top: 50%;
        transform: translate(-50%, -50%);
    }

    .btn-secondary {
        background-color: var(--gold-crayola);
        color: var(--black);
    }

    .btn-secondary::before {
        background-color: var(--smoky-black-1);
    }

    .btn-secondary .text-2 {
        color: var(--white);
    }

    .has-before,
    .has-after {
        position: relative;
        z-index: 1;
    }

    .has-before::before,
    .has-after::after {
        content: "";
        position: absolute;
    }

    .section {
        position: relative;
        padding-block: var(--section-space);
        overflow: hidden;
        z-index: 1;
    }

    .bg-black-10 {
        background-color: var(--smoky-black-2);
    }

    .grid-list {
        display: grid;
        gap: 40px;
    }

    .hover\:shine {
        position: relative;
    }

    .hover\:shine::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 100%;
        background-image: linear-gradient(to right, transparent 0%, #fff6 100%);
        transform: skewX(-0.08turn) translateX(-180%);
    }

    .hover\:shine:is(:hover, :focus-within)::after {
        transform: skewX(-0.08turn) translateX(275%);
        transition: var(--transition-3);
    }

    .img-holder {
        aspect-ratio: var(--width) / var(--height);
        overflow: hidden;
        background-color: var(--eerie-black-4);
    }

    .btn-text {
        color: var(--gold-crayola);
        padding-block-end: 4px;
        margin-inline: auto;
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-3);
        font-weight: var(--weight-bold);
        transition: var(--transition-1);
    }

    .btn-text:is(:hover, :focus-visible) {
        color: var(--white);
    }

    .shape {
        display: none;
        position: absolute;
        max-width: max-content;
        z-index: -1;
    }

    .w-100 {
        width: 100%;
    }

    .move-anim {
        animation: move 5s linear infinite;
    }

    @keyframes move {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(30px);
        }
    }

    .has-bg-image {
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .input-field {
        background-color: var(--eerie-black-2);
        color: var(--white);
        height: 56px;
        padding: 10px 20px;
        border: 1px solid var(--white-alpha-10);
        margin-block-end: 20px;
        outline: none;
        transition: border-color var(--transition-2);
    }

    .input-field::placeholder {
        color: inherit;
    }

    .input-field:focus {
        border-color: var(--gold-crayola);
    }

    .icon-wrapper {
        position: relative;
        margin-block-end: 20px;
    }

    .icon-wrapper .input-field {
        margin-block-end: 0;
        padding-inline-start: 40px;
        appearance: none;
        cursor: pointer;
    }

    .icon-wrapper ion-icon {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.4rem;
        --ionicon-stroke-width: 50px;
        pointer-events: none;
    }

    .icon-wrapper ion-icon:first-child {
        left: 15px;
    }

    .icon-wrapper ion-icon:last-child {
        right: 10px;
    }

    /*-----------------------------------*\
    #PRELOAD
  \*-----------------------------------*/

    .preload {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: var(--gold-crayola);
        z-index: 10;
        display: grid;
        place-content: center;
        justify-items: center;
        transition: var(--transition-2);
    }

    .preload>* {
        transition: var(--transition-1);
    }

    .preload.loaded>* {
        opacity: 0;
    }

    .preload.loaded {
        transition-delay: 250ms;
        transform: translateY(100%);
    }

    .circle {
        width: 112px;
        height: 112px;
        border-radius: var(--radius-circle);
        border: 3px solid var(--white);
        border-block-start-color: var(--smoky-black-3);
        margin-block-end: 45px;
        animation: rotate360 1s linear infinite;
    }

    @keyframes rotate360 {
        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(1turn);
        }
    }

    .preload .text {
        background-image: var(--loading-text-gradient);
        background-size: 500%;
        font-size: calc(2rem + 3vw);
        font-weight: var(--weight-bold);
        line-height: 1em;
        text-transform: uppercase;
        letter-spacing: 16px;
        padding-inline-start: 16px;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-stroke: 0.5px var(--eerie-black-3);
        animation: loadingText linear 2s infinite;
    }

    @keyframes loadingText {
        0% {
            background-position: 100%;
        }

        100% {
            background-position: 0%;
        }
    }

    /*-----------------------------------*\
    #TOPBAR
  \*-----------------------------------*/

    .topbar {
        display: none;
    }

    /*-----------------------------------*\
    #HEADER
  \*-----------------------------------*/

    .header .btn {
        display: none;
    }

    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: transparent;
        padding-block: 20px;
        z-index: 4;
        border-block-end: 1px solid transparent;
        transition: var(--transition-1);
    }

    .header.active {
        padding-block: 20px;
        background-color: var(--eerie-black-4);
        border-color: var(--black-alpha-15);
    }

    .header.hide {
        transform: translateY(-100%);
        transition-delay: 250ms;
    }

    .header .container {
        padding-inline: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 8px;
    }

    .nav-open-btn {
        padding: 12px;
        padding-inline-end: 0;
    }

    .nav-open-btn .line {
        width: 30px;
        height: 2px;
        background-color: var(--white);
        margin-block: 4px;
        transform-origin: left;
        animation: menuBtn 400ms ease-in-out alternate infinite;
    }

    @keyframes menuBtn {
        0% {
            transform: scaleX(1);
        }

        100% {
            transform: scaleX(0.5);
        }
    }

    .nav-open-btn .line-2 {
        animation-delay: 150ms;
    }

    .nav-open-btn .line-3 {
        animation-delay: 300ms;
    }

    .navbar {
        position: fixed;
        background-color: var(--smoky-black-1);
        top: 0;
        left: -360px;
        bottom: 0;
        max-width: 360px;
        width: 100%;
        padding-inline: 30px;
        padding-block-end: 50px;
        overflow-y: auto;
        visibility: hidden;
        z-index: 2;
        transition: var(--transition-2);
    }

    .navbar.active {
        visibility: visible;
        transform: translateX(360px);
    }

    .navbar .close-btn {
        color: var(--white);
        border: 1px solid currentColor;
        padding: 4px;
        border-radius: var(--radius-circle);
        margin-inline-start: auto;
        margin-block: 30px 20px;
    }

    .navbar .close-btn ion-icon {
        --ionicon-stroke-width: 40px;
    }

    .navbar .close-btn:is(:hover, :focus-visible) {
        color: var(--gold-crayola);
    }

    .navbar .logo {
        max-width: max-content;
        margin-inline: auto;
        margin-block-end: 60px;
    }

    .navbar-list {
        border-block-end: 1px solid var(--white-alpha-20);
        margin-block-end: 100px;
    }

    .navbar-item {
        border-block-start: 1px solid var(--white-alpha-20);
    }

    .navbar-link {
        position: relative;
        font-size: var(--fontSize-label-2);
        text-transform: uppercase;
        padding-block: 10px;
        max-width: unset;
    }

    .navbar-link::after {
        display: none;
    }

    .navbar-link .span {
        transition: var(--transition-1);
    }

    .navbar-link:is(:hover, :focus-visible, .active) .span {
        color: var(--gold-crayola);
        transform: translateX(20px);
    }

    .navbar-link .separator {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%) rotate(45deg);
        opacity: 0;
        transition: var(--transition-1);
    }

    .navbar-link:is(:hover, :focus-visible, .active) .separator {
        opacity: 1;
    }

    .navbar-title {
        margin-block-end: 15px;
    }

    .navbar-text {
        margin-block: 10px;
    }

    .navbar .body-4 {
        color: var(--quick-silver);
    }

    .sidebar-link {
        transition: var(--transition-1);
    }

    .sidebar-link:is(:hover, :focus-visible) {
        color: var(--gold-crayola);
    }

    .navbar .text-center .separator {
        margin-block: 30px;
        margin-inline: auto;
    }

    .navbar .contact-label {
        margin-block-end: 10px;
    }

    .navbar::-webkit-scrollbar-thumb {
        background-color: var(--white-alpha-10);
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background-color: var(--black-alpha-80);
        opacity: 0;
        pointer-events: none;
        transition: var(--transition-2);
        z-index: 1;
    }

    .overlay.active {
        opacity: 1;
        pointer-events: all;
    }

    /*-----------------------------------*\
    #HERO
  \*-----------------------------------*/

    .hero .slider-btn {
        display: none;
    }

    .hero {
        position: relative;
        padding-block: 120px;
        min-height: 100vh;
        overflow: hidden;
        z-index: 1;
    }

    .hero .slider-item {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        display: grid;
        place-content: center;
        padding-block-start: 100px;
        opacity: 0;
        visibility: hidden;
        transition: var(--transition-3);
        z-index: 1;
    }

    .hero .slider-item.active {
        opacity: 1;
        visibility: visible;
    }

    .hero .slider-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transform: scale(1.15);
        pointer-events: none;
        user-select: none;
        z-index: -1;
    }

    .hero .slider-item.active .slider-bg {
        animation: smoothScale 7s linear forwards;
    }

    @keyframes smoothScale {
        0% {
            transform: scale(1);
        }

        100% {
            transform: scale(1.15);
        }
    }

    .hero .section-subtitle::after {
        margin-block: 14px 20px;
    }

    .hero-text {
        margin-block: 10px 40px;
    }

    .hero .btn {
        margin-inline: auto;
    }

    .hero-btn {
        position: absolute;
        bottom: 15px;
        right: 15px;
        z-index: 2;
        background-color: var(--gold-crayola);
        width: 110px;
        height: 110px;
        padding: 12px;
        transform: scale(0.6);
    }

    .hero-btn img {
        margin-inline: auto;
        margin-block-end: 6px;
    }

    .hero-btn .span {
        color: var(--black);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-1);
        line-height: var(--lineHeight-3);
    }

    .hero-btn::after {
        inset: 0;
        border: 1px solid var(--gold-crayola);
        animation: rotate360 15s linear infinite;
    }

    .slider-reveal {
        transform: translateY(30px);
        opacity: 0;
    }

    .hero .slider-item.active .slider-reveal {
        animation: sliderReveal 1s ease forwards;
    }

    @keyframes sliderReveal {
        0% {
            transform: translateY(30px);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .hero .slider-item.active .section-subtitle {
        animation-delay: 500ms;
    }

    .hero .slider-item.active .hero-title {
        animation-delay: 1000ms;
    }

    .hero .slider-item.active .hero-text {
        animation-delay: 1.5s;
    }

    .hero .slider-item.active .btn {
        animation-delay: 2s;
    }

    /*-----------------------------------*\
    #SERVICE
  \*-----------------------------------*/

    .service .section-title {
        margin-block-end: 16px;
    }

    .service .section-text {
        margin-block-end: 40px;
    }

    .service-card {
        overflow: hidden;
    }

    .service-card .has-before {
        padding-block: 30px;
        margin-block-end: 26px;
        z-index: 1;
    }

    .service-card .has-before::before {
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 140px;
        height: 100%;
        background-image: url("../images/img-pattern.svg");
        background-position: center;
        background-size: cover;
        background-repeat: repeat;
        transition: var(--transition-2);
        transition-delay: 0;
        z-index: -1;
        will-change: transform;
    }

    .service-card:is(:hover, :focus-within) .has-before::before {
        transform: rotateY(0.5turn) translateX(50%);
        transition-delay: 300ms;
    }

    .service-card .card-banner {
        transition: var(--transition-2);
    }

    .service-card:is(:hover, :focus-within) .card-banner {
        transform: scale(1.05);
    }

    .service .card-title {
        margin-block-end: 12px;
    }

    /*-----------------------------------*\
    #ABOUT
  \*-----------------------------------*/

    .about .section-text {
        margin-block: 15px 30px;
    }

    .about .btn {
        margin-inline: auto;
        margin-block-start: 26px;
    }

    .about .container {
        display: grid;
        gap: 120px;
    }

    .about-banner {
        position: relative;
        margin-block-end: 120px;
    }

    .about-banner>.w-100 {
        padding-inline-start: 50px;
    }

    .about .abs-img {
        position: absolute;
    }

    .about .abs-img::before {
        z-index: -1;
    }

    .about .abs-img-1 {
        bottom: -120px;
        left: 0;
        width: 150px;
        padding-block: 50px;
    }

    .about .abs-img-2 {
        top: -65px;
        right: 0;
        overflow: hidden;
    }

    .about .abs-img-1::before {
        top: 0;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 140px;
        background-image: url("../images/img-pattern.svg");
        background-repeat: repeat;
    }

    .about .abs-img-2::before {
        inset: 0;
        background-image: url("../images/badge-2-bg.png");
        background-repeat: no-repeat;
        background-size: contain;
        animation: rotate360 15s linear infinite;
    }

    /*-----------------------------------*\
    #SPECIAL DISH
  \*-----------------------------------*/

    .special-dish-content {
        padding-block: 70px;
    }

    .special-dish .abs-img {
        margin-inline: auto;
        margin-block-end: 12px;
    }

    .special-dish .section-text {
        margin-block: 16px 40px;
    }

    .special-dish-content .wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin-block-end: 40px;
    }

    .special-dish-content .del {
        text-decoration: none;
        color: var(--davys-grey);
    }

    .special-dish-content .span {
        color: var(--gold-crayola);
    }

    .special-dish .btn {
        margin-inline: auto;
    }

    /*-----------------------------------*\
    #MENU
  \*-----------------------------------*/

    .menu .section-title {
        margin-block-end: 40px;
    }

    .menu .grid-list {
        margin-block-end: 50px;
    }

    .menu-card {
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }

    .hover\:card .card-banner {
        background-color: var(--gold-crayola);
    }

    .hover\:card .card-banner .img-cover {
        transition: var(--transition-2);
    }

    .hover\:card:is(:hover, :focus-within) .card-banner .img-cover {
        opacity: 0.7;
        transform: scale(1.05);
    }

    .menu-card .card-banner {
        flex-shrink: 0;
        border-radius: var(--radius-24);
    }

    .menu-card .card-title {
        transition: var(--transition-1);
    }

    .menu-card .card-title:is(:hover, :focus-visible) {
        color: var(--gold-crayola);
    }

    .menu-card .badge {
        background-color: var(--gold-crayola);
        color: var(--eerie-black-1);
        font-family: var(--fontFamily-forum);
        max-width: max-content;
        line-height: var(--lineHeight-6);
        text-transform: uppercase;
        padding-inline: 10px;
        margin-block-start: 10px;
    }

    .menu-card .span {
        color: var(--gold-crayola);
        margin-block: 10px;
    }

    .menu-card .card-text {
        color: var(--quick-silver);
        line-height: var(--lineHeight-4);
    }

    .menu-text .span {
        display: inline-block;
        color: var(--gold-crayola);
    }

    .menu .btn {
        margin-inline: auto;
        margin-block-start: 26px;
    }

    .menu .shape {
        display: block;
        width: 70%;
    }

    .menu .shape-2 {
        top: 0;
        left: 0;
    }

    .menu .shape-3 {
        bottom: 0;
        right: 0;
    }

    /*-----------------------------------*\
    #TESTIMONIALS
  \*-----------------------------------*/

    .testi {
        padding-block-end: 340px;
        position: static;
    }

    .testi .quote {
        font-size: 7rem;
        font-family: var(--fontFamily-forum);
        line-height: 0.7em;
    }

    .testi .wrapper {
        display: flex;
        justify-content: center;
        gap: 2px;
        margin-block: 40px 50px;
    }

    .testi .separator {
        animation: rotate360 15s linear infinite;
    }

    .profile .img {
        margin-inline: auto;
        border-radius: var(--radius-circle);
        margin-block-end: 15px;
    }

    .testi .profile-name {
        color: var(--gold-crayola);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-3);
    }

    /*-----------------------------------*\
    #RESERVATION
  \*-----------------------------------*/

    .reservation-form {
        margin-block-start: -270px;
    }

    .form-text {
        margin-block-end: 40px;
    }

    .form-text .link {
        display: inline;
        color: var(--gold-crayola);
    }

    .form-right .headline-1 {
        margin-block-end: 40px;
    }

    .form-right .contact-label {
        margin-block-end: 5px;
    }

    .form-right .separator {
        margin: 20px auto;
    }

    .form-right .body-4 {
        color: var(--quick-silver);
        line-height: var(--lineHeight-3);
    }

    .form-right .body-4:not(:last-child) {
        margin-block-end: 25px;
    }

    .form-left,
    .form-right {
        padding: 40px 20px 30px;
    }

    .input-field[type="date"] {
        text-transform: uppercase;
        padding-inline-end: 10px;
    }

    .input-field[type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
    }

    textarea.input-field {
        resize: none;
        height: 140px;
        padding-block: 20px;
        line-height: var(--lineHeight-1);
    }

    .form-left .btn {
        max-width: 100%;
        width: 100%;
    }

    .form-right {
        background-repeat: repeat;
        background-position: top left;
    }

    /*-----------------------------------*\
    #FEATURES
  \*-----------------------------------*/

    .features .section-title {
        margin-block-end: 40px;
    }

    .feature-card {
        padding: 30px 20px 40px;
    }

    .feature-item:nth-child(2n + 1) .feature-card {
        background-color: var(--eerie-black-3);
    }

    .feature-item:nth-child(2n) .feature-card {
        background-color: var(--smoky-black-3);
    }

    .feature-card .card-icon {
        max-width: max-content;
        margin-inline: auto;
        transition: var(--transition-2);
    }

    .feature-card:hover .card-icon {
        transform: scale(-1) rotate(180deg);
    }

    .feature-card .card-title {
        margin-block: 20px;
    }

    .feature-card .card-text {
        color: var(--quick-silver);
        line-height: var(--lineHeight-6);
    }

    /*-----------------------------------*\
    #EVENT
  \*-----------------------------------*/

    .event .section-title {
        margin-block-end: 40px;
    }

    .event-card {
        position: relative;
        overflow: hidden;
    }

    .event-card .card-content {
        background-image: var(--gradient-1);
        position: absolute;
        bottom: 0;
        width: 100%;
        padding: 35px 35px 25px;
    }

    .event-card .publish-date {
        position: absolute;
        top: 30px;
        left: 25px;
        padding: 5px 10px;
        color: var(--gold-crayola);
        background-color: var(--black);
        font-weight: var(--weight-bold);
        letter-spacing: var(--letterSpacing-1);
        line-height: 14px;
    }

    .event-card .card-subtitle {
        color: var(--gold-crayola);
        text-transform: uppercase;
        font-weight: var(--weight-bold);
        letter-spacing: var(--letterSpacing-2);
        margin-block-end: 5px;
    }

    .event-card .card-banner .img-cover {
        transition: var(--transition-2);
    }

    .event-card:is(:hover, :focus-within) .img-cover {
        transform: scale(1.05);
    }

    .event .btn {
        margin-inline: auto;
        margin-block-start: 40px;
    }

    /*-----------------------------------*\
    #FOOTER
  \*-----------------------------------*/

    .footer-top {
        margin-block-end: 70px;
    }

    .footer-brand {
        position: relative;
        padding: 50px 40px;
        background: var(--smoky-black-1) url("../images/footer-form-bg.png");
        background-position: center top;
        background-repeat: repeat;
    }

    .footer-brand::before,
    .footer-brand::after {
        top: 0;
        width: 15px;
        height: 100%;
        background-image: url("../images/footer-form-pattern.svg");
    }

    .footer-brand::before {
        left: 0;
    }

    .footer-brand::after {
        right: 0;
    }

    .footer-brand .logo {
        max-width: max-content;
        margin-inline: auto;
        margin-block-end: 40px;
    }

    .footer-brand :is(.body-4, .label-1) {
        color: var(--quick-silver);
        line-height: var(--lineHeight-3);
    }

    .footer-brand .contact-link {
        margin-block: 6px;
        transition: var(--transition-1);
    }

    .footer-brand .contact-link:is(:hover, :focus-visible) {
        color: var(--gold-crayola);
    }

    .footer-brand .wrapper {
        display: flex;
        justify-content: center;
        gap: 2px;
        margin-block: 40px 25px;
    }

    .footer-brand .separator {
        animation: rotate360 15s linear infinite;
    }

    .footer-brand .label-1 {
        margin-block-end: 30px;
    }

    .footer-brand .label-1 .span {
        display: inline;
        color: var(--white);
    }

    .footer-brand .icon-wrapper .input-field {
        cursor: text;
    }

    .footer-brand .btn {
        min-width: 100%;
    }

    .footer-list {
        display: grid;
        gap: 20px;
    }

    .footer-link {
        color: var(--quick-silver);
        font-weight: var(--weight-bold);
        text-transform: uppercase;
        letter-spacing: var(--letterSpacing-4);
        margin-inline: auto;
        transition: var(--transition-1);
    }

    .footer-link:is(:hover, :focus-visible) {
        color: var(--gold-crayola);
    }

    .copyright {
        color: var(--quick-silver);
        line-height: var(--lineHeight-3);
    }

    .copyright .link {
        display: inline;
        color: var(--gold-crayola);
        text-decoration: underline;
    }

    /*-----------------------------------*\
    #BACK TO TOP
  \*-----------------------------------*/

    .back-top-btn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: var(--gold-crayola);
        color: var(--smoky-black-1);
        font-size: 22px;
        width: 50px;
        height: 50px;
        border-radius: var(--radius-circle);
        display: grid;
        place-items: center;
        box-shadow: var(--shadow-1);
        transition: var(--transition-1);
        opacity: 0;
        visibility: hidden;
        z-index: 4;
    }

    .back-top-btn:is(:hover, :focus-visible) {
        background-color: var(--white);
        color: var(--gold-crayola);
    }

    .back-top-btn.active {
        opacity: 1;
        visibility: visible;
    }

    /*-----------------------------------*\
    #MEDIA QUERIES
  \*-----------------------------------*/

    /**
   * responsive for larger than 575px screen
   */

    @media (min-width: 575px) {
        /**
     * CUSTOM PROPERTY
     */

        :root {
            /**
       * typography
       */

            --fontSize-body-2: 2rem;
        }

        /**
     * REUSED STYLE
     */

        :is(.service, .about) .section-text {
            max-width: 420px;
            margin-inline: auto;
        }

        .contact-number {
            --fontSize-body-1: 3rem;
        }

        /**
     * TOPBAR
     */

        .topbar {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding-block: 10px;
            border-block-end: 1px solid var(--white-alpha-20);
            z-index: 4;
            transition: var(--transition-1);
        }

        .topbar:has(~ .header.active) {
            transform: translateY(-100%);
        }

        .topbar-item:not(.link),
        .topbar .separator {
            display: none;
        }

        .topbar .container,
        .topbar-item {
            display: flex;
            align-items: center;
        }

        .topbar .container {
            justify-content: center;
            gap: 30px;
        }

        .topbar-item {
            gap: 6px;
        }

        .topbar-item ion-icon {
            --ionicon-stroke-width: 60px;
        }

        .topbar-item .span {
            font-size: var(--fontSize-label-1);
        }

        .topbar .link {
            transition: var(--transition-1);
        }

        .topbar .link:is(:hover, :focus-visible) {
            color: var(--gold-crayola);
        }

        /**
     * HEADER
     */

        .header {
            top: 51px;
        }

        .header.active {
            top: 0;
        }

        .header .btn {
            display: block;
            margin-inline-start: auto;
        }

        /**
     * HERO
     */

        .hero-btn {
            transform: scale(0.7);
        }

        /**
     * SERVICE
     */

        .service .container {
            max-width: 420px;
            margin-inline: auto;
        }

        /**
     * ABOUT
     */

        .about .container {
            gap: 80px;
        }

        .about-banner>.w-100 {
            padding-inline-start: 90px;
        }

        .about .abs-img-1 {
            width: 285px;
        }

        .about .contact-number {
            --fontSize-body-1: 2.4rem;
        }

        /**
     * MENU
     */

        .menu-card .title-wrapper {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            gap: 15px;
        }

        .menu-card .badge {
            margin-block-start: 0;
        }

        .menu-card .span {
            flex-grow: 1;
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
        }

        .menu-card .span::before {
            content: "";
            height: 6px;
            flex-grow: 1;
            border-block: 1px solid var(--white-alpha-20);
        }

        /**
     * EVENT
     */

        .event .container {
            max-width: 420px;
            margin-inline: auto;
        }

        /**
     * FOOTER
     */

        .footer-brand>* {
            max-width: 460px;
            margin-inline: auto;
        }

        .footer .input-wrapper {
            position: relative;
        }

        .footer .input-field {
            margin-block-end: 0;
            padding-inline-end: 205px;
        }

        .footer-brand .btn {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            min-width: max-content;
        }
    }

    /**
   * responsive for larger than 768px screen
   */

    @media (min-width: 768px) {
        /**
     * REUSED STYLE
     */

        .grid-list {
            grid-template-columns: 1fr 1fr;
        }

        :is(.service, .event) .container {
            max-width: 820px;
        }

        :is(.service, .event) .grid-list li:last-child {
            grid-column: 1 / 3;
            width: calc(50% - 20px);
            margin-inline: auto;
        }

        /**
     * HEADER
     */

        .navbar-list {
            margin-inline: 30px;
        }

        /**
     * HERO
     */

        .hero .slider-btn {
            display: grid;
            position: absolute;
            z-index: 1;
            color: var(--gold-crayola);
            font-size: 2.4rem;
            border: 1px solid var(--gold-crayola);
            width: 45px;
            height: 45px;
            place-items: center;
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
            transition: var(--transition-1);
        }

        .hero .slider-btn ion-icon {
            transform: rotate(-45deg);
        }

        .hero .slider-btn.prev {
            left: 30px;
        }

        .hero .slider-btn.next {
            right: 30px;
        }

        .hero .slider-btn:is(:hover, :focus-visible) {
            background-color: var(--gold-crayola);
            color: var(--black);
        }

        /**
     * RESERVATION
     */

        .reservation .input-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 20px;
        }

        .reservation .input-wrapper:nth-child(4) {
            grid-template-columns: repeat(3, 1fr);
        }

        /**
     * FOOTER
     */

        .footer-brand {
            grid-column: 1 / 3;
        }
    }

    /**
   * responsive for larger than 992px screen
   */

    @media (min-width: 992px) {
        /**
     * CUSTOM PROPERTY
     */

        :root {
            /**
       * spacing
       */

            --section-space: 100px;
        }

        /**
     * REUSED STYLE
     */

        :is(.service, .event) .container {
            max-width: unset;
        }

        :is(.service, .event) .grid-list {
            grid-template-columns: repeat(3, 1fr);
        }

        :is(.service, .event) .grid-list li:last-child {
            grid-column: auto;
            width: 100%;
        }

        /**
     * TOPBAR
     */

        .topbar-item:not(.link) {
            display: flex;
        }

        .topbar .item-2 {
            margin-inline-end: auto;
        }

        /**
     * SERVICE
     */

        .service .shape {
            display: block;
        }

        .service .shape-1 {
            bottom: 0;
            left: 0;
        }

        .service .shape-2 {
            top: 0;
            right: 0;
        }

        /**
     * ABOUT
     */

        .about .container {
            grid-template-columns: 0.7fr 1fr;
            gap: 30px;
        }

        /**
     * SPECIAL DISH
     */

        .special-dish {
            display: grid;
            grid-template-columns: 1fr 1fr;
            text-align: left;
        }

        .special-dish-content {
            padding-inline: 50px 25px;
        }

        .special-dish-content .container {
            position: relative;
        }

        .special-dish .section-subtitle::after,
        .special-dish .btn {
            margin-inline: 0;
        }

        .special-dish-content .wrapper {
            justify-content: flex-start;
        }

        .special-dish .abs-img {
            position: absolute;
            top: 10px;
            left: -40px;
            animation: move 5s linear infinite;
        }

        /**
     * MENU
     */

        .menu .grid-list {
            position: relative;
            column-gap: 90px;
        }

        .menu .grid-list::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            height: 100%;
            border-inline-start: 1px solid var(--white-alpha-20);
        }

        /**
     * TESTIMONIALS
     */

        .testi-text {
            max-width: 910px;
            margin-inline: auto;
        }

        /**
     * RESERVATION
     */

        .reservation-form {
            display: grid;
            grid-template-columns: 1fr 0.5fr;
        }

        /**
     * FOOTER
     */

        .footer .grid-list {
            grid-template-columns: 0.45fr 1fr 0.45fr;
            align-items: center;
        }

        .footer-brand {
            grid-column: auto;
            order: 1;
            padding-block: 100px;
        }

        .footer-list:last-child {
            order: 2;
        }
    }

    /**
   * responsive for larger than 1200px screen
   */

    @media (min-width: 1200px) {
        /**
     * CUSTOM PROPERTY
     */

        :root {
            /**
       * typography
       */

            --fontSize-title-2: 2.5rem;
        }

        /**
     * REUSED STYLE
     */

        .container,
        :is(.service, .event) .container {
            max-width: 1200px;
            width: 100%;
            margin-inline: auto;
        }

        /**
     * TOPBAR
     */

        .topbar .container {
            max-width: unset;
        }

        .topbar .separator {
            display: block;
        }

        /**
     * HEADER
     */

        .nav-open-btn,
        .navbar>*:not(.navbar-list),
        .header .overlay {
            display: none;
        }

        .header .container {
            max-width: unset;
        }

        .navbar,
        .navbar.active,
        .navbar-list {
            all: unset;
        }

        .navbar,
        .navbar.active {
            margin-inline: auto 20px;
        }

        .navbar-list {
            display: flex;
            gap: 30px;
        }

        .navbar-item {
            border-block-start: none;
        }

        .navbar .separator {
            display: none;
        }

        .navbar-link:is(:hover, :focus-visible, .active) .span {
            transform: unset;
        }

        .navbar-link {
            font-weight: var(--weight-bold);
            letter-spacing: var(--letterSpacing-1);
        }

        .navbar-link::after {
            display: block;
        }

        .navbar-link.active::after {
            transform: scaleX(1);
            opacity: 1;
        }

        .header .btn {
            margin-inline-start: 0;
        }

        /**
     * HERO
     */

        .hero {
            height: 880px;
        }

        .hero-btn {
            bottom: 50px;
            right: 50px;
            transform: scale(1);
        }

        /**
     * SERVICE
     */

        .service .grid-list {
            gap: 150px;
        }

        .service .grid-list li:nth-child(2n + 1) {
            transform: translateY(-160px);
        }

        .service .section-text {
            margin-block-end: 75px;
        }

        /**
     * ABOUT
     */

        .about {
            padding-block: 170px 100px;
        }

        /**
     * SPECIAL DISH
     */

        .special-dish-content {
            padding: 225px 120px;
            padding-inline-end: 0;
        }

        .special-dish-content .container {
            max-width: 460px;
            margin-inline: 0;
        }

        /**
     * MENU
     */

        .menu .grid-list {
            gap: 55px 200px;
            margin-block-end: 55px;
        }

        /**
     * TESTIMONIALS
     */

        .form-left,
        .form-right {
            padding: 75px 60px;
        }

        /**
     * FEATURES
     */

        .features .grid-list {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    /**
   * responsive for larger than 1400px screen
   */

    @media (min-width: 1400px) {
        /**
     * HEADER
     */

        .navbar {
            margin-right: 410px;
        }

        /**
     * ABOUT
     */

        .about-content {
            padding-inline-end: 90px;
        }

        .about .shape {
            display: block;
            top: 46%;
            left: 0;
        }

        /**
     * SPECIAL DISH
     */

        .special-dish {
            overflow: visible;
            position: relative;
        }

        .special-dish .shape {
            display: block;
            right: 0;
            z-index: 1;
        }

        .special-dish .shape-1 {
            top: 45%;
        }

        .special-dish .shape-2 {
            bottom: 0;
            transform: translateY(50%);
            width: max-content;
        }

        /**
     * FEATURES
     */

        .features {
            overflow: visible;
        }

        .features .shape {
            display: block;
        }

        .features .shape-1 {
            top: -100px;
            right: 0;
        }

        .features .shape-2 {
            bottom: 80px;
            left: 0;
        }
    }
</style>

</html>