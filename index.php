<!DOCTYPE html>
<html lang="en">

<head>
	<title>CSRF-Protection Demo Synchronizer Token Pattern</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

	<div class="jumbotron text-center">
		<h4>CSRF-Protection Demo Using Synchronizer Token Pattern</h4>
	</div>
	<div class="container">
		<div class="row col-sm-4 col-sm-offset-4">
			<form action="handler.php" method="POST">
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="username" class="form-control" id="username" name="username" required value="admin">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" class="form-control" id="password" name="password" required value="admin@123">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
	</div>

</body>

</html>