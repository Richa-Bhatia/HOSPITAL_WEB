<>php
session_start();
<!DOCTYPE HTML>
<html>

    <head>
        <title>
            Login</title>
        <script type="text/javascript">
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }

            today = yyyy + '-' + mm + '-' + dd;
            document.getElementsByClass("date").setAttribute("min", today);
            
            function SelectDoctor() {
                var doc = document.getElementById("dep");
                var x = document.getElementById("doctor");
                var val = doc.value;
                while (x.firstChild) {
                    x.removeChild(x.firstChild);
                }
                // console.log(val);
                if (val == 'gynaecology') {
                    var option1 = document.createElement("option");
                    option1.setAttribute("value", "Richa");
                    option1.appendChild(document.createTextNode("Dr. Richa Bhatia"));
                    x.appendChild(option1);
                    var option2 = document.createElement("option");
                    option2.setAttribute("value", "Roma");
                    option2.appendChild(document.createTextNode("Dr. Roma Bulani"));
                    x.appendChild(option2);
                } else if (val == 'neurology') {
                    var option1 = document.createElement("option");
                    option1.setAttribute("value", "Anjali");
                    option1.appendChild(document.createTextNode("Dr. Anjali Prithiani"));
                    x.appendChild(option1);
                    var option2 = document.createElement("option");
                    option2.setAttribute("value", "Mohit");
                    option2.appendChild(document.createTextNode("Dr. Mohit Makhija"));
                    x.appendChild(option2);
                } else if (val == 'dental') {
                    var option1 = document.createElement("option");
                    option1.setAttribute("value", "Vanita");
                    option1.appendChild(document.createTextNode("Dr.Vanita Lahrani"));
                    x.appendChild(option1);
                    var option2 = document.createElement("option");
                    option2.setAttribute("value", "Karan");
                    option2.appendChild(document.createTextNode("Dr.Karan Khatwani"));
                    x.appendChild(option2);
                } else {
                    var option1 = document.createElement("option");
                    option1.setAttribute("value", "Resham");
                    option1.appendChild(document.createTextNode("Dr. Resham Verliani"));
                    x.appendChild(option1);
                    var option2 = document.createElement("option");
                    option2.setAttribute("value", "Manoj");
                    option2.appendChild(document.createTextNode("Dr. Manoj Ochaney"));
                    x.appendChild(option2);
                }

            }
        </script>
        <link rel="stylesheet" type="text/css" href="css\patientlogin.css">

    </head>

    <body>
        <nav>
            <div class="navigation">SARASWATI HOSPITAL</div>
            <ul>
                <li>
                    <a class="log" href="logout_patient.php">LOGOUT</a>
                </li>
            </ul>
        </nav><br><br>
        <h1 style="color: blue;text-align: center;font-style: italic;padding-top: 50px">
            WELCOME echo $_SESSION['username'];</h1>
        <h3 style="color: blue;text-align: center;font-style: italic">
            Book an appointment online to avoid long queues!</h3>
<div class="patientdiv">
        <div class="patient">
            <form method="post" name="loginForm" action="appointment.php">
                <label>APPOINTMENT FOR</label>
                <select class="department" id="dep" name="dept" onchange="SelectDoctor();">
                    <option value="gynaecology">
                        GYNAECOLOGY
                    </option>
                    <option value="neurology">
                        NEUROLOGY
                    </option>
                    <option value="dental">
                        DENTAL
                    </option>
                    <option value="cardiology">
                        CARDIOLOGY</option>
                </select>
                <br><br><br>

                <label>Select Doctor</label>
                <select name="dr" id="doctor" required></select><br><br><br>

                <label>SELECT DATE </label>
                <input type="date" name="date"   required><br/><br/><br>

                <label>SELECT TIME SLOT</label>
                <select name="time_slot" required>
                    <option value="11am-1pm">11am-1pm</option>
                    <option value="1pm-3pm">1pm-3pm</option>
                    <option value="3pm-5pm">3pm-5pm</option>
                    <option value="5pm-7pm">5pm-7pm</option>
                    <option value="7pm-9pm">7pm-9pm</option>
                    <option value="9pm-11pm">9pm-11pm</option>
                </select>

                <br><br><br>
                <button type="submit" value="Submit" name="appoint_submit" >SUBMIT</button>
                <br>
                <br>

            </form>
        </div><br><br><br>
        </div>

    </body>

</html>
?>