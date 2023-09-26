<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ваш заказ принят</title>
</head>
<body>
  <h1>Ваш заказ принят</h1>

  <?php
    $product = $_POST['product'];
    $material = $_POST['material'];
    $quantity = $_POST['quantity'];

    echo "<p>Заказано изделие: $product</p>";
    echo "<p>Материал: $material</p>";
    echo "<p>Количество: $quantity</p>";
  ?>
</body>
</html>
