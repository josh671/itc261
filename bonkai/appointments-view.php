<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); ?>
<?php 

if(isset($_GET['id'])) { 
    $id = (int)$_GET['id']; 

}   else    { 

    header('Location: appointments.php');

} 

$sql = 'SELECT * FROM BonkaiAppt WHERE UserId = '.$id.''; 

//connect to database 
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror(__File__, __LINE__, mysqli_connect_error())); 
//we extract data here 

$result = mysqli_query($iConn,$sql) or die(myerror(__File__, __LINE__, mysqli_error()));


if(mysqli_num_rows($result) > 0){ 
    //show the records 
    while($row = mysqli_fetch_assoc($result)){ 
        $FirstName = stripslashes($row['FirstName']); 
        $LastName= stripslashes($row['LastName']); 
        $Email= stripslashes($row['Email']); 
        $UserName= stripslashes($row['UserName']); 
        $PhoneNumber = stripslashes($row['PhoneNumber']); 
        $Details = stripslashes($row['Details']); 
        $Feedback = '';
    }

}else { 
    $Feedback = 'sorry, no candidates';
}//end if mysqli 

?>
<div class="appointment-views">
<h1><?php echo $mainHeadline; ?></h1>

<main> 
    <h3>Welcome to <?php echo $FirstName; ?></h3> 
    <?php 
            if($Feedback == ''){ 
                echo '<ul>';
                    echo '<li>First Name: '.$FirstName.'</li>';
                    echo '<li>Last Name: '.$LastName.'</li>';
                    echo '<li>User Name: '.$UserName.'</li>';
                    echo '<li>Phone Number: '.$PhoneNumber.'</li>';
                    echo '<li>Email: '.$Email.'</li>';
                    
                echo '</ul>';
                echo '<p>'.$Details.'</p>';
                echo '<p><a href="./appointments.php">Go back to the appointments page!</a></p>';

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