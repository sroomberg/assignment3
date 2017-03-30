<?php 
include 'ParentClass.php';
include 'ChildClass.php';

$my_car = new Car(2007, "Honda", "Accord");

$my_sedans = array(
	new Sedan(2007, "Honda", "Accord", "red", "automatic"),
	new Sedan(2008, "Ford", "Focus", "blue", "manual"),
	new Sedan(2002, "Hyundai", "Sonata", "silver", "automatic"),
	new Sedan(2012, "Kia", "Soul", "green", "automatic")
);

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
	<link rel="stylesheet" href="./assignment3.css" />
</head>
<body>
	<div class="container">
		<h2>Below are some cars</h2>
		<p><span>Here is a car (parent class):</span><br /><?php echo $my_car; ?></p>
		<p>
			<span>Here are some sedans (sub class):</span><br />
			<ol id="car-list">
				<?php
				foreach ($my_sedans as $sedan) {
					echo '<li>' . $sedan . '</li>';
				}
				?>
			</ol>
		</p>
	</div>
</body>
</html>