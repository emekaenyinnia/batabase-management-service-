<?php include('inc/header.php')?>
<?php include('inc/nav.php')?>
<?php
require __DIR__."/vendor/autoload.php";

use MyBlog\Authentication;


if(isset($_POST['submit'])){
  $login = new Authentication;
  $email = htmlspecialchars($_POST['email']);
  $password = htmlspecialchars($_POST['password']);
   $login->login($email, $password);
}
?>


<form action="" method="post">
  <!-- <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div> -->

  <div class="container">
    
  <div style="text-align: center">
    LOGIN

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

    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" >

    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

    <button type="submit" name="submit">Login</button>
  
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="/forgotpassword.php">password?</a></span>
    <!-- <button type="button" class="cancelbtn">Cancel</button> -->
  </div>
</form>

<?php include('inc/footer.php')?>