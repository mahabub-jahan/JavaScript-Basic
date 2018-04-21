<!DOCTYPE html>
<html>
<head>
	<title>Ssdlkf</title>
</head>
<body>
<?php 
	if ($_GET['prime']) {
		
	
	$prime = $_GET['prime'];
	echo $prime;
	$test = 0;
	$test1 = $prime /2;
	for ($i=2; $i < $prime; $i++) { 
		if ($prime % $i == 0) {
			$test ++;
		}
	}
	if ($test > 0) {
		echo "Number is prime";
	}else{
		echo "Number is not prime";
	}}
?>
<div class="container">
	<form method="get" action="index.php">
		<label>Input number to check Prime or Not</label>
		<input type="number" name="prime">
		<input type="submit">
	</form>
</div>
</body>
</html>