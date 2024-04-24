<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = "username"; // or handle the case where the username isn't set
}
?>

<!DOCTYPE html>
<html lang="en">

  <head>

     
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Attendance</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
   
<!--
    
TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
  </head>

<body>
  <style>
             .main-menu button {
                background-color: #007BFF; /* Bootstrap primary blue */
                color: white;
                border: none;
                padding: 5px 10px;
                margin: 5px;
                border-radius: 5px;
                margin-right: 20px;
                cursor: pointer;
                transition: background-color 0.3s;
            }
            .main-menu button:hover {
                background-color: #0056b3; /* Darker blue */
            }
            .has-submenu > button {
                background-color: #6c757d; /* Bootstrap secondary color */
            }
            .has-submenu > button:hover {
                background-color: #5a6268; /* Darker grey */
            }
            .has-submenu .sub-menu {
                display: none; /* Hide the submenu */
                position: absolute;
                background-color: grey; /* Very light gray */
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                z-index: 1;
                margin-top: 5px;
                border-radius: 5px;
            }
            .has-submenu:hover .sub-menu {
                display: block; /* Show the submenu on hover */
            }
            .sub-menu button {
                display: block;
                color: white; /* Almost black */
                width: 90%;
                text-align: center;
            }
            .sub-menu button:hover {
                background-color: #e2e6ea; /* Slightly darker light gray */
            }
        </style>
   
   
<header class="main-header clearfix" role="banner">
    <div class="logo-img">
        <img src="../myadmin/assets/images/DSFLOGO.png" alt="DSF Logo">
    </div>
    <nav class="nav-links">
    <ul class="main-menu">
            <button onclick="window.location.href='index.php';">Home</button>
            <button onclick="window.location.href='#';">Session</button>
            <button onclick="window.location.href='#';">Add</button>
            <div class="has-submenu">
                <button>Account</button>
                <div class="sub-menu">

                   <?php if (isset($_SESSION['username'])): ?>
                        <button onclick="window.location.href='../Mainpage/profile.php';">Profile</button>
                        <button onclick="window.location.href='../Mainpage/logout.php';">Log-out</button>
                        <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <?php else: ?>
                        <button onclick="window.location.href='../Mainpage/login.php';">Log-in</button>
                        <button onclick="window.location.href='../Mainpage/register.php';">Register</button>
                    <?php endif; ?>
                </div>
            </div>
        </ul>
    </nav>
</header>

<!--  Main Banner Area Start  -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>Dipolog School of Fisheries</h6>
              <h2><em>Your</em> Classroom</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="login.php">Attendance</a></div>
              </div>
          </div>
      </div>
  </section>
  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>MISSION</h4>
              </div>
              <div class="content-hide">
                <p>To Develop Graduates with High Competence and skills in Fisheries and Allied Sciences through Quality Assured Training Programs and positive Work Values.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Class</h4>
              </div>
              <div class="content-hide">
                <p></p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>VISION</h4>
              </div>
              <div class="content-hide">
                <p>To be a World Class Fishery and Allied sciences training institution and the Provider of Highly Compettitive Skills.</p>
                <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>
                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2024 by 
          
           | Design: <a href="" rel="sponsored" target="_parent">Unknown</a><br>
           
          
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });

        
    </script>
</body>
</html>