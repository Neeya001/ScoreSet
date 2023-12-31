 <?php
    session_start();
//   if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
//        header("location: signup/login.php");
//   }

  
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"  href="responsive.css">
</head>
<body>
    <!-- Header Section -->
    <nav id="navbar">
        <ul>
            <li class="item gameColor" id=""><a href="">Game<span style="font-style: italic;">X</span>press</a></li>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#games">Menu</a></li>
            <li class = "item" style="color:white;">
            </li>
            <li class="item" id="login"><a href="signup/logout.php">
                <?php
                    echo $_SESSION['username']."(logout)";
                ?>
                
            </a></li>
         </div>
        </ul>
    </nav>
    <!-- Home Section -->
    <section id="home">
        <h1>GAMEXPRESS</h1>
        <button class="btn"><a href="#games">PLAY GAMES NOW</a></button>
    </section>
    <hr>
    <!-- Game Section -->
    <section class="about_games">
    <h1 class="heading_first center">GAMES</h1>
    <div id="games">
            <div class="box" >
                    <img src="images/2048.png" alt="2048" class="game_img">
                    <h2 class="heading_second center">2048</h2>
                    <p class="center">2048 is a single-player sliding block puzzle game designed by Italian web developer Gabriele Cirulli. The game's objective is to slide numbered tiles on a grid to combine them to create a tile with the number 2048. However, one can continue to play the game after reaching the goal, creating tiles with larger numbers.</p>
                    <button class="btn1"><a href="Snake Game/snake/score.php">PLAY GAME</a></button>
            </div>
           <div class="box"> 
                 <img src="images/memory game.png" alt="Colour Memory Game" class="game_img">
                <h2 class="heading_second center">Colour Memory Game</h2>
                <p class="center text">Colour Memory Game is a kind of game that is used to check your ability to remember the things in a short interval of time. The game is played to matching to cards with same colour.</p>
                <button class="btn1"><a href="Memory game/index.html">PLAY GAME</a></button>
            </div>  
             <div class="box">
                <img src="images/paper-sci-rock.png" alt="Paper Scissors Rock" class="game_img">
                  <h2 class="heading_second center">Paper Scissors Rock</h2>
                <p class="center text">A classic two-person game. Players start each round by saying, “rock, paper, scissors, shoot!” On “shoot,” each player holds out their fist for rock, flat hand for paper, or their index and middle finger for scissors. Rock crushes scissors, scissors cut paper, and paper covers rock. See who wins each round!</p>
                <button class=" btn1"><a href="paperscissorrock/game.html">PLAY GAME</a></button>
            </div>
            <div class="box">
                <img src="images/tic tac toe.png" alt="tic tac toe" class="game_img">
                  <h2 class="heading_second center">Tic Tac Toe</h2>
                <p class="center">Each player picks one word in turn and to win, a player must select three words with the same letter. The words may be plotted on a tic-tac-toe grid in such a way that a three-in-a-row line wins. Numerical Tic Tac Toe is a variation invented by the mathematician Ronald Graham. The numbers 1 to 9 are used in this game.</p>
                <button class="btn1"><a href="#games">PLAY GAME</a></button>
            </div>
            <div class="box">
                 <img src="images/snake1.png" alt="snake game" class="game_img">
                  <h2 class="heading_second center">Snake Game</h2>
                <p class="center" >The player controls a long, thin creature, resembling a snake, which roams around on a bordered plane, picking up food (or some other item), trying to avoid hitting its own tail or the edges of the playing area. Each time the snake eats a piece of food, its tail grows longer, making the game increasingly difficult.</p>
                <button class="btn1"><a href="Snake Game/index.html">PLAY GAME</a></button>
            </div>
     </div>
</section>
<script src="index.js" text="text/javascript"></script>
</body>
</html>