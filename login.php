<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
	box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
	float: left;
	margin: 0px;
	width: 50%;
	padding: 10px;
	height: 600px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
	content: "";
	display: table;
	clear: both;
}

.font {
	font-family: Poppins;
	font-style: normal;
}

.login-box {
	background-color: white;
	border: none;
	padding: 40px;
	margin: 0px;
}

.text {
	width: 358px;
	height: 54px;
	left: 850px;
	top: 230px;
	font-family: Poppins;
	font-style: normal;
	font-weight: 500;
	font-size: 36px;
	line-height: 54px;
	/* identical to box height */
	letter-spacing: 0.01em;
	color: #2C2E36;
}

.email-phonenumber {
	width: 225px;
	height: 27px;
	left: 850px;
	top: 342px;
	font-family: Poppins;
	font-style: normal;
	font-weight: 500;
	font-size: 18px;
	line-height: 27px;
	/* identical to box height */
	letter-spacing: 0.01em;
	color: #334D6E;
}

.text-box {
	width: 400px;
	height: 62px;
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	border: none;
	background: #F1F1F3;
	border-radius: 4px;
	margin-bottom: 10px;
}

.submit-button {
	font-family: Poppins;
	color: white;
	width: 410px;
	height: 62px;
	border: none;
	background: #2ED47A;
	box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
	border-radius: 4px;
}
</style>
</head>

<body>



	<div class="row">
		<div class="column" style="background-color: lightgrey;"></div>
		<div class="login-box column">
			<div style="padding-top: 100px; padding-left: 100px; align: center;">
				<form class="font" action="">
					<span class="text">Welcome to Xbook </span><br> <br> <span
						class="email-phonenumber">Email or phonenumber</span><br> 
						<input class="text-box" type="text" name="emailPhonenumber" placeholder="  Enter name or phone number">
					<br> <span
						style="font-weight: 500; font-size: 14px; color: red;">
						enter a valid email address</span><br> <br> <br> <input
						class="submit-button" type="submit" value="Login">
			        </form>
			</div>
			
		</div>


	</div>

</body>
</html>
