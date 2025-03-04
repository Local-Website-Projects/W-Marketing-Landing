<?php
require_once('config/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
$flag=0;

if(isset($_POST['form-submit'])){
    $name = $db_handle->checkValue($_POST['name']);
    $number = $db_handle->checkValue($_POST['number']);

    $query = $db_handle->insertQuery("INSERT INTO `contacts`(`name`, `phone`, `inserted_at`) VALUES ('$name','$number','$inserted_at')");
    if($query){
        $flag=1;
    }

}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="robots" content="all" />
    <meta name="keywords" content=/>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- Site Title -->
    <title>Marketing Landing Page - Demo</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/plugins/css/animate.min.css" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/plugins/css/owl.carousel.min.css" />
    <!-- Maginific Popup CSS -->
    <link rel="stylesheet" href="assets/plugins/css/maginific-popup.min.css" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/plugins/css/nice-select.min.css" />
    <!-- Icofont -->
    <link rel="stylesheet" href="assets/plugins/css/icofont.css" />
    <!-- Uicons -->
    <link rel="stylesheet" href="assets/plugins/css/uicons.css" />

        <!-- Main CSS -->
    <link rel="stylesheet" href="style.css" />

  <style>
    #countdown {
      font-size: 20px;
      font-weight: bold;
      border: 4px solid #faaf40;
      color: #ffffff;
      padding: 20px;
      display: inline-block;
      border-radius: 10px;
    }
    .time-box {
      display: inline-block;
      margin: 10px;
      padding: 15px;
      background: #ffffff;
      color: #ee4036;
      border-radius: 8px;
      font-size: 24px;
    }
  </style>
  </head>
  <body class="ep-magic-cursor">

<!-- Start Preloader  -->
<div id="preloader">
    <div id="ep-preloader" class="ep-preloader">
    <div class="animation-preloader">
        <div class="spinner"></div>
    </div>
    </div>
</div>
<!-- End Preloader -->
 <!-- Start Cursor To Top  -->
 <div class="cursor"></div>
    <div class="cursor2"></div>
    <!-- End Cursor To Top -->

    <!-- Start Begin Magic Cursor -->
    <div id="magic-cursor">
      <div id="ball"></div>
    </div>
    <!-- End Begin Magic Cursor -->


    <!-- Start Back To Top  -->
    <div class="progress-wrap">
        <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
        >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- End Back To Top -->

    <!-- Start Header Area -->
    <header class="ep-header position-relative section-bg-1">
      <!-- Topbar -->
      <div class="ep-topbar">
        <div class="container ep-container">
          <div class="row align-items-center">
            <div class="col-lg-2 col-6">
              <div class="ep-topbar__column">
                <div class="ep-logo">
                  <a href="javascript:void(0);">
                    <img src="assets/images/Logo.png" alt="logo" />
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-10 col-6">
              <div class="ep-topbar__column ep-topbar__column2">
                <a href="callto:+8801729277765" style="color: #102a71"><i class="fi fi-rr-phone-call"></i> +8801729277765</a>
              </div>
            </div>
        </div>
      </div>
      </div>
    </header>
    <!-- End Header Area -->

  
    <div id="smooth-wrapper">
      <div id="smooth-content">
        <main>
          <!-- Start Hero Area -->
          <section class="ep-hero section-bg" style="background: #102a71">
            <div class="container ep-container">
              <div class="row align-items-center">
                <div class="col-lg-2 col-xl-6 col-12">
                  <div class="ep-hero__content">
                    <h1 class="ep-hero__title" style="color: #faaf40">
                      Unlock Your Child’s Potential with Coding!
                    </h1>
                    <p class="ep-hero__text text-white">
                      Enroll in fun, interactive programming classes for ages 10-18. Submit your details, and we’ll get back to you!
                    </p>
                    <div class="ep-hero__btn">
                        <div class="row">
                          <div class="col-12 col-lg-12 col-md-12">
                            <h5 style="color: #ee4036; text-transform: uppercase; font-size: 46px">Offer ends in:</h5>
                            <div id="countdown">
                              <span class="time-box" id="days">00</span> D
                              <span class="time-box" id="hours">00</span> H
                              <span class="time-box" id="minutes">00</span> Min
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12 col-xl-6 col-12 order-top">
                  <div class="ep-contact__form">
                    <h3 class="ep-contact__form-title" style="background: #001840;
background: linear-gradient(to top right, #001840 45%, #102A71 40%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
                      Hurry Up! The slots are filling fast
                    </h3>
                      <?php
                      if($flag == 1){
                          ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Success!</strong> We have received your message and get back to you soon!
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          <?php
                      }
                      ?>
                      <form action="#" method="post">
                          <div class="form-group">
                              <label>Name</label>
                              <input
                                      type="text"
                                      id="name"
                                      name="name"
                                      placeholder="Enter Full Name"
                                      required
                                      autocomplete="off"
                              />
                          </div>
                          <div class="form-group">
                              <label>Your Number</label>
                              <input
                                      type="tel"
                                      id="phone"
                                      name="number"
                                      placeholder="Phone Number"
                                      required
                                      autocomplete="off"
                              />
                              <small id="error-message" style="color: red; display: none;">Invalid number! Must start with 01 and be 11 digits long.</small>
                          </div>
                          <button type="submit" class="ep-btn" name="form-submit" id="submit-btn" style="background: #ee4036" disabled>
                              Try a free class
                          </button>
                      </form>

                      <script>
                          document.getElementById("phone").addEventListener("keyup", validatePhone);
                          document.getElementById("phone").addEventListener("keydown", validatePhone);

                          function validatePhone() {
                              let phoneInput = document.getElementById("phone");
                              let submitButton = document.getElementById("submit-btn");
                              let errorMessage = document.getElementById("error-message");

                              let phonePattern = /^01\d{9}$/; // Must start with 01 and be 11 digits long

                              if (phonePattern.test(phoneInput.value)) {
                                  submitButton.disabled = false;
                                  errorMessage.style.display = "none";
                              } else {
                                  submitButton.disabled = true;
                                  errorMessage.style.display = "inline";
                              }
                          }
                      </script>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Start Hero Area -->

          <!-- Start Course Area -->
          <section class="ep-course section-gap section-bg-1 position-relative">
            <div class="ep-course__shapes">
              <img
                      class="shape-1 rotate-ani"
                      src="assets/images/course/course-1/shape-1.svg"
                      alt="shape-img-1"
              />
              <img
                      class="shape-2 updown-ani"
                      src="assets/images/course/course-1/shape-2.svg"
                      alt="shape-img-2"
              />
              <img
                      class="shape-3 updown-ani"
                      src="assets/images/course/course-1/shape-3.svg"
                      alt="shape-img-3"
              />
            </div>
            <div class="container ep-container">
              <div class="row">
                <div class="col-12">
                  <div class="ep-section-head d-flex-end-between">
                    <div class="ep-section-head__info">
                      <span class="ep-section-head__sm-title ep3-color"
                      >Popular Courses</span
                      >
                      <h3 class="ep-section-head__big-title ep-split-text left">
                        Access Our <span>Learning</span> <br />
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row flex align-items-center justify-content-center">
                <!-- Single Course Card -->
                <div class="col-lg-12 col-xl-12 col-md-12 col-12">
                  <div class="ep-course__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="ep-course__body">
                      <div class="ep-course__lesson">
                        <div class="ep-course__student">
                          <i class="fi-rr-user"></i>
                          <p>50+ Students</p>
                        </div>
                      </div>
                      <div class="ep-course__rattings">
                        <ul>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <span>(5.0/ 13 Ratings)</span>
                          </li>
                        </ul>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <a href="javascript:void(0);" class="ep-course__title" style="width: 100%">
                            <h5>Code Star</h5>
                            <div class="ep-faq__accordion faq-inner accordion mt-3">
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>01</span>Module One (HTML)
                                  </button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Web Development</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Basics of HTML : Structure and Syntax</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Elements and Tags</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Images and Multimedia</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Forms for User Input</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>02</span>Module Two (CSS)</button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Styling Text</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Fonts</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Colors</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Managing Layouts with CSS Box Model</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Responsive Designs</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>03</span>Module Three (Python)
                                  </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Python</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Variables</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Conditional Statements</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Loops</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>(OOP) in Python</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="ep-course__bottom">
                        <a href="javascript:void(0);" class="ep-course__btn" style="cursor: unset;"
                        >Duration: 3 Months
                        </a>
                        <span class="ep-course__price">BDT: <del>12,000</del> 4,800</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-xl-12 col-md-12 col-12">
                  <div class="ep-course__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="ep-course__body">
                      <div class="ep-course__lesson">
                        <div class="ep-course__student">
                          <i class="fi-rr-user"></i>
                          <p>150+ Students</p>
                        </div>
                      </div>
                      <div class="ep-course__rattings">
                        <ul>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <span>(5.0/ 13 Ratings)</span>
                          </li>
                        </ul>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <a href="javascript:void(0);" class="ep-course__title" style="width: 100%">
                            <h5>Code Craft</h5>
                            <div class="ep-faq__accordion faq-inner accordion mt-3">
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
                                    <span>01</span>Module One (HTML)
                                  </button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapseFour" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Web Development</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Basics of HTML : Structure and Syntax</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Elements and Tags</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Images and Multimedia</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Forms for User Input</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Designing Tables for Data Presentation</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>02</span>Module Two (CSS)</button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to CSS</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Inline vs. Internal vs. External Stylesheets</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Fonts</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Colors</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Styling Boxes and Layouts</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Adding Gradients and Images as Backgrounds</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Responsive Designs</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                    <span>03</span>Module Three (Scratch)
                                  </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Scratch</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Understanding Sprites and Backdrops</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Working with Motion and Events</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Using Loops and Conditions</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Creating Interactive Animations</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Building Fun Games and Projects</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
                                    <span>04</span>Module Four (Python)
                                  </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Python</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Conditional Statements in Python</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Using Loops for Iteration in Python</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Lists, Dictionaries, and Tuples</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Defining Classes and Objects in Python</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="ep-course__bottom">
                        <a href="javascript:void(0);" class="ep-course__btn" style="cursor: unset;"
                        >Duration: 6 Months
                        </a>
                        <span class="ep-course__price">BDT: <del>24,000</del> 9,600</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12 col-xl-12 col-md-12 col-12">
                  <div class="ep-course__card wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                    <div class="ep-course__body">
                      <div class="ep-course__lesson">
                        <div class="ep-course__student">
                          <i class="fi-rr-user"></i>
                          <p>50+ Students</p>
                        </div>
                      </div>
                      <div class="ep-course__rattings">
                        <ul>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <span>(5.0/ 13 Ratings)</span>
                          </li>
                        </ul>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <a href="javascript:void(0);" class="ep-course__title" style="width: 100%">
                            <h5>Code Master</h5>
                            <div class="ep-faq__accordion faq-inner accordion mt-3">
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseOne">
                                    <span>01</span>Module One (HTML)
                                  </button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapseEight" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Web Development</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Basics of HTML : Structure and Syntax</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Headings & Paragraphs</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Semantic HTML: Using semantic tags</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Semantic HTML: Using semantic tags</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Form Validation with HTML attributes</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Creating a contact form for a webpage</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>CSS Box Model: Margins, Borders, Padding</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Building Responsive Designs</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Front-End Design Framework (Bootstrap)</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingNine">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>02</span>Module Two (CSS)</button>
                                </h2>
                                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Styling Text</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Fonts</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Colors</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Managing Layouts with CSS Box Model</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Responsive Designs</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingTen">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseThree">
                                    <span>03</span>Module Three (Python)
                                  </button>
                                </h2>
                                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Python</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Variables</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Conditional Statements</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Loops</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>(OOP) in Python</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Reading from and Writing to Files</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Dictionary Manipulations and Methods</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                              <!-- Single Faq -->
                              <div class="ep-faq__accordion-item">
                                <h2 class="accordion-header" id="headingEleven">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseThree">
                                    <span>03</span>Module Four (Frameworks)
                                  </button>
                                </h2>
                                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                  <div class="ep-faq__accordion-body">
                                    <ul style="line-height: 2">
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Web Frameworks: Bootstrap</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Setting up Bootstrap Environment</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Creating Views</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Form Submission and Validation</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Working with Bootstrap Versions</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Setting up MySQL</li>
                                      <li><i class="fi fi-ss-check-circle pe-2"></i>Introduction to Deployment: Hosting Applications</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="ep-course__bottom">
                        <a href="javascript:void(0);" class="ep-course__btn" style="cursor: unset;"
                        >Duration: 12 Months
                        </a>
                        <span class="ep-course__price">BDT: <del>48,000</del> 19,200</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Course Area -->

          <!-- Start About Area -->
          <section class="ep-about ep-section section-gap position-relative">
            <div class="ep-about__shape updown-ani">
              <img
                src="assets/images/about/about-1/circle-shape.svg"
                alt="circle-shape"
              />
            </div>
            <div class="container ep-container">
              <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                  <div class="ep-section__img position-relative">
                    <div class="ep-section__img-shape rotate-ani">
                      <img
                        src="assets/images/about/about-1/pattern-shape.svg"
                        alt="pattern-shape"
                      />
                    </div>
                    <div class="ep-section__img-main">
                      <img
                        src="assets/images/about/about-1/about-img.png"
                        alt="about-img"
                      />
                    </div>
                    <div class="overview-card updown-ani">
                      <div class="overview-card__icon">
                        <img
                          src="assets/images/about/about-1/user.svg"
                          alt="user-icon"
                        />
                      </div>
                      <div class="overview-card__info">
                        <h4><span>300</span>+</h4>
                        <p>Students</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="ep-section__content">
                    <div class="ep-section-head">
                      <span class="ep-section-head__sm-title ep1-color"
                        >Know About Us</span
                      >
                      <h3 class="ep-section-head__big-title ep-split-text left">
                        Welcome to <span>FrogBid</span> <br />
                        Academy
                      </h3>
                      <p class="ep-section-head__text">
                        If your child is engaged in creative activities alongside academic learning from an early age, they can develop into open-minded individuals. Children have vivid imaginations, which makes them naturally inclined toward creative tasks.
                      </p>
                    </div>
                    <div class="ep-section__widget">
                      <div class="ep-feature-list">
                        <div class="ep-feature-list__icon">
                          <i class="fi fi-ss-check-circle"></i>
                        </div>
                        <div class="ep-feature-list__info">
                          <h5>Ensuring quality education in a fun and engaging way.</h5>
                        </div>
                      </div>
                      <div class="ep-feature-list">
                        <div class="ep-feature-list__icon">
                          <i class="fi fi-ss-check-circle"></i>
                        </div>
                        <div class="ep-feature-list__info">
                          <h5>Enhancing students' creativity, cognitive abilities, and technological skills.</h5>
                        </div>
                      </div>
                      <div class="ep-feature-list">
                        <div class="ep-feature-list__icon">
                          <i class="fi fi-ss-check-circle"></i>
                        </div>
                        <div class="ep-feature-list__info">
                          <h5>Providing guidance to improve both academic and creative learning skills.</h5>
                        </div>
                      </div>
                      <div class="ep-feature-list">
                        <div class="ep-feature-list__icon">
                          <i class="fi fi-ss-check-circle"></i>
                        </div>
                        <div class="ep-feature-list__info">
                          <h5>Class divisions based on age and cognitive abilities.</h5>
                        </div>
                      </div>
                      <div class="ep-feature-list">
                        <div class="ep-feature-list__icon">
                          <i class="fi fi-ss-check-circle"></i>
                        </div>
                        <div class="ep-feature-list__info">
                          <h5>Giving your child a competitive edge through skill development.</h5>
                        </div>
                      </div>

                    </div>
                    <div class="ep-section__btn">
                      <button onclick="scrollToTop();" class="ep-btn"
                        >Free Class
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Start About Area -->

          <div class="ep-section-bg bg-img-1">
            <!-- Start Faq Area -->
            <section class="ep-faq mg-top-80 position-relative">
              <div class="ep-faq__pattern-2 updown-ani">
                <img
                  src="assets/images/faq/faq-1/pattern-2.svg"
                  alt="pattern-2"
                />
              </div>
              <div class="container ep-container">
                <div class="ep-faq__inner position-relative">
                  <div class="ep-faq__pattern-1 rotate-ani">
                    <img
                      src="assets/images/faq/faq-1/pattern-1.svg"
                      alt="pattern-1"
                    />
                  </div>
                  <div class="row g-0 align-items-center">
                    <div class="col-lg-12 col-xl-6 col-12">
                      <div class="ep-faq__img">
                        <img
                          src="assets/images/faq/faq-1/faq-img.png"
                          alt="faq-img"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 col-12">
                      <div class="ep-faq__content">
                        <div class="ep-section-head">
                          <span class="ep-section-head__sm-title ep1-color"
                            >Faq</span
                          >
                          <h3
                            class="ep-section-head__big-title ep-split-text left"
                          >
                            Frequently <span>Asked</span> <br />
                            Questions and Answers
                          </h3>
                        </div>
                        <div class="ep-faq__accordion faq-inner accordion" id="accordionExample">
                          <!-- Single Faq -->
                          <div class="ep-faq__accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                              <button
                                class="accordion-button"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseOne"
                                aria-expanded="true"
                                aria-controls="collapseOne"
                              >
                                <span>01</span>What are the benefits of
                                education?
                              </button>
                            </h2>
                            <div
                              id="collapseOne"
                              class="accordion-collapse collapse show"
                              aria-labelledby="headingOne"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="ep-faq__accordion-body">
                                <p class="ep-faq__accordion-text">
                                  The generated is therefore always free from
                                  repetition is the injected humour or words
                                  etc.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- Single Faq -->
                          <div class="ep-faq__accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                              <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo"
                                aria-expanded="false"
                                aria-controls="collapseTwo"
                              >
                                <span>02</span>How can I find the program for
                                me?
                              </button>
                            </h2>
                            <div
                              id="collapseTwo"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingTwo"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="ep-faq__accordion-body">
                                <p class="ep-faq__accordion-text">
                                  The generated is therefore always free from
                                  repetition is the injected humour or words
                                  etc.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- Single Faq -->
                          <div class="ep-faq__accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                              <button
                                class="accordion-button collapsed"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-expanded="false"
                                aria-controls="collapseThree"
                              >
                                <span>03</span>Can I get financial for my
                                education?
                              </button>
                            </h2>
                            <div
                              id="collapseThree"
                              class="accordion-collapse collapse"
                              aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample"
                            >
                              <div class="ep-faq__accordion-body">
                                <p class="ep-faq__accordion-text">
                                  The generated is therefore always free from
                                  repetition is the injected humour or words
                                  etc.
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
            </section>
            <!-- End Faq Area -->
          </div>


          <!-- Start Testimonial Area -->
          <section class="ep-testimonial section-gap">
            <div class="container ep-container">
              <div class="row">
                <div class="col-12">
                  <div class="owl-carousel ep-testimonial__slider">
                    <!-- Single Testimonial -->
                    <div class="ep-testimonial__item position-relative">
                      <div class="ep-testimonial__rattings">
                        <ul>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star off-color"></i>
                          </li>
                        </ul>
                      </div>
                      <p class="ep-testimonial__desc">
                        Their product exceeded his my daily design routine
                        expectations wa The quality and heres attention to
                        detail were outstanding and it isi has become an
                        essential
                      </p>
                      <div class="ep-testimonial__author">
                        <div class="ep-testimonial__author-img">
                          <img
                            src="assets/images/testimonial/testimonial-1/author-1.png"
                            alt="author-img"
                          />
                        </div>
                        <div class="ep-testimonial__author-info">
                          <h5>Edward Ramirez</h5>
                          <p>CEO Of Google</p>
                        </div>
                      </div>
                      <div class="ep-testimonial__shape">
                        <img
                          src="assets/images/testimonial/testimonial-1/dot-shape.svg"
                          alt="dot-pattern"
                        />
                      </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="ep-testimonial__item position-relative">
                      <div class="ep-testimonial__rattings">
                        <ul>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star off-color"></i>
                          </li>
                        </ul>
                      </div>
                      <p class="ep-testimonial__desc">
                        Their product exceeded his my daily design routine
                        expectations wa The quality and heres attention to
                        detail were outstanding and it isi has become an
                        essential
                      </p>
                      <div class="ep-testimonial__author">
                        <div class="ep-testimonial__author-img">
                          <img
                            src="assets/images/testimonial/testimonial-1/author-2.png"
                            alt="author-img"
                          />
                        </div>
                        <div class="ep-testimonial__author-info">
                          <h5>Edward Ramirez</h5>
                          <p>CEO Of Google</p>
                        </div>
                      </div>
                      <div class="ep-testimonial__shape">
                        <img
                          src="assets/images/testimonial/testimonial-1/dot-shape.svg"
                          alt="dot-pattern"
                        />
                      </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="ep-testimonial__item position-relative">
                      <div class="ep-testimonial__rattings">
                        <ul>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star off-color"></i>
                          </li>
                        </ul>
                      </div>
                      <p class="ep-testimonial__desc">
                        Their product exceeded his my daily design routine
                        expectations wa The quality and heres attention to
                        detail were outstanding and it isi has become an
                        essential
                      </p>
                      <div class="ep-testimonial__author">
                        <div class="ep-testimonial__author-img">
                          <img
                            src="assets/images/testimonial/testimonial-1/author-1.png"
                            alt="author-img"
                          />
                        </div>
                        <div class="ep-testimonial__author-info">
                          <h5>Edward Ramirez</h5>
                          <p>CEO Of Google</p>
                        </div>
                      </div>
                      <div class="ep-testimonial__shape">
                        <img
                          src="assets/images/testimonial/testimonial-1/dot-shape.svg"
                          alt="dot-pattern"
                        />
                      </div>
                    </div>
                    <!-- Single Testimonial -->
                    <div class="ep-testimonial__item position-relative">
                      <div class="ep-testimonial__rattings">
                        <ul>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star"></i>
                          </li>
                          <li>
                            <i class="icofont-star off-color"></i>
                          </li>
                        </ul>
                      </div>
                      <p class="ep-testimonial__desc">
                        Their product exceeded his my daily design routine
                        expectations wa The quality and heres attention to
                        detail were outstanding and it isi has become an
                        essential
                      </p>
                      <div class="ep-testimonial__author">
                        <div class="ep-testimonial__author-img">
                          <img
                            src="assets/images/testimonial/testimonial-1/author-2.png"
                            alt="author-img"
                          />
                        </div>
                        <div class="ep-testimonial__author-info">
                          <h5>Edward Ramirez</h5>
                          <p>CEO Of Google</p>
                        </div>
                      </div>
                      <div class="ep-testimonial__shape">
                        <img
                          src="assets/images/testimonial/testimonial-1/dot-shape.svg"
                          alt="dot-pattern"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- End Testimonial Area -->
        </main>
      
         <!-- Start Footer Area -->
        <footer class="ep-footer position-relative">
          <div class="container ep-container">
            <div class="ep-footer__bottom">
              <div class="row flex align-items-center justify-content-center">
                <div class="col-lg-6 col-12">
                  <div class="ep-footer__copyright text-center">
                    <p>©<a target="_blank" href="https://frogbidacademy.com">FrogBID Academy</a> 2025 | All Rights Reserved</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ep-footer__pattern">
            <img
              src="assets/images/footer/footer-pattern.png"
              alt="footer-pattern"
            />
          </div>
        </footer>
        <!-- End Footer Area -->        
      </div>
    </div>
    <!-- Footer Scripts -->

    
    <!-- Jquery JS -->
    <script src="assets/plugins/js/jquery.min.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <script src="assets/plugins/js/jquery-migrate.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- Bootstrap JS -->
    <script src="assets/plugins/js/bootstrap.min.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- Gsap JS -->
    <script src="assets/plugins/js/gsap/gsap.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <script src="assets/plugins/js/gsap/gsap-scroll-to-plugin.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <script src="assets/plugins/js/gsap/gsap-scroll-smoother.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <script src="assets/plugins/js/gsap/gsap-scroll-trigger.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <script src="assets/plugins/js/gsap/gsap-split-text.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- Wow JS -->
    <script src="assets/plugins/js/wow.min.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/plugins/js/owl.carousel.min.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/plugins/js/magnific-popup.min.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- CounterUp  JS -->
    <script src="assets/plugins/js/jquery.counterup.min.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <script src="assets/plugins/js/waypoints.min.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- Nice Select JS -->
    <script src="assets/plugins/js/nice-select.min.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- Cursor JS -->
    <script src="assets/plugins/js/ep-cursor.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
    <!-- Back To Top JS -->
    <script src="assets/plugins/js/backToTop.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
        <!-- Main JS -->
    <script src="assets/plugins/js/active.js" type="8fb86279f2fa6d7f83afd904-text/javascript"></script>
  <script src="cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="8fb86279f2fa6d7f83afd904-|49" defer></script>


  <script>
    function scrollToTop() {
      window.scrollTo({top: 0, behavior: "smooth"});
    }
      // Set your target date here (YYYY-MM-DD HH:MM:SS format)
      const targetDate = new Date("2025-03-20 00:00:00").getTime();

      function updateCountdown() {
      const now = new Date().getTime();
      const difference = targetDate - now;

      if (difference > 0) {
      const days = Math.floor(difference / (1000 * 60 * 60 * 24));
      const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((difference % (1000 * 60)) / 1000);

      document.getElementById("days").innerText = days.toString().padStart(2, '0');
      document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
      document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
      document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');
    } else {
      document.getElementById("countdown").innerHTML = "🎉 The event has started! 🎉";
      clearInterval(countdownInterval);
    }
    }

      // Update the countdown every second
      const countdownInterval = setInterval(updateCountdown, 1000);
      updateCountdown(); // Initial call to avoid 1-sec delay
</script>
  </body>
</html>
