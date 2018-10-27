<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body>

	<?php include 'common.php'?>
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