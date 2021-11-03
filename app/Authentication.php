<?php 
namespace MyBlog;
 
class Authentication {
    protected $validation;
    protected $Login;
    protected  $loginUser;
  
   
public function register (string $username, string $email, string $password): bool
{
    
    if ($this->registerAuth ( $username, $email, $password))
    {
        $_SESSION['Username'] = $username;
        header("Location: /dashboard.php");
        return true;

        }
else{
    echo 'false';
    return false;

}

}

    private function registerAuth(string $username, string $email, string $password):bool
    {
       $this->validation = new Validation;
    if ($this->validation->registerValidation( $username, $email, $password)){   
        $registernewUser = new Database;
        $registernewUser->connectsql( $username,  $email,  $password);
        return true;

    }
    else{
        return false;
        echo 'error in regiser check';
    }

   }


   protected function loginUserfun (string $email, string $password) 
   {
       $this->loginUser = new Database;
       $this->loginUser->loginUser($email, $password);
   }

   


        public function login (string $email, string $password):bool
        {
            if ($this->loginAuth($email, $password)) {
                $this->loginUserToDashboard();
                return true;
            }
            return false;

        }


        protected function loginAuth (string  $email, string $password):bool
        {    
            $this->Login = new Validation;
            if ( $this->Login->loginValidation( $email, $password)) {
                $this->loginUserToDashboard($email, $password);
            }   
            return false;
        }

            protected function loginUserToDashboard (string $email, string $password) 
            {
               $this->loginUserfun($email, $password);
                if ( $this->loginUser->loginUser($email, $password)) {
                     $_SESSION['Username'] = $email;
                        header("Location:/dashboard.php?success=you have been logged in");
                }
            }


     

























//         private function loginCheck( string $email, string $password):bool {

//         if($this->loginAuth( $email,  $password)){
//             // return true;
//         $sql = "SELECT * FROM user WHERE email = '$email' ";
//          $loginUser = new Database;
//           $result = $loginUser->loginUserinDB($sql);
//           $row = mysqli_fetch_assoc($result);
//                 // echo  $row['password'];
//           $hash = $row['password'];

//             if(!$row){
//                 header("Location:login.php?error= your email is not recognized");
//                 return false;
//             }
            
//             else{
//                     if(password_verify($password,  $hash )){
                  

//                     $_SESSION['Username'] = $row['username'];
//                     return true;
//                    }
//                    else{
//                     header("Location:login.php?error= your password is incorrect");
//                     return false;
//                    }
//             }
         
//             return true;
//         }
//         else{
//             return false;
//         }
//         }

//        private function loginAuth ($email, $password){
//          if($email === ''){
//                 header("Location:login.php?error= Your Email is required ");
//                 return false;
//             }
//             if($password == ''){
//                 header("Location:login.php?error= Your password is required");
//                 return false;
            
//             }
//             else{
//               return true;
          
//         }

// }


//        public function forgotPassword (string $email):bool{
//            if($this->confirmEmail($email)){
//             //    echo $email;
//             // header("Location:changepassword.php");
//                 $_SESSION['email'] = $email;
//                 return true;
//            }

//        }
//             private function confirmEmail (string $email):bool
//             {

//                 if($this->confirmEmailVaildate($email)){

//                     $sql = "SELECT * FROM user WHERE email = '$email'";
//                     $confirmEmail = new Database;
//                     $result = $confirmEmail->loginUserinDB($sql); 
//                     $row = mysqli_fetch_assoc($result);
//                     if(!$row){
//                         header("Location:forgotpassword.php?error=your email is not recognized");
//                         return false;
//                     }
//                     else{
//                         return true;
//                     }

//                 }

//             }

//             private function confirmEmailVaildate(string $email){
                
//                 if($email === ''){
//                     header('Location:forgotpassword.php?error=email is required');
//                     return false;
//                 }else{
//                     header('Location:forgotpassword.php?success=email confirmed');
//                     return true;
//                 }

//             }

//             public function changePassword (string $password,  string $confirmpassword):bool{
//                 if($this->validatepassword($password, $confirmpassword)){
//                    $getemail =  $_SESSION['email'];
//                     echo $_SESSION['email'];
//                     echo $password;

//                         $newpassword = password_hash($password, PASSWORD_DEFAULT);
//                         $sql = "UPDATE  user SET password = '$newpassword' WHERE email = '$getemail' ";
//                         $addNewPassword = new Database;
//                            $changed =  $addNewPassword->loginUserinDB($sql);
//                            print_r($changed);

//                         if(!$changed){
//                             header("Location:forgotpassword.php?error=the was an error changing the password ");
//                             return false;    
//                         }
//                         else{
//                               header("Location:login.php?success=Your password has been updated ");
//                             return true;
//                         }
//                 }

//             }

//             private function validatepassword( string $password,  string $confirmpassword):bool {

//                 if($password == ''){
//                     header("Location:forgotpassword.php?error=your password is  required");
//                     return false ;
//                 }
//                 if($confirmpassword == ''){
//                     header("Location:forgotpassword.php?error=your confirm password is  required");
//                     return false ;
//                 }

//                 if($password !== $confirmpassword){
//                     header("Location:forgotpassword.php?error=your password doesnt match");
//                     return false ;
//                 }

                
//                 // header("Location:forgotpassword.php?success=Your password has been updated ");
//                 return true;
                
//             }


}





?>

