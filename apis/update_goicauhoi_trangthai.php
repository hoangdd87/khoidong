<?php
/**
 * Created by PhpStorm.
 * User: Hoang
 * Date: 20-Nov-16
 * Time: 12:34 AM
 */
    include_once __DIR__.'/../util/PDOHelper.php';

    $pdoHelper=new PDOHelper();
    $magoi=isset($_GET['magoi'])?$_GET['magoi']:0;
    $trangthai=isset($_GET['trangthai'])?$_GET['trangthai']:0;
    $pdoHelper->update_GoiCauHoi_TrangThai($magoi,$trangthai);

?>