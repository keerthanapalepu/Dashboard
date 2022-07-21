

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
    
    require './vendor/autoload.php';
    $redis = new Predis\Client();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css? v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
</head>
<body>
    <div id="container">

        <table>
            <h1 id="heading">SCOREBOARD</h1> 
             
                <tr style="color : white; background-color: black; border: 1px solid black;">
                    <th style="margin-left : 0px;"> RANK</th>
                    <th style="margin-left : 0px;"> NAME</th>
                    <th style="margin-left : 0px;"> CHANCES </th>
                    <th style="margin-left : 0px;"> TOTAL SCORE </th>
                    <th style="margin-left : 0px;"> AVG SCORE </th>
                </tr>
            
            <?php
                $i=1;
                foreach($redis->ZREVRANGE('gamer',0,-1) as $name){
                    $avg_score=$redis->ZSCORE('gamer',$name);
            ?>
            <tr> 
                <td> <?php echo $i; ?></td> 
                <td> <?php echo $name ?> </td>
                <td> <?php echo $redis->get($name."!@#$%^&*()"); ?> </td>
                <td> <?php echo $redis->get($name); ?> </td>
                <td> <?php echo $avg_score ?> </td>
            </tr>
            <?php $i++; }?>
        </table>

        <br><br>
        <form action="login.php">
            <input class="button" type="submit" value="back">
        </form>

    </div>
</body>
</html>