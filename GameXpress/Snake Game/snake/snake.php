<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snake Game</title>
    <link rel="stylesheet" href="snake.css">
    <script src="snake.js"></script>
</head>
<body>

    <div class="container">
        <!-- <h1></h1> -->
    <h2 >Previous Score:<span id="hscore"> 
        <?php
                    echo  $_SESSION['snake_score'];
            ?>
                </span></h2>
    <h2 >Score:<span id="sscore"></span></h2>
    </div>
    <span id="home-icon" class="icon" >
        <a href="../index.html">
            <img src="../snake_img/home_icon.png" >
        </a>
      </span>
      <span  id="restart-icon" class="icon">
          <a href="snake.html"> 
              <img src="../snake_img/restart_icon.png">
          </a>
      </span>
        <audio id="myAudio" src="../snake_audio/background_music.mp3" preload="auto"></audio>
        <span id="music-icon-on" class="icon"  onclick="playAudio()">
            <img src="../snake_img/musicOn.png">
        </span>
        <span  id="music-icon-off" class="icon"  onclick="stopAudio()">
            <img src="../snake_img/musicOff.png">
        </span>
        <br>
    <hr>
    <canvas id = "board"></canvas>
    <script>
        var audio = document.getElementById("myAudio");
       function playAudio() {
           audio.play();
       }
       function stopAudio() {
          audio.pause();
         audio.currentTime = 0;
     }
   </script>
   
</body>
</html>