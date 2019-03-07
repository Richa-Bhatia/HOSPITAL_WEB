<?php
$db = mysqli_connect("localhost","","localhost","");
if(!$db)
{
    die('COULD NOT CONNECT'.mysqli_error($db));
}
if(isset($_POST['submit_doctor'])){
    
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $dept=$_POST['dept'];
    $password_1=$_POST['password_1'];
    $password_2=$_POST['password_2'];
    
    if($password_1==$password_2)
    {
        $password_1=base64_encode($password_1);
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    exit('Invalid email address'); // Use your own error handling ;)
}
$select = mysqli_query($db, "SELECT `email` FROM `doctor` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($db));
if(mysqli_num_rows($select)>0) {
    header("location:admin_add.php");
    exit();
}
        $sql="INSERT INTO doctor(name,gender,mobile_no,dept,email,password) values('$name','$gender','$mobile','$dept','$email','$password_1');";
        
        $result=mysqli_query($db,$sql);
        if($result){
        header("location:admin_add.php");
        }
    }
    else{
        $_SESSION['message']="PASSWORDS DONT MATCH";
    }
                                         
                        
    
}

?>

