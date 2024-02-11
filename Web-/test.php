<?php
require('connect.php');

$id = $_SESSION['id'];
$query_show = "SELECT * FROM account WHERE id = '$id'";
$call_back_show = mysqli_query($connect, $query_show);
$result_show = mysqli_fetch_assoc($call_back_show);
$directory = 'img/';
$image_name = $directory.$result_show['img'];
echo $result_show['img'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php  echo $image_name  ?>">
</body>
</html>