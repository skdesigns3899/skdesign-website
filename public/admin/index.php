<?php
session_start();
if ($_SESSION['id'] == '') {
    header("location:login.php");
} else {
    ?>

   <!DOCTYPE HTML>
   <html>
      <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
         <!-- Custom Theme files -->
         <link href="css/style.css" rel='stylesheet' type='text/css' />
         <link href="css/font-awesome.css" rel="stylesheet">
         <script src="js/jquery.min.js"> </script>
         <script src="js/bootstrap.min.js"> </script>
         <!-- Mainly scripts -->
         <script src="js/jquery.metisMenu.js"></script>
         <script src="js/jquery.slimscroll.min.js"></script>
         <!-- Custom and plugin javascript -->
         <link href="css/custom.css" rel="stylesheet">
         <script src="js/custom.js"></script>
         <script src="js/screenfull.js"></script>
         <script>
            $(function () {$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
               if (!screenfull.enabled) {return false;}
               $('#toggle').click(function () {screenfull.toggle($('#container')[0]);});});
         </script>
      </head>
      <body>
         <div id="wrapper">
         <!----->
            <nav class="navbar-default navbar-static-top" role="navigation">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  </button>
                  <h1> <a class="navbar-brand" href="index.php">VNS Consulting</a></h1>
               </div>
               <div class=" border-bottom">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="drop-men" >
                     <ul class=" nav_1">
                        <li class="dropdown">
                           <a href="logout.php" class="dropdown-toggle dropdown-at" ><span class=" name-caret">Logout</span><img class="img-rounded" src="images/wo.jpg"></a>
                        </li>
                     </ul>
                  </div>
                  <!-- /.navbar-collapse -->
                  <div class="clearfix">
                  </div>
                  <div class="navbar-default sidebar" role="navigation">
                     <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                              <li>
                                 <a href="#" class="hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Sliders</span><span class="fa arrow"></span></a>
                                 <ul class="nav nav-second-level">
                                    <li><a href="#" class=" hvr-bounce-to-right"> <i class="fa fa-picture-o nav_icon"></i>Slider View</a></li>
                                    <li><a href="slider_add.php" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i>Slider Add</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="our_services.php" class="hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Our Services</span><span class="fa arrow"></span></a>
                              </li>
                              <li>
                                 <a href="contact_us.php" class="hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Contact Us</span><span class="fa arrow"></span></a>
                              </li>
                              <li>
                                 <a href="testimonial.php" class="hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Testimonial</span></a>
                              </li>
                        </ul>
                     </div>
                  </div>
            </nav>
            <div id="page-wrapper" class="gray-bg dashbard-1">
               <div class="content-main">
               <!--banner-->
                     <div class="banner">
                        <h2>
                           <a href="index.php">Home</a>
                           <i class="fa fa-angle-right"></i>
                           <span>Dynamic Slider</span>
                        </h2>
                     </div>
               <!--//banner-->
                  <!--faq-->
                     <div class="blank">
                        <div class="blank-page">
                        <div class="container">
                           <div class="row border-bottom-table">
                              <div class="col-sm-3"><h2>Slider Add</h2></div>
                              <div class="col-sm-3">
                                 <a href="slider_add.php" class="btn btn-primary">
                                    Add Slider
                                 </a>
                              </div>
                              <div class="col-sm-3"></div>
                           </div>
                        </div>
                           <div class="container">
                              <div class="row table">
                                 <div class="container">
                                    <div class="row border-bottom-table">
                                       <div class="col-md-1">No</div>
                                       <div class="col-md-2">Image</div>
                                       <div class="col-md-2">Image Alter Text</div>
                                       <div class="col-md-1">Slider Heading</div>
                                       <div class="col-md-2">Slider Paragraphy</div>
                                       <div class="col-md-1">Update</div>
                                       <div class="col-md-1">Delete</div>
                                    </div>

                                       <?php
                                       require "model/slider.php";
                                          $i = 1;
                                          if ($slider != false) {
                                             foreach ($slider as $val) {
                                                   ?>
                                             <div class="row margin-top border-bottom-table">
                                                <div class="col-md-1"><?php echo "$i";
                                                $i = $i + 1; ?></div>
                                                <div class="col-md-2">
                                                   <img src="<?php echo "$val->path"; ?>" class="img-fluid img-thumbnail" alt="Image Not Found">
                                                </div>
                                                <div class="col-md-2"><?php echo "$val->image_alter_text"; ?></div>
                                                <div class="col-md-1"><?php echo "$val->heading"; ?></div>
                                                <div class="col-md-2"><?php echo "$val->description"; ?></div>
                                                <div class="col-md-1">
                                                   <a href="slider_update.php?id=<?php echo "$val->id"; ?>" class="btn btn-primary">Update</a>
                                                </div>
                                                <div class="col-md-1">
                                                   <a href="slider_delete.php?id=<?php echo "$val->id"; ?>" class="btn btn-danger">Delete</a>
                                                </div>
                                             </div>
                                             <?php
                                             }
                                          } else {
                                          ?>
                                             <div class="row margin-top border-bottom-table">
                                                <h2>No Record Found</h2>
                                             </div>
                                             <?php
                                          }?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <!--//faq-->
                  <!---->
                     <div class="copy">
                     <p> &copy; VNS Consulting. All Rights Reserved </p>
                     </div>
               </div>
            </div>
            <div class="clearfix"></div>
         </div>
         <!---->
         <!--scrolling js-->
         <script src="js/jquery.nicescroll.js"></script>
         <script src="js/scripts.js"></script>
         <!--//scrolling js-->
      </body>
   </html>

<!-- else condition over -->
<?php
}
?>