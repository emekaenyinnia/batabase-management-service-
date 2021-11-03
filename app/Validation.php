<?php
namespace MyBlog;
use MyBlog\Database;

class Validation {
   

    public function registerValidation (string $username, string $email, string $password):bool
    {
        
        if ($this->ValidationEmail($email) &&  $this->Validationusername( $username) && $this->Validationpassword( $password) ) {
                return true;
                
        } else {
            return false;
        }
        
    }

    protected  function ValidationEmail(string $email):bool
         {
            if ($email === ''){
            header("Location: /?error=your email is required");
                return false;
            }else{
                return true;
            }
       }
  

       protected function Validationusername (string $username):bool
       {
        if ($username === '') {
            header("Location: /?error=your username is required");
            return false;
        }else {
            return true;
        }

       }

       protected function Validationpassword (string $password) :bool
       {
        if ($password === ''){
            header("Location: /?error= your password is required");
            return false;
        } else {
            return true;
        }

       }

       public function loginValidation (string $email, string $password ):bool
       {
          if ($this->ValidationEmailLogin($email) && $this->ValidationpasswordLogin( $password) ) {
              return true;
          }
          return false;
  
      }
      
    protected  function ValidationEmailLogin(string $email):bool
    {
       if ($email === ''){
       header("Location: /login.php?error=your email is required");
           return false;
       }else{
           return true;
       }
  }
    
  protected function ValidationpasswordLogin (string $password) :bool
  {
   if ($password === ''){
       header("Location: /login.php?error= your password is required");
       return false;
   } else {
       return true;
   }

  }

   
       }

       




?>
