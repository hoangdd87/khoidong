<?php

//Prepare to show all quuestions
include_once __DIR__ . '/util/PDOHelper.php';
include_once __DIR__ . '/resource/Colors.php';


$magoi = isset($_GET['magoi']) ? $_GET['magoi'] : 1;
$pdoHelper = new PDOHelper();
$dstukhoa = $pdoHelper->get_All_TuKhoa_By_MaGoi($magoi);
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
        <div id="point_area" class="point_area">
            10
        </div>
        <div id="question_text_area_id" class="question_text_area" style="color: transparent">
            Microsoft
        </div>
        <div id='question_countdown_clock_area' class="question_countdown_clock_area">
            180
        </div>
    </div>

    <button id="button120s" class="play-music-button" onclick="Play120sButton()">
    </button>
    <button class="buttonYes" onclick="buttonYesClick()">
        Đ
    </button>
    <button class="buttonNo" onclick="buttonNoClick()">
        S
    </button>
    <div class="mypicture">
        <img class='imgclass' src="pictures/font.jpg">
    </div>

    <audio id="audio" src="sounds/60s.mp4"></audio>
</div>

<script>
    var t = 180;//Time for this question
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
        sound.play();
        function updateClock() {
            t = t - 1;
            if (sound.currentTime >= 60) {
                sound.pause()
                sound.currentTime = 0
                sound.play()
            }
            document.getElementById("question_countdown_clock_area").innerHTML = t;
            if (t <= 0) {
                sound.pause();
                clearInterval(timeinterval);
            }
        }

        var timeinterval = setInterval(updateClock, 1000);
    }


</script>
</html>