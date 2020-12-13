<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); ?>
<div id="side_menu">
        <ul> 
                <li class="switch-days"><a href="daily.php?month=7">Summer</a></li>
                <li class="switch-days"><a href="daily.php?month=11">Fall</a></li>
                <li class="switch-days"><a href="daily.php?month=1">Winter</a></li>
                <li class="switch-days"><a href="daily.php?month=4">Spring</a></li>
                
        </ul>
</div>

<div class="wrapper">
<h1><?php echo $mainHeadline; ?></h1> 

    <div id="seasonal-deals">

        <main>
        <h2 class='seasonal-headline'><?php echo $season_headline;?></h2>
        <ul> 
                <li>Current season: <?echo $current_season ;?> </li>
                <li>Wedding Photos and Videos: <?echo $season_wedding ;?> </li>
                <li>Music Videos: <?echo $season_music ;?> </li>
                <li>Family Photos: <?echo  $season_family_photos ;?> </li>
            </ul> 
         
            <h2 class="seasonal-headline"><?php echo $today ?>'s Deals</h2>
                <ul> 
                     <li><?echo  $vid ;?></li>
                     <li><?echo $reshoot;?></li>
                     <li><?echo $edits;?></li>
                     <li><?echo $reEdit;?></li>
                </ul>
              

        </main>

        <aside>
            <img id="seasonal-photo" src="images/<?echo $seasonalPic?>.jpg" alt="<?php echo $seasonalPic ?>">
        </aside>
    </div> <!--end seasonal deals--> 
    <div id='deals_daily_navigation'> 
            <ul> 
                <li class="switch-days"><a href="daily.php?today=Sunday">Sunday</a></li>
                <li class="switch-days"><a href="daily.php?today=Monday">Monday</a></li>
                <li class="switch-days"><a href="daily.php?today=Tuesday">Tuesday</a></li>
                <li class="switch-days"><a href="daily.php?today=Wednesday">Wednesday</a></li>
                <li class="switch-days"><a href="daily.php?today=Thursday">Thursday</a></li>
                <li class="switch-days"><a href="daily.php?today=Friday">Friday</a></li>
                <li class="switch-days"><a href="daily.php?today=Saturday">Saturday</a></li>
            </ul> 
        </div> <!--end of deals nav--> 

</div> <!--END WRAPPER-->  



   


<?php include('./includes/footer.php'); ?>