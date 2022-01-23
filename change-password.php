
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
                   
                </div>
                <!-- right section -->
                <div class="col-md-7 col-sm-12 col-12 col-lg-8 customRow_right card12">
                    <div class="profileCnt_pageContent bg-white">
                        <div class="profileCnt_pageContent_inner">
                            <div class="profileDetails">
                            <h2 class="title">Change Password</h2>
                            <br/>

                            <form id="change-password-form" action="https://open-office.codiantdev.com/mentee/action-change-password" method="POST">
                                <input type="hidden" name="_token" value="9zTRCzZhQ6F7363vKOOfnLEOckD7XsHubngYqXgl">
                                <div class="form-group">
                                    <label>Old Password<span class="mandatory">*</span></label>
                                    <div class="form-group-icon position-relative">
                                        <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password" name="current_password" maxlength="15">
                                        <a href="javascript:void(0);" class="icon showPassword">
                                            <em class="icon-eye"></em>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>New Password<span class="mandatory">*</span></label>
                                    <div class="form-group-icon position-relative">
                                        <input type="password" class="form-control" id="newPassword" placeholder="Enter new password" name="password" maxlength="15">
                                        <a href="javascript:void(0);" class="icon showPassword">
                                            <em class="icon-eye"></em>
                                        </a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password<span class="mandatory">*</span></label>
                                    <div class="form-group-icon position-relative">
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password" name="confirm_password" maxlength="15">
                                        <a href="javascript:void(0);" class="icon showPassword">
                                            <em class="icon-eye"></em>
                                        </a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary ripple-effect min-w-350 mt-xl-3 mt-1 addLoader" id="submit-btn">Save changes</button>
                            </form>

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
