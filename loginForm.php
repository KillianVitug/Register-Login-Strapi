<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="card text-center">
  <h5 class="card-header">Login Form</h5>
  <div class="card-body">
    <h5 class="card-title">Please login!</h5>
	<form method="POST" action="login.php">
		<label class="form-label" for="sample-identifier">Email Address</label>
		<input type="text" id="sample-identifier" class="form-control" name="identifier"/>
		<label class="form-label" for="sample-password">Password</label>
		<input type="password" id="sample-password" class="form-control" name="password"/>
		
		<br><button type="submit" class="btn btn-primary" name="login-user">Submit</button>
		<a class="btn btn-primary" href="registrationForm.php" role="button">Go To Registration Form</a>
	</form>
</div>
</div>
</body>
</html>