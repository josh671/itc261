<?php 
include('./server.php');
include('./includes/header.php'); 
?> 

<div id="login_form_container"> 
<h1 id="login">Login!</h1> 
      
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);   ?>" method="post">
        <fieldset>
            <label>User Name</label> 
            <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo  $_POST['UserName']  ?>">

            <label>Password</label>
            <input type="password" name="Password">

            <?php   include('./includes/errors.php');  ?> 

            <button type="submit" class="btn" name="login_user">Login</button> 
            <button type="reset" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' ">Reset</button>

        </fieldset>
      </form><!-- END FORM --> 

      <p>Haven't Registered yet?<a href="register.php">  Register Here:</a></p>
</div> 

















<?php include('./includes/footer.php');