<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="assets/js/style.js"></script>
</head>

<body>
	<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">ENCODE</a></h3>
		</div>
		<!--.tabs-->
		<?php
		require_once "User.php";
		if($_SERVER['REQUEST_METHOD']=='POST'){
			if(isset($_POST['user'])){
				$user_unserialize_base64=$_POST['user'];
				$user=unserialize(base64_decode($user_unserialize_base64));
			}

		}
		
		?>
		<div class="tabs-content">
			<div id="signup-tab-content" class="active">
				<form class="signup-form" action="B64.php" method="post">
					<input type="text" class="input" name="username" value="<?=$user->get_username()?>" readonly>
					<input type="email" class="input" name="email" value="<?=$user->get_email()?>" readonly>
					<input type="number" class="input" name="dob" value="<?=$user->get_dob()?>" readonly>
					<input type="text" class="input" name="sex" value="<?=$user->get_sex()?>" readonly>

				</form>
				<button type="button" onclick="window.open('index.php','_self')" class="btn btn-info">Return</button>
			</div>

		</div>
	</div>
</body>

</html>