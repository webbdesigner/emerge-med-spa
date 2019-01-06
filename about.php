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

<section>
  <div class="container about">
    <h1>Our Team<br />
      <img class="divider" src="images/g-divider.png">
    </h1>
    <div class="row ">
      <div class="card col-lg-4 col-md-4 col-s-6 col-xs-12">
        <img src="images/felicia.jpg" class="staff">
        <h4 class="member-name">Felicia D. Hussey, MD</h4>
        <img class="divider" src="images/g-divider.png">
        <p>Physician</p>
      </div>
      <div class="card col-lg-4 col-md-4 col-s-6 col-xs-12">
        <img src="images/sharae.jpg" class="staff">
        <h4 class="member-name">Shearae Y. Robinson</h4>
        <img class="divider" src="images/g-divider.png">
        <p>Licensed Cosmetologist<br />
          Senior Skin Care Specialist</p>
      </div>
      <div class="card col-lg-4 col-md-4 col-s-6 col-xs-12">
        <img src="images/gail.jpg" class="staff">
        <h4 class="member-name">Gail G. Whitmire</h4>
        <img class="divider" src="images/g-divider.png">
        <p>Licensed Cosmetologist</p>
      </div>


      <div class="card col-lg-4 col-md-4 col-s-6 col-xs-12">
        <img src="images/bre.jpg" class="staff">
        <h4 class="member-name">Bre Titus</h4>
        <img class="divider" src="images/g-divider.png">
        <p>Licensed Cosmetologist<br />
          Nail Technician</p>
      </div>
      <div class="card col-lg-4 col-md-4 col-s-6 col-xs-12">
        <img src="images/bobbie.jpg" class="staff">
        <h4 class="member-name">Bobbie Sullivan</h4>
        <img class="divider" src="images/g-divider.png">
        <p>Licensed Massage & Bodywork Therapist <br/> Lic # 14501</p>
      </div>
      <div class="card col-lg-4 col-md-4 col-s-6 col-xs-12">
        <img src="images/sara.jpg" class="staff">
        <h4 class="member-name">Sara Alleman</h4>
        <img class="divider" src="images/g-divider.png">
        <p>Licensed Massage & Bodywork Therapist <br/> Lic # 16667</p>
      </div>
    </div>
    <hr>

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
