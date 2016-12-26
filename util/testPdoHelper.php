<?php
/**
 * Created by PhpStorm.
 * User: Hoang
 * Date: 18-Nov-16
 * Time: 11:41 PM
 */
include_once __DIR__ . '/PDOHelper.php';
$pdoHelper=new PDOHelper();

$dsgoicauhoi = $pdoHelper->get_All_GoiCauHoi();
foreach ($dsgoicauhoi as $goiCauHoi):
print_r($goiCauHoi);
endforeach;
?>

<body>
<p id="1"></p>
<script>
    var tukhoa=<?=json_encode($tukhoa)?>;
    document.getElementById('1').innerHTML=tukhoa[1].ndtukhoa;
</script>
</body>
