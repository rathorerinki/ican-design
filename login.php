
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Ican Guru</title>


    <!-- Bootstrap core CSS -->

    <!-- Favicons -->
    <link rel="icon" href="assets/images/favicon.png">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  </head>
  <style>

</style>
  <body>
  <?php
  require_once('header.php');
  ?>
	<div class="page-banner" style="background-image: url('assets/images/about-bg.png')">
      <div class="page-title-wrapper">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <h1 class="page-title">Login or signup</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->

  <div class="features-section block">


    <div class="container123 login_body" id="container123">
        <div class="form-container123 sign-up-container123">
            <form action="home.php" class="form-signup-login">
                <h5>Create Account</h5>
                <!-- <div class="social-container123">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div> -->
                <input type="text" placeholder="Name" />
                <input type="number" placeholder="Mobile" />
                <input type="email" placeholder="Email" />  
                <input type="password" placeholder="Password" />
                <input type="text" placeholder="Name of Company" />
                <input type="text" placeholder="Type of Industry" />
                <input type="text" placeholder="Years of experience" />
                <input type="text" placeholder="Stage" />
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container123 sign-in-container123">
            <form action="home.php">
                <h1>Sign in</h1>
                <div class="social-container123">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container123">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
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

<script type="text/javascript">


$( document ).ready(function() {
	var surveyKey = querySt("value");
if(surveyKey=='signUp'){
console.log("signUp ----> ",surveyKey);

container123.classList.add("right-panel-active");
}
else if(surveyKey=='signIn'){
console.log("signIn ----> ",surveyKey);
container123.classList.remove("right-panel-active");

}
});
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container123 = document.getElementById('container123');

signUpButton.addEventListener('click', () => {
	container123.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container123.classList.remove("right-panel-active");
});


function querySt(ji) {
    hu = window.location.search.substring(1);
    gy = hu.split("?");
    for (i=0;i<gy.length;i++) {
        ft = gy[i].split("=");
        if (ft[0] == ji) {
            return ft[1];
        }
    }
}
</script>
	
    </body>
</html>
