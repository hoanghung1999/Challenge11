<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="assets/js/style.js"></script>
</head>

<body>
	<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">FORM 1</a></h3>
			<h3 class="login-tab"><a href="#login-tab-content">FORM 2</a></h3>
		</div>
		<!--.tabs-->

		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="B64.php" method="post">
					<input type="text" class="input" name="username"  placeholder="Username" required>
					<input type="email" class="input" name="email"  placeholder="Email" required>
					<input type="text" class="input" name="dob" placeholder="Year of Birth" required>
					<select name="sex" class="input">
						<option value="male" selected="selected" >Male</option>
						<option value="female">Female</option>
					</select>
					<input type="submit" name="submit" class="button" value="DECODE B64">
				</form>
				<!--.login-form-->
				<!--.help-text-->
			</div>
			<!--.signup-tab-content-->

			<div id="login-tab-content">
				<form class="login-form" action="DecodeB64.php" method="post">
					<input type="text" class="input" id="user_login" name="user" placeholder="User B64">
					<input type="submit" class="button" value="ENCODE">
				</form>
			</div>
			<!--.login-tab-content-->
		</div>
		<!--.tabs-content-->
	</div>
	<!--.form-wrap-->
</body>

</html>