<?php
include 'includes/db.php';
include 'includes/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CSEMN-วิทยาลัยเสริมทักษะพระภิกษุ สามเณร</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="mainpage.html" class="logo">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h6><img src="assets/img/csemnicon.png">วิทยาลัยเสริมทักษะพระภิกษุ สามเณร</h6>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">หน้าหลัก</a></li>
          <li><a href="#about">ข้อมูลวิทยาลัย</a></li>
          <li><a href="#services">แผนกวิชา</a></li>
          <li class="dropdown"><a href="#team">คณะผู้บริหาร</a></li>
          <li class="dropdown"><a href="blog.html" target="_blank">ข่าวสารวิทยาลัย</a>
            <ul>
              <li>
              <li><a href="varasan.html" target="_blank">วารสารข่าว</a></li>
          </li>
        </ul>
        </li>
        <li class="dropdown"><a href="#"><span>เอกสารดาวน์โหลด</span> </i></a>
          <ul>
            <li><a href="เอกสารดาว์นโหลด/แบบฟอร์มลาค้างคืน.pdf" target="_blank">ใบลาค้างคืน(สำหรับพระภิกษุ/สามเณร)</a>
            </li>
            <li><a href="เอกสารดาว์นโหลด/ใบทำทัณฑ์บน.doc" target="_blank">ใบทำทัณฑ์บน</a></li>
            <li><a href="เอกสารดาว์นโหลด/ใบสมัคร ปวช 1 2564.pdf" target="_blank">ใบสมัครเรียนระดับ ปวช.</a></li>
            <li><a href="เอกสารดาว์นโหลด/ใบสมัคร ปวส 1 2564.pdf" target="_blank">ใบสมัครเรียนระดับ ปวส.</a></li>
            <li><a href="เอกสารดาว์นโหลด/เอกสารขอเปลี่ยนแปลงข้อมูลผู้ปกครอง.pdf"
                target="_blank">เอกสารขอเปลี่ยนแปลงข้อมูลผู้ปกครอง</a></li>
          </ul>
        </li>
        <li><a href="#contact">ติดต่อ</a></li>
        <div class="icon">
          <a href="loginform.html"><i class="bi bi-person-square"></i></a>
        </div>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><img src="<?php echo renderShortcode('Banner', 'Banner1'); ?>" alt=""></h2>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><img src="<?php echo renderShortcode('Banner', 'Banner2'); ?>" alt=""></h2>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><img
                src="<?php echo renderShortcode('Banner', 'Banner3'); ?>" alt=""></h2>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><img src="<?php echo renderShortcode('Banner', 'Banner4'); ?>" alt=""></h2>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><img
                src="<?php echo renderShortcode('Banner', 'Banner5'); ?>"
                alt=""></h2>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><img src="<?php echo renderShortcode('Banner', 'Banner6'); ?>" alt=""></h2>
          </div>
        </div>


        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h1>ข้อมูลวิทยาลัย</h1>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>ข้อมูลพื้นฐาน9ประการ</p>
            <ul>
              <li><a href="ข้อมูล9ด้าน/2566/ด้านที่ 1 ข้อมูลสถานศึกษา.pdf" target="_blank">ข้อมูลสถานศึกษา</a></li>
              <li><a href="ข้อมูล9ด้าน/2566/ด้านที่ 2 ข้อมูลบุคลากร.pdf" target="_blank">ข้อมูลบุคลากร</a></li>
              <li><a href="ข้อมูล9ด้าน/2566/ด้านที่ 3 ข้อมูลด้านนักเรียน นักศึกษา.pdf" target="_blank">ข้อมูลนักเรียน
                  นักศึกษา</a></li>
              <li><a href="#" target="_blank">หลักสูตรที่เปิดสอน</a></li>
              <li><a href="#" target="_blank">ข้อมูลตลาดแรงงาน</a></li>
              <li><a href="#" target="_blank">ข้อมูลงบประมาณและการเงิน</a></li>
              <li><a href="ข้อมูล9ด้าน/2566/ด้านที่ 7 ข้อมูลครุภัณฑ์.pdf" target="_blank">ข้อมูลครุภัณฑ์</a></li>
              <li><a href="#" target="_blank">ข้อมูลด้านอาคารสถานที่</a></li>
              <li><a href="ข้อมูล9ด้าน/2566/ด้านที่ 9 ข้อมูลจังหวัด.pdf"
                  target="_blank">ข้อมูลจังหวัดพระนครศรีอยุธยา</a></li>
            </ul>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.3276950558734!2d100.57478007414262!3d14.23409638594655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2782a55fea11b%3A0x7c6580e9ce02d08d!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4Liq4Lij4Li04Lih4LiX4Lix4LiB4Lip4Liw4Lie4Lij4Liw4Lig4Li04LiB4Lip4Li44LmB4Lil4Liw4Liq4Liy4Lih4LmA4LiT4Lij!5e0!3m2!1sth!2sth!4v1725354292763!5m2!1sth!2sth"
              width="500" height="330" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
    </section><!-- /About Section -->
    <!-- Features Section -->
    <section id="features" class="features section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="container2">
              <style>
                .container2 {
                  /* border: 3px solid yellowgreen; */
                  width: 800px;
                  /* margin: 100px; */
                  height: 75%;
                }
              </style>
              <h2>ข่าวประชาสัมพันธ์</h2>
              <div class="row gy-4">
                <div class="col-lg-4">
                  <article>

                    <div class="post">
                      <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์1'); ?>"
                        target="_blank"><img src="<?php echo renderShortcode('Other', 'ข่าวประข่าวประชาสัมพันธ์ช่อง1'); ?>" alt=""
                          class="img-fluid"></a>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="post">
                        <a
                          href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์1'); ?>"><?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์1', 'description'); ?></a>
                      </div>
                    </div>

                  </article>
                </div><!-- End post list item -->
                <div class="col-lg-4">
                  <article>

                    <div class="post">
                      <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่2'); ?>" target="_blank"><img
                          src="<?php echo renderShortcode('Other', 'ข่าวประข่าวประชาสัมพันธ์ช่อง2'); ?>" alt="" class="img-fluid"></a>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="post">
                        <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่2'); ?>"><?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่2', 'description'); ?></a>
                        </p>
                      </div>
                    </div>

                  </article>
                </div><!-- End post list item -->
                <div class="col-lg-4">
                  <article>

                    <div class="post">
                      <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่3'); ?>" target="_blank"><img
                          src="<?php echo renderShortcode('Other', 'ข่าวประข่าวประชาสัมพันธ์ช่อง3'); ?>" alt="" class="img-fluid"></a>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="post">
                        <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่3'); ?>"><?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่3', 'description'); ?></a>
                      </div>
                    </div>

                  </article>
                </div><!-- End post list item -->
                <div class="col-lg-4">
                  <article>

                    <div class="post">
                      <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่4'); ?>" target="_blank"><img
                          src="<?php echo renderShortcode('Other', 'ข่าวประข่าวประชาสัมพันธ์ช่อง4'); ?>" alt="" class="img-fluid"></a>
                    </div>
                    <div class="d-flex align-items-center">
                      <div class="post">
                        <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่4'); ?>"> <?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่4', 'description'); ?></a>

                      </div>
                    </div>

                  </article>
                </div><!-- End post list item -->
                <div class="col-lg-4">
                  <article>

                    <div class="post">
                      <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่5'); ?>" target="_blank"><img
                          src="<?php echo renderShortcode('Other', 'ข่าวประข่าวประชาสัมพันธ์ช่อง5'); ?>" alt="" class="img-fluid"></a>

                    </div>
                    <div class="d-flex align-items-center">
                      <div class="post">
                        <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่5'); ?>"><?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่5', 'description'); ?></a>
                      </div>
                    </div>

                  </article>
                </div><!-- End post list item -->
                <div class="col-lg-4">
                  <article>

                    <div class="post">
                      <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่6'); ?>" target="_blank"><img
                          src="<?php echo renderShortcode('Other', 'ข่าวประข่าวประชาสัมพันธ์ช่อง6'); ?>" alt="" class="img-fluid"></a>

                    </div>
                    <div class="d-flex align-items-center">
                      <div class="post">
                        <a href="<?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่6'); ?>"><?php echo renderShortcode('MainDocument', 'ข่าวประชาสัมพันธ์ช่องที่6', 'description'); ?></a>

                      </div>
                    </div>
                  </article>
                </div><!-- End post list item -->
              </div>

            </div>

          </div>

          <div class="container1">
            <p style="color: #997144; font-size: 35px;text-align: center;">ตราวิทยาลัย</p>
            <img src="assets/img/csemnicon.png">
            <p style="color: green; font-size: 35px; text-align: start; border-top: 2px solid green;">ลิงค์</p>
            <a href="https://www.moe.go.th/" target="_blank"><img src="assets/img/กระทรวงศึกษา.png"></a>
            <a href="https://www.vec.go.th/" target="_blank"><img src="assets/img/สอศ.png" alt=""></a>
            <a href="https://std2018.vec.go.th/web/" target="_blank"><img src="assets/img/ศธ02.png" alt=""></a>
            <a href="https://sites.google.com/view/spscollege/%E0%B8%AB%E0%B8%99%E0%B8%B2%E0%B9%81%E0%B8%A3%E0%B8%81?authuser=0"
              target="_blank"><img src="assets/img/ประเมินการสอน.png" alt=""></a>
            <p style="color: #f30;font-size: 35px; text-align: center; border-top: 2px solid #f30;">สมัครเรียน</p>
            <img src="assets/img/สมัครเรียนปวช.png"><span>สมัครเรียนปวช.</span>
            <img src="assets/img/สมัครเรียนปวส.png"><span>สมัครเรียนปวส.</span>
            <img src="assets/img/ใบสมัครเรียนวิชาชีพ ระยะสั้น (ระบบออนไลน์).png"><span>สมัครเรียนหลักสูตรระยสั้น</span>
          </div>
          <style>
            .container1 {
              display: flex;
              flex-direction: column;
              align-items: center;
              /* จัดกึ่งกลางในแนวนอน */
              height: 0 auto;
              /* ความสูงของคอลัมน์ */
              border-left: 2px solid black;
              width: 25%;
              margin-left: auto;

            }
          </style>

        </div>
      </div>

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </section><!-- /Features Section -->



    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <!-- <h2>Services</h2> -->
        <h1>แผนกวิชา</h1>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">
          <h3>ประกาศนียบัตรวิชาชีพ(ปวช.)</h3>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-car-front-fill" style="color: #20c997;"></i>
              </div>
              <a href="chagyon.html" class="stretched-link">
                <h3>ช่างยนต์(ระดับ ปวช.)</h3>
              </a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-fire" style="color: #df1529;"></i>
              </div>
              <a href="changmetal.html" class="stretched-link">
                <h3>ช่างเชื่อมโลหะ(ระดับ ปวช.)</h3>
              </a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="bi bi-broadcast-pin" style="color: #0dcaf0;"></i>
              </div>
              <a href="teknoloyee.html" class="stretched-link">
                <h3>เทคโนโลยีสารสนเทศ(ระดับ ปวช.)</h3>
              </a>

            </div>
          </div><!-- End Service Item -->
          <h3>ประกาศนียบัตรวิชาชีพชั้นสูง(ปวส.)</h3>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-gear" style="color: #f3268c;"></i>
              </div>
              <a href="goun.html" class="stretched-link">
                <h3>เครื่องกล(ระดับ ปวส.)</h3>
              </a>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-wrench-adjustable" style="color: #6610f2;"></i>
              </div>
              <a href="tekaud.html" class="stretched-link">
                <h3>เทคนิคอุตสาหกรรม(ระดับ ปวส.)</h3>
              </a>

            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-pc-display" style="color: #fd7e14;"></i>
              </div>
              <a href="animetion.html" class="stretched-link">
                <h3>คอมพิวเตอร์เกมและแอนิเมชัน(ระดับ ปวส.)</h3>
              </a>

            </div>
          </div><!-- End Service Item -->

          <h3>แผนกสามัญสัมพันธ์</h3>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-book" style="color: #f3268c;"></i>
              </div>
              <a href="samansumpan.html" class="stretched-link">
                <h3>สามัญสัมพันธ์</h3>
              </a>
            </div>
          </div><!-- End Service Item -->

          <h3>แผนกเทคนิคพื้นฐาน</h3>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-gear-wide-connected" style="color: #f3268c;"></i>
              </div>
              <a href="taknikdefal.html" class="stretched-link">
                <h3>เทคนิคพื้นฐาน</h3>
              </a>

            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Portfolio Section -->


    <!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h1 style="text-align: center;">วิดิทัศน์แนะนำวิทยาลัย</h1>
        <p style="display: block; justify-content: center; text-align: center;"><iframe width="100%" height="600px"
            src="https://www.youtube.com/embed/czkqjzK1lzU?si=wPxdsBQV52BqB7-1" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></p>
      </div>
      </div>

    </section><!-- /Testimonials Section -->



    <!-- Faq Section -->
    <!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h1>คณะผู้บริหาร</h1>
      </div><!-- End Section Title -->

      <div class="container">
        <style>
          .container {
            justify-content: center;
            align-items: center;
            margin-right: auto;
          }

          .col-lg-3 {
            justify-content: center;
            align-items: center;
            margin-right: auto;
          }
        </style>
        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo renderShortcode('Executive', 'ผู้อำนวยการวิทยาลัยเสริมทักษะพระภิกษุ สามเณร'); ?>" class="img-fluid" alt="">
                <style>
                </style>
              </div>
              <div class="member-info">
                <h4><?php echo renderShortcode('Executive', 'ผู้อำนวยการวิทยาลัยเสริมทักษะพระภิกษุ สามเณร', 'description'); ?></h4>
                <span>ผู้อำนวยการวิทยาลัยเสริมทักษะพระภิกษุ สามเณร</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo renderShortcode('Executive', 'รองผู้อำนวยการฝ่ายวิชาการ รองผู้อำนวยการฝ่ายบริหารทรัพยากร'); ?>" class="img-fluid" alt="">

              </div>
              <div class="member-info">
                <h4><?php echo renderShortcode('Executive', 'รองผู้อำนวยการฝ่ายวิชาการ รองผู้อำนวยการฝ่ายบริหารทรัพยากร', 'description'); ?></h4>
                <span>รองผู้อำนวยการฝ่ายวิชาการ</span>
                <span>รองผู้อำนวยการฝ่ายบริหารทรัพยากร</span>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo renderShortcode('Executive', 'รองผู้อำนวยการฝ่ายแผนงานและความร่วมมือ รองผู้อำนวยการฝ่ายพัฒนากิจการนักเรียน นักศึกษา'); ?>" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4><?php echo renderShortcode('Executive', 'รองผู้อำนวยการฝ่ายแผนงานและความร่วมมือ รองผู้อำนวยการฝ่ายพัฒนากิจการนักเรียน นักศึกษา', 'description'); ?></h4>
                <span>รองผู้อำนวยการฝ่ายแผนงานและความร่วมมือ</span>
                <span>รองผู้อำนวยการฝ่ายพัฒนากิจการนักเรียน นักศึกษา</span>
              </div>
            </div>
          </div><!-- End Team Member -->


        </div>

      </div>

    </section><!-- /Team Section -->



    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h1>ติดต่อทาง E-mail</h1>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>ที่อยู่</h3>
                <p>60 ม.12 ตำบลบ้านเลน อำเภอบางปะอิน จังหวัดพระนครศรีอยุธยา 13160</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>โทรศัพท์</h3>
                <p>0 35902606</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>E-mail</h3>
                <p>spsc@csemn.mail.go.th</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
              data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">ส่ง E-mail</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">วิทยาลัยเสริมทักษะพระภิกษุ สามเณร</h3>
      <p>60 ม.12 ตำบลบ้านเลน อำเภอบางปะอิน จังหวัดพระนครศรีอยุธยา 13160

        โทรศัพท์: 0 35902606

        E-mail : spsc@csemn.mail.go.th</p>
      <div class="social-links d-flex justify-content-center">
        <a href="https://www.facebook.com/spscollege.ac.th" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://line.me/R/ti/p/%40034klvzj" target="_blank"><i class="bi bi-line"></i></a>
        <a href="https://www.youtube.com/@%E0%B8%A7%E0%B8%B4%E0%B8%97%E0%B8%A2%E0%B8%B2%E0%B8%A5%E0%B8%B1%E0%B8%A2%E0%B9%80%E0%B8%AA%E0%B8%A3%E0%B8%B4%E0%B8%A1%E0%B8%97%E0%B8%B1%E0%B8%81%E0%B8%A9%E0%B8%B0%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%A0%E0%B8%B4%E0%B8%81%E0%B8%A9%E0%B8%B8%E0%B8%AA%E0%B8%B2%E0%B8%A1%E0%B9%80" target="_blank"><i class="bi bi-youtube"></i></a>
      </div>
      <div class="container">

        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
