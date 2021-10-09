<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form_Page</title>
</head>
<style type="text/css">
	body{
		background-image: url("darkBG.jpg");
		background-repeat: no-repeat;
		background-size: cover;
		color: white;
	}

	#htmlForm{
		position: absolute;
		width: 350px;
		height: 350px;
		margin-left: calc(50% - 175px);
		margin-top: 8%;
		border-radius: 20px;
		font-size: 20px;
	}

	fieldset{
		background-color: darkcyan;
		padding: 15px;
		border: none;
		border-radius: 10px;
	}

	legend{
		text-align: center;
	}

	p{
		font-size: 14px;
		text-align: center;
	}

	label{
		text-align: left;
		margin-left: 15px;
	}

	input{
		color: white;
		background-color: rgb(50, 50, 50);
		border-radius: 10px;
		width: 90%;
		height: 32px;
		font-size: 15px;
		margin-left: 10px;
		padding-left: 10px;
	}

	input:hover{
		background-color: rgb(80, 80, 80);
	}

	#formSubmitBtn{
		padding: 7px;
		background-color: lightskyblue;
		font-size: 20px;
		border-radius: 10px;
		font-family: verdana;
		color: white;
		cursor: pointer;
		width: 50%;
	}

	#formSubmitBtn:hover{
		box-shadow: 0px 0px 10px black;
	}
</style>
<body>
	<form id="htmlForm" onsubmit="submitFunction()">
		<fieldset>
			<legend><h1>SIGN UP</h1></legend>
			<label for="uName">Username:</label><br>
			<input required type="text" id="uName"><br><br>
			<label for="eAdd">Email Address:</label><br>
			<input required type="email" id="eAdd"><br><br>
			<label for="passW">Password:</label><br>
			<input required minlength="8" type="password" id="passW"><br><br>
			<label for="contactNum">Contact Number:</label><br>
			<input required type="text" id="contactNum"><br>
			<p>Your contact number is needed for 2-factor<br>authentification for stronger security.</p><br>
			<center><button id="formSubmitBtn" type="submit">SUBMIT</button></center>
		</fieldset>
	</form>
</body>
</html>
