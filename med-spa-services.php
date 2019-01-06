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
<section class="filler bg3">
</section>

<?php include("includes/spa.php"); ?>

<!--<section>
  <div class="container med-spa">
    <h1>Med Spa Services<br />
      <img class="divider" src="images/g-divider.png">
    </h1>
    <h2>BOTOX</h2>
    <p>An injectable prepared from the bacterial toxin botulin, decreases wrinkles by temporarily weakening facial muscles.</p>
    <hr>
    <h2>JUVEDERM ULTRA OR ULTRA PLUS XC</h2>
    <p>An injectable hyaluronic acid facial filler used to temporarily soften deep folds and wrinkles of the face. </p>
    <hr>
    <h2>PERMANENT HAIR REDUCTION</h2>
    <p>Make unwanted body hair a thing of the past.  No more painful waxing, electrolysis, or razors.  Can treat all skin types and tones.  4-6 treatments needed on average.</p>
    <hr>
    <h2>LASER VEIN THERAPY</h2>
    <p>Safely and effectively treat both tiny spider veins and deeper blue leg veins on all skin tones without painful injections.  </p>
    <hr>
    <h2>LASER GENESIS TREATMENT</h2>
    <p>Stimulates collagen production to promote vibrant and healthy looking skin.  Treats fine lines and wrinkles, large pores, improves skin texture and redness.</p>
    <hr>
    <h2>LIMELIGHT FACIAL</h2>
    <p>Intense pulsed light treats skin redness, superficial facial veins and dark spots.  Also improves skin tone and surface imperfections associated with aging and sun damage.</p>
    <hr>
    <h2>TITAN TREATMENT</h2>
    <p>Light energy therapy to stimulate dermal collagen production and tightening of the skin at the jawline, under the chin, and on the abdomen.</p>
    <hr>
    <h2>TCA ORANGE LIFT</h2>
    <p>Peel for advanced aging, acne scarring, and severe sun damage. Pretreatment is mandatory.</p>
    <hr>
    <h2>MICROCHANNELING TREATMENT</h2>
    <p>An alternative to needling, this treatment improves the appearance of fine lines and wrinkles, stretch marks, and scars.</p>
    <hr>

  </div>
</section>-->


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
