<!DOCTYPE html>
<html lang="en">

<head>
	<title>CSRF-Protection Demo Using Synchronizer Token Pattern</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<script>
	$(function() {
		
		$.ajax({
			type: 'POST',
			url: 'ajax_call.php',
			success: function(result) {
				console.log(result);
				const res = JSON.parse(result);
				console.log(res.token);
				alert(res.token);
				document.getElementById('csrfToken').value = res.token;
			}, 
			error: function(XMLHttpRequest, textStatus, errorThrown) {
     			alert("some error");
  			}
		});
	});
</script>

<body>

 	<?php include 'common.php';?>

	
	
	<div class="container">
		<div class="row">

			<h4>Welcome Admin!</h4>

			<form action="result.php" method="POST">
				<input type="hidden" name="csrfToken" id="csrfToken" value="token">
				<div class="form-group">
					<label for="resource_name">Resource Name</label>
					<input type="text" name="resource_name" value="Resource one">
				</div>
				<button type="submit" class="btn btn-danger">Delete Resource</button>
			</form>
		</div>
	</div>

</body>

</html>
