<?php
session_start();
$db = mysqli_connect("localhost","id7453509_localhost","localhost","id7453509_hospital");
if(!$db)
{
    session_start();
    die('COULD NOT CONNECT'.mysqli_error($db));
}
if(isset($_POST['login_submit'])){
    
    $email=$_POST['e-mail'];
    $password1=$_POST['password'];
    $password = base64_encode($password1);
    
    $query = "select * from signup where email='$email' AND password='$password';";
    
    $result = mysqli_query($db,$query);
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['username']=$email;
        header("location:appoint.php");
    }
    else
    {
        $_SESSION['message']="invalid email";
            header("location:index.html");
    exit();
        
    }
}

?>

