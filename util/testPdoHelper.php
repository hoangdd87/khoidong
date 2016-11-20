<?php
/**
 * Created by PhpStorm.
 * User: Hoang
 * Date: 18-Nov-16
 * Time: 11:41 PM
 */
include_once __DIR__ . '/PDOHelper.php';
$pdoHelper=new PDOHelper();
$tukhoa=$pdoHelper->get_All_TuKhoa_By_MaGoi(1);

?>

<body>
<p id="1"></p>
<script>
    var tukhoa=<?=json_encode($tukhoa)?>;
    document.getElementById('1').innerHTML=tukhoa[1].ndtukhoa;
</script>
</body>
