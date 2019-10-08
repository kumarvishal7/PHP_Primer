<?php
$title = "Arrays and Printouts";
 include 'includes/header.php' 
 ?>
<body>
<h1><?php  echo $title ?></h1>
<?php 
$num = 3;


$numbers = array(1,2,3,4,5,6,7,8,9,10,65,66,67,68);
echo $numbers[5];

echo "<p>$numbers[9]</p>";
$size= count($numbers);
echo "<p>Array numbers is size: $size</p>";

for($count = 0; $count < $size; $count++) {
	
	echo "<p>$numbers[$count]</p>";
}
?>
<?php require 'includes/footer.php' ?>