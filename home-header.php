
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
                <a class="nav-link" href="home.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="office-hrs.php">Office-hours</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tutorial-home.php">Tutorial-home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link notification"  href="#" id="myBtn">Requests &nbsp; 
                  <span class="badge"> 1</span>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="learn-skill.php">Learn skill</a>
              </li> -->
            </ul>
            <ul class="header-button">
           
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle change-color-hover" type="button" data-toggle="dropdown">
                <span style="color:white">&nbsp;Admin &nbsp;&nbsp;</span><img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar-profile">
               
                <span class="caret"></span></button>

                <ul class="dropdown-menu  change-background">
                  <li><a tabindex="-1" class="sub-menu" href="#">Account Settings</a></li>
                  <hr/>
                  <li><a tabindex="-1" class="sub-menu" href="login.php?value=signIn">Sign Out</a></li>                  
                </ul>
              </div>
            </ul>
          </div>


          <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->

        <div class="row">  
              <div class="col-md-3 col-sm-12 col-12 col-lg-4"></div>
              <div class="col-md-6 col-sm-12 col-12 col-lg-4">

              <div class="modal-content">
                    <div class="modal-header">
                    
                      <h4 class="modal-title">Send Request by</h4>

                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                    
                        <div class="row">  
                                <div class="col-md-12 col-sm-12 col-12 col-lg-12">

                                
                                  <div class="our-team">
                                  
                                      <div class="row left_align">

                                              <div class="col-md-5 col-lg-5 col-sm-5 col-12">
                                                  <div class="pictures">
                                                  <img class="img-fluid office-hrs" src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                                                  </div>
                                              </div>
                                              <div class="col-md-7 col-lg-7 col-sm-7 col-12">
                                                  <div class="team-content">
                                                      <h4 class="name">Smith Roy</h4>
                                                      <span class="fa fa-calendar"></span> &nbsp;29 Dec, 2021 <br/> 
                                                      <span class="fa fa-clock-o"></span> &nbsp; 6 AM to 6:30 AM <br/>
                                                  </div>
                                                  <br/>
                                                  <a href="#" class="view-details">View Details</a>
                                                  
                                              
                                              </div>
                                          </div>                                  
                                  </div>
                                          
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                         
                          <button  type="button" class="cancelled">
                          <a href="#" class="color-anchor" >Cancel</a>
                          </button>
                          <button class="session-start">
                          <a href="#" class="color-anchor" >Confirm</a>
                          </button>

                          <button class="session-start-all">
                          <a href="requests.php" class="color-anchor" >Show All Requests</a>
                          </button>
                      </div>
                  </div>
              </div>
        </div>
        

        </div>
        </div>
      </nav> <!-- End Nav -->
    </header><!-- /header -->


    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">

      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }



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