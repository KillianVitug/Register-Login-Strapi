<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="card text-center">
  <h5 class="card-header">Registration Form</h5>
  <div class="card-body">
    <h5 class="card-title">Register now!</h5>
	<form method="POST" action="register.php">
		<label class="form-label" for="sample-username">Username</label>
		<input type="text" id="sample-username" class="form-control" name="username"/>
		<label class="form-label" for="sample-email">Email</label>
		<input type="email" id="sample-email" class="form-control" name="email"/>
		<label class="form-label" for="sample-password">Password</label>
		<input type="password" id="sample-password" class="form-control" name="password"/>
		<label class="form-label" for="confirm-password">Confirm Password</label>
		<input type="password" id="confirm-password" class="form-control" name="confirm-password"/>
		
		<br><button type="submit" class="btn btn-primary" name="register-user">Submit</button>
		<a class="btn btn-primary" href="loginForm.php" role="button">Go To Login Form</a>
	</form>
</div>
</div>
</body>
</html>