<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); ?>
<?php 
 // for login page to start working again
//session_start();
//
//if(!isset($_SESSION['UserName'])){                           //if username has not been set
//    $_SESSION['msg'] = 'You must log in first';              //You must log in first 
//    header('Location: login.php');                           //redirect to log in page 
//} 
//
//if(isset($_GET['logout'])){                                 //if we want them to log out they must be redirected to logout
//    session_destroy();                                      //we destroy the session 
//    unset($_SESSION['UserName']);                           //unset sessions username 
//    header('Location: login.php');                          //redirect to the login page now that username session has ended
//
//} 
?>
<div id="loggedon">
<?php 
    if(isset($_SESSION['UserName'])) : ?> 
    <h3> Welcome, 
        <?php
            echo  $_SESSION['UserName']; ?>
    </h3>
    <br> 
<!-- position on left side -->
    <p><a href="index.php?logout='1' ">Log out</a></p>
    
    <?php  endif     ?> 

</div>
<div class="home-img-container">
    <img class="home-img" src="images/headerBanner.jpg" alt="header-banner">
</div>

<div class="container"> 
    <div id="home-container">
            <div class="home-container1">
                <h4><?php echo $mainHeadline; ?></h4>
                <p id="mission-info">Here at Bonkai, the process of imagination to creation is the driving force to our success. 
By focusing the imagination of our clients, we are able to bring forth unique products that appeal to the clients audience. 
Our Team focuses on turning customer concepts into reality through a variety of services that include Web Development, 
Videography, and Photography. Through these mediums, our goal is to provide  product to our clients 
that is both satisfactory as well and experiential.</p>
            </div>
            <div class="home-container2">
                <img class="jose-img" src="images/gallery/portraits/portrait3.jpg" alt="jose-castro">
            </div> 

            <div class="home-container1">
                <h4>Check Out Our Social Media Platfroms</h4>
                <ul id="font-awesome">
                                    <li id="instagram"><a href="https://www.instagram.com/bonkaistudios  "><i class="fab fa-instagram"></i></a></li>
                                    <li id="facebook"><a href="https://www.facebook.com/bonkaistudios "><i class="fab fa-facebook"></i></a></li>
                                    <li id="facebook"><a href="https://www.youtube.com/channel/UCOAwYx0MqHP6x1za8Evq6Eg"><i class="fab fa-youtube-square" aria-hidden="true"></i></a></li>
                                </ul>
            </div>
    </div>
</div> <!--END OF CONTAINER--> 

<div class="wrapper">

<main> 
        <img src="./images/play.png" alt="play" class="play-btn" onclick="playVideo('images/vid1.mp4')">
            <div class="row">
                <div class="col">
                    <div class="feature-img">
                        
                        <img src="./images/pic1.png" alt="pic1">
                    </div>
                </div>
            </div>
        </main> 
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
                               <img src="./images/pic3.png" alt="pic2">
                           </div>
                           <img src="./images/play.png" alt="play" class="small-play-btn">
                           <p>In this video, we were able to get our client the instagram video their buisness was looking for.  </p>
                       </div>
                   </div>
                   <div class="col">
                       <div class="small-img-row">
                           <div class="small-img">
                               <img src="./images/pic4.png" alt="pic2">
                           </div>
                           <img src="./images/play.png" alt="play" class="small-play-btn">
                           <p>Please check us out on social media  and see who we can connect you with.</p>
                                
                       </div>
                   </div>

        </aside>
</div> <!--END WRAPPER-->     

<div class="video-player" id="videoPlayer"> 
    <video controls autoplay id="myVideo" >
        <source src="./videos/video1.mp4" type="video/mp4">
    </video>
    <img src="images/close.png" alt="close" class="close-btn" onclick="stopVideo()">
</div>  <!--END VIDEO PLAYER-->  


    <script> 
    var videoPlayer=document.getElementById("videoPlayer"); 
    var myVideo = document.getElementById("myVideo"); 
    var playBtn = getElementsByClassName("play-btn"); 

    function playVideo(file) { 
        myVideo.src=file;
        videoPlayer.style.display="block";
    }

    function stopVideo() { 
        videoPlayer.style.display="none";
        myVideo.src='';
    }

    
</script> 

<!-- START OF NEW DIV --> 







<?php include('./includes/footer.php'); ?>