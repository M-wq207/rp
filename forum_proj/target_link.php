<?php
require_once ('main_paige_check.php');
session_start();
require_once 'phpQuery.php';
$_SESSION['gname'] =  $_POST['gname'];
$_SESSION['glink'] = $_POST['glink'];
$url = [
    0 =>$_SESSION['glink'],
    1 =>$_SESSION['gname']
 
];
$text = read_them($url, $logCredits);
?>
<!doctype html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<snap><?php echo($text);?></snap>
</body>
</html>