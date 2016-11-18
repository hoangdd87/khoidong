<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Các gói câu hỏi</title>
</head>
  
<?php
/**
 * Created by PhpStorm.
 * User: Hoang
 * Date: 19-Nov-16
 * Time: 12:04 AM
 */
include_once __DIR__ . '/util/PDOHelper.php';
$pdoHelper = new PDOHelper();
$cacgoicauhoi = $pdoHelper->get_All_GoiCauHoi();
?>

<body>
<div class="container">
    <div class="ochunhatchinh">
        <div class="oGoiCauHoi">
            1
        </div>
        <div class="oGoiCauHoi">
            2
        </div>
        <div class="oGoiCauHoi">
            3
        </div>
        <div class="oGoiCauHoi">
            4
        </div>
    </div>
</div>


</body>