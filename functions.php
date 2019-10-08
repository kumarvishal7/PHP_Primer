<?php 
$title = "Functions";
include 'includes/header.php'
 ?>
<body>
<h1><?php echo $title ?></h1>
<?php  
function writemessage(){
echo "You are really a nice person ,Have nice day! <br/>";
}
writemessage();
echo "<hr/>";
writemessage();

function addfunction($num1,$num2) {

$sum= $num1 + $num2;
$num2 = $num2 + 1;
echo "The sum of $num1 and $num2 is : $sum <br/>";
}

function changeNum(&$num) {
$num = $num + 10;
}

function returnproduct($num1,$num2) {
$prod = $num1 * $num2;
return $prod;
	
}

$num = 500;
addfunction(10,20);
addfunction(10,$num);
addfunction('10',"50");

changeNum($num);
echo $num . "<br/>";

$return_value = returnproduct(10 , 200);
echo $return_value . "<br/>";
?>
<?php require 'includes/footer.php' ?>