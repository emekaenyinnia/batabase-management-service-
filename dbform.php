<?php include("inc/header.php")?>

<?php


 require __DIR__."/vendor/autoload.php";

use MyBlog\createDatabase\MysqlConfig;
use MyBlog\createDatabase\SqliteDB;
use MyBlog\selectdb\usedb;
echo $_GET['database'];

if ( isset($_POST['create'])){
    $dbName = htmlspecialchars($_POST['DatabaseName']);

    if($_GET['database'] == 'MYSQLI'){
      $createdb = new  MysqlConfig;
      $usedb = new usedb;
      $usedb->CreateDatabase($createdb, $dbName);
    }
    if($_GET['database'] == 'SQLITE'){

      $createdb = new  SqliteDB;
      $usedb = new usedb;
      $usedb->CreateDatabase($createdb, $dbName);
    }
    else{
      die('error');
    }
 
    //  $createdb->createDB($dbName);
         
   }

?>

<div class="container-scroller"> 
    <!-- partial:partials/_navbar -->
    <?php require ("partials/navbar.php")?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar -->


      <?php require ("partials/_sidebar.php")?>
      <!-- partial -->

<form action="" method="POST"  >
    
  <div class="container" style="margin-top:10em;" >

  <div style="text-align: center; ">
     CREATE DATABSE USING <?php echo $_GET['database']?>
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
  <label for="uname"><b>DATABASE NAME</b>
</label>
<input type="text" placeholder="Enter Username" name="DatabaseName" >

    <button type="submit" name='create'>CREATE</button>

  </div>
</form>