<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
$f = $_POST['firststring'];
$s = $_POST['secondstring'];
?>
<body>
<h1>Результати</h1>
    <p>1) <?php echo("$f $s"); ?></p>
    <p>2) <?php echo("$s $f"); ?></p>
<button><a href="index.php">Меню</a></button>
</body>
</html>