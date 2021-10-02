<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form_Page</title>
</head>
<style type="text/css">
	#htmlForm{
		position: absolute;
		width: 350px;
		height: 350px;
		margin-left: calc(50% - 175px);
		margin-top: 10%;
		border-radius: 20px;
		font-size: 20px;
	}

	fieldset{
		background-color: green;
		padding: 15px;
		border: none;
		border-radius: 10px;
		text-align: center;
	}

	input{
		color: white;
		background-color: rgb(50, 50, 50);
		border-radius: 10px;
		width: 90%;
		height: 35px;
		font-size: 15px;
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
		color: rgb(50, 50, 50);
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
			<label for="fN">First Name:</label><br>
			<input required type="text" id="fName"><br><br>
			<label for="lN">Last Name:</label><br>
			<input required type="text" id="lName"><br><br>
			<label for="eAdd">Email Address:</label><br>
			<input required type="email" id="emailAdd"><br><br>
			<label for="cNum">Contact Number:</label><br>
			<input required type="text" id="contactNum"><br><br>
			<button id="formSubmitBtn" type="submit">Submit</button>
		</fieldset>
	</form>
</body>
</html>