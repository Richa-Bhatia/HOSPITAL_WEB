<?php
session_start();
$db = mysqli_connect("localhost","id7453509_localhost","localhost","id7453509_hospital");
if(!$db)
{
    die('COULD NOT CONNECT'.mysqli_error($db));
}
if(isset($_POST['appoint_submit'])){
    
    
    
    $email=$_SESSION['username'];
    $dept=$_POST['dept'];
    $dr=$_POST['dr'];
    $date=$_POST['date'];
    $time_slot=$_POST['time_slot'];

    $sql="INSERT INTO login(email,dept,doctor_name,date,time_slot) values('$email','$dept','$dr','$date','$time_slot');";
        
        $result=mysqli_query($db,$sql);
        if($result){
        $_SESSION['message']="YOU ARE LOGGED IN";
        $_SESSION['username']=$email;
        header("location:index.html");
        }
    }
    
?>

