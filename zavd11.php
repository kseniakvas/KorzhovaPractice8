<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$a = $_GET['firstnumber'];
$b = $_GET['secondnumber'];
?> 
<h1>Результати</h1>
    <p>Додавання: <?php echo "$a + $b = " . ($a + $b); ?></p>
    <p>Множення: <?php echo "$a * $b = " . ($a * $b); ?></p>
    <p>Віднімання: <?php echo "$a - $b = " . ($a - $b); ?></p>
    <p>Ділення: <?php echo "$a / $b = " . ($a / $b); ?></p>
    <button><a href="index.php">Меню</a></button>
</body>
</html>