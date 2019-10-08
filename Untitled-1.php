<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>PHP Primer - String Manipulation</title>
</head>
<body>
<h1>Date and Time Manipulation</h1>
<?php  
$datenow = getdate();
echo "Today's Date: <br/>";
echo $datenow['mday'] . '<br/>';
echo "<p>$datenow</p>";

?>
</body>
</html>