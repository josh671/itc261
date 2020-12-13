

<div id="login_form_container  APPOINTMENT"> 
        
<form id="register-form"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);   ?>" method="post">
        <label>First Name: </label> 
            <input type="text" name="FirstName" value="<?php if(isset($_POST['FirstName'])) echo  $_POST['FirstName']  ?>">

            <label>Last Name: </label> 
            <input type="text" name="LastName" value="<?php if(isset($_POST['LastName'])) echo  $_POST['LastName']  ?>">

            <label>User Name</label> 
            <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo  $_POST['UserName']  ?>">

            <label>Email: </label> 
            <input type="text" name="Email" value="<?php if(isset($_POST['Email'])) echo  $_POST['Email']  ?>"> 

            <label>Details: </label> 
            <input type="text" name="Details" value="<?php if(isset($_POST['Details'])) echo  $_POST['Details']  ?>"> 

            <label>Date: </label> 
            <input type="text" name="Date" value="<?php if(isset($_POST['Date'])) echo  $_POST['Date']  ?>">

            
            

            <button type="submit" class="btn" name="addAppt">Register</button> 
            <button type="reset" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">Reset</button>
            <?php  // include('./includes/errors.php');  ?>

        </fieldset>
        </form>
        <p>All ready have an appointment?<a href="appointments.php">Check here:</a></p> 

        <!-- Need to link to server 
            Need to set css for form 
             -->
</div> 




