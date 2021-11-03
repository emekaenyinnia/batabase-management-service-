
<?php require ("inc/header.php")?>
<?php


require __DIR__ ."/vendor/autoload.php";

use MyBlog\Authentication;
?>


<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar -->
    <?php require ("partials/navbar.php")?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar -->


      <?php require ("partials/_sidebar.php")?>
      <!-- partial -->

      <div class="main-panel">
        <div class="content-wrapper">

 <?php require ("dashboard-home.php")?>
</div>
</div>
 
</div>
  



<?php require ("partials/_footer.php")?>