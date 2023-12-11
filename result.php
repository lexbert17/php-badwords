<?php 
$sentence = $_GET ['sentence'];
$word = $_GET ['word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$new_string = str_replace($word,'***', $sentence );
?>

<h1> <?php echo $new_string; ?></h1>

</body>
</html>