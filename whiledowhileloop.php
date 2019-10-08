<?php 
$title = "Whiledowhileloop";
include 'includes/header.php' 
?>
<body>
<h1><?php echo $title ?></h1>
<?php 
$grade= 0;
while($grade < 10) {
	echo "<p>I am less than 10!</p>";
	$grade++;
}
echo 'Exit loop';
?>
<h1>Do-While Loop</h1>
<?php 
$grade = 0;
do {
	echo "<p>I AM Dowhile loop</p>";
	$grade++;
}while($grade < 10);
echo 'Exit loop';
?>
<?php require 'includes/footer.php' ?>