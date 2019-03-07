<?php
$db = mysqli_connect("localhost","id7453509_localhost","localhost","id7453509_hospital");
if(!$db)
{
    die('COULD NOT CONNECT'.mysqli_error($db));
}
if(isset($_POST['submit_signup'])){
    
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $password_1=$_POST['password_1'];
    $password_2=$_POST['password_2'];
    
    if($password_1==$password_2)
    {
        $password_1=base64_encode($password_1);
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email address'); // Use your own error handling ;)
}
$select = mysqli_query($db, "SELECT `email` FROM `signup` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($db));
if(mysqli_num_rows($select)) {
    header("location:patientsignup.html");
    exit();
}
        $sql="INSERT INTO signup(name,gender,mobile_no,dob,email,country,password) values('$name','$gender','$mobile','$dob','$email','$country','$password_1');";
        
        $result=mysqli_query($db,$sql);
        if($result){
        $_SESSION['message']="YOU ARE LOGGED IN";
        $_SESSION['username']=$email;
        header("location:index.html");
        }
    }
    else{
        $_SESSION['message']="PASSWORDS DONT MATCH";
    }
                                         
                        
    
}

?>

