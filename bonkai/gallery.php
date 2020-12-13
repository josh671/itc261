<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); ?>

<div class="wrapper">
<div id="gallery-background">
<p class="gallery-intro"><?php echo $mainHeadline ?></p>
<p class="gallery-intro">GALLERY <p>
</div> 

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>



<div class="gallery-navigation">
    <ul>
        <li><a href='#family-pictures'>Family-Pictures</a></li>
        <li><a href='#portraits'>Portraits</a></li>
        <li><a href='#music-videos'>Music Videos</a></li>
        <li><a href='#test'>Music Videos</a></li>
        <li><a href='#test'>Music Videos</a></li>
    </ul>
</div>  <!--END GALLERY NAVIGATION--> 


<div class="image-slider">
    <div class="image-slider-container">
        <img id='active' src="images/gallery1.jpg" alt="gallery-image" >
        <img id='middle_img' class="inactive slides" src="images/newPhoto1.png" alt="gallery-image" >
        <img id='last_img' class="inactive slides" src="images/newPhoto3.png" alt="gallery-image" >

    </div> 

    <div class="button-container">
        <a href="#slider-image-1" class="slider-button"></a>
        <a href="#slider-image-1" class="slider-button"></a>
    </div>
    <div id="button-container"> 
        <button type="button" class="img-btn" onclick='firstImg()'></button>
        <button type="button" class="img-btn" onclick='secondImg()'></button>
        <button type="button" class="img-btn" onclick='thirdImg()'></button>
    </div>

</div>


<div class='pics-container' id="family-pictures">
    <div class='image-container'>
        <div id='images-wrapper'> 
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/fall/fall1.jpg" alt="fall1"></figure>
        <figure class="gallery-image hover-zoom"><img class="fall-image" src="images/gallery/fall/fall1.jpg" alt="fall1"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/fall/fall2.jpg" alt="fall2"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/fall/fall3.jpg" alt="fall3"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/fall/fall4.jpg" alt="fall4"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/fall/fall5.jpg" alt="fall5"></figure> 
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/fall/fall6.jpg" alt="fall6"></figure>
        </div>
    </div> <!--END OF IMAGE CONTAINER-->

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content"  id="img01"> 
        <div id="caption"></div>

</div>

</div>  <!--END OF fall PICS  --> 




<div class='pics-container' id="portraits">
    <div class='image-container'>

        <div id="images-wrapper"> 
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait3.jpg"  alt="portrait3"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait2.jpg"  alt="portrait2"></figure>
        <figure class="gallery-image hover-zoom"><img class="fall-image" src="images/gallery/portraits/portrait1.jpg"  alt="portrait1"></figure>
        <figure class="gallery-image hover-zoom"><img class="fall-image" src="images/gallery/portraits/portrait4.jpg"  alt="portrait4"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait10.jpg"  alt="portrait10"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait11.jpg"  alt="portrait11"></figure> 
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait12.jpg"  alt="portrait12"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait13.jpg"  alt="portrait13"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait14.jpg"  alt="portrait14"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait15.jpg"  alt="portrait15"></figure>    
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait16.jpg"  alt="portrait16"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait17.jpg"  alt="portrait17"></figure> 
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait5.jpg"  alt="portrait5"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait6.jpg"  alt="portrait6"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait7.jpg"  alt="portrait7"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait8.jpg"  alt="portrait8"></figure>
        <figure class="gallery-image hover-zoom"><img  class="fall-image" src="images/gallery/portraits/portrait9.jpg"  alt="portrait9"></figure>    
       
    </div>
    </div> <!--END OF IMAGE CONTAINER--> 
</div> <!--END pics container-->  



    <div class="video-wrapper" id="music-videos">
<main> 
        <img src="./images/play.png" alt="play" class="play-btn" onclick="playVideo('images/vid1.mp4')">
            <div class="row">
                <div class="col">
                    <div class="feature-img">
                        
                        <img src="./images/pic1.png" alt="pic1">
                    </div>
                </div>
            </div>
        </main> <!--End of main/ large video player-->
        <aside> 

                   <div class="col">
                       <div class="small-img-row">
                           <div class="small-img">
                               <img src="./images/pic2.png" alt="pic2">
                           </div>
                          <img src="./images/play.png" alt="play" class="small-play-btn"  onclick="playVideo('videos/video2.mp4')">
                           <p>Here is a music video put together by our Videographer. </p>
                       </div>
                   </div>
                   <div class="col">
                       <div class="small-img-row">
                           <div class="small-img">
                               <img src="./images/pic2.png" alt="pic2">
                           </div>
                          <img src="./images/play.png" alt="play" class="small-play-btn"  onclick="playVideo('videos/video2.mp4')">
                           <p>Here is a music video put together by our Videographer. </p>
                       </div>
                   </div>
                   <div class="col">
                       <div class="small-img-row">
                           <div class="small-img">
                               <img src="./images/pic2.png" alt="pic2">
                           </div>
                          <img src="./images/play.png" alt="play" class="small-play-btn"  onclick="playVideo('videos/video2.mp4')">
                           <p>Here is a music video put together by our Videographer. </p>
                       </div>
                   
                   </div>

        </aside><!--End of aside/ small video player-->
</div> <!--END WRAPPER-->     

<div class="video-player" id="videoPlayer"> 
    <video controls autoplay id="myVideo" >
        <source src="./videos/video1.mp4" type="video/mp4">
    </video>
    <img src="images/close.png" alt="close" class="close-btn" onclick="stopVideo()">
</div>  <!--END VIDEO PLAYER-->  


    <script type="text/javascript"> 
    var videoPlayer=document.getElementById("videoPlayer"); 
    var myVideo = document.getElementById("myVideo"); 
    var playBtn = document.getElementsByClassName("play-btn"); 

    function playVideo(file) { 
        myVideo.src=file;
        videoPlayer.style.display="block";
    }

    function stopVideo() { 
        videoPlayer.style.display="none";
        myVideo.src='';
    }

    
</script>




</div>

   
<script src="js/js.js"></script> 
<script src="js/slider.js" ></script> 
<script src="js/enlarge.js" ></script> 
<?php include('./includes/footer.php'); ?>