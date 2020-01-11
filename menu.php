<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Emerge Med Spa & Salon</title>
<!-- FAVICON -->
<link rel="apple-touch-icon" sizes="76x76" href="favicon_package_v0.16/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_package_v0.16/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_package_v0.16/favicon-16x16.png">
<link rel="manifest" href="favicon_package_v0.16/site.webmanifest">
<link rel="mask-icon" href="favicon_package_v0.16/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<!-- CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!-- Annimations -->
<link rel="stylesheet" href="vendor/animate.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">



</head>
<body>

<?php include("includes/nav.php") ?>

<!-- Content -->
<section class="filler bg2">
</section>


<section class="menu">
<div class="container">

<!-- BODY TREATMENTS -->

  <h1>Body Treatments<br />
    <img class="divider" src="images/g-divider.png">
  </h1>
  <div class="row">
    <div class="col-md-1 hidden-md-down"></div>
    <div class="col-md-5">
      <h6>SWEDISH <span class="price"> <small>30 min.</small>$45  |  <small>60 min.</small> $70  |  <small>90 min. </small>$90</span></h6>
      <p>Long, flowing, connecting strokes are used to relax muscle tension, free the mind and reduce stress.</p>
      <hr>
      <h6>DEEP <br /> TISSUE<span class="price"><small>30 min.</small> $60  |  <small>60 min.</small> $85  |  <small>90 min.</small> $105</span></h6>
      <p>Deep, strong, invigorating massage designed to ease muscle soreness and tired joints from overuse or intensive exercise.</p>
      <hr>
      <h6>CHAIR<span class="price">$1<small>/min.</small></span></h6>
      <h6>BODY EXFOLIATING TREATMENT <span class="price"> <small>1 ½ hrs. </small>$129</span></h6>
      <p>Dry brush, Scrub, and Moisturize</p>
      <hr>
      <h6>BODY LIFT (PEEL)<span class="price"><small>2 hrs. </small> $149</span></h6>
      <p>Chemical Exfoliation.</p>
      <hr>
      <h6>SLIMLINE OXYPOD SESSION <span class="price">$1<small>/min.</small></span></h6>
      <p>Dry Heat Sauna/Detox    <span class="price">25-40 min.</span></p>
      <hr>
      <h6>HYDRATION STATION SESSION <span class="price">$1<small>/min.</small></span></h6>
      <p>Steam Sauna/Detox <span class="price">25 min</span></p>
      <hr>
      <h6>LLLT HAIR <br />REGROWTH TREATMENTS <span class="price">$499</span></h6>
      <p>16 weeks (2-3 sessions/wk) <span class="price">up to 25 min</span></p>
      <hr>
    </div>
    <div class="col-md-5">
      <h6>HOT STONE<span class="price"><small>60 min.</small> $95  |  <small>90 min.</small> $120</span></h6>
      <p>Warm river stones are placed on the Chakra centers of the body while you are massaged. Relieves tense muscles, sore joints, and increases energy.</p>
      <hr>
      <h6>PRENATAL <span class="price"><small>60 min.</small> $75</span></h6>
      <p>The mother-to-be enjoys a relaxing, full body massage in a comfortable reclined and side-lying position by a certified prenatal therapist.</p>
      <hr>
      <h6>HERBAL DETOX BODY WRAP <span class="price"><small>2 hrs.</small> $99</span></h6>
      <p>Toxin Cleanse & Inch Loss</p>
      <hr>
      <h6>SWEDISH MIRACLE BODY WRAP <span class="price"><small>2 ½ hrs.</small> $119</span></h6>
      <p>Tighten, Contour, Cleanse</p>
      <hr>
      <h6>POST BODY SERVICE <br />FIRMING TREATMENT<span class="price"> <small>add </small>$19</span></h6>
      <p>Cell-U-Lift Application <span class="price">10 min.</span></p>
      <hr>
      <h6>BLEACHBRIGHT <br />TEETH WHITENING <span class="price"><small>30 min.</small> $99</span></h6>
      <h6>EAR CANDLING <span class="price"><small>45 min. </small> $30</span></h6>

    </div>
    <!--<div class="col-md-1 hidden-sm-down"></div>
    <div class="col-md-1 hidden-sm-down"></div>
    <div class="col-md-10">
    <h6 style="margin-top:-25px; padding-top: 0;">CHAIR<span class="price">$1<small>/min.</small></span></h6>
  </div>-->
  </div>

<!-- Salon Services -->

<?php include("includes/salon-menu.php"); ?>

<!-- Med Spa Services -->

<?php include("includes/spa.php"); ?>



</div> <!-- CONTAINER END -->
</section> <!-- SECTION END -->





<!-- End Content -->

<?php include("includes/footer.php"); ?>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- Custom scripts -->

<script>
(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 54)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 56
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Hide navbar when modals trigger
  $('.portfolio-modal').on('show.bs.modal', function(e) {
    $(".navbar").addClass("d-none");
  })
  $('.portfolio-modal').on('hidden.bs.modal', function(e) {
    $(".navbar").removeClass("d-none");
  })

})(jQuery); // End of use strict

</script>


</body>
</html>
