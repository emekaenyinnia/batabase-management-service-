<?php require ("inc/header.php")?>

<?php 


require __DIR__."/vendor/autoload.php";

use MyBlog\Authentication;




if(isset($_POST['submit'])){
    $username = htmlspecialchars( $_POST['username']);
    $email = htmlspecialchars( $_POST['email']);
    $password = htmlspecialchars(password_hash( $_POST['password'], PASSWORD_DEFAULT));
    // $password = htmlspecialchars( $_POST['password']);
    $auth = new Authentication;
     $auth->register( $username, $email, $password);
}


?>



<?php require ("inc/nav.php")?>


<form action="" method="POST">
    
  <div class="container" style="margin-top:10em;" >

  <div style="text-align: center">
      REGISTER 
  </div>
  <?php
  if(isset($_GET['error'])){
      echo '
      <div class="error" style="width: 100%; padding: 12px 20px; background-color:rgba(243, 146, 146, 0.692);">
      <p class="error" style="color:red">'.$_GET['error'].'</p>
      
      
      </div>';
    }
    if(isset($_GET['success'])){
        echo '
        <div class="error" style="width: 100%; padding: 12px 20px; background-color:rgba(146, 243, 175, 0.884);">
        <p class="error" style="color:green">'.$_GET['success'].'</p>
        
        
        </div>';
    }
        ?>
  <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" >

    <label for="uname"><b>email</b></label>
    <input type="text" placeholder="Enter email" name="email" >
  
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <button type="submit" name='submit'>Login</button>

  </div>
</form>
 
    
<?php require ("inc/footer.php")?>


