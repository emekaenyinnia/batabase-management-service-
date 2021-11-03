<?php
namespace MyBlog;

class Config {
    
 protected $dbhost = 'localhost';
 protected $dbuser = 'root';
 protected $dbpassword = '';
 protected $dbname = 'ict_test';

 public function setdbhost ($value)
 {
     $this->dbhost = $value;
 }
 
 public function getdbhost () 
 {
     return $this->dbhost;
 }

 public function setdbuser ($value)
 {
    $this->dbuser = $value;
 }
 

 public function getdbuser ()
 {
  return $this->dbuser;
 }


 public function setdbpassword ($value)
 {
     $this->dbpassword = $value;
 }

public function getdbpassword (){
    return $this->dbpassword;
}

public function setdbname ($value)
{
    $this->dbname = $value;
}
public function getdbname ()
{
    return $this->dbname;
}

}


?>