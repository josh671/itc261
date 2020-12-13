<?php 
//register/login server stuff 

//start session
session_start(); 
include('./includes/config.php'); 

//declare global variables 
$FirstName=""; 
$LastName=""; 
$UserName=""; 
$Email=""; 
$errors= array(); 
$success= 'You are now logged in!'; 

//connect to db 
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

//handler for registering user and saving it in database 
//starts if isset 
if(isset($_POST['appt'])){ 

    //We have recieved the information if all is set
    $FirstName= mysqli_real_escape_string($db, $_POST['FirstName']); 
    $LastName= mysqli_real_escape_string($db, $_POST['LastName']);
    $UserName= mysqli_real_escape_string($db, $_POST['UserName']);
    $Email= mysqli_real_escape_string($db, $_POST['Email']);
   
    //if's to check if errors in the form were made. pulling error messages from $erros array 
    if(empty($FirstName)){ 
        array_push($errors, 'First Name is Required'); 
    }//end if

    if(empty($LastName)){ 
        array_push($errors, 'Last Name is Required'); 
    }//end if

    if(empty($UserName)){ 
        array_push($errors, 'Last Name is Required'); 
    }//end if

    if(empty($Email)){ 
        array_push($errors, 'Email is Required'); 
    }//end if

   
  

    //checker to see if username is already been chosen
    $user_check_query="SELECT * FROM BonkaiApp WHERE UserName='$UserName' OR Email='$Email' LIMIT 1 "; 

    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result); 

    //Username email check 
    if($user){ 
        if($user['$UserName'] == $UserName){ 
            array_push($errors, 'User Name already exists'); 
        }//end checkuser

        if($user['$Email'] == $Email) { 
            array_push($errors, 'Email already exists'); 
        }
    }//end if user 

 
   if (count($errors) == 0) {
    $Password = md5($Password_1);

    $query = "INSERT INTO BonkaiApp (FirstName, LastName, UserName, Email) VALUES ('$FirstName', '$LastName','$UserName', '$Email',)";
    mysqli_query($db, $query);


    //calling session that we started at the top 
    $_SESSION['UserName'] = $UserName;
    $_SESSION['success'] = $success;
    header('Location: appointments.php');
 } //end of count errors 


} //end if isset reg_users  
