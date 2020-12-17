<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); ?>



<div class="wrapper">
<div id="appointment-intro">
<h1><?php echo $mainHeadline; ?></h1>
<p class='disclaimer'>"Here are some of our Special and newer Photos. "</p>
</div>


<div class="setAppointments">
<main>
<?php
$sql = 'SELECT * FROM BonkaiPic'; //select from sql people table in database

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myerror( __File__, __LINE__, mysqli_connect_error())); 
//we extract data here 

$result = mysqli_query($iConn,$sql) or die(myerror(__File__, __LINE__, mysqli_error()));
//if statement asking if we have rows. Do we have more than 0 rows, show me the records
if(mysqli_num_rows($result) > 0){ 
    //show the records 
    echo '<table id="people-table">'; //OPENNING OF TABLE
                echo '<tr>';
                echo '<th>Special Photos</th>'; 
                echo '</tr>';
    while($row = mysqli_fetch_assoc($result)){ 
        //this array will display the contents of your row 

                echo '<tr>'; 
                    echo '<td class="special-img"><a href="gallery-view.php?id='.$row['PicId'].'"><img src="images/gallery/'.$row['PicName'].'.jpg"></a></td>';
                    
                echo '</tr>';
    }//closing the while();

//close the if statement
} else {//what if there are no people 
    echo 'There are no Appointments'; 
}//closing else 
//release the web server 
@mysqli_free_result($result); 
//  close connection 
@mysqli_close($iConn); 
                echo '</table>';    //END OF TABLE
?>

</main> 
<aside> 

</aside> 

</div><!--End of Appointments--> 




</div> <!--END WRAPPER-->     


<?php include('includes/footer.php'); ?>