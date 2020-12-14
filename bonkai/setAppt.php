<?php 
include('./setApptServer.php');
include('./includes/header.php'); 
?> 
<div id="appointment-set-container">

<div id="apt-instructions"> 
    <p>Please fill out our lovely Form. Do not forget to list your First Name, Last Name, Email, and User Name that you used when registering with
        the site. And please list the details of the project you would like to be working with us on. Thank you!


</div> 


<div id="appointment-form"> 
    
        <form id="register-form"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);   ?>" method="post">
        <fieldset>
            <label>First Name</label>
            <input type="text" name="FirstName" value="<?php if(isset($_POST['FirstName'])) echo  $_POST['FirstName']  ?>">

            <label>Last Name: </label> 
            <input type="text" name="LastName" value="<?php if(isset($_POST['LastName'])) echo  $_POST['LastName']  ?>">

            <label>User Name</label> 
            <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo  $_POST['UserName']  ?>">

            <label>Email: </label> 
            <input type="text" name="Email" value="<?php if(isset($_POST['Email'])) echo  $_POST['Email']  ?>"> 

            <label>Detail: </label> 
            <textarea name="Details"><?php if(isset($_POST['Details']))  echo ($_POST['Details']);?></textarea>

            <label>Date: </label> 
            <input type="date" name="Date" value="<?php if(isset($_POST['Date'])) echo  $_POST['Date']  ?>"> 

            
            
            

            <button type="submit" class="btn" name="appt">Register</button> 
            <button type="reset" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">Reset</button>
            <?php   include('./includes/errors.php');  ?>

        </fieldset>
            </form>
</div><!--end of appointment container--> 

</div>  