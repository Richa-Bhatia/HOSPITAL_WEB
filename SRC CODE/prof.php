<?php
session_start();
$db = mysqli_connect("localhost","","localhost","");
if(!$db)
{
    session_start();
    die('COULD NOT CONNECT'.mysqli_error($db));
}
if(isset($_POST['login_submit'])){
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_type = $_POST['user_type'];

    if($user_type=="ADMIN"){
        if($email=="saraswati@gmail.com" && $password=="123")
        {
            $_SESSION['username']=$email;
            
            header("location:admin_dashboard.php");
        }
        else
        {
            $_SESSION['message']="invalid email";
                header("location:forprofessionals.html");
        exit();
            
        }
}
    else{

        $password1=base64_encode($password);
        $query = "select * from doctor where email='$email' AND password='$password1';";
    
        $result = mysqli_query($db,$query);
        if(mysqli_num_rows($result)>0)
        {
            $_SESSION['username']=$email;
            header("location:doctor_dash.php");
        }
        else
        {
            $_SESSION['message']="invalid email";
                header("location:forprofessionals.html");
        exit();
            
        }
    }
    
   
   
}

?>