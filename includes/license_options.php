<select name="licenses" id="">
  
  <option value="Mp3">Basic Mp3</option>
  <option value="WAV">Premium WAV</option>
  <option value="Premium">WAV Multipistes</option>
  <option value="Exclusive">Exclusive</option>
  
</select>

         
<?php 
  if (isset($_POST['current_password'])){
    
  $current_password = $_POST['current_password'];
  $new_password = $_POST['new_password'];
  $confirm_password = $_POST['confirm_password'];
  
  $current_password= mysqli_real_escape_string($connection, $current_password);
  $new_password= mysqli_real_escape_string($connection, $new_password);
  $confirm_password= mysqli_real_escape_string($connection, $confirm_password);

    if (!password_verify($current_password, $_SESSION['hashed_password'])){
      $errors []= 'Please Check Current Password';
    }
    else {
      $id= $_SESSION['id'];
      $new_hashed_password = password_hash($new_password, PASSWORD_DEFAULT , ['cost' => 15]);
      $query = "UPDATE users SET password = '{$new_hashed_password }' WHERE id = {id}";
      $result = mysqli_query ($connection, $query);
      if(!$result){
        die("no");
      }
      header("Location: index.php");
    }
  }
  ?>