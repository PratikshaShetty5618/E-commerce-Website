<?php
    require "includes/common.php";
    if (isset($_SESSION['email'])) 
        {   header('location: product.php'); } 

$email=$_POST['email'];
$regex_email="/^[a-z0-9-]+(\.[a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email))
{
    echo "Incorrect Email-id";
    header('location:index.php?email_error=Enter correct email');
            
}
$password=$_POST['password'];
if(strlen($password)<6)
{
    echo"Password should have atleast 6 characters";
    header('location:index.php?password_error=Enter correct password');
}
$email=mysqli_real_escape_string($con,$email);
$password=mysqli_real_escape_string($con,$password);

$dup_query="SELECT id FROM users WHERE email=$email";
$dup_query_result=mysqli_query($con,$dup_query);
if(mysqli_num_rows($dup_query_result))
{
    echo"E-mail id already exists";
}
 else 
{
     $name=$_POST['username'];
     $contact=$_POST['contact'];
     $city=$_POST['city'];
     $address=$_POST['address'];
     
     
    $user_reg_query="INSERT INTO users(name,email,password,contact,city,address) values('$name','$email','$password','$contact','$city','$address')";
    $user_reg_submit= mysqli_query($con,$user_reg_query) or die(mysqli_error($con));
    echo "User successfully inserted";

    
    
    $_SESSION['id']=mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    $_SESSION['contact']=$contact;
    $_SESSION['city']=$city;
    $_SESSION['address']=$address;
    header('location: product.php');
}

   ?>     
    