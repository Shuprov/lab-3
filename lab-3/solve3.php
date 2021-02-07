<html>
<head>
</head>

<body>

<?php
$length=20;
echo "Length:"." $length";
echo "<br>";
$width=20;
echo "Width:"." $width";
echo "<br>";

$area=$length*$width;
echo "Area of the rectangle:"." $area";
echo "<br>";
$perimeter=2*($length+$width);
echo "Perimeter of the rectangle:"." $perimeter";
echo "<br>";


if($length==$width)
{
	echo "The shape is a square";
}


?>


</body>




</html>