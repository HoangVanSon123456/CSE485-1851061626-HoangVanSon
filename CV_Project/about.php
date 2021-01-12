<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About me</title>
  <!-- Vendor CSS Files and Template Main CSS File-->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <?php include "linkcss.php" ?>
</head>
<body id ="page-top" >
  <?php  
    include "header.php"
  ?>
  <br> <br>
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
                          <img src="resources/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-7">
                        <div class="about-info">
                        <?php
                          //1. Kết nối database
                          include "config.php";
                          //2. Khai báo truy vấn
                          $sql15="SELECT * from user where id = 1";
                          $result15 = mysqli_query($link,$sql15);
                          $users15 = mysqli_fetch_all($result15);
                      ?>
                          <p><span class="title-s">Name: </span><?php foreach($users15 as $user15) echo $user15[1]?><span></span></p>
                          <p><span class="title-s">Carrer: </span> <span><?php foreach($users15 as $user15) echo $user15[7]?></span></p>
                          <p><span class="title-s">Email: </span> <span><?php foreach($users15 as $user15) echo $user15[4]?></span></p>
                          <p><span class="title-s">Phone: </span> <?php foreach($users15 as $user15) echo $user15[8]?></span></p>
                        </div>
                      </div>
                    </div>
                    <div class="skill-mf">
                      <?php
                          //1. Kết nối database
                          include "config.php";
                          //2. Khai báo truy vấn
                          $sql1="SELECT * from skill where ID_skill = 1";
                          $result1 = mysqli_query($link,$sql1);
                          $users1 = mysqli_fetch_all($result1);
                          $sql2="SELECT * from skill where ID_skill = 2";
                          $result2 = mysqli_query($link,$sql2);
                          $users2 = mysqli_fetch_all($result2);
                          $sql3="SELECT * from skill where ID_skill = 3";
                          $result3 = mysqli_query($link,$sql3);
                          $users3 = mysqli_fetch_all($result3);
                          $sql4="SELECT * from skill where ID_skill = 4";
                          $result4 = mysqli_query($link,$sql4);
                          $users4 = mysqli_fetch_all($result4); 
                      ?>
                      <!-- //3. Xử lý kết quả -->
                      <p class="title-s">Skill</p>
                      <span><?php foreach($users1 as $user1) echo $user1[1]?></span> <span class="pull-right"><?php foreach($users1 as $user1) echo $user1[2]?></span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span><?php foreach($users2 as $user2) echo $user2[1]?></span> <span class="pull-right"><?php foreach($users2 as $user2) echo $user2[2]?></span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span><?php foreach($users3 as $user3) echo $user3[1]?></span> <span class="pull-right"><?php foreach($users3 as $user3) echo $user3[2]?></span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span><?php foreach($users4 as $user4) echo $user4[1]?></span> <span class="pull-right"><?php foreach($users4 as $user4) echo $user4[2]?></span>
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="about-me pt-4 pt-md-0">
                      <div class="title-box-2">
                        <h5 class="title-left">
                          About me
                        </h5>
                      </div>
                      <p class="lead">
                      <?php foreach($users15 as $user15) echo $user15[9]?>
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
      $sql9="SELECT * from service_list where ID_service = 1";
      $result9 = mysqli_query($conn,$sql9);
      $users9 = mysqli_fetch_all($result9);
      $sql10="SELECT * from service_list where ID_service = 2";
      $result10 = mysqli_query($conn,$sql10);
      $users10 = mysqli_fetch_all($result10);
      $sql11="SELECT * from service_list where ID_service = 3";
      $result11 = mysqli_query($conn,$sql11);
      $users11 = mysqli_fetch_all($result11);
      $sql12="SELECT * from service_list where ID_service = 4";
      $result12 = mysqli_query($conn,$sql12);
      $users12 = mysqli_fetch_all($result12);
      $sql13="SELECT * from service_list where ID_service = 5";
      $result13 = mysqli_query($conn,$sql13);
      $users13 = mysqli_fetch_all($result13);
      $sql14="SELECT * from service_list where ID_service = 6";
      $result14 = mysqli_query($conn,$sql14);
      $users14 = mysqli_fetch_all($result14);
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
                <h2 class="s-title"> <?php foreach($users9 as $user9) echo $user9[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users9 as $user9) echo $user9[2]?>
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
                <h2 class="s-title"> <?php foreach($users10 as $user10) echo $user10[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users10 as $user10) echo $user10[2]?>
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
                <h2 class="s-title"><?php foreach($users11 as $user11) echo $user11[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users11 as $user11) echo $user11[2]?>
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
                <h2 class="s-title"><?php foreach($users12 as $user12) echo $user12[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users12 as $user12) echo $user12[2]?>
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
                <h2 class="s-title"><?php foreach($users13 as $user13) echo $user13[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users13 as $user13) echo $user13[2]?>
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
                <h2 class="s-title"><?php foreach($users14 as $user14) echo $user14[1]?></h2>
                <p class="s-description text-center">
                <?php foreach($users14 as $user14) echo $user14[2]?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->
    <?php
      $sql5="SELECT * from achievement where ID_achievement = 1";
      $result5 = mysqli_query($conn,$sql5);
      $users5 = mysqli_fetch_all($result5);
      $sql6="SELECT * from achievement where ID_achievement = 2";
      $result6 = mysqli_query($conn,$sql6);
      $users6 = mysqli_fetch_all($result6);
      $sql7="SELECT * from achievement where ID_achievement = 3";
      $result7 = mysqli_query($conn,$sql7);
      $users7 = mysqli_fetch_all($result7);
      $sql8="SELECT * from achievement where ID_achievement = 4";
      $result8 = mysqli_query($conn,$sql8);
      $users8 = mysqli_fetch_all($result8);
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
                <p class="counter"><?php foreach($users5 as $user5) echo $user5[2]?></p>
                <span class="counter-text"><?php foreach($users5 as $user5) echo $user5[1]?></span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php foreach($users6 as $user6) echo $user6[2]?></p>
                <span class="counter-text"><?php foreach($users6 as $user6) echo $user6[1]?></span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ios-people"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php foreach($users7 as $user7) echo $user7[2]?></p>
                <span class="counter-text"><?php foreach($users7 as $user7) echo $user7[1]?></span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
              </div>
              <div class="counter-num">
                <p class="counter"><?php foreach($users8 as $user8) echo $user8[2]?></p>
                <span class="counter-text"><?php foreach($users8 as $user8) echo $user8[1]?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Counter Section -->
  </main>
  <!-- ======= Footer ======= -->
  <?php
    include "footer.php"
  ?><!-- End  Footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <?php include "linkjs.php" ?>
</body>
</html>