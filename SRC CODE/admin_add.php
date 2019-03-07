
<!DOCTYPE HTML>

<html>
	<head>
		<title> ADD DOCTOR</title>
		<link rel="stylesheet" type="text/css" href="css\patientlogin.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	</head>
	<script>
	function validateForm(){
		
		var name=document.forms["myForm"]["name"].value;
		var mobile_no = document.forms["myForm"]["mobile"].value;
		var gender = document.forms["myForm"]["gender"];

		//For first name
		    if (firstName == "") {
		        alert("First name must be filled out");
		        return false;
		    }
		    if(firstName.match(/^[a-zA-Z]+$/)==null){
				alert("First Name must contain only alphabets");
				return false;
			}
			
			//for gender
			genValue = false;
	        for(i = 0; i < gender.length; i++){
	            if(gender[i].checked == true){
	                genValue = true;    
	            }
	        }
	        if(!genValue){
	            alert("Please choose the gender");
	            return false;
	        }
		
		}	
			
    
</script>

	<body>
			<nav>
					<div class="navigation">SARASWATI HOSPITAL</div>
					<ul>
						<li>
							<a class="log" href="logout_proff.php">LOGOUT</a>
						</li>
					</ul>
				</nav><br><br>
				<h1 style="color: blue;text-align: center;font-style: italic;padding-top: 50px">
					WELCOME <?php session_start(); echo $_SESSION['username'];?></h1>
				
<div class="patientdiv">
		<div class="patient">
		<form method="post" autocomplete="on" onsubmit="return validateForm()" name="myForm" action="add_doctor.php">
			
		<label>NAME</label> 
		<input type="text" name="name" autofocus required> <br><br>
		<label>GENDER </label>
		<input type="radio" name="gender" value="m"> Male 
		<input type="radio" name="gender" value="f"> Female 
		<input type="radio" name="gender" value="o"> Other <br><br>
		<label>MOBILE NO</label>
        <input type="tel" name="mobile" required><br><br>
        <label>SPECIALIZATION </label>
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
                
            <option value="xray">
                XRAY</option>
                
            <option value="fordisabled">
                FOR DISABLED</option>
        </select><br><br>
		<label>EMAIL </label>
		<input type="text" type="email" name="email" required><br><br>
        
            <label>PASSWORD </label><input type="password" name="password_1" required><br><br>
 		<label>CONFIRM PASSWORD </label><input type="password" name="password_2" required><br><br>

 		<button type="submit" value="Submit" name="submit_doctor" >SUBMIT</button>
  <br> <br>


 </form>
  </div><br><br><br>
    </div>
    
</body>
 </html>