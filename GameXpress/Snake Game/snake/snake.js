//board
var blockSize = 25;
var rows = 15;
var cols = 15;
var board;
var context;
//snake head
var snakeX = blockSize * 5;
var snakeY = blockSize * 5;
var velocityX = 0;
var velocityY = 0;
var snakeBody = [ ];
//food
var foodX ;
var foodY;
var gameOver = false;
//score
var score = 0;
window.onload = function(){
    board = document.getElementById("board");
    board.height = rows * blockSize;
    board.width = cols * blockSize;
    context = board.getContext("2d");//used for drawing on the board
    placeFood();
    document.addEventListener("keyup", changeDirection);
    setInterval(update, 1000/10); //100 millisecond
}
function update(){
    if(gameOver ){
        return;
    }
    context.fillStyle = "navy";
    context.fillRect(0, 0, board.width, board.height);
    context.fillStyle = "cyan";
    context.fillRect(foodX, foodY, blockSize, blockSize);

    if(snakeX == foodX && snakeY == foodY){
        snakeBody.push([foodX, foodY]);
        placeFood();
        score++;
        document.getElementById("score").innerText = score;
        if(score > 11 && score < 25){
            score = score + 2;
         }
         if(score >= 25){
            score = score + 4;
         }
    }
   if(score > 11 && score < 25){
    context.fillStyle = "magenta";
    context.fillRect(foodX, foodY, blockSize, blockSize);
}
    if(score>= 25){
        context.fillStyle = "black";
        context.fillRect(0, 0, board.width, board.height);
        context.fillStyle = "red";
    context.fillRect(foodX, foodY, blockSize, blockSize);
    }
    for(let i = snakeBody.length-1; i>0; i--){
        snakeBody[i] = snakeBody[i-1];
    }
    if(snakeBody.length){
        snakeBody[0] = [snakeX, snakeY];
    }
    context.fillStyle = "yellow";
    snakeX += velocityX * blockSize;
    snakeY += velocityY * blockSize;
    context.fillRect(snakeX, snakeY, blockSize, blockSize);
    for(let i =0; i<snakeBody.length; i++){
        context.fillStyle = "lime";
        context.fillRect(snakeBody[i][0], snakeBody[i][1], blockSize, blockSize);

    }
    //game over condition
    // if(snakeX < 0 || snakeX > cols*blockSize || snakeY<0 || snakeY > rows*blockSize){
    //     gameOver = true;
    //     alert("game over");
    // }
    if(snakeX<0 || snakeY<0 || snakeX>=cols*blockSize || snakeY>=rows*blockSize){
        gameOver = true;
        window.location.href = 'gameover.html';
    }
    for(let i = 0; i<snakeBody.length; i++){
        if(snakeX == snakeBody[i][0] && snakeY ==  snakeBody[i][1]){
            gameOver = true;
            window.location.href = 'gameover.html';
        }
    }
}
function changeDirection(e){
    if(e.code == "ArrowUp" && velocityY != 1){
        velocityX = 0;
        velocityY = -1;
    }
    else if(e.code == "ArrowDown"  && velocityY != -1){
        velocityX = 0;
        velocityY = 1;
    }
    else if(e.code == "ArrowLeft"  && velocityX != 1){
        velocityX = -1;
        velocityY = 0;
    }
    else if(e.code == "ArrowRight"  && velocityX != -1){
        velocityX = 1;
        velocityY = 0;}
}
function placeFood(){
    foodX = Math.floor(Math.random() * cols) * blockSize;
    foodY = Math.floor(Math.random() * rows) * blockSize;
}






