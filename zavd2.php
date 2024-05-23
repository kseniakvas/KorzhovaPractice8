<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<button class="knopak"><a href="index.php">Меню</a></button>
<form action="zavd11.php" method="get"
    style="display: flex; flex-direction: column; width: 25%; margin: auto; text-align: center;">
        <label>Перша цифра</label>
        <input type="number" name="firstnumber" required>
        <label>Друга цифра</label>
        <input type="number" name="secondnumber" required>
        <button style="margin-top: 5%;" type="submit">Відправити</button>
    </form>
</body>
</html>