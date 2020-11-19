


<?php

echo "Давайте вычислим: ";

$a = $_GET[a];
$b = $_GET[b];
$type = $_GET[type];




echo "$rezult";	

switch ($type)
{
	case "умножение":
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

echo "$result";

?>

<html>
<head>
	<meta charset="utf-8">
<body>
	

	<form action="pr5_2.php" method="get">
		<p>Число1: <input type="text" name="a" value="<?php echo $_GET['a']; ?>"> </p>
		<p>Число2: <input type="text" name="b" value="<?php echo $_GET['b']; ?>"> </p>
		<p>	Действие:	
		<select name="type">
		  <option <?php echo ($_GET['type'] == "сложение" ? 'selected' : ''); ?>>сложение</option>
		  <option <?php echo ($_GET['type'] == "вычитание" ? 'selected' : ''); ?>>вычитание</option>
		  <option <?php echo ($_GET['type'] == "умножение" ? 'selected' : ''); ?>>умножение</option>
		  <option <?php echo ($_GET['type'] == "деление" ? 'selected' : ''); ?>>деление</option>
		</select>
		</p>


		<button>Вычислить</button>

		<input value ="<?php echo "$rezult"; ?>">

	</form>	

</body>
</head>
</html>