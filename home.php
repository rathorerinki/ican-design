
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
              <h1 class="page-title">Home</h1>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- End Page banner -->

  <div class="features-section block">

    <div class="container">
        <div class="row searchFilter" >
            <div class="col-sm-12" >
            <div class="input-group" >
            <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown" placeholder="Search...." >

            
            <div class="input-group-btn" >
                <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Filters</span> <span class="caret" >&nbsp;</span></button>
                <div class="dropdown-menu dropdown-menu-right" >
                <ul class="category_filters" >
                    <li > 
                    <input class="cat_type category-input" data-label="All" id="all" value="" name="checkbox" type="checkbox" ><label for="retail" >Retail</label>
                    </li>
                    <li >
                    <input type="checkbox" name="radios" id="Design" value="Design" ><label class="category-label" for="Management Consulting" >Management Consulting</label>
                    </li>
                    <li >
                    <input type="checkbox" name="radios" id="Marketing" value="Marketing" ><label class="category-label" for="IT Industry" >IT Industry</label>
                    </li>
                    <li >
                    <input type="checkbox" name="radios" id="Programming" value="Programming" ><label class="category-label" for="Pharma Industry" >Pharma Industry</label>
                    </li>
                    <li >
                    <input type="checkbox" name="radios" id="Sales" value="Sales" ><label class="category-label" for="Medical" >Medical</label>
                    </li>
                    <li >
                    <input type="checkbox" name="radios" id="Support" value="Support" ><label class="category-label" for="Hotel Management" >Hotel Management</label>
                    </li>
                    <li >
                    <input type="checkbox" name="radios" id="Support" value="Support" ><label class="category-label" for="Fashion & Retail" >Fashion & Retail</label>
                    </li>
                    <li >
                    <input type="checkbox" name="radios" id="Support" value="Support" ><label class="category-label" for="Fashion" >Fashion</label>
                    </li>
                    <li >
                    <input type="checkbox" name="radios" id="Support" value="Support" ><label class="category-label" for="nEwssss" >nEwssss</label>
                    </li>
                </ul>
                </div>



                <button id="searchBtn" type="button" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
            </div>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                            </div>
                            <div class="team-content">
                            <h3 class="name">Michele Miller</h3>
                            <h4 class="title">Entertainment + 3</h4>
                            </div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <br/>
                                <form action="mentor-details.php">
                                <input type="submit" value="View Details" class="show-details"/>
                                </form>
                               
                        </div>
                    </div>                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                            </div>
                            <div class="team-content">
                            <h3 class="name">Patricia Knott</h3>
                            <h4 class="title">Fashion + 3</h4>
                            </div>
                            <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <br/>

                                <form action="mentor-details.php">
                                <input type="submit" value="View Details" class="show-details"/>
                                </form>
                               
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                            </div>
                            <div class="team-content">
                            <h3 class="name">Justin Ramos</h3>
                            <h4 class="title">Hotel Management + 3</h4>
                            </div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <br/>
                                 <form action="mentor-details.php">
                                <input type="submit" value="View Details" class="show-details"/>
                                </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
                            </div>
                            <div class="team-content">
                            <h3 class="name">Mary Huntley</h3>
                            <h4 class="title">IT Industry + 3</h4>
                            </div>
                            <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <br/>
                                 <form action="mentor-details.php">
                                <input type="submit" value="View Details" class="show-details"/>
                                </form>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=1027">
                            </div>
                            <div class="team-content">
                            <h3 class="name">Michele Miller</h3>
                            <h4 class="title">Entertainment + 3</h4>
                            </div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <br/>
                                <form action="mentor-details.php">
                                <input type="submit" value="View Details" class="show-details"/>
                                </form>
                               
                        </div>
                    </div>                    
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=839">
                            </div>
                            <div class="team-content">
                            <h3 class="name">Patricia Knott</h3>
                            <h4 class="title">Fashion + 3</h4>
                            </div>
                            <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <br/>

                                <form action="mentor-details.php">
                                <input type="submit" value="View Details" class="show-details"/>
                                </form>
                               
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=856">
                            </div>
                            <div class="team-content">
                            <h3 class="name">Justin Ramos</h3>
                            <h4 class="title">Hotel Management + 3</h4>
                            </div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <br/>
                                 <form action="mentor-details.php">
                                <input type="submit" value="View Details" class="show-details"/>
                                </form>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                        <div class="our-team">
                            <div class="picture">
                            <img class="img-fluid" src="https://picsum.photos/130/130?image=836">
                            </div>
                            <div class="team-content">
                            <h3 class="name">Mary Huntley</h3>
                            <h4 class="title">IT Industry + 3</h4>
                            </div>
                            <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <br/>
                                 <form action="mentor-details.php">
                                <input type="submit" value="View Details" class="show-details"/>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 col-sm-8 col-md-8 col-lg-8"> </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#">1</a>
                            <a class="active" href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">&raquo;</a>
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
