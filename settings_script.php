<?php
    require 'includes/common.php';
    if (isset($_SESSION['email'])) 
        {   header('location: product.php'); } 
    $password= mysqli_real_escape_string($con,$_POST['password']);
    $np=mysqli_real_escape_string($con,$_POST['np']);
    $op=mysqli_real_escape_string($con,$_POST['op']);
    if(strlen($password)!=strlen($np))
    {
        echo "ERROR";
    }
    else
    {
        $user_id= session_id();
        $check="SELECT password  FROM users WHERE id=$user_id";
        $check_result= mysqli_query($con, $check);
        $row=mysqli_fetch_array($check_result);
        if($row['password']==$op)
        {
            $change="UPDATE users SET password='$password'WHERE id='$user_id'";
        }
        else
        {
            header('location:settings.php');
        }
    }
    
    
        ?>
