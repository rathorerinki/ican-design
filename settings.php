
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Ican Guru</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Bootstrap core CSS -->

    <!-- Favicons -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="assets/css/intlTelInput.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slideleft.css">
  </head>
  <style>

</style>
  <body>
  <?php
 require_once('home-header.php');
  ?>

  <!-- 12-01-22 -->
	<div class="page-banner" style="background-image: url('assets/images/about-bg.png')">
      <div class="page-title-wrapper">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <h1 class="page-title">My Profile</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->

  <div class="features-section block">
  <main class="main-content myProfilePage">


    <section class="profileCnt">
        <div class="container">
            <div class="row customRow">
                <!-- sidebar -->
                <div class="col-md-4 col-sm-12 col-12 col-lg-3 customRow_left card12">
                    <!-- sidebar -->
                    <?php
                    require_once("slideleft.php");
                    ?>
                    <!-- <div class="profileCnt_sidebar ">
                        <ul class="list-unstyled bg-white common-shadow common-radius mb-0">
                            <li><a href="my-profile" class=" active ">My Profile <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" class="">Past Sessions <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="change-password" class="">Change Password <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" class="">Notifications <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" class="">Payment Settings <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" class="">My Transactions <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" class="border-bottom-0  ">My Invitations <i class="fas fa-angle-right float-right"></i></a></li>
                            <li class="divider font-sm">Other </li>
                            <li><a href="#" class=" ">Support <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#">Rate the App <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" class="">Frequently asked questions <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" class="">Terms and condition <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" class="border-bottom-0 ">Privacy Policy <i class="fas fa-angle-right float-right"></i></a></li>
                            <li><a href="#" >Sign out  <i class="fas fa-angle-right float-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="asideToggler">
                        <a href="#" class="d-flex align-items-center"> <em class="icon-list-view"></em></a>
                    </div> -->
                </div>
                <!-- right section -->
                <div class="col-md-7 col-sm-12 col-12 col-lg-8 customRow_right card12">
                    <div class="profileCnt_pageContent bg-white">
                        <div class="profileCnt_pageContent_inner">
                            <div class="profileDetails">
                               <div class="profileErroe">
                                <div class="profileDetails_top d-flex align-items-end justify-content-between flex-wrap">
                                    <div class="img pictures">
                                        <img src="http://open-office.codiantdev.com/uploads/profile_image/AOj1I7ExVssDkOAPoAVEuVFeyWHIfx3eJ2TdHBtb.png" class="rounded-circle" alt="user">
                                    </div>
                                    <div class="caption text-right">
                                        <a href="edit-my-profile.php" class="theme-link font-md"><i class="fas fa-user-edit"></i> &nbsp; Edit Profile</a>
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item font-sm">
                                                <span class="number"> 20</span> 1 - 1 Sessions
                                            </li>
                                            <li class="list-inline-item font-sm">
                                                <span class="number">25</span> Mastermind Sessions
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                                <div class="profileDetails_body profileDetails_body-view">
                                <br/>
                                    <h3 class="title">Personal Information</h3>
                                    <br/>
                                    <div class="row topRow">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" value="smith">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" value="roy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" value="smith">
                                    </div>
                                    <div class="form-group phoneNumber">
                                        <label>Phone Number</label>
                                        <input id="phone" readonly class="form-control"name="phone" type="tel" value="456545566">
                                    </div>
                                    <div class="form-group">
                                        <label>Email ID</label>
                                        <input type="email" class="form-control" value="bhupendra@com">
                                    </div>
                                    <h3 class="title mt-3 mt-xl-5">Professional Information</h3>
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <div class="form-group">
                                                <label>Name Of Company</label>
                                                <input type="text" class="form-control" value="test">
                                            </div>
                                            <div class="form-group">
                                                <label>Type Of Industry</label>
                                                <ul class="list-inline tagsList">
                                                            <li class="list-inline-item">
                                                            Management Consulting
                                                    </li>
                                                           <li class="list-inline-item">
                                                         IT Industry
                                                    </li>
                                               </ul>
                                            </div>
                                            <div class="form-group">
                                                <label>Years Of Experience</label>
                                                <input type="text" class="form-control" value="2 Years">
                                            </div>
                                            <div class="form-group mb-0">
                                                <label>Stage</label>
                                                <input type="text" class="form-control" value="Pre Seed - Product Market Fit">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

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
