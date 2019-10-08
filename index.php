<?php 
$title = "Index";
include 'includes/header.php' 
?>
<!-- Basic html-->
<h1>Hello HTML - PHP Primer</h1>

<?php 
// Printing to HTML using php
echo 'Hello PHP!';
echo "<br/>";
echo "Second line";
echo "<br/>";



// declare variable
$name= "svishal singh";
$age= 22;
// echo variable
echo $name;
echo '<h1>My Name Is: '.$name.' </h1>';
echo '<h1>My Age Is: '.$age.' </h1>';

echo "<h1>My Name is: $name </h1>";
?>
<button type="button" class="btn btn-dark" >CLICK ME!</button>
<button type="button" class="btn btn-primary" >CLICK ME!</button>
<button type="button" class="btn btn-success" >CLICK ME!</button>
<a href="https://www.heroku.com" target="" class="btn btn-danger">Heroku.com</a>

<?php
require 'includes/footer.php' 
?>