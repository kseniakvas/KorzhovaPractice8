<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
$c = $_POST['firstnumber'];
$d = $_POST['secondnumber'];
?>
<body>
    <h1>Результати</h1>
    <p>Додавання: <?php echo "$c + $d = " . ($c + $d); ?></p>
    <p>Множення: <?php echo "$c * $d = " . ($c * $d); ?></p>
    <p>Віднімання: <?php echo "$c - $d = " . ($c - $d); ?></p>
    <p>Ділення: <?php echo "$c / $d = " . ($c / $d); ?></p>
    <button><a href="index.php">Меню</a></button>
</body>
</html>