

<nav>
    <a  id="brand" href="#">ICT</a>
<div class="hamburger">
<label id="burger">&#9776;</label>

</div>

    <ul class="navbar-menu">
  <?php
 
       
  if(isset($_SESSION['Username'])){
 echo'   <li ><a href="#">About </a></li>
    <li ><a href="#"> Home</a></li>
    <li ><a href="#"> Services</a></li>
    <li ><a href="/logout.php"> logout</a></li>
    <div id="search">
        <input id="search-input" type="text" placeholder="SEARCH"> ';

}
else{
    echo'   <li ><a href="#"> </a></li>
    <li ><a href="#"> Home</a></li>
    <li ><a href="/login.php"> Login</a></li>
    <li ><a href="/"> Signup</a></li>
    <div id="search">
        <input id="search-input" type="text" placeholder="SEARCH"> ';
}

  ?>


</ul>

</nav>