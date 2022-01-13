
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

    <!-- 12-01-22 -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
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
              <h1 class="page-title">All Requests</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->

  <div class="features-section block">


    <div class="container card12 padding-top">
        <!-- <div class="card12"> -->
          <div class="row">
              <div class="col-12 col-sm-12 col-md-12">
                  
                      <table id="example" class="table table-striped table-bordered dt-responsive nowrap" >
                        <thead>
                          <tr>
                            <th>From</th>
                            <th>Username</th>
                            <th>Session date & time</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
                                &nbsp;  
                                Tiger</td>
                                <td>Nixon</td>
                                <td>
                                29 Dec, 2021 <br/>  6 AM to 6:30 AM 
                                </td>
                                <td>
                                <button class="reject">
                                Reject
                                </button>
                                |
                                <button class="confirm">
                                Confirm
                                </button>

                                |
                                <a href="#">
                                View details
                                </a>

                                </td>            

                            </tr>
                            <tr>
                                <td>
                                <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
                                &nbsp;    
                                Garrett
                                </td>
                                <td>Winters</td>
                                <td>
                                29 Dec, 2021 <br/>  6 AM to 6:30 AM 
                                </td>
                                <td>

                                <button class="reject">
                                Reject
                                </button>
                                |
                                <button class="confirm">
                                Confirm
                                </button>

                                |
                                <a href="#">
                                View details
                                </a>

                                </td>

                            </tr>
                            <tr>
                                  <td>
                                  <img src="https://www.w3schools.com/howto/img_avatar.png" alt="Avatar" class="avatar">
                                  &nbsp;    
                                  Ashton</td>
                                  <td>Cox</td>
                                  <td>
                                  29 Dec, 2021 <br/>  6 AM to 6:30 AM 

                                  </td>
                                  <td>

                                  <button class="reject">
                                  Reject
                                  </button>
                                  |
                                  <button class="confirm">
                                  Confirm
                                  </button>

                                  |
                                  <a href="#">
                                  View details
                                  </a>
                                  </td>

                            </tr>

                        </tbody>
                      </table>
                  
              </div>
          </div>
      <!-- </div> -->
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


<!-- 12-01-22 -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script>

$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
	
    </body>
</html>
