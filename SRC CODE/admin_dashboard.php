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
        <input style="width: 200px;
    height: 150px;
    background-color: green;
    margin-left:170px;
	color: white;
	font-weight: bold;"type="button" name="add_doctor" class="homebutton" value="ADD DOCTOR"
onClick="document.location.href='admin_add.php'" />

<input style="width: 200px;
    height: 150px;
    margin-left:170px;
	background-color: green;
	color: white;
	font-weight: bold;" type="button" name="view_doctor" class="homebutton" value="DOCTOR DASHBOARD"
onClick="document.location.href='view_doctor.php'" />

<input  style="width: 200px;
    height: 150px;
    background-color: green;
    margin-left:170px;
	color: white;
	font-weight: bold;" type="button" name="view_patient" class="homebutton" value="PATIENT DASHBOARD"
onClick="document.location.href='view_patient.php'" />

<input style="width: 200px;
    height: 150px;
    background-color: green;
    margin-left:170px;
	color: white;
	font-weight: bold;"type="button" name="view_appointment" class="homebutton" value="VIEW APPOINTMENTS"
onClick="document.location.href='doctor_dash.php'" />

    </body>
</html>

