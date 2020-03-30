<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session e Cookie</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<form method="POST" action="vLogin.php">
		<div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre com email">
  		</div>
 		<div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	    </div>
	    <div class="form-group form-check">
		    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Lembrar</label>
    	</div>
  		<button type="submit" class="btn btn-primary">Entrar</button>
	</form>
	</div>
</body>
</html>
