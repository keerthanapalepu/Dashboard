

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <title>Game</title>
    <style>
        body{
            background-image: url("https://ak.picdn.net/shutterstock/videos/26793484/thumb/12.jpg");
            background-size: cover;
            color: #fff;
        }
        img{
            width: 30%;
            height: 30%;
            object-fit: cover;
            /* background-color: blue; */
            border-radius: 0px;
            /* margin-left: 20%; */
        }
        .container{
            margin-left: 15%;
            margin-top: 12%;
            backdrop-filter: blur(10px);
            width: 40%;
            height: 40%;
            text-align: center;
        }
        h1{
            font-family: 'Bangers', cursive;
            letter-spacing: 8px;
            color: #D77FA1;
        }
        .btn{
            /* margin-left: 16%; */
            font-wright: bold;
            font-size: 1.2rem;
        }
        h4{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            
        }
        .shake{
            animation: shake 0.5s infinite;
        }
        @keyframes shake{
            0%{
                transform: rotate(-60deg);
            }
            50%{
                transform: rotate(60deg);
            }
            100%{
                transform: rotate(-60deg);
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['auth'])||$_SESSION['auth']!=1){
        header('location:login.php');
    }
        require './vendor/autoload.php';
        $redis = new Predis\Client();
        $score = $redis->get($_SESSION['USER_ID']);
        if($score==NULL){
            $score = 0;
        }
        $score = $score + $_SESSION['score1'];
        echo "<br><h1>Welcome ".$_SESSION['USER_ID']."</h1><br>";
        echo "<h4>Your Total Score = $score</h4><br>";
    ?>
        <img class='picA' src=<?php echo $_SESSION['img1']; ?> alt="Error">&emsp;&emsp;&emsp;
        <img class='picB' src=<?php echo $_SESSION['img']; ?> alt="Error"><br><br><br>
        <form action="index.php" method="Post">
            <input type="submit" onclick="roll()" class="btn btn-success"  name="submit" value="Play">&emsp;&emsp;&emsp;&emsp;&emsp;
            <input type="submit" class="btn btn-danger"  name="submit" value="Quit">            
        </form><br>    
    </div>
    <script>
        var dice1 = document.querySelector('.picA');
        var dice2 = document.querySelector('.picB');
        function roll(){
            dice1.classList.add("shake");
            dice2.classList.add("shake");
            setTimeout(function(){
                dice1.classList.remove("shake");
                dice2.classList.remove("shake");
            },350);   
        }
        roll();
    </script>
</body>
</html>