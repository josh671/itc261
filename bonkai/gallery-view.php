<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); ?>
<?php 

if(isset($_GET['id'])) { 
    $id = (int)$_GET['id']; 

}   else    { 

    //header('Location: gallery.php');

} 

$sql = 'SELECT * FROM BonkaiPic WHERE PicId = '.$id.''; 

//connect to database 
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__File__, __LINE__, mysqli_connect_error())); 
//we extract data here 

$result = mysqli_query($iConn,$sql) or die(myerror(__File__, __LINE__, mysqli_error()));


if(mysqli_num_rows($result) > 0){ 
    //show the records 
    while($row = mysqli_fetch_assoc($result)){ 
        $PicName = stripslashes($row['PicName']); 
        $PicDescription= stripslashes($row['PicDescription']); 
        $Feedback = '';
    }

}else { 
    $Feedback = 'sorry, no Pics';
}//end if mysqli 

?>
<div class="appointment-views">
<h1><?php echo $mainHeadline; ?></h1>

<main> 
    <h3>Welcome to <?php echo $FirstName; ?></h3> 
    <?php 
            if($Feedback == ''){ 
                echo '<ul>';
                    echo '<li>: '.$PicDescription.'</li>';
                    echo '<li class="photoView"><img src="images/gallery/' .$PicName.'.jpg"></li>';
                   
                echo '<p><a href="gallery.php">Go Back to our main gallery?</a></p>';

            }   else    { 
                echo $Feedback;
                

            }//end else

        ?>
</main> 
<aside> 
<?php 
//    if($Feedback ==''){ 
//        echo '<img class="view-img" src="./uploads/people'.$id.'.jpg" alt="'.$FirstName.'">';
//
//    }else { 
//            echo $Feedback;
//    }
//
//    //release the web server 
//@mysqli_free_result($result); 
////  close connection 
//
//@mysqli_close($iConn); 
//
//
//    ?>
</aside> 


</div> <!--END WRAPPER-->     


<?php include('./includes/footer.php'); ?>