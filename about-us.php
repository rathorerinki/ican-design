
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
  </head>
  <body>
  <?php
  require_once('header.php');
  ?>
    <div class="page-banner" style="background-image: url('assets/images/about-bg.png')">
      <div class="page-title-wrapper">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <h1 class="page-title">About</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->

  <div class="features-section block">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="features">
            <div class="row">
              <div class="col-md-6">
                <div class="feature-item">
                  <div class="card">
                      <h5 class="sub-title">Experts from all over the world</h5>
                    <p>We connect experts from all over the world with learners who are seeking to be tutored on different courses and training. Whether it’s for job opportunities or to simply gain knowledge of subjects, we enable learners to get exactly what they need to increase their skill set.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-item">
                  <div class="card">
                      <h5 class="sub-title">Unique way</h5>
                    <p>Our unique way of developing learning experiences helps ignite curiosity and foster cultures that embrace learning, through innovation and technology in this digital era. We work with instructors who are experts in their area of training and have a philosophy that not only focuses on acquisition of hard skills but to fundamentally change the mindset of the individuals that he or she seeks to train.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-item hign-level-interactive">
                  <div class="card">
                      <h5 class="sub-title">High level interactive classes</h5>
                    <p>We partner with institutions to address their learners’ unique needs, providing education and training and that will help them work towards achieving their career goals. Our online learning platform provides high level interactive classes, with live virtual classrooms and 24/7 teaching assistance that has been customised for an individual or a group.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="feature-item">
                  <div class="card">
                      <h5 class="sub-title">Enjoyable learning</h5>
                    <p>We make online learning enjoyable for the tutors and the learners, as we strive to make it fun, while at it we promote a collaborative culture of interaction among them therefore promoting excellence, creating a stronger bond of commitment of hard work.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End Live Online Class -->

  <div class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-md-11 offset-md-1">
          <h2 class="section-title">Contact</h2>
         
          <div class="row">
            <div class="col-md-8">
               <p>Tell us about yourself. Let’s discuss how we can help you</p>
              <div class="contact-form">
                <form id="contact-form" method="get" action="">
                  <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <div class="ct-field">
                          <label for="first-name" class="textUp">First Name*</label>
                          <input id="first-name" type="text" class="form-control inputValue" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <div class="ct-field">
                          <label for="surname" class="textUp">Surname</label>
                          <input id="surname" type="text" class="form-control inputValue" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <div class="ct-field">
                          <label for="email" class="textUp">Email</label>
                          <input id="email" type="email" class="form-control inputValue" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                      <div class="form-group">
                        <div class="ct-field">
                          <label for="phone-number" class="textUp">Phone number</label>
                          <input id="phone-number" type="text" class="form-control inputValue" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="ct-field">
                          <label for="message" class="textUp">Message</label>
                          <textarea id="message" class="form-control inputValue" required rows="6" style="resize: none;"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" value="Submit" class="btn btn-info mt-4">Send message</button>
                </form>
              </div>
            </div>
            <div class="col-md-4">
              <figure class="flower">
              <img src="assets/images/flower.png" alt="flower">
            </figure>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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
