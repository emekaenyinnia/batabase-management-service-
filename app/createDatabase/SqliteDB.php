<?php
namespace MyBlog\createDatabase;
use MyBlog\createDatabase\dbInterfaces\DatabaseInterface;

class SqliteDB implements DatabaseInterface 
{
  const PATH_TO_SQLITE = 'db/';
  protected $conn;

 public function __construct ()
 {

 }

 public function createDB ($myDB)
 {
      if($this->conn == null) {
        $this->conn = new \PDO("sqlite:" . SqliteDB::PATH_TO_SQLITE . $myDB. '.db');
        header("Location: /dbform.php?success=database created successfully");
      } 
      return $this->conn;
 }
 
}









?>