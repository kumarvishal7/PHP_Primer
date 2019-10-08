<?php 
$title = "If-Else statements";
include 'includes/header.php' 
?>
<body>
<h1><?php echo $title ?></h1>
<h3 style="color: red"></h3>
<?php 

echo "<h2>If Statement</h2>";
$grade= 50;
if($grade >= 50){
	echo '<h3 style="color: green">You have passed</h3>';
}
else{
	echo '<h3 style="color: red"> You have failed</h3>';
}
$grade= 'A';
if($grade == 'A'){
	echo '<h2 style="color: green">You are a Superstar</h2>';
}
elseif($grade == 'B') {
	echo '<h2 style="color: blue">You did well</h2>';
}
else {
	echo '<h2 style="color: red">You have Failed...........</h2>';
}
?>
<?php require 'includes/footer.php' ?>