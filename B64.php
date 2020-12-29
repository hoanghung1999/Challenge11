<?php
require_once "User.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $dob=$_POST['dob'];
        $sex=$_POST['sex'];
        $user=new User($username,$email,$dob,$sex);
    }
}
?>
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
<?php
  if($user) {
      $decode=base64_encode(serialize($user));
  }
?>
	<div class="form-wrap">
		<div class="tabs">
			<h3 class="signup-tab"><a class="active" href="#signup-tab-content">BASE64</a></h3>
		</div>
		<!--.tabs-->

		<div class="tabs-content">
			<form>
				<div class="form-group">
					<textarea class="form-control" rows="5" id="comment"><?php if(isset($decode)) echo $decode; ?></textarea>
				</div>
			</form>
			<button type="button" onclick="window.open('index.php','_self')" class="btn btn-info">Return</button>

		</div>

	</div>
</body>

</html>