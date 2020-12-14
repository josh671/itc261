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
$Details=""; 
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
    $Details= mysqli_real_escape_string($db, $_POST['Details']);
    $Date= mysqli_real_escape_string($db, $_POST['Date']);
   
    //if's to check if errors in the form were made. pulling error messages from $erros array 
    if(empty($FirstName)){ 
        array_push($errors, 'First Name is Required'); 
    }//end if

    if(empty($LastName)){ 
        array_push($errors, 'Last Name is Required'); 
    }//end if

    if(empty($UserName)){ 
        array_push($errors, 'User Name is Required'); 
    }//end if

    if(empty($Email)){ 
        array_push($errors, 'Email is Required'); 
    }//end if

    if(empty($Details)){ 
        array_push($errors, 'Details are Required'); 
    }//end if

    if(empty($Date)){ 
        array_push($errors, 'Date is Required'); 
    }//end if
    
  

    //checker to see if username is already been chosen
    $user_check_query="SELECT * FROM BonkaiAppt WHERE UserName='$UserName' OR Email='$Email' LIMIT 1 "; 

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
    

    $query = "INSERT INTO BonkaiAppt (FirstName, LastName, UserName, Email, Details, Date) VALUES ('$FirstName', '$LastName','$UserName', '$Email', '$Details', '$Date')";
    mysqli_query($db, $query);


    //calling session that we started at the top 
    $_SESSION['UserName'] = $UserName;
    $_SESSION['success'] = $success;
    header('Location: appointments.php');
 } //end of count errors 


} //end if isset reg_users  
