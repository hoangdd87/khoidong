<?php

//Prepare to show all quuestions
include_once __DIR__ . '/util/PDOHelper.php';
include_once __DIR__ . '/resource/Colors.php';


$magoi = isset($_GET['magoi']) ? $_GET['magoi'] : 1;
$pdoHelper = new PDOHelper();
$dstukhoa = $pdoHelper->get_All_TuKhoa_By_MaGoi($magoi);
$tukhoa1 = $dstukhoa[0];
$THOIGIAN = 60;

$pdoHelper->update_GoiCauHoi_TrangThai($magoi,1);

?>
<!DOCTYPE html>


<html lang="en">
<head>
    <script src="jquery-3.1.1.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Gói từ khóa <?= $magoi ?></title>
</head>

<body>

<div class="container">
    <audio id="audio1" src="sounds/khoidong.mp3" autoplay></audio>


    <a href="dsgoicauhoi.php" class="homebuttoncontainer">
        <img alt="Home" src="pictures/Home-icon.png" class="image">
    </a>

    <div class="question_area">
        <div id="point_area_id" class="point_area">
            0
        </div>
        <div id="question_text_area_id" class="question_text_area" style="color: transparent">
            <span id="question_text_area_id_span" class="myspan"><?= $tukhoa1->ndtukhoa ?></span>
        </div>
        <div id='question_countdown_clock_area' class="question_countdown_clock_area">
            <?= $THOIGIAN ?>
        </div>
    </div>

    <button id="button120s" class="play-music-button" onclick="Play120sButton()">
    </button>
    <button class="buttonYes" onclick="buttonYesClick()">
        Đ
    </button>
    <button id="socau" style="visibility: hidden" class="buttonNumber" onclick="buttonPointClick() ">
        1/12
    </button>
    <button class="buttonNo" onclick="buttonNoClick()">
        S
    </button>
    <div class="mypicture">
        <img id='hinhanhtukhoa' class='imgclass' src="pictures/<?= $tukhoa1->hinhanh ?>" alt=""
             style="visibility: hidden">
    </div>

    <audio id="audio" src="sounds/60s.mp4"></audio>
    <audio id="dung" src="sounds/dung.wav"></audio>
    <audio id="sai" src="sounds/sai.wav"></audio>
    <audio id="chucmung" src="sounds/chucmung.wav"></audio>
</div>

<script>
    var t = <?=$THOIGIAN?>;//Time for this question
    var point = 0;
    var socau=1;
    var dem = 0;
    var dstukhoa =<?=json_encode($dstukhoa)?>;
    var sound = document.getElementById("audio");
</script>

</body>
<script>

    var _question_Text_Color = 'white';

    function Play120sButton() {
        document.getElementById("question_text_area_id").style.color = _question_Text_Color;
        //hide button 30s
        document.getElementById("button120s").style.display = 'none';
        //Play music sound
        document.getElementById('hinhanhtukhoa').style.visibility = 'visible';
        document.getElementById('socau').style.visibility = 'visible';
        sound.play();
        function updateClock() {
            t = t - 1;
            if (sound.currentTime >= 60) {
                sound.pause();
                sound.currentTime = 0;
                sound.play();
            }
            document.getElementById("question_countdown_clock_area").innerHTML = t;
            if ((t <= 0)||(dem>=dstukhoa.length)) {
                sound.pause();
                clearInterval(timeinterval);
            }
        }

        var timeinterval = setInterval(updateClock, 1000);
    }

    function chieuTuKhoaKeTiep() {
        dem = dem + 1;
        socau+=1;

        if (dem < dstukhoa.length) {
            tukhoatemp=dstukhoa[dem]['ndtukhoa'];
            n=tukhoatemp.length;
            font_size=(n<=40?60:Math.round(40*40/n*2));
            font_size= font_size<20?30:font_size;
            font_size_str=font_size+"px";
            document.getElementById('question_text_area_id').style.fontSize = font_size_str;
            document.getElementById('question_text_area_id_span').innerHTML = dstukhoa[dem]['ndtukhoa'];
            document.getElementById('hinhanhtukhoa').src = "pictures/" + dstukhoa[dem]['hinhanh'];
            document.getElementById('socau').innerHTML = socau + "/12";
        }
    }
    function buttonYesClick() {
        if (dem < dstukhoa.length) {
            chieuTuKhoaKeTiep();
            point = point + 10;
            document.getElementById('point_area_id').innerHTML = point;

            var sounddung = document.getElementById("dung");
            sounddung.play();
        }
        else{
            sound.pause();
            //clearInterval()
        }
    }

    function buttonPointClick() {
        var soundchucmung=document.getElementById("chucmung");
        soundchucmung.play();
    }

    function buttonNoClick() {
        chieuTuKhoaKeTiep();
        var soundsai = document.getElementById("sai");
        soundsai.play();
    }


</script>
</html>