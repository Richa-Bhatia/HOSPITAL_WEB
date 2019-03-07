<?php
$db = mysqli_connect("localhost","","localhost","");
if(!$db)
{
    die('COULD NOT CONNECT'.mysqli_error($db));
}
if(isset($_POST['submit_mail'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $sql="INSERT INTO mail(name,email,message) values('$name','$email','$message');";
        
        $result=mysqli_query($db,$sql);
        if($result){
        header("location:mail.html");
        }
                                         
                        
    
}

?>

