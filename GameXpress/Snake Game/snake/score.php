
<?php
require_once "../../signup/config.php";
if (isset($_POST['score'])) {
        $score = (int)$_POST['score'];
        session_start();
        $_SESSION['score'] = $score;
        echo "Received and stored integer from HTML form: " . $score;
 $username =$_SESSION['username'];
     
      
      $sql = "UPDATE users set snake_score = '$score' where username = '$username' ";
      
      if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully.";
        }
        else{
            echo "Unsuccessful";
        }
    }
?>
    <!DOCTYPE html>
<html>
<head>
    <title>Send Integer to PHP</title>
</head>
<body>
    <form action="score.php"  action="/submit" method="post">
        <input type="hidden" name="score" id="score" autofocus>
        <input type="submit" value="Submit" >
    </form>
    <script src = "snake.js">
   
    </script>
</body>
</html>



  



