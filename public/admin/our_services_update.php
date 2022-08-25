<?php
session_start();
if ($_SESSION['id'] == '') {
    header("location:login.php");
}
if (isset($_GET['id'])) {
    include 'function/function.php';
    $our_services = ourServices($_GET['id']);
    $id = $our_services->id;
    $path = $our_services->image_path;
    $heading = $our_services->heading;
    $short_description = $our_services->short_description;
    $long_description = $our_services->long_description;
} else {
    header("location:index.php");
}

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
                        <span>Slider Update</span>
                     </h2>
                  </div>
            <!--//banner-->
               <!--faq-->
                  <div class="blank">
                     <div class="blank-page">
                        <div class="row">
                           <div class="">
                              <div class="grid-form">
                                 <form method="post" action="include/our_services_update.php" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" disable>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Heading</label>
                                       <input type="text" class="form-control" name="heading" id="exampleInputEmail1" placeholder="Slider Heading" value="<?php echo $heading ?>">
                                    </div>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Short Description</label>
                                       <textarea type="text" class="form-control" name="short_description" id="exampleInputEmail1" placeholder="Slider Description" ><?php echo $short_description ?></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1">Long Description</label>
                                       <textarea type="text" class="form-control" name="long_description" id="exampleInputEmail1" placeholder="Slider Description"rows="5" ><?php echo $long_description ?></textarea>
                                    </div>
                                    <div class="form-group">
                                       <label for="exampleInputEmail1" id="File_Upload">File Upload</label>
                                       <input type="file" id="uploadImage"  onchange="PreviewImage();" class="form-control" name="slider-image" id="exampleInputEmail1" placeholder="Please Upload the file">
                                    </div>
                                    <input type="hidden" name="alrreadypath" value="<?php echo $path ?>">
                                    <div class="form-group">
                                       <img id="uploadPreview" src="<?php echo $path ?>" class="img-thumbnail" style="width:25%;" >
                                       <script type="text/javascript">
                                       function PreviewImage() {
                                          var oFReader = new FileReader();
                                          oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
                                          oFReader.onload = function (oFREvent) {
                                                var image = new Image();
                                                image.src = oFREvent.target.result;
                                                image.onload = function () {
                                                   var height = this.height;
                                                   var width = this.width;
                                                   if((image.height == 150) && (image.width == 150)){
                                                   document.getElementById("submit").disabled = false;
                                                   document.getElementById("uploadPreview").src = oFREvent.target.result;
                                                   }else{
                                                      document.getElementById("File_Upload").innerText = "File Upload(Please Select the 150 X 150 dimension image)";
                                                      document.getElementById("submit").disabled= true;
                                                      document.getElementById("uploadPreview").src = "";
                                                   }
                                                };
                                          };
                                       };

                                       </script>
                                    </div>
                                    <button type="submit" name="services_update" class="btn btn-default" id="submit">Update</button>
                                 </form>
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
