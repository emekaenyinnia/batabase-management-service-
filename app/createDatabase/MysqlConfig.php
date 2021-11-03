<?php
namespace MyBlog\createDatabase;

use MyBlog\createDatabase\dbInterfaces\DatabaseInterface;

class MysqlConfig  implements DatabaseInterface 
{

 protected $conn;

public function __construct () 
{
    
    if( !$this->connection() ) {
     die("connection failed". $this->$conn->connect_error);
    }
    else {
    
    }
}

protected function connection ():bool
{
     $this->conn = mysqli_connect('localhost', 'root' ,'' );
      return true;
}

public function createDB ( $myDB)
{
    $sql = "CREATE DATABASE $myDB";
    if($created = mysqli_query($this->conn, $sql)){
     header("Location: /dbform.php?success=database created successfully");
    }
    else{
        header("Location : dbform.php?error=Error creating database:". mysqli_error($this->conn));
    }
}

}












?>