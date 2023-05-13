<?php
$title = "abdullah hafiz";
$num = 40;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title . " - Home Page" ?></title>
</head>
<body>
    <?php
        echo "<h1>Welcome to $title</h1>";
        echo $num;
    ?>
</body>
</html>