
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
    // $var = $_SESSION['num'];
    require './vendor/autoload.php';
    $redis = new Predis\Client();
    if(!isset($_SESSION['auth'])||$_SESSION['auth']!=1){
        header('location:login.php');
    }
    
    if($_POST['submit']=="Play"){

        $_SESSION['cur_score'] = rand(1,6);
        $_SESSION['chances'] = $_SESSION['chances'] + 1;
        switch($_SESSION['cur_score']){
            case 1: 
                $_SESSION['img'] = "images/1.png";
                break;
            case 2:
                $_SESSION['img'] = "images/2.png";
                break;
            case 3: 
                $_SESSION['img'] = "images/3.png";
                break;
            case 4:
                $_SESSION['img'] = "images/4.png";
                break;
            case 5: 
                $_SESSION['img'] = "images/5.png";
                break;
            case 6:
                $_SESSION['img'] = "images/6.png";
                break;

        }
        $_SESSION['cur_score1'] = rand(1,6);
        switch($_SESSION['cur_score1']){
            case 1: 
                $_SESSION['img1'] = "images/1.png";
                break;
            case 2:
                $_SESSION['img1'] = "images/2.png";
                break;
            case 3: 
                $_SESSION['img1'] = "images/3.png";
                break;
            case 4:
                $_SESSION['img1'] = "images/4.png";
                break;
            case 5: 
                $_SESSION['img1'] = "images/5.png";
                break;
            case 6:
                $_SESSION['img1'] = "images/6.png";
                break;

        }
        $_SESSION['score1'] = $_SESSION['score1'] + $_SESSION['cur_score'] + $_SESSION['cur_score1'];
        header('location:game.php');
    }


    else if ($_POST['submit']=="Quit"){
        $score = $redis->get($_SESSION['USER_ID']);
        $chances = $redis->get($_SESSION['USER_ID']."!@#$%^&*()");
        if($chances==NULL){
            $redis->set($_SESSION['USER_ID']."!@#$%^&*()", $_SESSION['chances']);
        }
        else{
            $redis->incrby($_SESSION['USER_ID']."!@#$%^&*()", $_SESSION['chances']);
        }
        // echo $score;
        if($score==NULL){
            // echo "0";
            if($_SESSION['score1']!=0){
                echo $_SESSION['USER_ID'];
                echo $_SESSION['score1'];
                $redis->set($_SESSION['USER_ID'], $_SESSION['score1']);
                $redis->zadd('gamer', $_SESSION['score1']/$_SESSION["chances"], $_SESSION['USER_ID']);
            }
        }
        else{
            // $score = $score+1;
            $redis->zadd('gamer', ($_SESSION['score1']+$score)/($_SESSION["chances"]+$chances), $_SESSION['USER_ID']);
            $redis->incrby($_SESSION['USER_ID'], $_SESSION['score1']);
        }
        $_SESSION['auth']=0;
        header('location:scorecard.php');
    }

?>


