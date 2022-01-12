
  <style>
       a.active_menu {
        font-weight: 600;
        color:#30ade4;
}
a {
    color: green;
    text-decoration: none;
}
  </style>


<header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="about-us.php">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="how-it-works.php">How it Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="teach-with-us.php">Teach with us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="learn-skill.php">Learn skill</a>
              </li>
            </ul>
            <ul class="header-button">
              <li><a href="login.php?value=signUp" title="" class="link-text">Sign up</a></li>
              <li><a href="login.php?value=signIn" title="" class="btn btn-light">Sign in</a></li>
            </ul>
          </div>
        </div>
      </nav> <!-- End Nav -->
    </header><!-- /header -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
      jQuery(function($){
        var path=window.location.href;
        console.log("path  ",path)
        $('div ul li a').each(function(){
        if(path==this.href){

          console.log("added...")
          $(this).addClass('active');
        }

        })

      })
    </script>