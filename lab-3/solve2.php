<html>
<head>
</head>

<body>

<?php
$marks=60;
echo "Grading System:";
echo "<br>";
if($marks>=90)
{
	echo "A+";echo "<br>";
	echo "$marks";
}
else if($marks>80 && $marks<90)
{
	echo "A";echo "<br>";
	echo "$marks";
}
else if($marks>70 && $marks<80)
{
	echo "B";echo "<br>";
	echo "$marks";
}
else if($marks>60 && $marks<70)
{
	echo "C";echo "<br>";
	echo "$marks";
}
else{
	echo "F";echo "<br>";
	echo "$marks";
}

?>


</body>




</html>