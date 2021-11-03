
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
        <div style="padding: 20px 2em;">
    <img src="images/mysql_logo.png" alt="" >
    <h2 >  Introduction to MSQl</h2>
    <p style="font-size:20px;   line-height:35px;" 
    >
    MySQL is a relational database management system (RDBMS) developed by Oracle that is based on structured query language (SQL).

A database is a structured collection of data. It may be anything from a simple shopping list to a picture gallery or a place to hold the vast amounts of information in a corporate network. In particular, a relational database is a digital store collecting data and organizing it according to the relational model. In this model, tables consist of rows and columns, and relationships between data elements all follow a strict logical structure. An RDBMS is simply the set of software tools used to actually implement, manage, and query such a database. 

MySQL is integral to many of the most popular software stacks for building and maintaining everything from customer-facing web applications to powerful, data-driven B2B services. Its open-source nature, stability, and rich feature set, paired with ongoing development and support from Oracle, have meant that internet-critical organizations such as Facebook, Flickr, Twitter, Wikipedia, and YouTube all employ MySQL backends.

MySQL is widely compatible
Though often associated with internet applications or web services, MySQL was designed to be extensively compatible with other technologies and architectures. The RDBMS runs on all major computing platforms, including Unix-based operating systems, such as the myriad Linux distributions or Mac OS, and Windows.

MySQL’s client-server architecture means it can support a variety of backends, as well as different programming interfaces. Data can be directly migrated from MySQL to its forks (e.g. MariaDB), as well as most other RDBMSs thanks to architectural and language similarities. 

Established Oracle and third-party migration tools further allow MySQL to move data to and from a vast set of general storage systems, whether these are designed to be on-premises or cloud-based. MySQL can be deployed in virtualized environments, distributed or centralized, and even exists as portable standalone libraries for learning purposes, testing, or small applications. 

MySQL’s wide compatibility with all these other systems and software makes it a particularly practical choice of RDBMS in most situations. 

    </p>
    <div style="padding: 20px 0em;" >

  <a href="/dashboard.php" class="done donedefault">done</a>
  
  <input type="submit" class="done donewarning" value="CREATE DATABASE" style="float:right;">
  
</div>
</div>


</div>
</div>
 
</div>
  



<?php require ("partials/_footer.php")?>