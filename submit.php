
<!DOCTYPE html>
<html>
<head>
<title> Form Project </title>
</head>
<body>
<center>
<h1> Marks Calculator </h1>

<?php
$fname=$_GET['fname'];
$lname=$_GET['lname'];

echo "<h2>Name: $fname $lname </h2>";

$islam=$_GET['islam'];
$dhivehi=$_GET['dhivehi'];
$english=$_GET['english'];
$maths=$_GET['maths'];

echo "<h3>Islam: $islam </h2>";
echo "<h3>Dhivehi: $dhivehi </h2>";
echo "<h3>English: $english </h2>";
echo "<h3>Maths: $maths</h2>";

$total = $islam + $dhivehi + $english + $maths;
$avg = $total/4;

echo "Total: $total";
echo "<br />";
echo "Average: $avg";
echo "<br />";
if ($avg >=85){
    echo "Grade: A";
}
if ($avg >=70 && $avg <84) {
    echo "Garde: B";
}
if ($avg >=65 && $avg <69) {
     echo "Grade: C";
}
if ($avg >=50 && $avg <64) {
    echo "Grade: D";
}
if ($avg >=30 && $avg <49) {
    echo "Grade: D";
}
if ($avg <=29) {
    echo "Grade: F";
}

?>

</center>
</body>
</html>