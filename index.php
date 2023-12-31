<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>RISE UNITED</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src='smooth-scroll.js'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wdth,wght@62,400;100,100;100,200;100,300;100,400;100,500;100,600;100,700;100,800;100,900;112.5,400;125,400;125,600;125,700;125,900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <script src="anime.min.js"></script>
    <script src="blobs.js"></script>
</head>
<body>
    <div class="background-animation-wrapper card">
        <div class="blob"></div>
    </div>
    <div class="background-animation-overlay"></div>
    <div class="main">
        <div class="landing">
            <div class="nav">
                <div class="logo">
                    <h1>Rise United</h1>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">OUR TEAM</a></li>
                        <li><a href="#">SERVICES</a></li>
                        <li><a href="#">REFERENCES</a></li>
                        <li><a href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div class="landing-text">
                <p>Step into a future with our<span class="typed-text"></span><span class="cursor"></span></p>
            </div>
        </div>
        <div class="about-section pageSection">
            <div class="section-separator">
                <div class="section-separator-line"></div>
                <div class="section-separator-text">
                    <h2>ABOUT US</h2>
                </div>
            </div>
            <div class="section-content about">
                <div class="about-text">
                    <h3>At <span class="about-highlight-text">RiseUnited</span>, our approach prioritizes strategy.</h3>
                    <p>We combine our industry expertise with modern methods and the latest trends.<br>
                    We offer informed recommendations based on data and insights. With our help,<br>
                    your company can achieve both growth and improved success and visibility.</p>
                </div>
                <a href="#" class="cta-wrapper"><div class="cta button">
                    <p>BOOK AN APPOINTMENT</p>
                </div></a> 
            </div>
        </div>
        <div class="team-section pageSection">
            <div class="section-separator">
                <div class="section-separator-text">
                    <h2>OUR TEAM</h2>
                </div>
            </div>
            <div class="section-content team">
                <div class="team-member">
                    <div class="image-wrapper team-member-image floatLeft">
                        <img src="res/images/jh.png">
                    </div>
                    <div class="team-member-text team-member-text floatRight">
                        <div class="team-member-info">
                            <h3>Jan Hrdlička</h3>
                            <p>years of experience in international business consulting</p>
                        </div>
                    </div>
                </div>
                <div class="team-member">
                    <div class="image-wrapper team-member-image floatRight">
                        <img src="res/images/hh.png">
                    </div>
                    <div class="team-member-text team-member-text floatLeft">
                        <div class="team-member-info memberStep">
                            <h3>Hana Hufeislová</h3>
                            <p>years of experience in international business consulting</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-section pageSection">
            <div class="services-separator section-separator">
                <div class="section-separator-text">
                    <h2>SERVICES</h2>
                </div>
            </div>
            <div class="section-content services">
                <div class="service-wrapper">
                    <div class="service-separator-wrapper">
                        <div class="service-separator">
                            <div class="service-separator-line floatLeft"></div>
                            <div class="service-separator-indicator floatRight">
                                <p>1.</p>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <h3>Market Research and Analysis</h3>
                        <p>Comprehensive understanding of local markets, trends and consumer behavior.<br>
                        Tailored strategies based on data-driven insights.<br>
                        We provide an analysis of direct competitors in the field.</p>
                    </div>
                </div>
                <div class="service-wrapper floatRight">
                    <div class="service-separator-wrapper">
                        <div class="service-separator floatRight">
                            <div class="service-separator-line-step floatRight"></div>
                            <div class="service-separator-indicator floatLeft">
                                <p>2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="service floatRight serviceStep">
                        <h3>Captivating presentations</h3>
                        <p>Presentations are communication tools that can be used as demonstrations,<br>
                        lectures, speeches, reports and more.<br>
                        It is mostly presented before an audience.<br>
                        It serves a variety of purposes, making presentations powerful tools for convincing</p>
                    </div>
                </div>
                <div class="service-wrapper">
                    <div class="service-separator-wrapper">
                        <div class="service-separator">
                            <div class="service-separator-line floatLeft"></div>
                            <div class="service-separator-indicator floatRight">
                                <p>3.</p>
                            </div>
                        </div>
                    </div>
                    <div class="service">
                        <h3>Dynamic Collaboration</h3>
                        <p>Comprehensive understanding of local markets, trends and consumer behavior.<br>
                        Tailored strategies based on data-driven insights.<br>
                        We provide an analysis of direct competitors in the field.</p>
                    </div>
                </div>
                <div class="services-carousel-wrapper">
                    <p>And much more...</p>
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                <h3>Proficiency in Instagram Strategies</h3>
                                <p>This strategy involves authentically showcasing products or services
                                    to their engaged followers. With our expertise, we can identify the
                                    right strategy, create compelling campaigns, and amplify your brand's
                                    visibility, engagement, and growth on Instagram.</p>
                                </div>
                            </div>
                            <div class="swiper-slide">Slide 2</div>
                            <div class="swiper-slide">Slide 3</div>
                            <div class="swiper-slide">Slide 4</div>
                            <div class="swiper-slide">Slide 5</div>
                            <div class="swiper-slide">Slide 6</div>
                            <div class="swiper-slide">Slide 7</div>
                            <div class="swiper-slide">Slide 8</div>
                            <div class="swiper-slide">Slide 9</div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="services-additionals">
                        <a href="#" class="services-cta-wrapper"><div class="cta button">
                            <p>GET IN TOUCH</p>
                        </div></a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="references-section pageSection">
            <div class="section-separator">
                <div class="section-separator-text">
                    <h2>REFERENCES</h2>
                </div>
            </div>
            <div class="section-content references">
                <div class="services-carousel-wrapper">
                    <!-- Slider main container -->
                    <div class="swiper2">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <img src="res/logos/bell_it.png">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <img src="res/logos/born_digital.png">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <img src="res/logos/boulevard.png">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <img src="res/logos/crocodille.png">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <img src="res/logos/ingram.png">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-content">
                                    <img src="res/logos/telma.png">
                                </div>
                            </div>
                        </div>
                        <!--<div class="swiper-pagination"></div>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section pageSection">
            <div class="section-separator">
                <div class="section-separator-text">
                    <h2>CONTACT</h2>
                </div>
            </div>
            <div class="section-content contact">
                <div class="contact-text">
                    <h3>CONTACT US</h3>
                    <p>and start your success story.</p>
                </div>
                <div class="contact-separator"></div>
                <div class="contact-info">
                    <div class="contact-info-details">
                        <i class="lni lni-envelope"></i><p>info@riseunited.com</p><br>
                    </div>
                    <div class="contact-info-details">
                        <i class="lni lni-phone"></i><p>+420 650 283 152</p><br>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <p>or send us a message</p>
                    <div class="contact-form">
                        <form>
                            <input placeholder="your@email.com" class="form-input form-email" type="email"><br><br>
                            <textarea placeholder="Your message..." class="form-input form-text" type="text"></textarea><br><br>
                            <input class="form-input form-submit" type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const swiper = new Swiper('.swiper', {
        loop: true,
        grabCursor: true,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
        });

        var swiper2 = new Swiper(".swiper2", {
            slidesPerView: 1,
            loop: true,
            grabCursor: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            /*pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },*/
            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 0,
                },
                768: {
                slidesPerView: 2,
                spaceBetween: 40,
                },
                1024: {
                slidesPerView: 3,
                spaceBetween: 50,
                },
            },
        });

        genBlobs();
    </script>
    <script src="typewriter.js"></script>
</body>
</html>