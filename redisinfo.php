
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
    <img src="images/download.png" alt="" >
    <h2 >  Introduction to Redis</h2>
    <p style="font-size:20px;   line-height:35px;" 
    >
  
Redis is an open source (BSD licensed), in-memory data structure store, used as a database, cache, and message broker. Redis provides data structures such as strings, hashes, lists, sets, sorted sets with range queries, bitmaps, hyperloglogs, geospatial indexes, and streams. Redis has built-in replication, Lua scripting, LRU eviction, transactions, and different levels of on-disk persistence, and provides high availability via Redis Sentinel and automatic partitioning with Redis Cluster.

You can run atomic operations on these types, like appending to a string; incrementing the value in a hash; pushing an element to a list; computing set intersection, union and difference; or getting the member with highest ranking in a sorted set.

To achieve top performance, Redis works with an in-memory dataset. Depending on your use case, you can persist your data either by periodically dumping the dataset to disk or by appending each command to a disk-based log. You can also disable persistence if you just need a feature-rich, networked, in-memory cache.

Redis also supports asynchronous replication, with very fast non-blocking first synchronization, auto-reconnection with partial resynchronization on net split.

Other features include:

Transactions
Pub/Sub
Lua scripting
Keys with a limited time-to-live
LRU eviction of keys
Automatic failover
You can use Redis from most programming languages.

Redis is written in ANSI C and works in most POSIX systems like Linux, *BSD, and OS X, without external dependencies. Linux and OS X are the two operating systems where Redis is developed and tested the most, and we recommend using Linux for deployment. Redis may work in Solaris-derived systems like SmartOS, but the support is best effort. There is no official support for Windows builds.
    </p>
    <div style="padding: 20px 0em;" >

  <a href="/dashboard.php" class="done donedefault">done</a>
  
  <input type="submit" class="done donedanger" value="CREATE DATABASE" style="float:right;">
  
</div>
</div>


</div>
</div>
 
</div>
  



<?php require ("partials/_footer.php")?>