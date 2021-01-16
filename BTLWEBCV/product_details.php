<?php 
      include "database/connect.php";
      $sql = "select * from product";
      $result = mysqli_query($conn,$sql);
      $users = mysqli_fetch_all($result);
    function selectOne($result)
    {
        global $conn;   
        $sql1 = "select * from product where id =" . $result;
        $test = mysqli_query($conn, $sql1);
        $a = mysqli_fetch_assoc($test);
        return $a;
    }
    if (isset($_GET['id'])) {
        $a = selectOne($_GET['id']);
        {
        $id = $a['id'];
        $name = $a['name'];
        $time_start = $a['time_start'];
        $content =$a['content'];
        $url = $a['url'];
        $title = $a['title'];
        $category = $a['category'];
        $client = $a['client'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Product Details</title>
  <!-- Vendor CSS Files -->
  <?php include "linkcss.php"?>
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="home.php">Curriculum Vitae</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="home.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="home.php#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="home.php#resume">Resume</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="home.php#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="home.php#work">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="home.php#contact">Contact</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="register.php">Register</a>
                    <a class="dropdown-item" href="login.php">Login</a>
                </div>
            </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="intro intro-single route bg-image" style="background-image: url(resources/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Product Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="home.php#work">Work</a>
            </li>
            <li class="breadcrumb-item active"><?php echo $name ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <main id="main">

    <!-- ======= Portfolio Details Section ======= -->
    <section class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="resources/img/portfolio-details-1.jpg" class="img-fluid" alt="">
            <img src="resources/img/portfolio-details-2.jpg" class="img-fluid" alt="">
            <img src="resources/img/portfolio-details-3.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Product information</h3>
            <ul>
              <li><strong>Category</strong>: <?php echo $category ?></li>
              <li><strong>Client</strong>: <?php echo $client ?></li>
              <li><strong>Project date</strong>: <?php echo $time_start ?></li>
              <li><strong>Project URL</strong>: <a href="#"><?php echo $url ?></a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2><?php echo $title ?></h2>
          <p>
          <?php echo $content ?>
          </p>
        </div>
      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "footer.php"?><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="resources/vendor/jquery/jquery.min.js"></script>
  <script src="resources/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="resources/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="resources/vendor/php-email-form/validate.js"></script>
  <script src="resources/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="resources/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="resources/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="resources/vendor/typed.js/typed.min.js"></script>
  <script src="resources/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="resources/js/main1.js"></script>

</body>

</html>