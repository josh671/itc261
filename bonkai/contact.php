<?php include('./includes/config.php'); ?> 
<?php include('./includes/header.php'); 



//variables 
$name ='';
$email ='';
$shottype='';
$projectType ='';
$comments='';
$tel ='';
$privacy='';

$nameErr ='';
$emailErr ='';
$shottypeErr ='';
$projectTypeErr ='';
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

//project type if
if(empty($_POST['projectType'])){                                                                                                                                                        
    $projectTypeErr = 'Please check one.'; 
}else{ 
    $projectType= $_POST['projectType'];
}
//logic: if project type is equal to male than male is checked
if($projectType=='photos'){ 
    $projectType_first = 'checked'; //checked from form 
}elseif($projectType == 'vids'){
    $projectType_second = 'checked'; 
}elseif($projectType == 'both'){
    $projectType_third = 'checked'; 
}


//amenities if 
if(empty($_POST['shottype'])){ 
    $shottypeErr = 'Select the types of shots';
}else { 
    $shottype = $_POST['shottype'];
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
function myshottype(){ 
    $myReturn = ''; 
    if(!empty($_POST['shottype'])){
        $myReturn = implode(', ', $_POST['shottype']);
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
             $_POST['shottype'],
             $_POST['projectType'],
             $_POST['comments'],
             $_POST['tel'],
             $_POST['privacy'])){ 
                        //do something
                              
                        $to ="olga.szemetylo@seattlecolleges.edu"; //form contents will be sent to this email 
                        $subject = 'test email' . date('m/d/y');  //whats being sent with date
                        $body= ''.$name.' has completed your form.' .PHP_EOL. ''; //FIRST NAME HAS FILLED OUT YOUR FORM
                        $body.= 'Email: '.$email.' '.PHP_EOL. ''; // displays in the body 
                        $body.= 'Telephone: '.$tel.' '.PHP_EOL. '';
                        $body.= 'The types of shots: '. myshottype().' '.PHP_EOL. '';  
                        $body .= 'Project Type: ' .$projectType. ''; 
                        $body .= '.  Here are your comments: '.$comments. ''; 
                        
                       
                       

                        $headers = array(
                            'From' => 'josh.bordallo@seattlecollege.edu',
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
            
        <!--email -->
            <label >email</label>
            <input class='field' type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ?>"> 

        <!--phone -->
            <label >Telephone</label>
            <input class='field' type="tel" name="tel" value="<?php if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']) ?>"> 

       <!--Bed rooms -->
       
       <label>Project Type</label>
       <ul>
           <li><input type='radio' name='projectType' value='photos' 
           <?php  if(isset($_POST['projectType']) && $_POST['projectType'] == 'photo') echo 'checked="checked" ';  ?>
           >Photos</li>
           <li><input type='radio' name='projectType' value='vids'
           <?php  if(isset($_POST['projectType']) && $_POST['projectType'] == 'vids') echo 'checked="checked" ';  ?>
           >Videos</li>
           <li><input type='radio' name='projectType' value='both'
           <?php  if(isset($_POST['projectType']) && $_POST['projectType'] == 'both') echo 'checked="checked" ';  ?>
           >Both</li>
       </ul>

        <!--amenities-->
            
            <label>Types of Shots</label>
            <ul>
                <li><input type='checkbox' name='shottype[]' value='family-pics'
                <?php if(isset($_POST['shottype']) && $_POST['amenities'] == 'family-pics') echo 'checked="checked" ';  ?>
                >Family pics</li><!--Closing li-->
                <li><input type='checkbox' name='shottype[]' value='family-vids'
                <?php if(isset($_POST['shottype']) && $_POST['amenities'] == 'family-vids') echo 'checked="checked" ';  ?>
                >Family vids</li><!--Closing li-->
                <li><input type='checkbox' name='shottype[]' value='social-media-pics'
                <?php if(isset($_POST['shottype']) && $_POST['amenities'] == 'social-media-pics') echo 'checked="checked" ';  ?>
                >Social Media Pics </li><!--Closing li-->
                <li><input type='checkbox' name='shottype[]' value='social-media-ivds'
                <?php if(isset($_POST['shottype']) && $_POST['amenities'] == 'social-media-ivds') echo 'checked="checked" ';  ?>
                >Social Media Vids</li><!--Closing li-->
                <li><input type='checkbox' name='shottype[]' value='both-vids-pics'
                <?php if(isset($_POST['shottype']) && $_POST['shottype'] == 'both-vids-pics') echo 'checked="checked" ';  ?>
                >Both vids and pics</li><!--Closing li-->
            </ul>


            <label>Reason for contacting Us. </label>
            <textarea name="comments"><?php if(isset($_POST['comments']))  echo htmlspecialchars($_POST['comments']);?></textarea>

            
            <input type='radio' name='privacy' value="<?php if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']) ?>">
            I agree to your Privacy Policy.
            <span><?php echo $privacyErr; ?></span>

            <input class="reset" type='submit' value='Send it'>
            <p class="reset box"><a href="">Reset me!!</a></p>
        </fieldset>
        <div id="contact-errs">
        <span><?php echo $nameErr ?></span>
            <span><?php echo $emailErr  ?></span>
            <span><?php echo $telErr?></span>
            <span><?php echo $projectTypeErr ?></span>
            <span><?php echo $shottypeErr ?></span>
            <span><?php echo $commentsErr;      ?></span>
        </div>
    </form> <!--END FORM--> 
    
    </aside>    
</div>

</div> <!--END WRAPPER-->    
  <?php include('./includes/footer.php');