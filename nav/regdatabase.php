
<?php 
include("../includes/functions.php");
$var=0;
$errors=array();
$username=$password=$cpassword=$name=$email=$phone=$address="";

if(isset($_POST['register'])) {

  $username=clean($_POST['username']);
  $password=clean($_POST['password']);
  $cpassword=($_POST['cpassword']);
  $name=clean($_POST['name']);
  $email=clean($_POST['email']);
  $phone=clean($_POST['phone']);
  $address=clean($_POST['address']);

	if(empty($username)){
      $errors['username']="username is required";
    }
    else if(!ctype_alpha($username)) {
      $errors['username']="Invalid characters ";
    }
    else if(strlen($username)>20) {
      $errors['username']="Too long username";
    }

    if(empty($password)){
      $errors['password']="password is required";
    }
     else if(strlen($password)<5) {
      $errors['password']="password too short";
    }

    if(empty($cpassword)){
      $errors['cpassword']="password is required";
    }
     else if(strlen($cpassword)<5) {
      $errors['cpassword']="password too short";
    }
    if($password!==$cpassword){
      $errors['cpassword']="password mismatched";
    }

    if(empty($name)){
      $errors['name']="Lastname is required";
    }
    else if(!ctype_alpha($name)){
      $errors['name']="Invalid characters ";
    }
     else if(strlen($name)>20) {
      $errors['name']="Too long lastname";
    }
    
    if(empty($email)){
      $errors['email']="Email is required";
    }

    if(empty($phone)){
      $errors['phone']="Username is required";
    }
     else if(strlen($phone)==10) {
      $errors['phone']="username too long";
    }

     if(empty($address)){
      $errors['address']="address is required";
    }


  if(count($errors)==0){
  	echo "restister called";
     register();
     echo "register function";
  }
}


?>