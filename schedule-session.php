
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Ican Guru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->

    <!-- Favicons -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
  </head>
  <style>

</style>
  <body>
  <?php
  require_once('home-header.php');
  ?>
	<div class="page-banner" style="background-image: url('assets/images/about-bg.png')">
      <div class="page-title-wrapper">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <h1 class="page-title">Schedule Session</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->

  <div class="features-section block">


    <div class="container">
        <div class="row">

         <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                <div class="our-team profile">
                    
                    <h2> Schedule 1:1 Session</h2>
                    <br/>
                    <br/>
                    <?php
                      require_once("session-schedule-form.php");
                      ?>
                </div>
               
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-4">
              <div class="our-team">
                  <div class="picture">
                  <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                  </div>
                  <div class="team-content">
                  <h3 class="name">Michele Miller</h3>                           
                  <h4 class="name">Retail +4</h4>                           
                  </div>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                  <br/>
                  <br/>
                  <hr class="hr-hro"/>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="active font-size" href="#">0</a> <br/>
                     1:1 Sessions 
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <a class="active font-size" href="#">0</a><br/>
                     Mastermind Sessions
                    </div>
                  </div>
                  <hr class="hr-hro"/>
                  <br/>                  
                  <span class="style-change-back">Back to <a href="mentor-details.php">Industry Expert Details</a></span>
              </div>
          </div>

            
        </div>

    </div>
  </div> <!-- End Live Online Class -->


  <?php
require_once("footer.php");
?>


<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/match-height.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/script.js"></script>

	
    </body>
</html>
