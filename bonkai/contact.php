<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); 



//variables 
$name ='';
$email ='';
$amenities='';
$bedroom ='';
$comments='';
$tel ='';
$privacy='';

$nameErr ='';
$emailErr ='';
$amenitiesErr ='';
$bedroomErr ='';
$commentsErr ='';
$telErr ='';
$privacyErr='';



if($_SERVER['REQUEST_METHOD'] == 'POST'){ 


//name if 
if(empty($_POST['name'])){ 
    $nameErr = 'Please fill out your Name';
}else { 
    $name = $_POST['name'];
} //end name if 

//email if 
if(empty($_POST['email'])){ 
    $emailErr = 'Please fill out your Email';
}else { 
    $email = $_POST['email'];
} //end email if

//bedroom if
if(empty($_POST['bedroom'])){                                                                                                                                                        
    $bedroomErr = 'Please check one.'; 
}else{ 
    $bedroom = $_POST['bedroom'];
}
//logic: if bedroom is equal to male than male is checked
if($bedroom=='1-bedroom'){ 
    $bedroom_first = 'checked'; //checked from form 
}elseif($bedroom == '2-bedroom'){
    $bedroom_second = 'checked'; 
}elseif($bedroom == '3-bedroom'){
    $bedroom_third = 'checked'; 
}


//amenities if 
if(empty($_POST['amenities'])){ 
    $amenitiesErr = 'Select your desired amenities';
}else { 
    $amenities = $_POST['amenities'];
} //end email if

//comments if
if(empty($_POST['comments'])){
    $commentsErr = 'Please fill out the comments.'; 
}else{ 
    $comments = $_POST['comments'];
}//end comments if

//privacy if
if(empty($_POST['privacy'])){
    $privacyErr = 'Please fill out agreement.'; 
}else{ 
    $privacy = $_POST['privacy'];
} 

//start of amenities function 
function myAmenities(){ 
    $myReturn = ''; 
    if(!empty($_POST['amenities'])){
        $myReturn = implode(', ', $_POST['amenities']);
        return $myReturn;
    }
}

//tel if 
if(empty($_POST['tel'])) {  // if empty, type in your number
    $telErr = 'Your phone number please!';
} elseif(array_key_exists('tel', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel'])){ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $telErr = 'Invalid format!';
} else{
     $tel = $_POST['tel'];
     }
}

//NEED TO SET UP YOUR ISSET FUNCTION TO SEND USING MAIL();
if(isset($_POST['name'],
             $_POST['email'],                           
             $_POST['amenities'],
             $_POST['bedroom'],
             $_POST['comments'],
             $_POST['tel'],
             $_POST['privacy'])){ 
                        //do something
                              
                        $to ="Joshua.Bordallo@seattlecolleges.edu"; //form contents will be sent to this email 
                        $subject = 'test email' . date('m/d/y');  //whats being sent with date
                        $body= ''.$name.' has completed your form.' .PHP_EOL. ''; //FIRST NAME HAS FILLED OUT YOUR FORM
                        $body.= 'Email: '.$email.' '.PHP_EOL. ''; // displays in the body 
                        $body.= 'Telephone: '.$tel.' '.PHP_EOL. '';
                        $body.= 'The amenities you would like: '. myAmenities().' '.PHP_EOL. '';  
                        $body .= 'Bedrooms needed: ' .$bedroom. ''; 
                        $body .= '.  Here are your comments: '.$comments. ''; 
                        
                       
                       

                        $headers = array(
                            'From' => 'HomeworkTest@seattlecollege.edu',
                            'Reply-to' => ' '.$email.''

                        );

                        mail($to, $subject, $body, $headers); //mail function that sends the created local variables to the email at $to. 
                        header('Location: thx.php'); //looks for thx.php file. 
                        
                       


             } else {
    echo 'We have a problem';
}

    } //closing if $_SERVER  request

?>
<div class="wrapper">
<h1><?php echo $mainHeadline; ?></h1>
<div id="contact-form-container">
<main> 
<p>Please use this contact form to email us with any problems you have encountered or if you just want 
        to get in touch with us. We apolagize in advance for any inconveniences we may have caused and would 
        like to resolve any issues immediately. Thank you.
</p>
</main>

<aside> 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
        <!--name -->
            <label>Name</label>
            <input class='field' type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ?>"> 
            <span><?php echo $nameErr ?></span>
        <!--email -->
            <label >email</label>
            <input class='field' type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>"> 
            <span><?php echo $emailErr  ?></span>

        <!--phone -->
            <label >Telephone</label>
            <input class='field' type="tel" name="tel" value="<?php if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']) ?>"> 
            <span><?php echo $telErr?></span>

       <!--Bed rooms -->
       
       <label>Bedrooms</label>
       <span><?php echo $bedroomErr ?></span>
       <ul>
           <li><input type='radio' name='bedroom' value='1-bedroom' 
           <?php  if(isset($_POST['bedroom']) && $_POST['bedroom'] == '1-bedroom') echo 'checked="checked" ';  ?>
           >1 bedroom</li>
           <li><input type='radio' name='bedroom' value='2-bedroom'
           <?php  if(isset($_POST['bedroom']) && $_POST['bedroom'] == '2-bedroom') echo 'checked="checked" ';  ?>
           >2 bedroom</li>
           <li><input type='radio' name='bedroom' value='3-bedroom'
           <?php  if(isset($_POST['bedroom']) && $_POST['bedroom'] == '3-bedroom') echo 'checked="checked" ';  ?>
           >3 bedroom</li>
       </ul>

        <!--amenities-->
            
            <label>Amenities</label>
            <span><?php echo $amenitiesErr ?></span>
            <ul>
                <li><input type='checkbox' name='amenities[]' value='washer'
                <?php if(isset($_POST['amenities']) && $_POST['amenities'] == 'washer') echo 'checked="checked" ';  ?>
                >Washer</li><!--Closing li-->
                <li><input type='checkbox' name='amenities[]' value='dryer'
                <?php if(isset($_POST['amenities']) && $_POST['amenities'] == 'dryer') echo 'checked="checked" ';  ?>
                >Dryer</li><!--Closing li-->
                <li><input type='checkbox' name='amenities[]' value='by-park'
                <?php if(isset($_POST['amenities']) && $_POST['amenities'] == 'by-park') echo 'checked="checked" ';  ?>
                >Close to Park</li><!--Closing li-->
                <li><input type='checkbox' name='amenities[]' value='parking'
                <?php if(isset($_POST['amenities']) && $_POST['amenities'] == 'parking') echo 'checked="checked" ';  ?>
                >Parking</li><!--Closing li-->
                <li><input type='checkbox' name='amenities[]' value='bicycle'
                <?php if(isset($_POST['amenities']) && $_POST['amenities'] == 'bicycle') echo 'checked="checked" ';  ?>
                >Bicycle Rack</li><!--Closing li-->
            </ul>


            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments']))  echo htmlspecialchars($_POST['comments']);?></textarea>
            <span><?php echo $commentsErr;      ?></span>

            
            <input type='radio' name='privacy' value="<?php if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']) ?>">
            I agree to your Privacy Policy.
            <span><?php echo $privacyErr; ?></span>

            <input class="reset" type='submit' value='Send it'>
            <p class="reset box"><a href="">Reset me!!</a></p>
        </fieldset>
    </form> <!--END FORM--> 
        

    </aside>    
</div>

</div> <!--END WRAPPER-->    
  <?php include('./includes/footer.php');