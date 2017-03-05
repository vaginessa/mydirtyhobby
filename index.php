<!-- include the helper functions -->
<?php include('functions.php'); ?>

<!-- Videos helper -->
<!-- Get videos from json -->
<?php
$json_file = file_get_contents('videos.json');
// Decode json values and add them to videos
$videos = json_decode($json_file);
?>

  <!-- Include header -->
  <?php include('inc/header.php'); ?>
   <!-- Include the topbar -->
  <?php include('inc/topbar.php'); ?>
                  
    <div class="content-wrapper">
        <div class="container">
         <div class="row">
          <div class=" nav-wrapper cols-xs-12 col-sm-4 col-lg-2">
             <!-- Include navigation -->
             <?php include('inc/nav.php'); ?>
          </div><!--col-sm-12-->  

          <div class="video-wrapper col-sm-8 col-lg-10"> 
          <section class="main-content">
             <!-- Include banner slider -->
             <?php include('inc/slider.php'); ?>
            <h3 class="top-videos">Top Videos</h3>
            <!-- Videos -->
            <!-- Include videos  -->
            <?php include('inc/videos.php'); ?>
          </section><!-- .content -->
          </div> <!-- col-xs-6-->
        </div> <!--row-->
       </div> <!--container -->
    </div><!-- .content-wrapper-->

    <!-- Include footer -->
    <?php include('inc/footer.php'); ?>
  </div>

<!-- Scripts -->
<script  src="dist/js/libs.min.js"></script>
<script  src="dist/js/scripts.js"></script>
</body>
</html>