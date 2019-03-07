<html>
    <link rel="stylesheet" type="text/css" href="css\dash.css">


    <body>
        <nav>
                <div class ="navigation">SARASWATI HOSPITAL</div>
                <ul>
                <li><a class="log" href="logout_proff.php" >LOGOUT</a></li></ul>
                </nav><br><br>
                <h1 style="color: blue;text-align: center;font-style: italic;padding-top: 50px">
            WELCOME <?php session_start(); echo $_SESSION['username'];?></h1>
<div class="tablephp" style="padding:10% 10% 10% 30%;">



<?php
   $con=mysqli_connect("localhost","id7453509_localhost","localhost","id7453509_hospital");
   // Check connection
   if(mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $result = mysqli_query($con,"SELECT * FROM signup");

   echo "<table border='1'>
      <tr>
               <th>ID</th>
                <th>NAME</th>
                <th>GENDER</th>
                <th>MOBILE NO</th>
                <th>DOB</th>
                <th>EMAIL</th>
                <th>COUNTRY</th>


      </tr>";

   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
       echo "<td>" . $row['gender'] . "</td>";
      echo "<td>" . $row['mobile_no'] . "</td>";
      echo "<td>" . $row['dob'] . "</td>";
       echo "<td>" . $row['email'] . "</td>";
       echo "<td>" . $row['country'] . "</td>";
        

     
      echo "</tr>";
   }
   echo "</table>";

   mysqli_close($con);
?>
</div>
</body>
</html>