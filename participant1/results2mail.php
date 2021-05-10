<!DOCTYPE html>
<html lang="en">
<head>
<title>Audio test processing</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<main>

<?php
$name=$_POST[("partinumber")];
$lvla=$_POST[("totalResults")];

$mail="C.Clark8@edu.salford.ac.uk";


mail($mail,"Audio Test Results",$name." ".$lvla." ");
?>



</main>
</body>
</html>