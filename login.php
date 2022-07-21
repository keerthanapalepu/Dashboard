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

    <title>Login</title>
    <link rel="stylesheet" href="styles1.css? v=<?php echo time(); ?>">
</head>
<body class="login-body">
    <div class="container">
        <form action="usercheck.php" method="post">
            <br><h1 style="font-family: 'Bangers', cursive; letter-spacing: 7px;">DICE GAME</h1><br><br>
            <div class="row row2">
                <div class="col-lg-6">
                    <label for="user_id"><p>Enter User Name:</p></label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="input1 form-control" name="user_id" placeholder="User_name">
                </div>
            </div><br>
            <div class="row row1">
                <div class="col-lg-6">
                    <input type="submit" name="submit" value="START" class="button btn btn-success">
                </div>
                <div class="col-lg-6">
                    <a href="scorecard.php" class="button btn btn-secondary">LEADER BOARD</a> 
                </div>
            </div><br>
            
               
        </form>
        
    </div>
</body>
</html>