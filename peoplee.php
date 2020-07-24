<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/lightgallery.min.css">    
    
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    
    <link rel="stylesheet" href="css/swiper.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    



    <header class="site-navbar py-3 border-bottom" role="banner">

      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2" data-aos="fade-down">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0"><h3> <?php echo $_SESSION['username']; ?></h3></a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
            <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li><a href="index.php">Home</a></li>
                <li class="has-children active">
                  <a href="peoplee.php">Gallery</a>
                 <ul class="dropdown">
                    <li><a href="engineering.php">Engineering</a></li>
                    <li><a href="diploma.php">Diploma</a></li>
                    <!--<li><a href="peoplee.php">People</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Animals</a></li>
                    <li><a href="#">Sports</a></li> -->
                    <li><a href="travell.php">Travel</a></li>
                    <li class="has-children">
                     <!-- <a href="#">Sub Menu</a>
                      <ul class="dropdown">
                        <li><a href="#">Menu One</a></li>
                        <li><a href="#">Menu Two</a></li>
                        <li><a href="#">Menu Three</a></li>
                      </ul> -->
                    </li>
                  </ul>
                </li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="firstpage.php">Log Out</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                <li>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                </li>
              </ul>
            </div>

            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>



  <div class="site-section"  data-aos="fade">
    <div class="container-fluid">
      
      <div class="row justify-content-center">
        
        <div class="col-md-7">
          <div class="row mb-5">
            <div class="col-12 ">
              <h2 class="site-section-heading text-center">Mere Janwar Log</h2>
            </div>
          </div>
        </div>
    
      </div>
      <div class="row" id="lightgallery">
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (276).jpg" data-sub-html="<h4>Fading Light</h4><p>.</p>">
          <a href="#"><img src="images/people/img1 (276).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (277).jpg" data-sub-html="<h4>Fading Light</h4><p>..</p>">
          <a href="#"><img src="images/people/img1 (277).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (282).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
          <a href="#"><img src="images/people/img1 (282).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (285).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
          <a href="#"><img src="images/people/img1 (285).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (286).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Saepe, voluptatum voluptate tempore aliquam, dolorem distinctio. In quas maiores tenetur sequi.</p>">
          <a href="#"><img src="images/people/img1 (286).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (290).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Rerum cum culpa blanditiis illum, voluptatum iusto quisquam mollitia debitis quaerat maiores?</p>">
          <a href="#"><img src="images/people/img1 (290).jpg" alt="IMage" class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (70).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Asperiores similique impedit possimus, laboriosam enim at placeat nihil voluptatibus voluptate hic!</p>">
          <a href="#"><img src="images/people/img1 (70).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (18).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Quam vitae sed cum mollitia itaque soluta laboriosam eaque sit ratione, aliquid.</p>">
          <a href="#"><img src="images/people/img1 (18).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (51).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Quidem reiciendis debitis beatae facilis quos, enim quis nobis magnam architecto earum!</p>">
          <a href="#"><img src="images/people/img1 (51).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (48).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Itaque officiis magnam, facilis nam eos perspiciatis eligendi pariatur numquam debitis quos!</p>">
          <a href="#"><img src="images/people/img1 (48).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (76).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Facilis consequatur quam et, delectus, cum iste ipsa animi eligendi obcaecati nemo.</p>">
          <a href="#"><img src="images/people/img1 (76).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img11 (6).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Apeopleisci quia illo voluptatibus numquam inventore, ab asperiores molestiae distinctio atque nihil.</p>">
          <a href="#"><img src="images/people/img11 (6).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (14).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Incidunt unde placeat obcaecati sapiente illum, fuga nostrum necessitatibus delectus maiores magnam.</p>">
          <a href="#"><img src="images/people/img1 (14).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (15).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Voluptas dignissimos non consectetur. Facilis totam, explicabo nam iure! Veniam modi, molestiae.</p>">
          <a href="#"><img src="images/people/img1 (15).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (57).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Alias minus voluptatibus inventore odio. Iure amet nesciunt a, officia quo ex.</p>">
          <a href="#"><img src="images/people/img1 (57).jpg" alt="IMage" class="img-fluid"></a>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (54).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Praesentium illum consectetur dolorum consequuntur sint doloribus eveniet deleniti! Illo, quibusdam, earum.</p>">
          <a href="#"><img src="images/people/img1 (54).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/eople/img1 (59).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Architecto ad iure, inventore asperiores, cupiditate optio dignissimos labore quidem totam. Dignissimos.</p>">
          <a href="#"><img src="images/people/img1 (59).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (60).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Nam temporibus totam similique provident delectus quos fugiat officia earum nisi voluptatibus?</p>">
          <a href="#"><img src="images/people/img1 (60).jpg" alt="IMage" class="img-fluid"></a>
        </div>


        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (150).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Saepe beatae qui aliquid nostrum unde ut officiis omnis delectus sequi deleniti!</p>">
          <a href="#"><img src="images/people/img1 (150).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (65).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Modi iusto vero, soluta porro dicta quaerat tempore magni perferendis aspernatur cupiditate.</p>">
          <a href="#"><img src="images/people/img1 (65).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (66).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Eaque, minus officiis modi ducimus reprehenderit at ea voluptatum consequuntur enim nulla.</p>">
          <a href="#"><img src="images/people/img1 (66).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (64).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Corporis eligendi hic sed, quidem illum ipsa, cum tempora quo reiciendis accusantium.</p>">
          <a href="#"><img src="images/people/img1 (64).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (69).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Ex blanditiis quaerat numquam repellendus pariatur commodi neque animi voluptatum illum dolore?</p>">
          <a href="#"><img src="images/people/img1 (69).jpg" alt="IMage" class="img-fluid"></a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/people/img1 (258).jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur apeopleisicing elit. Optio praesentium maiores, veritatis illum voluptas alias aut unde esse aliquam itaque.</p>">
          <a href="#"><img src="images/people/img1 (258).jpg" alt="IMage" class="img-fluid"></a>
        </div>

        

      </div>
    </div>
  </div>

  <div class="footer py-4">
    <div class="container-fluid text-center">
      <p>
      Made with <i class="icon-heart-o" aria-hidden="true"></i> by Monil</a>
      </p>
    </div>
  </div>

    

    
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/picturefill.min.js"></script>
  <script src="js/lightgallery-all.min.js"></script>
  <script src="js/jquery.mousewheel.min.js"></script>

  <script src="js/main.js"></script>
  
  <script>
    $(document).ready(function(){
      $('#lightgallery').lightGallery();
    });
  </script>
    
  </body>
</html>