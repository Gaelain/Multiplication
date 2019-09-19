<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Table de Multiplication :</h1>
    <?php
    for($i = 1; $i <= 10; $i++)
    {
    ?>
        <p><a href="table.php?table=<?php echo $i ?>">Table de <?php echo $i ?></a></p>
    <?php
    }
    ?>
</body>
</html>