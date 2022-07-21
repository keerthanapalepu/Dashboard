<?php

$username = $_POST['user_id'];

if(strlen($username)>=2){
    
    session_start();
    $_SESSION['USER_ID'] = $_POST['user_id'];

    $_SESSION['score1'] = 0;
    $_SESSION['cur_score'] = 0;
    $_SESSION['cur_score1']=0;
    $_SESSION['chances'] = 0;

    $_SESSION['auth'] = 1;
    $_SESSION['img']="images/play.png";
    $_SESSION['img1']="images/play.png";
    header('location:game.php');
}
else{
    header('location:login.php');
}


?>