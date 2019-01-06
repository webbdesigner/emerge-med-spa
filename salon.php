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

<section class="filler bg4">
</section>

<section>
  <div class="container menu">
    <?php include("includes/salon-menu.php"); ?>
    <!--<h1>Salon Services<br />
      <img class="divider" src="images/g-divider.png">
    </h1>
    <div class="row">
    <div class="col-md-4 first">
      <h2>Hair Services</h2>
      <ul>
        <li>Women cuts and styles</li>
        <li>Iron Work</li>
        <li>Men cuts and styles </li>
        <li>Formal Styles</li>
        <li>Womens Color</li>
        <li>Texturizing</li>
        <li>Mens Color</li>
        <li>Perms</li>
        <li>Thinning</li>
      </ul>
    </div>
    <div class="col-md-4 first">
      <h2>Hair Treatments</h2>
      <ul>
        <li>Collagen/enzyme therapy</li>
        <li>Oil-No-More Scalp Treatment</li>
        <li>Dry-No-More Scalp Treatment </li>
        <li>Keratin Infusion Treatment</li>
        <li>Moroccan Oil Hydrating Masque</li>
        <li>Keratin Deep Conditioning Treatment</li>
        <li>Moroccan Oil Restorative Masque</li>
        <li>D' Cinque Reparative Treatment</li>
      </ul>
    </div>
    </div>
    <hr />
    <div class="row">
    <div class="col-md-4 first">
      <h2>Specialty Services</h2>
      <ul>
        <li>Hot Head Extentions</li>
        <li>Natural Keratin Smoothing Treatment</li>
        <li>Hair Restoration </li>
        <li>Keratin Express Blowout</li>
      </ul>
    </div>
    <div class="col-md-4 first">
      <h2>Nail Services</h2>
      <ul>
        <li>Manicure</li>
        <li>Spa Manicure</li>
        <li>Pedicure </li>
        <li>Spa Pedicure</li>
        <li>Paraffin Dip</li>
      </ul>
    </div>
  </div>
    <hr />
  <div class="col-md-4 first">
    <h2>Miscellaneous</h2>
    <ul>
      <li>BleachBright</li>
      <li>Ear Candling</li>
      <li>Swedish Miracle Body Wrap</li>
      <li>Herbal Detox Body Wrap</li>
      <li>Slimline Oxypod Sessions</li>
      <li>Tanning Packages</li>
      <li>Products</li>
    </ul>
  </div>
  <hr>-->
</div>
</section>



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
