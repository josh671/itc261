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