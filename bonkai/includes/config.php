<?php 
ob_start(); //prevents header errors before reading the whole page
define('DEBUG','FALSE'); //WE want to see our erros


include('./includes/credentials.php'); 

//DEFINING PAGE AND BASE NAME
define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); 

//SWITCH STATEMENT FOR HEADER AND TITLE ECHOES 
switch(THIS_PAGE){ 
    case 'index.php': 
        $title='HOME PAGE'; 
        $mainHeadline = 'Welcome to the Home of Bonkai';
        $center = 'center'; 
        $body = 'home'; 
    break; 
    case 'about.php': 
        $title='About Page'; 
        $mainHeadline = 'Welcome to our about page';
        $center = 'center'; 
        $body = 'about inner'; 
    break; 
    case 'daily.php': 
        $title='Daily Page'; 
        $mainHeadline = 'Here are our Seasonal Deals and Details';
        $center = 'center'; 
        $body = 'daily'; 
    break; 
    case 'contact.php': 
        $title='Contact Page'; 
        $mainHeadline = 'Welcome to our contact page'; 
        $center = 'center'; 
        $body = 'contact'; 
    break; 
    case 'gallery.php': 
        $title='Gallery Page'; 
        $mainHeadline = 'Welcome to the';
        $center = 'center'; 
        $body = 'gallery'; 
    break; 
    case 'thx.php': 
        $title=''; 
        $mainHeadline = '';
        $center = ''; 
        $body = ''; 
    break; 
    case 'login.php': 
        $title='Bonkai Login'; 
        $mainHeadline = 'Welcome Back! Please Login.';
        $center = 'login'; 
        $body = 'login'; 
    break; 
    case 'register.php': 
        $title='Bonkai Registration'; 
        $mainHeadline = 'Please Register.';
        $center = 'register'; 
        $body = 'register'; 
    break; 
    case 'appointments.php': 
        $title='Bonkai Appointments'; 
        $mainHeadline = 'Here are all set Appointments';
        $center = 'appointment'; 
        $body = 'appointment'; 
    break; 
    
}   //END OF SWITCH 

//START OF NAV ARRAY ELEMENTS
$nav['index.php']='Home'; 
$nav['about.php']='About'; 
$nav['daily.php']='Daily'; 
$nav['contact.php']='Contact'; 
$nav['gallery.php']='Gallery'; 
$nav['appointments.php']='Appointments';


//start of navigation function
function makelinks($nav){ 
    $myReturn=''; 
    foreach($nav as $key => $value){ 
        if(THIS_PAGE == $key){ 
            $myReturn .= '<li><a href="'.$key.'" class="active">'.$value.'</a></li>';
        }else{ 
            $myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>'; 
        }
    }
    return $myReturn;
}
//END NAVIGATION







//START OF DAILY SWITCH
date_default_timezone_set('America/Los_Angeles'); 
$today=''; 


if(isset($_GET['month'])){ 
    $season=$_GET['month'];
}else { 
    $season=date('m'); 
}



if($season == '12' || $season =='1' || $season == '2'){ 
    $current_season = 'Winter'; 
    $season_headline='Here are our '.$current_season. ' Deals!';
    $season_wedding= '15% Off.'; 
    $season_music = '25% Off if shoots are done before Dec 16.'; 
    $season_family_photos = '50% Off all family photos and postcards.';
    $seasonalPic='winterPhoto';
}elseif($season == '3' || $season =='4' || $season == '5'){ 
    $current_season = 'Spring'; 
    $season_headline='Here are our '.$current_season. ' Deals!';
    $season_wedding= '10% Off'; 
    $season_music = '10% Off.'; 
    $season_family_photos = '25% Off.';
    $seasonalPic='springPhoto';
}elseif($season == '6' || $season =='7' || $season == '8'){ 
    $current_season = 'Summer'; 
    $season_headline='Here are our '.$current_season. ' Deals!';
    $season_wedding= '20% Off.'; 
    $season_music = '10% Off.'; 
    $season_family_photos = '25% Off.';
    $seasonalPic='summerPhoto';
}elseif($season == '9' || $season =='10' || $season == '11'){ 
    $current_season = 'Fall'; 
    $season_headline='Here are our '.$current_season. ' Deals!';
    $season_wedding= '10% Off'; 
    $season_music = '5% Off.'; 
    $season_family_photos = '5%. Off';
    $seasonalPic='fallPhoto';
}

if(isset($_GET['today']))   {
    $today = $_GET['today']; 
}else{ 
    $today = date('l'); 
}; 



if($today =='Thursday'){
   $vid='50% Off video shoots.';
   $reshoot='10% Off video re-shoots';
   $edits='5% Off video editting.';
   $reEdit='5% Off video re-edits.';
}elseif ($today =='Friday'){
    $vid='20% Off Photo shoots.';
    $reshoot='5% Off Photo re-shoots';
    $edits='10% Off Photo editting.';
    $reEdit='5% Off Photo re-edits.';
}elseif ($today =='Saturday'){
    $vid='20% Off Music video shoots.';
    $reshoot='5% Off Music video re-shoots';
    $edits='10% Off Music video editting.';
    $reEdit='5% Off Music video re-edits.';
}elseif ($today =='Sunday'){
    $vid='15% Off family Photo';
    $reshoot='5% Off Post Card Shoots';
    $edits='10% Off Wedding Photos.';
    $reEdit='5% Off Wedding Videos.';
}elseif ($today =='Monday'){
    $vid='20% Off video shoots.';
    $reshoot='5% Off Instagram shoots';
    $edits='10% Off Video Edditing.';
    $reEdit='5% Off ReEdits.';   
}elseif ($today =='Tuesday'){
    $vid='20% Off video shoots.';
    $reshoot='5% Off video re-shoots';
    $edits='10% Off video editting.';
    $reEdit='5% Off video re-edits.';
}elseif ($today =='Wednesday'){
    $vid='20% Off Music video shoots.';
    $reshoot='5% Off Music video re-shoots';
    $edits='10% Off Music video editting.';
    $reEdit='5% Off Music video re-edits.';
   
};



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
                        
                       


             }//END isset




      

    } //closing if $_SERVER  request

















//PLEASE REMEMBER THIS IS PLACED AT BOTTOM OF HOMEWORK CONFIG FILE.
//add following for big homework
function myerror($myFile, $myLine, $errorMsg) { //define myerror function
    if(defined('DEBUG')  && DEBUG){ 
        echo 'Error in file: <b> ' .$myFile. '</b> on line: <b>' .$myLine. '</b>'; 
        echo 'Error message: <b> ' .$errorMsg. '</b>'; 
        die(); //stops program
    }else { 
        echo 'Houston We Gots A Problem.'; 
        die(); //stops program 
    }


}
?>