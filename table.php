<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET["table"]))
{
?>
    <h1>Table de <?php echo $_GET["table"] ?></h1>
    <?php
    for($i = 1; $i <= 10; $i++)
    {
        $mul = $i * $_GET["table"];
        echo "<p>".$i." x ".$_GET["table"]." = ".$mul."</p>";
    }
}

?>
</body>
</html>
<?php
