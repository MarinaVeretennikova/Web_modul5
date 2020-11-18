
<?php
echo "Hello, let's calculate";


$a = $_GET[a];
$b = $_GET[b];
$type = $_GET[type];

$rezult = 0;

echo $type;		
switch ($type)
{
	case "*":
		$rezult = $a * $b;
		break;
	case "деление":	
		$rezult = $a / $b;
		break;
	case "сложение":	
		$rezult = $a + $b;
		break;		
	case "вычитание":	
		$rezult = $a - $b;
		break;							
}

// вывести в поле результата

echo $result;

?>

<html>
<head>
<body>

	<p>Число1: <input type="text" class="a"> </p>
	<p>Число2: <input type="text" class="b"> </p>

	<button class="btn-add">Добавить</button>

</body>
</head>
</html>
