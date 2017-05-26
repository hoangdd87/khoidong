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
include_once __DIR__ . '/resource/Colors.php';
$pdoHelper = new PDOHelper();
$dsgoicauhoi = $pdoHelper->get_All_GoiCauHoi();

?>
<head>
    <script src="jquery-3.1.1.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Danh sách các gói ?></title>
</head>
<body>
<div class="divbuttonReset">
    <button class="buttonReset" onclick="reset()">
        Reset
    </button>
</div>
<div class="container">
    <div class="ochunhatchinh">
        <?php foreach ($dsgoicauhoi as $goiCauHoi): ?>
            <a class="oGoiCauHoi" href="dscauhoi.html?magoi=<?=$goiCauHoi->magoi?>"
               style="text-decoration:none; background-color: <?= Colors::getBackGroundColorGoiCauHoi($goiCauHoi->trangthai) ?>">
                <?= $goiCauHoi->magoi ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
</body>

<script>
    function reset() {
        $.get("http://localhost/khoidong/apis/reset_goicauhoi_trangthai.php");
    }
</script>