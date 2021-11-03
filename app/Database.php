<?php
namespace MyBlog;
 use MyBlog\Config;


class Database {

  protected $connection;
  protected $connected;
  protected $sql;
  protected $userInfo;
  protected $userPassword;



 protected function connectDB ()
  {
   $config = new Config; 
    $this->connection = mysqli_connect( $config->getdbhost(),  $config->getdbuser(), $config->getdbpassword(), $config->getdbname());
    return true;
 }

 public function __construct()
 {
   if (!$this->connectDB()){
    die('the is an error in  the connection:');

   }
   else{
    'error creating an account';
   }
 }



 public function connectsql(string $username, string  $email, string $password ): bool
 {
  if (! $this->EmailCheck($email)){
    $this->sql = " INSERT INTO user ( username, email, password ) VALUES ('$username', '$email', '$password')";
    $this->mysqliConnection($this->sql);
    return true;
  }else{
    header("Location: /?error=this email has been used");
  }

 }  

     protected function EmailCheck(string $email):bool
      {
          $sql = " SELECT * FROM user WHERE email = '$email' ";
          $newcheck =  $this->EmailUnquie($sql);
           $this->userInfo = mysqli_fetch_assoc($newcheck);
          //  $this->justcheck($this->userInfo['username']);

          if ($this->userInfo){
          return true;   
           }
           else {

            return false;

                }
     }



 protected function mysqliConnection ($sql)
  {
  $this->connected = mysqli_query($this->connection, $sql);
 return true;
 }

 protected function EmailUnquie ($sql) 
 {
  return $this->connected = mysqli_query($this->connection, $sql);
 }




  public function loginUser (string $email, string $password ):bool
  {
    if ($this->EmailCheck($email)){
      
    return $this->logcheckPassword($password);
    
    }
    else{
      header("Location: /login.php?error=your email is not recognized");
      false;
    }

  }

 protected function logcheckPassword( string $password):bool
 {
  if ( password_verify($password, $this->userInfo['password'])){

    return true;
    
  } else {
    header("Location: /login.php?error=your password is incorrect");
    return false;
  }
  
 } 
//    protected function justcheck ($value):string
//  { 
//    echo (string)$value ;
//  }

//  public function emeka ():string
//  {
//    return $this->justcheck($this->userInfo['password']);
//  }

 }
    


?>
