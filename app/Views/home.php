<?php
// Enable error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the Navbar
require_once("navbar.php");
require_once("floting_social_media_icons.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>English Faculties - Online Courses & Education HTML Template - Home One</title>
    <meta name="author" content="themeholy">
    <meta name="description" content="English Faculties - Online Courses & Education HTML Template">
    <meta name="keywords" content="English Faculties - Online Courses & Education HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700&display=swap"
        rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css') ?> ">
        <!-- Fontawesome Icon -->
        <link rel="stylesheet" href="<?= base_url('public/assets/css/fontawesome.min.css')?> ">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/magnific-popup.min.css') ?> ">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/slick.min.css') ?> ">
    <!-- Nice Select -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/nice-select.min.css') ?> ">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?> ">
</head>

<body>

    <!-- First home component start -->
    <div class="w-full h-[600px]  bg-no-repeat bg-cover relative bg-[#081833]">
        <div class="flex w-max gap-2 absolute bottom-[-250px] left-1/2  transform -translate-x-1/2 mb-4">
            <?php
            $courses = [
                ["image" => "Courses_img_1.png", "title" => "Web Development - HTML, CSS, JS", "courses" => "50+ Courses", "students" => "98+ Students"],
                ["image" => "Courses_img_1.png", "title" => "Web Development - HTML, CSS, JS", "courses" => "50+ Courses", "students" => "98+ Students"],
                ["image" => "Courses_img_1.png", "title" => "Web Development - HTML, CSS, JS", "courses" => "50+ Courses", "students" => "98+ Students"],
                ["image" => "Courses_img_1.png", "title" => "Web Development - HTML, CSS, JS", "courses" => "50+ Courses", "students" => "98+ Students"],
            ];

            foreach ($courses as $course) : ?>
                <div class="bg-white w-fit rounded-lg overflow-hidden shadow-lg">
                    <img src="<?= base_url('public/' . $course['image']) ?>" alt="<?= $course['title'] ?>" class="w-full h-60 object-cover">
                    <div class="p-4">
                        <div class="flex items-center">
                            <i class="fas fa-star text-blue-500"></i>
                            <i class="fas fa-star text-blue-500"></i>
                            <i class="fas fa-star text-blue-500"></i>
                            <i class="far fa-star text-gray-400"></i>
                            <i class="far fa-star text-gray-400"></i>
                        </div>
                        <h2 class="text-xl font-bold mt-2"><?= $course['title'] ?></h2>
                        <div class="flex justify-between mt-4">
                            <ul class="flex flex-col">
                                <li class="flex items-center font-semibold text-[#878787]">
                                    <i class="fas fa-book mr-2"></i>
                                    <span><?= $course['courses'] ?></span>
                                </li>
                                <li class="flex items-center font-semibold text-[#878787] mt-2">
                                    <i class="fas fa-user-graduate mr-2"></i>
                                    <span><?= $course['students'] ?></span>
                                </li>
                            </ul>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4 self-start">Learn More</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <!-- First home component end -->

    <!--==============================
Contact Area  
==============================-->
    <div class="space-top mt-[200px]">
        <div class="container">
            <div class="category-sec-wrap">
                <div class="shape-mockup category-shape-arrow d-xl-block d-none">
                    <img src="<?= base_url('public/assets/img/normal/category-arrow.svg') ?> " alt="img">
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="title-area mb-25 mb-lg-0 text-xl-start text-center">
                            <span class="sub-title"><i class="fas fa-book me-2"></i> Courses Categories</span>
                            <h2 class="sec-title">Explore Top Categories</h2>
                            <a href="course.html" class="th-btn">View All Category<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row slider-shadow th-carousel category-slider" data-slide-show="4"
                            data-ml-slide-show="3" data-md-slide-show="3" data-sm-slide-show="2" data-arrows="true"
                            data-xl-arrows="true">
                            <div class="col-md-6 col-xl-4" >
                                <div class="category-card">
                                    <div class="category-card_icon">
                                        <img src="<?= base_url('public/assets/img/icon/cat-1_1.svg') ?> " alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="course.html">Web Development</a></h3>
                                        <p class="category-card_text">56+ Courses </p>
                                        <a href="course-details.html" class="th-btn">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4" >
                                <div class="category-card">
                                    <div class="category-card_icon">
                                        <img src="<?= base_url('public/assets/img/icon/cat-1_2.svg') ?> " alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="course.html">Digital Marketing</a></h3>
                                        <p class="category-card_text">50+ Courses </p>
                                        <a href="course-details.html" class="th-btn">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4" >
                                <div class="category-card">
                                    <div class="category-card_icon">
                                        <img src="<?= base_url('public/assets/img/icon/cat-1_3.svg') ?> " alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="course.html">UI/UX Design</a></h3>
                                        <p class="category-card_text">36+ Courses </p>
                                        <a href="course-details.html" class="th-btn">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4" >
                                <div class="category-card">
                                    <div class="category-card_icon">
                                        <img src="<?= base_url('public/assets/img/icon/cat-1_4.svg') ?> " alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="course.html">Graphic Design</a></h3>
                                        <p class="category-card_text">24+ Courses </p>
                                        <a href="course-details.html" class="th-btn">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4" >
                                <div class="category-card">
                                    <div class="category-card_icon">
                                        <img src="<?= base_url('public/assets/img/icon/cat-1_1.svg') ?> " alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="course.html">Web Development</a></h3>
                                        <p class="category-card_text">56+ Courses </p>
                                        <a href="course-details.html" class="th-btn">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4" >
                                <div class="category-card">
                                    <div class="category-card_icon">
                                        <img src="<?= base_url('public/assets/img/icon/cat-1_2.svg') ?> " alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="course.html">Digital Marketing</a></h3>
                                        <p class="category-card_text">50+ Courses </p>
                                        <a href="course-details.html" class="th-btn">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4" >
                                <div class="category-card">
                                    <div class="category-card_icon">
                                        <img src="<?= base_url('public/assets/img/icon/cat-1_3.svg') ?> " alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="course.html">UI/UX Design</a></h3>
                                        <p class="category-card_text">36+ Courses </p>
                                        <a href="course-details.html" class="th-btn">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4" >
                                <div class="category-card">
                                    <div class="category-card_icon">
                                        <img src="<?= base_url('public/assets/img/icon/cat-1_4.svg') ?> " alt="image">
                                    </div>
                                    <div class="category-card_content">
                                        <h3 class="category-card_title"><a href="course.html">Graphic Design</a></h3>
                                        <p class="category-card_text">24+ Courses </p>
                                        <a href="course-details.html" class="th-btn">Learn More <i
                                                class="fas fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--==============================
About Area  
==============================-->
    <div class="space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box1 mb-40 mb-xl-0">
                        <div class="img1">
                            <img class="tilt-active" src="<?= base_url('public/assets/img/normal/about_1_1.png') ?> " alt="About">
                        </div>
                        <div class="about-grid" style="background-image: url(<?= base_url('public/assets/img/normal/about_1_3.png') ?>);">
                            <h3 class="about-grid_year"><span class="counter-number">10</span>k<span
                                    class="text-theme">+</span></h3>
                            <p class="about-grid_text">Students Active Our Courses</p>
                        </div>
                        <div class="img2">
                            <img class="tilt-active" src="<?= base_url('public/assets/img/normal/about_1_2.png') ?> " alt="About">
                        </div>
                        <div class="shape-mockup about-shape1 jump" data-left="-67px" data-bottom="0">
                            <img src="<?= base_url('public/assets/img/normal/about_1_shape1.png') ?> " alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-30">
                        <span class="sub-title"><i class="fal fa-book me-2"></i> About Our University</span>
                        <h2 class="sec-title">Welcome to English Faculties University.</h2>
                    </div>
                    <p class="mt-n2 mb-25">Collaboratively simplify user friendly networks after principle centered
                        coordinate effective methods of empowerment distributed niche markets pursue market positioning
                        web-readiness after resource sucking applications. </p>
                    <p class="mb-30">Online education, also known as e-learning, is a method of learning that takes
                        place over the internet. It offers individuals the opportunity to acquire knowledge, skills.</p>
                    <div class="row align-items-center">
                        <div class="col-md-auto">
                            <div class="about-grid_img mb-30 mb-md-0">
                                <img src="<?= base_url('public/assets/img/normal/about_1_4.png') ?> " alt="img">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="checklist">
                                <ul>
                                    <li>Get access to 4,000+ of our top courses</li>
                                    <li>Popular topics to learn now</li>
                                    <li>Find the right instructor for you</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mt-40">
                        <a href="about.html" class="th-btn">About More<i class="fa-regular fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Servce Area  
==============================-->
    <section class="space" style="background-image: url(<?= base_url('public/assets/img/bg/course_bg_1.png') ?>)" id="course-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> Popular Courses</span>
                            <h2 class="sec-title">Our Popular Courses</h2>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <a href="course.html" class="th-btn">View All Courses<i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel course-slider-1" data-slide-show="4" data-ml-slide-show="3"
                data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="<?= base_url('public/assets/img/course/course_1_1.png') ?> " alt="img">
                            <span class="tag"><i class="fas fa-clock"></i> 03 WEEKS</span>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="course-details.html">Education Software and PHP
                                    and JS System Script</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 8</span>
                                <span><i class="fal fa-user"></i>Students 60+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="<?= base_url('public/assets/img/course/author.png') ?> " alt="author">
                                    <a href="course.html" class="author-name">Max Alexix</a>
                                </div>
                                <div class="offer-tag">Free</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="<?= base_url('public/assets/img/course/course_1_2.png') ?> " alt="img">
                            <span class="tag"><i class="fas fa-clock"></i> 02 WEEKS</span>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="course-details.html">Learn Figma – UI/UX Design
                                    Essential Training</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 9</span>
                                <span><i class="fal fa-user"></i>Students 50+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="<?= base_url('public/assets/img/course/author.png') ?> " alt="author">
                                    <a href="course.html" class="author-name">Kevin Perry</a>
                                </div>
                                <div class="offer-tag">Free</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="<?= base_url('public/assets/img/course/course_1_3.png') ?> " alt="img">
                            <span class="tag"><i class="fas fa-clock"></i> 04 WEEKS</span>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="course-details.html">Advanced Android 12 & Kotlin
                                    Development Course</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 7</span>
                                <span><i class="fal fa-user"></i>Students 30+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="<?= base_url('public/assets/img/course/author.png') ?> " alt="author">
                                    <a href="course.html" class="author-name">Max Alexix</a>
                                </div>
                                <div class="offer-tag">Free</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="<?= base_url('public/assets/img/course/course_1_4.png') ?> " alt="img">
                            <span class="tag"><i class="fas fa-clock"></i> 02 WEEKS</span>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="course-details.html">IT Statistics Data Science and
                                    Business Analysis</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 10</span>
                                <span><i class="fal fa-user"></i>Students 20+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="<?= base_url('public/assets/img/course/author.png') ?> " alt="author">
                                    <a href="course.html" class="author-name">Kevin Perry</a>
                                </div>
                                <div class="offer-tag">Free</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="<?= base_url('public/assets/img/course/course_1_1.png') ?> " alt="img">
                            <span class="tag"><i class="fas fa-clock"></i> 03 WEEKS</span>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="course-details.html">Education Software and PHP
                                    and JS System Script</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 8</span>
                                <span><i class="fal fa-user"></i>Students 60+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="<?= base_url('public/assets/img/course/author.png') ?> " alt="author">
                                    <a href="course.html" class="author-name">Max Alexix</a>
                                </div>
                                <div class="offer-tag">Free</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="<?= base_url('public/assets/img/course/course_1_2.png') ?> " alt="img">
                            <span class="tag"><i class="fas fa-clock"></i> 02 WEEKS</span>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="course-details.html">Learn Figma – UI/UX Design
                                    Essential Training</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 9</span>
                                <span><i class="fal fa-user"></i>Students 50+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="<?= base_url('public/assets/img/course/author.png') ?> " alt="author">
                                    <a href="course.html" class="author-name">Kevin Perry</a>
                                </div>
                                <div class="offer-tag">Free</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="<?= base_url('public/assets/img/course/course_1_3.png') ?> " alt="img">
                            <span class="tag"><i class="fas fa-clock"></i> 04 WEEKS</span>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="course-details.html">Advanced Android 12 & Kotlin
                                    Development Course</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 7</span>
                                <span><i class="fal fa-user"></i>Students 30+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="<?= base_url('public/assets/img/course/author.png') ?> " alt="author">
                                    <a href="course.html" class="author-name">Max Alexix</a>
                                </div>
                                <div class="offer-tag">Free</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="course-box">
                        <div class="course-img">
                            <img src="<?= base_url('public/assets/img/course/course_1_4.png') ?> " alt="img">
                            <span class="tag"><i class="fas fa-clock"></i> 02 WEEKS</span>
                        </div>
                        <div class="course-content">
                            <div class="course-rating">
                                <div class="star-rating" role="img" aria-label="Rated 4.00 out of 5">
                                    <span style="width:79%">Rated <strong class="rating">4.00</strong> out of 5</span>
                                </div>(4.7)
                            </div>
                            <h3 class="course-title"><a href="course-details.html">IT Statistics Data Science and
                                    Business Analysis</a></h3>
                            <div class="course-meta">
                                <span><i class="fal fa-file"></i>Lesson 10</span>
                                <span><i class="fal fa-user"></i>Students 20+</span>
                                <span><i class="fal fa-chart-simple"></i>Beginner</span>
                            </div>
                            <div class="course-author">
                                <div class="author-info">
                                    <img src="<?= base_url('public/assets/img/course/author.png') ?> " alt="author">
                                    <a href="course.html" class="author-name">Kevin Perry</a>
                                </div>
                                <div class="offer-tag">Free</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Cta Area  
==============================-->
    <div class="cta-area-1" style="background-image: url(<?= base_url('public/assets/img/bg/cta-bg1.png') ?>)">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="cta-wrap title-area mb-0">
                        <div class="cta-icon">
                            <img src="<?= base_url('public/assets/img/normal/cta-icon1.png') ?> " alt="icon">
                        </div>
                        <div class="cta-content">
                            <h2 class="cta-title sec-title">Get Online Courses</h2>
                            <p class="cta-text">Met consectetur adipiscing sed eiustempore dolore</p>
                        </div>
                        <a href="about.html" class="th-btn style8">Join With Us<i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-img-1" data-overlay="title" data-opacity="8">
            <img src="<?= base_url('public/assets/img/normal/cta_1_1.png') ?> " alt="Image">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style2 popup-video"><i
                    class="fa-sharp fa-solid fa-play"></i></a>
        </div>
    </div>
    <!--==============================
Why choose us Area  
==============================-->
    <div class="why-area-1 space overflow-hidden">

        <div class="shape-mockup why-shape-1 jump" data-top="10%" data-left="7%">
            <img src="<?= base_url('public/assets/img/normal/about_1_shape1.png') ?> " alt="img">
        </div>

        <div class="shape-mockup why-shape-2" style="background-image: url(<?= base_url('public/assets/img/normal/wcu_1_shape1.png') ?>);"></div>

        <div class="shape-mockup why-shape-3 jump-reverse" data-bottom="25%" data-right="-3%">
            <img src="<?= base_url('public/assets/img/normal/wcu_1_shape2.png') ?> " alt="img">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="wcu-img-1">
                        <div class="img1">
                            <img src="<?= base_url('public/assets/img/normal/wcu_1_1.png') ?> " alt="img">
                        </div>
                        <div class="student-count jump-reverse">
                            <h5 class="title"><span class="text-theme"><span class="counter-number">10</span>k+</span>
                                Active Students</h5>
                            <img src="<?= base_url('public/assets/img/normal/student-group_1_1.png') ?> " alt="img">
                        </div>
                        <div class="text-end">
                            <a class="th-btn mt-30" href="contact.html">Text to take your first step <i
                                    class="far fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="wcu-wrap1">
                        <div class="title-area mb-25">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> WHY CHOOSE US</span>
                            <h2 class="sec-title">Thousands Of Experts Around The World Ready To Help.</h2>
                            <p class="sec-text mt-20">Synergistically visualize alternative content before cross
                                functional core Rapidiously administra standardized value via focused benefits.
                                Rapidiously redefine highly efficient niche markets with plug-and-play materials
                                professionally seize client centric solutions</p>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">World Class Trainers</h3>
                                        <p class="wcu-box_text">Seamlessly envisioneer tactical data through services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Easy Learning</h3>
                                        <p class="wcu-box_text">Seamlessly envisioneer tactical data through services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Flexible</h3>
                                        <p class="wcu-box_text">Seamlessly envisioneer tactical data through services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Affordable Price</h3>
                                        <p class="wcu-box_text">Seamlessly envisioneer tactical data through services.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Counter Area  
==============================-->

        <div class="mb-[120px] rounded-[10px]" style="background-image: url(<?= base_url('public/assets/img/bg/counter-bg_1.png') ?>);">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">3.9</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Successfully</strong> Trained</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">15.8</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Classes</strong> Completed</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">97.5</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Satisfaction</strong> Rate</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">100.2</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Students</strong> Community</p>
                    </div>
                </div>
            </div>
        </div>

    <!--==============================
Cta Area  
==============================-->
    <section class="cta-area-2 position-relative space-bottom">
        <div class="cta-bg-img" style="background-image: url(<?= base_url('public/assets/img/bg/cta-bg2.png') ?>);">
        </div>
        <div class="cta-bg-img2" style="background-image: url(<?= base_url('public/assets/img/bg/cta-bg2-shape.png') ?>);">
        </div>

        <div class="shape-mockup cta-shape1 jump d-md-block d-none" data-left="-2%" data-bottom="-7%">
            <img src="<?= base_url('public/assets/img/normal/cta_2_shape1.png') ?> " alt="img">
        </div>

        <div class="shape-mockup cta-shape2 jump-reverse d-md-block d-none" data-right="-1%" data-top="-3%">
            <img src="<?= base_url('public/assets/img/normal/cta_2_shape2.png') ?> " alt="img">
        </div>

        <div class="shape-mockup cta-shape3 spin d-md-block d-none" data-right="20%" data-top="30%">    
            <img src="<?= base_url('public/assets/img/normal/cta_2_shape3.png') ?> " alt="img">
        </div>

        <div class="container text-center">
            <div class="cta-wrap2">
                <div class="title-area text-center mb-35">
                    <span class="sub-title"><i class="fal fa-book me-2"></i>Are You Ready For This Offer</span>
                    <h2 class="sec-title text-white">40% Offer First <span class="text-theme2">100 Student’s</span> For
                        Featured <br> <span class="fw-normal">Topics by Education Category</span></h2>
                    <p class="cta-text">Get unlimited access to 6,000+ of Udemy’s top courses for your team. Learn and
                        improve skills across
                        business, tec, design, and more.</p>
                </div>
                <div class="btn-group justify-content-center">
                    <a href="about.html" class="th-btn style3">Join With Us<i class="fas fa-arrow-right ms-2"></i></a>
                    <a href="contact.html" class="th-btn style2">Become A Teacher<i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Team Area  
==============================-->
    <div class="team-area overflow-hidden space" id="team-sec">
        <div class="shape-mockup team-bg-shape1 jump-reverse d-xxl-block d-none" data-left="-2%" data-top="0">
            <img src="<?= base_url('public/assets/img/team/team-shape_1_1.png') ?> " alt="img">
        </div>

        <div class="shape-mockup team-bg-shape2 jump d-xxl-block d-none" data-left="40%" data-top="20%">
            <img src="<?= base_url('public/assets/img/team/team-shape_1_2.png') ?> " alt="img">
        </div>

        <div class="shape-mockup team-bg-shape3 jump" data-left="5%" data-bottom="9%">
            <img src="<?= base_url('public/assets/img/team/team-shape_1_3.png') ?> " alt="img">
        </div>

        <div class="shape-mockup team-bg-shape4 spin" data-left="40%" data-bottom="20%">
            <img src="<?= base_url('public/assets/img/team/team-shape_1_4.png') ?> " alt="img">
        </div>

        <div class="shape-mockup team-bg-shape5 jump d-lg-block d-none" data-right="-7%" data-top="10%">
            <img src="<?= base_url('public/assets/img/team/team-shape_1_5.png') ?> " alt="img">
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-40 mb-xl-0">
                    <div class="title-area mb-30">
                        <span class="sub-title"><i class="fal fa-book me-2"></i> Our Instructor</span>
                        <h2 class="sec-title">Meet Our Expert Instructor</h2>
                        <p class="sec-text mt-20">Graduates of XYZ University have achieved remarkable success in their
                            chosen fields, with many going on to pursue advanced degrees, secure fulfilling careers, and
                            make valuable contributions to their communities.</p>
                        <p class="sec-text">The university takes pride in its alumni network, which serves as a
                            testament to the quality of education and the opportunities provided by the institution.</p>
                    </div>
                    <div class="btn-group mt-30">
                        <a href="course.html" class="th-btn">Explore Courses<i class="fas fa-arrow-right ms-2"></i></a>
                        <a href="contact.html" class="th-btn style7">Contact Us<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-card team-card-1-1 team-card-1-1-active mt-0">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/img/team/team_1_1.jpg') ?> " alt="Team">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-social">
                                <a href="#" class="icon-btn flex justify-center items-center" style="display:flex;">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="th-social">
                                    <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
                                <span class="team-desig">Instructor</span>
                            </div>
                            <div class="team-info">
                                <span><i class="fal fa-file-check"></i>2 Courses</span>
                                <span><i class="fa-light fa-users"></i>Students 60+</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card team-card-1-1">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/img/team/team_1_2.jpg') ?> " alt="Team">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-social">
                                <a href="#" class="icon-btn flex justify-center items-center" style="display:flex;">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="th-social">
                                    <a target="_blank" href="https://vimeo.com/" ><i class="fab fa-vimeo-v" ></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a href="team-details.html">Lily Michelle</a></h3>
                                <span class="team-desig">Founder & CEO</span>
                            </div>
                            <div class="team-info">
                                <span><i class="fal fa-file-check"></i>3 Courses</span>
                                <span><i class="fa-light fa-users"></i>Students 50+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-card team-card-1-2 mt-md-0">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/img/team/team_1_3.jpg') ?> " alt="Team">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-social">
                                <a href="#" class="icon-btn flex justify-center items-center" style="display:flex;">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="th-social">
                                    <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a href="team-details.html">Jennifer Patrcia</a></h3>
                                <span class="team-desig">Junior Instructor</span>
                            </div>
                            <div class="team-info">
                                <span><i class="fal fa-file-check"></i>4 Courses</span>
                                <span><i class="fa-light fa-users"></i>Students 30+</span>
                            </div>
                        </div>
                    </div>
                    <div class="team-card team-card-1-2 team-card-1-2-active">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="<?= base_url('public/assets/img/team/team_2_3.jpg') ?> " alt="Team">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-social">
                                <a href="#" class="icon-btn flex justify-center items-center" style="display:flex;">
                                    <i class="far fa-plus"></i>
                                </a>
                                <div class="th-social">
                                    <a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://facebook.com/"><i
                                            class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3 class="team-title"><a href="team-details.html">Hirmar Ubunti</a></h3>
                                <span class="team-desig">Senior Instructor</span>
                            </div>
                            <div class="team-info">
                                <span><i class="fal fa-file-check"></i>4 Courses</span>
                                <span><i class="fa-light fa-users"></i>Students 70+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
Event Area  
==============================-->
    <section class="space" style="background-image: url(<?= base_url('public/assets/img/bg/event-bg_1.png') ?>);">
        <div class="shape-mockup event-shape1 jump" data-top="0" data-left="-60px">
            <img src="<?= base_url('public/assets/img/team/team-shape_1_1.png') ?> " alt="img">
        </div>
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title"><i class="fal fa-book me-2"></i> Fetaured Events</span>
                <h2 class="sec-title">Our Upcoming Events</h2>
            </div>
            <div class="row slider-shadow event-slider-1 th-carousel gx-70" data-slide-show="3" data-lg-slide-show="3"
                data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-1.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author1.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">David Smith</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>259, NewYork,</p>
                                <p><i class="fal fa-clock"></i>08:00 am - 10:00 am</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">What Soul Can Tech Us About Web
                                    Design</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-2.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author2.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">Adam Jhon</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>Hilton, NewYork,</p>
                                <p><i class="fal fa-clock"></i>10:00 am - 11:00 am</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">Embrace the world of online
                                    education</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-3.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author3.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">Michael Rich</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>147, Green Road</p>
                                <p><i class="fal fa-clock"></i>11:00 am - 12:00 pm</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">Gain insights into how parents can
                                    support</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-4.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author4.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">Anadi Juila</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>Kipling, London,</p>
                                <p><i class="fal fa-clock"></i>08:00 am - 10:00 am</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">Exploring New Frontiers in
                                    Education</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-5.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author1.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">David Smith</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>Paris, France,</p>
                                <p><i class="fal fa-clock"></i>10:00 am - 11:00 am</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">A Journey of Educational
                                    Excellence</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-6.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author2.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">Adam Jhon</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>Broly, NewYork,</p>
                                <p><i class="fal fa-clock"></i>11:00 am - 12:00 pm</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">Unleashing the Potential of
                                    Education</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-7.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author3.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">Michael Rich</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>Easton, USA,</p>
                                <p><i class="fal fa-clock"></i>08:00 am - 10:00 am</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">Preparing Students for Tomorrow,s
                                    Challenges</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-8.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author4.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">Anadi Juila</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>Sharjah, UAE,</p>
                                <p><i class="fal fa-clock"></i>10:00 am - 11:00 am</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">Embracing Technology in
                                    Education</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4">
                    <div class="event-card">
                        <div class="event-card_img" data-mask-src="<?= base_url('public/assets/img/event/event_img-shape.png') ?> ">
                            <img src="<?= base_url('public/assets/img/event/event_img-9.png') ?> " alt="event">
                        </div>
                        <div class="event-card_content">
                            <div class="event-author">
                                <div class="avater">
                                    <img src="<?= base_url('public/assets/img/event/event-author1.png') ?> " alt="avater">
                                </div>
                                <div class="details">
                                    <span class="author-name">David Smith</span>
                                    <p class="author-desig">Chief - Executive</p>
                                </div>
                            </div>
                            <div class="event-meta">
                                <p><i class="fal fa-location-dot"></i>Al Road, Dubai,</p>
                                <p><i class="fal fa-clock"></i>11:00 am - 12:00 pm</p>
                            </div>
                            <h3 class="event-card_title"><a href="event-details.html">Redefining Learning for the 21st
                                    Century</a></h3>
                            <div class="event-card_bottom">
                                <a href="event-details.html" class="th-btn">View Event <i
                                        class="far fa-arrow-right ms-1"></i></a>
                            </div>
                            <div class="event-card-shape jump">
                                <img src="<?= base_url('public/assets/img/event/event-box-shape1.png') ?> " alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Contact Area  
==============================-->
    <div class="space-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="title-area mb-lg-0 text-lg-start text-center">
                        <span class="sub-title"><i class="fal fa-book me-2"></i> Our Trusted Partners</span>
                        <h2 class="sec-title mb-0">We Have More Than <span class="text-theme"><span
                                    class="counter-number">4263</span>+</span> Global Partners</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="client-wrap text-lg-end text-center">
                        <div class="row gy-40">
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="<?= base_url('public/assets/img/client/cilent_1_1.png') ?> " alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="<?= base_url('public/assets/img/client/cilent_1_2.png') ?> " alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="<?= base_url('public/assets/img/client/cilent_1_3.png') ?> " alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="<?= base_url('public/assets/img/client/cilent_1_4.png') ?> " alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="<?= base_url('public/assets/img/client/cilent_1_5.png') ?> " alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="<?= base_url('public/assets/img/client/cilent_1_6.png') ?> " alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="<?= base_url('public/assets/img/client/cilent_1_7.png') ?> " alt="img">
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="blog.html" class="client-thumb">
                                    <img src="<?= base_url('public/assets/img/client/cilent_1_8.png') ?> " alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="cta-area-3 space-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30 mb-lg-0">
                    <div class="cta-card" style="background-image: url(<?= base_url('public/assets/img/bg/cta-bg_3_1.png') ?>);">
                        <div class="title-area mb-40">
                            <span class="sub-title text-white"><i class="fal fa-book me-2"></i>Popular Courses</span>
                            <h4 class="sec-title text-white">Get The Best Courses & <br> Upgrade Your Skills </h4>
                        </div>
                        <a href="contact.html" class="th-btn style8">Join With Us<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cta-card" style="background-image: url(<?= base_url('public/assets/img/bg/cta-bg_3_2.png') ?>);">
                        <div class="title-area mb-40">
                            <span class="sub-title text-white"><i class="fal fa-book me-2"></i>Popular Courses</span>
                            <h4 class="sec-title text-white">Engaging Courses for <br> Intellectual Exploration</h4>
                        </div>
                        <a href="contact.html" class="th-btn style8">Join With Us<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Testimonial Area  
==============================-->
    <section class="testi-area-1 overflow-hidden space-bottom" style="background-image: url(<?= base_url('public/assets/img/bg/testi_bg_1.png') ?>);">
        <div class="shape-mockup testi-bg-shape1 jump" data-right="0" data-top="50%">
            <img src="<?= base_url('public/assets/img/testimonial/testi-bg-shape_1_1.png') ?> " alt="img">
        </div>
        <div class="shape-mockup testi-bg-shape2 spin" data-left="0" data-top="15%">
            <img src="<?= base_url('public/assets/img/testimonial/testi-bg-shape_1_2.png') ?> " alt="img">
        </div>
        <div class="container">
            <div class="title-area text-center mb-50">
                <span class="sub-title"><i class="fal fa-book me-2"></i> Our Students Testimonials</span>
                <h2 class="sec-title">Students Say’s About Oue University</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="th-carousel testi-slider1 dot-style2 row" id="testimonial-slider1" data-slide-show="2"
                        data-ml-slide-show="2" data-lg-slide-show="1" data-md-slide-show="1" data-dots="true"
                        data-arrows="false">
                        <div class="col-lg-6">
                            <div class="testi-box">
                                <div class="testi-box-bg-shape">
                                    <svg width="150" height="137" viewBox="0 0 150 137" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z"
                                            fill="#0D5EF4" />
                                    </svg>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_img">
                                        <img src="<?= base_url('public/assets/img/testimonial/testi_1_1.jpg') ?> " alt="Avater">
                                    </div>
                                    <p class="testi-box_text">“Quickly maximize visionary solutions after mission
                                        critical action items productivate premium portals for impactful -services
                                        stinctively negotiate enabled niche markets via growth strategies”</p>
                                </div>
                                <div class="testi-box_bottom">
                                    <div>
                                        <h3 class="testi-box_name">David H. Smith</h3>
                                        <span class="testi-box_desig">IT Student</span>
                                    </div>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        (4.7)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-box">
                                <div class="testi-box-bg-shape">
                                    <svg width="150" height="137" viewBox="0 0 150 137" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z"
                                            fill="#0D5EF4" />
                                    </svg>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_img">
                                        <img src="<?= base_url('public/assets/img/testimonial/testi_1_2.jpg') ?> " alt="Avater">
                                    </div>
                                    <p class="testi-box_text">“Quickly maximize visionary solutions after mission
                                        critical action items productivate premium portals for impactful -services
                                        stinctively negotiate enabled niche markets via growth strategies”</p>
                                </div>
                                <div class="testi-box_bottom">
                                    <div>
                                        <h3 class="testi-box_name">Zara Head Milan</h3>
                                        <span class="testi-box_desig">Regular Student</span>
                                    </div>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        (4.7)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-box">
                                <div class="testi-box-bg-shape">
                                    <svg width="150" height="137" viewBox="0 0 150 137" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z"
                                            fill="#0D5EF4" />
                                    </svg>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_img">
                                        <img src="<?= base_url('public/assets/img/testimonial/testi_1_1.jpg') ?> " alt="Avater">
                                    </div>
                                    <p class="testi-box_text">“Quickly maximize visionary solutions after mission
                                        critical action items productivate premium portals for impactful -services
                                        stinctively negotiate enabled niche markets via growth strategies”</p>
                                </div>
                                <div class="testi-box_bottom">
                                    <div>
                                        <h3 class="testi-box_name">David H. Smith</h3>
                                        <span class="testi-box_desig">IT Student</span>
                                    </div>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        (4.7)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testi-box">
                                <div class="testi-box-bg-shape">
                                    <svg width="150" height="137" viewBox="0 0 150 137" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 9.99951C0 4.47666 4.47715 -0.000488281 10 -0.000488281H140C145.523 -0.000488281 150 4.47666 150 9.99951V10.5803C150 13.3951 148.814 16.0796 146.732 17.9747L18.8619 134.394C17.0205 136.07 14.6199 137 12.1297 137H10C4.47715 137 0 132.522 0 127V9.99951Z"
                                            fill="#0D5EF4" />
                                    </svg>
                                </div>
                                <div class="testi-box_content">
                                    <div class="testi-box_img">
                                        <img src="<?= base_url('public/assets/img/testimonial/testi_1_2.jpg') ?> " alt="Avater">
                                    </div>
                                    <p class="testi-box_text">“Quickly maximize visionary solutions after mission
                                        critical action items productivate premium portals for impactful -services
                                        stinctively negotiate enabled niche markets via growth strategies”</p>
                                </div>
                                <div class="testi-box_bottom">
                                    <div>
                                        <h3 class="testi-box_name">Zara Head Milan</h3>
                                        <span class="testi-box_desig">Regular Student</span>
                                    </div>
                                    <div class="testi-box_review">
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        <i class="fa-solid fa-star-sharp"></i>
                                        (4.7)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overflow-hidden space" id="blog-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0">
                            <span class="sub-title"><i class="fal fa-book me-2"></i> Our News & Blogs</span>
                            <h2 class="sec-title">Latests News & Blogs</h2>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <a href="blog.html" class="th-btn">View All Posts<i
                                class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= base_url('public/assets/img/blog/blog-1-1.jpg') ?> " alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>05 Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">Educate, Empower, Excel: Discover the
                                    Power of Learning!</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= base_url('public/assets/img/blog/blog-1-2.jpg') ?> " alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>03 Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">Enrich Your Mind, Envision Your Future:
                                    Education for Success</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= base_url('public/assets/img/blog/blog-1-3.jpg') ?> " alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>10 Jul, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">University class starting soon while the
                                    lovely valley team work</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= base_url('public/assets/img/blog/blog-1-1.jpg') ?> " alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>02 Apr, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">Educate, Empower, Excel: Discover the
                                    Power of Learning!</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= base_url('public/assets/img/blog/blog-1-2.jpg') ?> " alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>03 Jun, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">Enrich Your Mind, Envision Your Future:
                                    Education for Success</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?= base_url('public/assets/img/blog/blog-1-3.jpg') ?> " alt="Blog Image"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="blog.html"><i class="fa-light fa-user"></i>by David Smith</a>
                                <a href="blog.html"><i class="fa-light fa-clock"></i>10 Jul, 2023</a>
                            </div>
                            <h4 class="box-title"><a href="blog-details.html">University class starting soon while the
                                    lovely valley team work</a>
                            </h4>
                            <a href="blog-details.html" class="link-btn">Read More Details<i
                                    class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <?php require("footer.php")
    ?>


    <!-- Scroll To Top -->
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
  <!--==============================
    All Js File
============================== -->
    <!-- Jquery -->
    <script src="<?= base_url('public/assets/js/vendor/jquery-3.6.0.min.js') ?> "></script>
    <!-- Slick Slider -->
    <script src="<?= base_url('public/assets/js/slick.min.js') ?> "></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('public/assets/js/bootstrap.min.js') ?> "></script>
    <!-- Magnific Popup -->
    <script src="<?= base_url('public/assets/js/jquery.magnific-popup.min.js') ?> "></script>
    <!-- Counter Up -->
    <script src="<?= base_url('public/assets/js/jquery.counterup.min.js') ?> "></script>
    <!-- Circle Progress -->
    <script src="<?= base_url('public/assets/js/circle-progress.js') ?> "></script>
    <!-- Range Slider -->
    <script src="<?= base_url('public/assets/js/jquery-ui.min.js') ?> "></script>
    <!-- Isotope Filter -->
    <script src="<?= base_url('public/assets/js/imagesloaded.pkgd.min.js') ?> "></script>
    <script src="<?= base_url('public/assets/js/isotope.pkgd.min.js') ?> "></script>
    <!-- Tilt JS -->
    <script src="<?= base_url('public/assets/js/tilt.jquery.min.js') ?> "></script>
    <!-- Tweenmax JS -->
    <script src="<?= base_url('public/assets/js/tweenmax.min.js') ?> "></script>
    <!-- Nice Select JS -->
    <script src="<?= base_url('public/assets/js/nice-select.min.js') ?> "></script>
    <!-- Main Js File -->
    <script src="<?= base_url('public/assets/js/main.js') ?> "></script>
</body>

</html>