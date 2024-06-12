<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php 

date_default_timezone_set("america/sao_paulo");// GMT-3;
echo "hoje é dia" .date("d/s/y");
echo "agora são" .date("G:i");
?>
</body>

</html>