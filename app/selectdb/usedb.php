<?php
namespace MyBlog\selectdb;
use MyBlog\createDatabase\dbInterfaces\DatabaseInterface;
use MyBlog\createDatabase\MysqlConfig;

class usedb 
{
 public function CreateDatabase ( DatabaseInterface $selectedDatabase, $myDB) 
 {
    return $selectedDatabase->createDB($myDB);
 }

 

}












?>