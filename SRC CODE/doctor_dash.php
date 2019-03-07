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
   $con=mysqli_connect("localhost","","localhost","");
   // Check connection
   if(mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

   $result = mysqli_query($con,"SELECT * FROM login");

   echo "<table border='1'>
      <tr>
               <th>ID</th>
                <th>EMAIL</th>
                <th>APPOINTMENT FOR</th>
                <th>DOCTOR NAME</th>
                <th>DATE</th>
                <th>TIME SLOT</th>
                

      </tr>";

   while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
       echo "<td>" . $row['dept'] . "</td>";
      echo "<td>" . $row['doctor_name'] . "</td>";
      echo "<td>" . $row['date'] . "</td>";
       echo "<td>" . $row['time_slot'] . "</td>";
        

     
      echo "</tr>";
   }
   echo "</table>";

   mysqli_close($con);
?>
</div>

    
    </body>
</html>