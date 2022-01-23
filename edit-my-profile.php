
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Ican Guru</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
                            
                            <form id="updateprofile" action="http://open-office.codiantdev.com/mentee/action-update-profile" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="n4k2H69mGiUu2hhTiHDQmKEUiuJPrv694iyhcG5p">
                                    <div class="profileErroe">
                                        <div class="profileDetails_top d-flex align-items-center">
                                                    <div class="img pictures">
                                                    <img src="http://open-office.codiantdev.com/uploads/profile_image/AOj1I7ExVssDkOAPoAVEuVFeyWHIfx3eJ2TdHBtb.png" class="rounded-circle" alt="user" id="imagePreview"  >
                                                    <label class="uploadIcon rounded-circle">
                                                    <!-- <em class="icon-edit-profile"></em> -->
                                                    <i class="fas fa-camera icon-edit-profile"></i>
                                                    <input type="file" name="profile_image" onchange="readProfileImageURL(this);" id="uploadImage"  style="opacity: 0;" aria-describedby="imageUploadError">
                                                </label>
                                            </div>
                                            <!-- <h6 class="mb-0 font-md" >Add Profile Picture</h6> -->
                                        </div>    
                                        <span id="imageUploadError" class="help-block error-help-block"></span>
                                    </div>

                                    <div class="profileDetails_body ">
                            <br/>
                                        <h3 class="title">Personal Information</h3>
                                        <br/>
                                        <input type="hidden" name="user_type"value="mentee">
                                        <div class="row topRow">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>First Name<span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control required " value="smith" name="first_name" id="first_name" maxlength="25" onkeydown="noSpace(event);">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Last Name<span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="roy" name="last_name" id="last_name" maxlength="25" onkeydown="noSpace(event);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Username<span class="mandatory">*</span></label>
                                            <input type="text" class="form-control" name="username" value="smith" maxlength="25" onkeydown="noSpace(event);">
                                        </div>
                                        <div class="form-group phoneNumber">
                                            <label>Phone Number<span class="mandatory">*</span></label>
                                            <a href="javascript:void(0)"
                                               class="theme-color verifyNumber position-absolute" style="display: none"
                                              id="verifyNumberBtn">Verify Number
                                            </a>
                                            <input id="phone" class="form-control" name="phone_number" type="tel" value="456545566" data-originalnumber="456545566" maxlength="11" onkeypress="return isNumber(event)">
                                            <input type="hidden" id="country_code" name="country_code" value="US">
                                            <input type="hidden" id="phone_code" name="phone_code" value="1">
                                            <input type="text" name="numberchange" id="numberchange" value="" required style="opacity: 0;height:0;position: absolute;">
                                            <input type="text" name="verify_number" id="verify_number" value="" required style="opacity: 0;height:0;position: absolute;">
                                        </div>
                                        <div class="form-group">
                                            <label>Email ID<span class="mandatory">*</span></label>
                                            <input type="email" class="form-control" value="bhupendra@com" name="email" onkeydown="noSpace(event);">
                                        </div>
                                        <h3 class="title mt-3 mt-xl-5">Professional Information</h3>
                                        <div class="row">
                                            <div class="col-sm-10">
                                                <div class="form-group">
                                                    <label>Name Of Company<span class="mandatory">*</span></label>
                                                    <input type="text" class="form-control" value="test" name="company_name" maxlength="50">
                                                </div>
                                                <div class="form-group">
                                                    <label>Type Of Industry<span class="mandatory">*</span></label>
                                                    <select class="industry" name="industryy[]" data-placeholder="Type Of Industry" multiple="multiple" id="industry"  aria-describedby="industry-error">
                                                                                                                    <option value="1" >Retail</option>
                                                                                                                    <option value="2" selected>Management Consulting</option>
                                                                                                                    <option value="3" selected>IT Industry</option>
                                                                                                                    <option value="4" >Pharma Industry</option>
                                                                                                                    <option value="5" >Medical</option>
                                                                                                                    <option value="6" >Hotel Management</option>
                                                                                                                    <option value="8" >Fashion &amp; Retail</option>
                                                                                                                    <option value="20" >Fashion</option>
                                                                                                                    <option value="21" >nEwssss</option>
                                                                                                                    <option value="26" >Industry 1</option>
                                                                                                                    <option value="27" >New demo</option>
                                                                                                                    <option value="29" >Entertainment</option>
                                                                                                                    <option value="31" >New industry</option>
                                                                                                            </select>
                                                    <span id="industry-error" class="help-block error-help-block"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label>Years Of Experience<span class="mandatory">*</span></label>
                                                    <input type="text" name="experience" class="form-control" value="2" maxlength="2"onkeypress="return isNumber(event)">
                                                </div>
                                                <div class="form-group">
                                                    <label>Stage<span class="mandatory">*</span></label>
                                                    <select class="form-control selectpicker" data-size="4" name="stage_id">
                                                                                                                    <option value="1" value="1"  >Seed</option>
                                                                                                                    <option value="2" value="2"  >Early-stage - Ideation</option>
                                                                                                                    <option value="3" value="3" selected >Pre Seed - Product Market Fit</option>
                                                                                                                    <option value="4" value="4"  >Series A - Scaling</option>
                                                                                                                    <option value="5" value="5"  >Series A +  Strategic</option>
                                                                                                                    <option value="19" value="19"  >Idea Concept</option>
                                                                                                                    <option value="20" value="20"  >Wireframe Rough Draft</option>
                                                                                                                    <option value="21" value="21"  >MVP Prototype</option>
                                                                                                                    <option value="22" value="22"  >Learner</option>
                                                                                                                    <option value="23" value="23"  >Hustler</option>
                                                                                                            </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary ripple-effect min-w-350 mt-xl-3 mt-1 addLoader" id="updateprofilesubmit">Save changes</button>
                                    </div>
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
