<!doctype html>
<html lang="en">
  <head>
    <title>Curriculum Vitae</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    <!-- Vendor CSS Files and Template Main CSS File-->
    <?php include "/linkcss.php" ?> 
  </head>
  <body id ="page-top">
    <?php include "header_admin.php" ?>
      <div id="home" class="intro route bg-image" style="background-image: url(resources/img/1130.jpg)">
        <div class="overlay-itro"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <h1 class="intro-title mb-4">Hello, We are Ta Anh Tu and Hoang Van Son</h1>
              <p class="intro-subtitle"><span class="text-slider-items">Welcome,to,our,demo,CV</span><strong class="text-slider"></strong></p>
            </div>
          </div>
        </div>
      </div>
      <main id="main">
      <section id="about" class="about-mf sect-pt4 route">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col-sm-6 col-md-5">
                        <div class="about-img">
                          <img src="/resources/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-7">
                        <div class="about-info">
                        <?php
                          //1. Kết nối database
                          include "/database/connect.php";
                          //2. Khai báo truy vấn
                          $sql1="SELECT * from users where userId = 3";
                          $result1 = mysqli_query($conn,$sql1);
                          $users1 = mysqli_fetch_all($result1);
                          
                      ?>
                          <p><span class="title-s">Name: </span><?php foreach($users1 as $user1) echo $user1[1]?><span></span></p>
                          <p><span class="title-s">Carrer: </span> <span><?php foreach($users1 as $user1) echo $user1[7]?></span></p>
                          <p><span class="title-s">Email: </span> <span><?php foreach($users1 as $user1) echo $user1[4]?></span></p>
                          <p><span class="title-s">Phone: </span> <?php foreach($users1 as $user1) echo $user1[8]?></span></p>
                        </div>
                      </div>
                    </div>
                    <div class="skill-mf">
                      <?php
                          //1. Kết nối database
                          include "/database/connect.php";
                          //2. Khai báo truy vấn
                          $sql2="SELECT * from skills where skillId = 1";
                          $result2 = mysqli_query($conn,$sql2);
                          $users2 = mysqli_fetch_all($result2);
                          $sql3="SELECT * from skills where skillId = 2";
                          $result3 = mysqli_query($conn,$sql3);
                          $users3 = mysqli_fetch_all($result3);
                          $sql4="SELECT * from skills where skillId = 3";
                          $result4 = mysqli_query($conn,$sql4);
                          $users4 = mysqli_fetch_all($result4);
                          $sql5="SELECT * from skills where skillId = 4";
                          $result5 = mysqli_query($conn,$sql5);
                          $users5 = mysqli_fetch_all($result5); 
                      ?>
                      <!-- //3. Xử lý kết quả -->
                      <p class="title-s">Skill</p>
                      <span><?php foreach($users2 as $user2) echo $user2[1]?></span> <span class="pull-right"><?php foreach($users2 as $user2) echo $user2[2]?></span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php foreach($users2 as $user2) echo $user2[2]?>;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span><?php foreach($users3 as $user3) echo $user3[1]?></span> <span class="pull-right"><?php foreach($users3 as $user3) echo $user3[2]?></span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php foreach($users3 as $user3) echo $user3[2]?>" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span><?php foreach($users4 as $user4) echo $user4[1]?></span> <span class="pull-right"><?php foreach($users4 as $user4) echo $user4[2]?></span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php foreach($users4 as $user4) echo $user4[2]?>" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span><?php foreach($users5 as $user5) echo $user5[1]?></span> <span class="pull-right"><?php foreach($users5 as $user5) echo $user5[2]?></span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php foreach($users5 as $user5) echo $user5[2]?>" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="about-me pt-4 pt-md-0">
                      <div class="title-box-2">
                        <h5 class="title-left">
                          About us
                        </h5>
                      </div>
                      <p class="lead">
                      <?php foreach($users1 as $user1) echo $user1[9]?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======= Services Section ======= -->
      <?php
      $sql6="SELECT * from services where serviceId = 1";
      $result6 = mysqli_query($conn,$sql6);
      $users6 = mysqli_fetch_all($result6);
      $sql7="SELECT * from services where serviceId = 2";
      $result7 = mysqli_query($conn,$sql7);
      $users7 = mysqli_fetch_all($result7);
      $sql8="SELECT * from services where serviceId = 3";
      $result8 = mysqli_query($conn,$sql8);
      $users8 = mysqli_fetch_all($result8);
      $sql9="SELECT * from services where serviceId = 4";
      $result9 = mysqli_query($conn,$sql9);
      $users9 = mysqli_fetch_all($result9);
      $sql10="SELECT * from services where serviceId = 5";
      $result10 = mysqli_query($conn,$sql10);
      $users10 = mysqli_fetch_all($result10);
      $sql11="SELECT * from services where serviceId = 6";
      $result11 = mysqli_query($conn,$sql11);
      $users11 = mysqli_fetch_all($result11);
    ?> 
    <section id="service" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <p class="subtitle-a">
                What I provide
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-monitor"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"> <?php foreach($users6 as $user6) echo $user6[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users6 as $user6) echo $user6[2]?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-code-working"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"> <?php foreach($users7 as $user7) echo $user7[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users7 as $user7) echo $user7[2]?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="fas fa-chart-line"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php foreach($users8 as $user8) echo $user8[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users8 as $user8) echo $user8[2]?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php foreach($users9 as $user9) echo $user9[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users9 as $user9) echo $user9[2]?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-paintbrush"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php foreach($users10 as $user10) echo $user10[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users10 as $user10) echo $user10[2]?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="ion-stats-bars"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title"><?php foreach($users11 as $user11) echo $user11[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users11 as $user11) echo $user11[2]?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
        <?php
              $sql12="SELECT * from achievement where achievementId = 1";
              $result12 = mysqli_query($conn,$sql12);
              $users12 = mysqli_fetch_all($result12);
              $sql13="SELECT * from achievement where achievementId = 2";
              $result13 = mysqli_query($conn,$sql13);
              $users13 = mysqli_fetch_all($result13);
              $sql14="SELECT * from achievement where achievementId = 3";
              $result14 = mysqli_query($conn,$sql14);
              $users14 = mysqli_fetch_all($result14);
              $sql15="SELECT * from achievement where achievementId = 4";
              $result15 = mysqli_query($conn,$sql15);
              $users15 = mysqli_fetch_all($result15);
        ?>
    <div class="section-counter paralax-mf bg-image" style="background-image: url(resources/img/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php foreach($users12 as $user12) echo $user12[2]?></p>
                <span class="counter-text"><?php foreach($users12 as $user12) echo $user12[1]?></span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php foreach($users13 as $user13) echo $user13[2]?></p>
                <span class="counter-text"><?php foreach($users13 as $user13) echo $user13[1]?></span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php foreach($users14 as $user14) echo $user14[2]?></p>
                <span class="counter-text"><?php foreach($users14 as $user14) echo $user14[1]?></span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php foreach($users15 as $user15) echo $user15[2]?></p>
                <span class="counter-text"><?php foreach($users15 as $user15) echo $user15[1]?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->
    <section id="resume"  class="services-mf pt-5 route">
            <?php
              $sql16="SELECT * from history where historyId = 1";
              $result16 = mysqli_query($conn,$sql16);
              $users16 = mysqli_fetch_all($result16);
              $sql17="SELECT * from history where historyId= 2";
              $result17 = mysqli_query($conn,$sql17);
              $users17 = mysqli_fetch_all($result17);
              $sql18="SELECT * from history where historyId = 3";
              $result18 = mysqli_query($conn,$sql18);
              $users18 = mysqli_fetch_all($result18);
              $sql19="SELECT * from history where historyId = 4";
              $result19 = mysqli_query($conn,$sql19);
              $users19 = mysqli_fetch_all($result19);
            ?> 
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Work History
                            </h3>
                            <p class="subtitle-b">
                            What I do
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="ion-monitor"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title"><?php foreach($users16 as $user16) echo $user16[1]?></span></h2>
                                <p class="s-description text-center">
                                <?php foreach($users16 as $user16) echo $user16[2]?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="ion-code-working"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title"><?php foreach($users17 as $user17) echo $user17[1]?></h2>
                                <p class="s-description text-center">
                                <?php foreach($users17 as $user17) echo $user17[2]?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="ion-camera"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title"><?php foreach($users18 as $user18) echo $user18[1]?></h2>
                                <p class="s-description text-center">
                                <?php foreach($users18 as $user18) echo $user18[2]?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="service-box">
                            <div class="service-ico">
                                <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
                            </div>
                            <div class="service-content">
                                <h2 class="s-title"><?php foreach($users19 as $user19) echo $user19[1]?></h2>
                                <p class="s-description text-center">
                                <?php foreach($users19 as $user19) echo $user19[2]?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- End Services Section -->
        <!--TimeLine-->
        <div class="container">
            <?php
              $sql20="SELECT * from education_history where educationId = 1";
              $result20 = mysqli_query($conn,$sql20);
              $users20 = mysqli_fetch_all($result20);
              $sql21="SELECT * from education_history where educationId = 2";
              $result21 = mysqli_query($conn,$sql21);
              $users21 = mysqli_fetch_all($result21);
              $sql22="SELECT * from education_history where educationId = 3";
              $result22 = mysqli_query($conn,$sql22);
              $users22 = mysqli_fetch_all($result22);
              $sql23="SELECT * from education_history where educationId = 4";
              $result23 = mysqli_query($conn,$sql23);
              $users23 = mysqli_fetch_all($result23);
            ?> 
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            Education History
                        </h3>
                        <p class="subtitle-b">
                            What I learn
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="main-timeline">
                <!-- start experience section-->
                <div class="row">
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                                <span class="month"><?php foreach($users20 as $user20) echo $user20[4]?></span>
                                <span class="year"><?php foreach($users20 as $user20) echo $user20[3]?></span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title"><?php foreach($users20 as $user20) echo $user20[1]?></h5>
                            <p class="description">
                            <?php foreach($users20 as $user20) echo $user20[2]?>
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                                <span class="month"><?php foreach($users21 as $user21) echo $user21[4]?></span>
                                <span class="year"><?php foreach($users21 as $user21) echo $user21[3]?></span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title"><?php foreach($users21 as $user21) echo $user21[1]?></h5>
                            <p class="description">
                            <?php foreach($users21 as $user21) echo $user21[2]?>
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                <span class="month"><?php foreach($users22 as $user22) echo $user22[4]?></span>
                                <span class="year"><?php foreach($users22 as $user22) echo $user22[3]?></span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title"><?php foreach($users22 as $user22) echo $user22[1]?></span></h5>
                            <p class="description">
                            <?php foreach($users22 as $user22) echo $user22[2]?></span>
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->

                    <!-- start experience section-->
                    <div class="timeline">
                        <div class="icon"></div>
                        <div class="date-content">
                            <div class="date-outer">
                                <span class="date">
                                <span class="month"><?php foreach($users23 as $user23) echo $user23[4]?></span>
                                <span class="year"><?php foreach($users23 as $user23) echo $user23[3]?></span>
                                </span>
                            </div>
                        </div>
                        <div class="timeline-content">
                            <h5 class="title"><?php foreach($users23 as $user23) echo $user23[1]?></h5>
                            <p class="description">
                            <?php foreach($users23 as $user23) echo $user23[2]?>
                            </p>
                        </div>
                    </div>
                    <!-- end experience section-->
                </div>
            </div>
        </div>
      </section>
    <!--end timeline-->
      <!-- Team Section -->
      <section id="team">
        <div class="testimonials paralax-mf bg-image" style="background-image: url(resources/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <?php
              $sql24="SELECT * from teams where teamId = 1";
              $result24 = mysqli_query($conn,$sql24);
              $users24 = mysqli_fetch_all($result24);
              $sql25="SELECT * from teams where teamId = 2";
              $result25 = mysqli_query($conn,$sql25);
              $users25 = mysqli_fetch_all($result25);
            ?>
            <div class="row">
            <div class="col-md-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Our team
                    </h3>
                    <p class="subtitle-b">
                        Include
                    </p>
                    <div class="line-bf"></div>
                <div id="testimonial-mf" class="owl-carousel owl-theme">
                <div class="testimonial-box">
                    <div class="author-test">
                    <img src="/resources/img/testimonial-2.jpg" alt="" class="rounded-circle b-shadow-a">
                    <span class="author"><?php foreach($users24 as $user24) echo $user24[1]?></span>
                    </div>
                    <div class="content-test">
                    <p class="description lead">
                      <?php foreach($users24 as $user24) echo $user24[2]?>
                    </p>
                    <span class="comit"><i class="fa fa-quote-right"></i></span>
                    </div>
                </div>
                <div class="testimonial-box">
                    <div class="author-test">
                    <img src="/resources/img/testimonial-4.jpg" alt="" class="rounded-circle b-shadow-a"></a>
                    <span class="author"><?php foreach($users25 as $user25) echo $user25[1]?></span>
                    </div>
                    <div class="content-test">
                    <p class="description lead">
                      <?php foreach($users25 as $user25) echo $user25[2]?>
                    </p>
                    <span class="comit"><i class="fa fa-quote-right"></i></span>
                    </div>
                </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
      </section><!-- End Team Section -->
      <!-- Work Section -->
        <section id="work" class="portfolio-mf sect-pt4 route">
        <?php
              $sql26="SELECT * FROM `product`,`product_detail` WHERE product.productId=product_detail.productId and pro_detailID = 1";
              $result26 = mysqli_query($conn,$sql26);
              $users26 = mysqli_fetch_all($result26);
              $sql27="SELECT * FROM `product`,`product_detail` WHERE product.productId=product_detail.productId and pro_detailID = 2";
              $result27 = mysqli_query($conn,$sql27);
              $users27 = mysqli_fetch_all($result27);
              $sql28="SELECT * FROM `product`,`product_detail` WHERE product.productId=product_detail.productId and pro_detailID = 3";
              $result28 = mysqli_query($conn,$sql28);
              $users28 = mysqli_fetch_all($result28);
              $sql29="SELECT * FROM `product`,`product_detail` WHERE product.productId=product_detail.productId and pro_detailID = 4";
              $result29 = mysqli_query($conn,$sql29);
              $users29 = mysqli_fetch_all($result29);
              $sql30="SELECT * FROM `product`,`product_detail` WHERE product.productId=product_detail.productId and pro_detailID = 5";
              $result30 = mysqli_query($conn,$sql30);
              $users30 = mysqli_fetch_all($result30);
              $sql31="SELECT * FROM `product`,`product_detail` WHERE product.productId=product_detail.productId and pro_detailID = 6";
              $result31 = mysqli_query($conn,$sql31);
              $users31 = mysqli_fetch_all($result31);
               ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Work
                            </h3>
                            <p class="subtitle-a">
                                Our product
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="/resources/img/work-1.jpg" data-gall="portfolioGallery" class="venobox">
                                <div class="work-img">
                                    <img src="/resources/img/work-1.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title"><?php foreach($users26 as $user26) echo $user26[1]?></h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"><?php foreach($users26 as $user26) echo $user26[10]?></span> / 
                                            <span class="w-date"><?php foreach($users26 as $user26) echo $user26[3]?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                         <?php echo "<a href='product_details.php?id=".$user26[5]."'><span class='ion-ios-plus-outline'></span></a>"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="resources/img/work-2.jpg" data-gall="portfolioGallery" class="venobox">
                                <div class="work-img">
                                    <img src="/resources/img/work-2.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title"><?php foreach($users27 as $user27) echo $user27[1]?></h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"><?php foreach($users27 as $user27) echo $user27[10]?></span> /
                                             <span class="w-date"><?php foreach($users27 as $user27) echo $user27[3]?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                        <?php echo "<a href='product_details.php?id=".$user27[5]."'><span class='ion-ios-plus-outline'></span></a>"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="resources/img/work-3.jpg" data-gall="portfolioGallery" class="venobox">
                                <div class="work-img">
                                    <img src="/resources/img/work-3.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title"><?php foreach($users28 as $user28) echo $user28[1]?></h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"><?php foreach($users28 as $user28) echo $user28[10]?></span> /
                                            <span class="w-date"><?php foreach($users28 as $user28) echo $user28[3]?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                        <?php echo "<a href='product_details.php?id=".$user28[5]."'><span class='ion-ios-plus-outline'></span></a>"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="resources/img/work-4.jpg" data-gall="portfolioGallery" class="venobox">
                                <div class="work-img">
                                    <img src="/resources/img/work-4.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title"><?php foreach($users29 as $user29) echo $user29[1]?></h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"><?php foreach($users29 as $user29) echo $user29[10]?></span> /
                                            <span class="w-date"><?php foreach($users29 as $user29) echo $user29[3]?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                        <?php echo "<a href='product_details.php?id=".$user29[5]."'><span class='ion-ios-plus-outline'></span></a>"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="resources/img/work-5.jpg" data-gall="portfolioGallery" class="venobox">
                                <div class="work-img">
                                    <img src="/resources/img/work-5.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title"><?php foreach($users30 as $user30) echo $user30[1]?></h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"><?php foreach($users30 as $user30) echo $user30[10]?></span> /
                                            <span class="w-date"><?php foreach($users30 as $user30) echo $user30[3]?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                        <?php echo "<a href='product_details.php?id=".$user30[5]."'><span class='ion-ios-plus-outline'></span></a>"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="resources/img/work-6.jpg" data-gall="portfolioGallery" class="venobox">
                                <div class="work-img">
                                    <img src="/resources/img/work-6.jpg" alt="" class="img-fluid">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title"><?php foreach($users31 as $user31) echo $user31[1]?></h2>
                                        <div class="w-more">
                                            <span class="w-ctegory"><?php foreach($users31 as $user31) echo $user31[10]?></span> /
                                            <span class="w-date"><?php foreach($users31 as $user31) echo $user31[3]?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                        <?php echo "<a href='product_details.php?id=".$user30[5]."'><span class='ion-ios-plus-outline'></span></a>"?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Work Section -->
        <!-- Contact Section -->
        <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(resources/img/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        Send Message Us
                      </h5>
                    </div>
                    <?php include "/contact.php"?>
                    <div>
                      <form action="#contact" method="post" role="form">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                              <div class="validate"></div>
                            </div>
                          </div>
                          <div class="col-md-12 text-center">
                            <input type="submit" name="submit" class="btn btn-primary"value='Send Message'>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>                  
                    <div class="more-info">
                      <p class="lead">
                      <?php foreach($users1 as $user1) echo $user1[10]?>
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> <?php foreach($users1 as $user1) echo $user1[3]?></li>
                        <li><span class="ion-ios-telephone"></span> <?php foreach($users1 as $user1) echo $user1[8]?></li>
                        <li><span class="ion-email"></span> <?php foreach($users1 as $user1) echo $user1[4]?></li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
    </main>
    <!-- ======= Footer ======= -->
    <?php
        include "footer_admin.php"
    ?><!-- End  Footer -->
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>
      <!-- Vendor JS Files and Template Main JS File  -->
    <?php include "/linkjs.php" ?>
  </body>
</html>