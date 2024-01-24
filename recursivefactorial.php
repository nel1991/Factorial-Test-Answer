<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
		<body>
		<div class="container">
		<h1>Expected Result</h1>

		<form method="POST" class="row g-3">
			<div class="col-auto">
				<input type="number" name="factorial" id="factorial" class="form-control">
				<input type="submit" name="submit" value="Submit" class="btn btn-success" style="float:right;">
			</div>
			<div class="col-auto">
				<?php 

			function fact($factorial){
				if($factorial <=1){
					return 1;
				}
			
				return $factorial*fact($factorial-1);
			
			}


				if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['factorial'])){

					$factorial = $_POST['factorial'];
					
					echo "<h5>Result: </h5>". fact($factorial);
					/*echo "Factorial number for $factorial is ".fact($factorial);*/
				}

				?>

			</div>
		</form>

		
		</div>
		</body>
</html>