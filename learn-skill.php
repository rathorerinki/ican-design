
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
              <h1 class="page-title">Learn Skills</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->
    <div class="learn-skill-section block bg-grey">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <p>Learning and mastery of skills is more than having the right paper qualifications and being good at what you do; it is a mindset of 
            continually striving towards greater excellence through knowledge, application and experience.</p>

            <p>Our online instructors use high quality approach and excellent learning resources to enable learners to have the personalised learning 
              and training they need. We urge learners to explore new skills, deepen existing passion and get creative while upgrading their skill by 
            undertaking online courses from our best online instructors on this platform.</p>
            <div class="learn-skills-item-wrapper">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="learn-skills-item physical-mental">
                    <div class="learn-skills-content">
                      <h5 class="sub-title">Physical and mental skills</h5>
                      <p>Stay healthy and fit by learning and improving on your physical and mental skill practices by undertaking gym and yoga classes on our platform. We personalise your online training to include a full array of workout programs, with a customized exercise schedule.
                      </p>
                      <p>You get amazing value for your money as you work one-on-one with your online coach to create a sustainable eating plan and an exercise regime that delivers results whilst fitting around your life.</p>
                    </div>
                  </div>
                  <div class="learn-skills-item interact-people">
                    <div class="learn-skills-content">
                      <h5 class="sub-title">Interact with people</h5>
                      <p>Learn and improve on how you interact with people around you. This will include training that focuses on social skills, communication skills, emotional intelligence, and conflict resolution. It goes as far as being good at management tasks and problem-solving. In order to have a more committed and upskilled workforce our platform provides learners with an opportunity to get more out of  leadership and management qualifications.
                      </p>
                      <p>Our experts design leadership and management courses that are geared to improving learners’ understanding of core leadership and management principles, motivating staff, team leading, and organizing and delegating workloads to name but a few of the skills you will learn. </p>
                    </div>
                  </div>
                  <div class="learn-skills-item digital-knowledge">
                    <div class="learn-skills-content">
                      <h5 class="sub-title">IT or digital knowledge</h5>
                      <p>Get trained or build up on your existing IT or digital knowledge for home or the workplace by acquiring worldwide online qualifications and learn how to get the best from a w ide range of digital applications and software by interacting with our online digital experts who will help you enhance your performance in your current role.
                      </p>
                      <p>You will learn new skills to fulfil a personal learning goal, or experience the benefits of online learning.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="learn-skills-img">
                    <img src="assets/images/skills-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="info-content">
              It doesn’t matter where you live or where you train because our experts design training that are personalized and specifically for you.
            </div>
          </div>
        </div>
      </div>
    </div>

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
