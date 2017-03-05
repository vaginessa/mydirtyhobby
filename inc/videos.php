 <ul class="video-list row" >
   <?php 
   foreach ($videos as $video) {  
   ?>
    <li class="video-list-item col-xs-12 col-sm-6 col-md-4 col-lg-4">
      <a href="#">
        <div class="imagebox">
          <div class="video-description">
            <?php echo truncate($video->description, 200); ?>
          </div>
          <figure>
           <img src="assets/teaser.jpg" alt="teaser">
          </figure>
        </div>
      </a>
        <div class="video-info-wrapper">
         <div class="video-info-title">
          <div class="svg-holder play-btn">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve"><path class="fill" d="M22.6,23.6c0-3.5,3.8-5.7,6.8-3.9l22.9,13.2L75.2,46c3,1.7,3,6.1,0,7.9L52.3,67.1L29.4,80.4c-3,1.8-6.8-0.4-6.8-3.9l0-26.4  L22.6,23.6z"/></svg>
            </div><!--svg-holder-->
             <span class="title">
               <a href="#"><?php echo $video->title; ?></a>
             </span>
        </div> <!--video-info-title -->
        </div> <!-- .video-info-wrapper -->
       <div class="video-info">
         <time datetime='2017-2-19' class="video-date"><?php echo $video->date; ?></time>
         <span class="video-uploader"><a href="#"><?php echo $video->uploader; ?></a></span>
         <span class="video-duration"><?php echo $video->duration; ?>min</span>
         <span class="video-votes"><?php echo $video->votes; ?> Votes</span>
       </div> <!-- .video-info-->
       <div class="view-video">
        <a href="#">View Video</a>
       </div>
    </li>
      <?php } ?>

</ul>