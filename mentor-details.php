
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
              <h1 class="page-title">Profile</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->

  <div class="features-section block">


    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="our-team">
                    <div class="picture">
                    <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                    </div>
                    <div class="team-content">
                    <h3 class="name">Michele Miller</h3>                           
                    </div>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <br/>
                    <hr class="hr-hro"/>
                    <div class="change_style_sessions">                          
                    &nbsp;<a class="active" href="#">0</a>  &nbsp; 1:1 Sessions                        
                    </div>
                    
                    <hr class="hr-hro"/>
                    <div class="change_style_sessions">                          
                    &nbsp;<a class="active" href="#">0</a>  &nbsp; Mastermind Sessions                      
                    </div>
                    <hr class="hr-hro"/>
                    <!-- <button class="show-details">SCHEDULE 1:1 SESSIONS</button> -->

                    <form action="schedule-session.php">
                                <input type="submit" value="SCHEDULE 1:1 SESSIONS" class="show-details"/>
                     </form>
                </div>
            </div>
            
            <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                <div class="our-team profile">
                    <!-- <div class="picture">
                    <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                    </div> -->
                    <h2> Personal Details</h2>
                    <br/>
                    <br/>
                    <div class="team-content profile-content">
                    <h4 class="title">User Name: </h4>
                    <h3 class="name">Michele Miller</h3>
                    <br/>

                    <h4 class="title">Years of Experience: </h4>
                    <h3 class="name">+3</h3>
                    <br/>

                    <h4 class="title">Industry Expertise: </h4>
                    <h3 class="name">Retail, Management Consulting</h3>
                    <br/>

                    <h4 class="title">Bio: </h4>
                    <p class="name">When creating a personal portfolio website, you need to look at a few special things, the most important of which is that you need to design the website in such a way that you can put all your experience and talent in front of your users. A portfolio website is a website where you will showcase your educational qualifications and your experience to the users.</p>

                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                 
            <div class="team-content">
            <h2 class="name" style="color:black">Upcoming Session</h2>
            <br/>
            <br/>
            <h5>There are no upcoming sessions to show</h5>                           
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
