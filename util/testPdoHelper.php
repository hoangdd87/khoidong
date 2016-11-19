<?php
/**
 * Created by PhpStorm.
 * User: Hoang
 * Date: 18-Nov-16
 * Time: 11:41 PM
 */
include_once __DIR__ . '/PDOHelper.php';
$pdoHelper=new PDOHelper();
$tukhoa=$pdoHelper->get_All_GoiCauHoi();
print_r($tukhoa);
?>