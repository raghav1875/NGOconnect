<!doctype html>
<html lang="en">
  <head>
    <title>Free Education Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script>
      function detailPage (id) {
        id = parseInt(id)+1
       window.location = '/NGOconnect/course-single.php?id='+ String(id);    }
    </script>
  </head>
  <body>
    <?php
    require 'connect.inc.php';
    require 'core.inc.php';

    ?>
    <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <?php
              if(!loggedin()){

                  echo '<a class="navbar-brand absolute" href="index.php">NGO::connect</a>';

              }
              else{

               echo '<a class="navbar-brand absolute" href="main.php">NGO::connect</a>';

            }
            ?>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
             <!--  <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Internships</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.php">Volunteer</a>
                  <a class="dropdown-item" href="courses.php">Data Entry</a>
                  <a class="dropdown-item" href="courses.php">Web Development</a>
                </div>

              </li> -->

              <!-- li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">HTML</a>
                  <a class="dropdown-item" href="#">WordPress</a>
                  <a class="dropdown-item" href="#">Laravel</a>
                  <a class="dropdown-item" href="#">JavaScript</a>
                  <a class="dropdown-item" href="#">Python</a>
                </div>

              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="courses.php">Internships</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
              <?php
              if(!loggedin()){

                  echo '<a href="main.php">Login</a> / <a href="register.php">Register</a>';

              }
              else{
              if(get_user()=='student'){
                echo '<a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'; echo getuserfield('firstname'); echo " "; echo getuserfield('surname'); echo '</a>';

              }
              else if (get_user()=='ngo'){
                  echo '<a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'; echo getuserfield('ngoname'); echo '</a>';
              }
              else if (get_user()=='company'){
                  echo '<a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'; echo getuserfield('comname'); echo '</a>';
              }
            }

              echo '<div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="logout.php">Log Out</a>
              </div>';
            ?>
             </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">

            <div class="mb-5 element-animate">
              <h1 class="mb-2">Internships</h1>
              <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Internships</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-8 order-md-2">
            <div class="row">
              <?php
                        $array = get_intern();
                        for ($i = 0; $i < count($array); $i++) {

                            ?>
                            <div class="col-md-12 col-lg-6 mb-5">
                            <div class="block-19">
                              <!-- <figure>
                                <a href="course-single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                              </figure> -->
                                <div class="text">
                                  <h2 class="heading"><a href="#" onclick= "detailPage(this.id);" id="<?php echo $i?>"><?php echo $array[$i]['Name'];?></a></h2>
                                  <p class="mb-1"><h6><?php echo $array[$i]['NGO'];?></h6></p>
                                  <p class="mb-1">Location(s): <?php echo $array[$i]['Location'];?></p>
                                   <p class="mb-1">Duration: <?php echo $array[$i]['Duration'];?></p>
                                  <div class="meta d-flex align-items-center">
                                    <div class="number">
                                      <span>Apply by:<?php echo $array[$i]['Apply_by'];?></span>
                                    </div>
                                    <div class="price text-right"><span>Apply</span></div>
                                  </div>
                                </div>
                              </div>

                          </div>

                        <?php } ?>


            </div>

            <div class="row mb-5">
              <div class="col-md-12 text-center">
                <div class="block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <li class="active"><span>1</span></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- END content -->
          <?php
          global $mysql_connect;
          $query = "SELECT `Name`,COUNT(*) as count FROM `internship_details` GROUP BY `Name` ORDER BY count DESC";
          if($query_run = mysqli_query($mysql_connect, $query))
            {
              $query_run = mysqli_query($mysql_connect, $query);
              $myarray = array(); # initialize the array first!
              while($row = mysqli_fetch_assoc($query_run))
              {
                  $myarray[] = $row; # add the row
              }

            }
            else{
              echo 'Unsucessful';
            }

          ?>
          <div class="col-md-6 col-lg-4 order-md-1">

            <div class="block-24 mb-5">
              <h3 class="heading">Categories</h3>
              <ul>
                <?php for ($i = 0; $i < count($myarray); $i++) {?>
                <li><a href="#"><?php echo $myarray[$i]['Name']?><span><?php echo $myarray[$i]['count']?></span></a></li>
                <?php }?>
              </ul>
            </div>

            <div class="block-25 mb-5">
              <div class="heading">Recent Courses</div>
              <ul>
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      <img src="images/img_2_b.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <h3 class="heading">Create cool websites using this template</h3>
                      <span class="meta">$34</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      <img src="images/img_2_b.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <h3 class="heading">Create cool websites using this template</h3>
                      <span class="meta">$34</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="#" class="d-flex">
                    <figure class="image mr-3">
                      <img src="images/img_2_b.jpg" alt="" class="img-fluid">
                    </figure>
                    <div class="text">
                      <h3 class="heading">Create cool websites using this template</h3>
                      <span class="meta">$34</span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>

            <div class="block-26">
              <h3 class="heading">Tags</h3>
              <ul>
                <?php
                for ($i = 0; $i < count($array); $i++) {
                ?>
                <li><a href="#"><?php echo $array[$i]['Tags']?></a></li>
                <?php }?>
              </ul>
            </div>


          </div>
          <!-- END Sidebar -->
        </div>
      </div>
    </div>


    <?php
              if(!loggedin()){

                  echo '<div class="py-5 block-22">
                      <div class="container">
                        <div class="row align-items-center">
                          <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
                            <h2 class="heading">Help the underprivileged</h2>
                            <p>Receive regular updates about internships at NGOs and do your part for the society.</p>
                          </div>
                          <div class="col-md-6">
                            <form action="#" class="subscribe">
                              <div class="form-group">
                                <input type="email" class="form-control email" placeholder="Enter email">
                                <input type="submit" class="btn btn-primary submit" value="Subscribe">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>';

              }
              else{


            }
            ?>



  <footer class="site-footer">
      <div class="container">
        <div class="row mb-3">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3>NGO::connect</h3>
            <p>One stop platform for social internships. Give back to the society by taking up a task.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="courses.php">Internships</a></li>
                  <li><a href="#">Pages</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="#">News</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Privacy</a></li>
                </ul>
              </div>
            </div>
          </div>
     <!--      <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Blog</h3>
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Consectetur Adipisicing Elit</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  -->
            <!-- <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Dolore Tempora Consequatur</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Perferendis eum illum</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Cluster Innovation Centre, University of Delhi</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+91 9999 99999</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@ducic.ac.in</span></a></li>
                <!-- <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li> -->
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">

            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>
