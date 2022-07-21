# Dashboard

This is a **Predis** Project, a versatile and feature-rich **Redis** client library for **PHP**., to display the scores of a dice game.

## Made with JavaScript, Redis, HTML, CSS and Bootstrap

## Working
1. **Xampp server** should be installed on your device.
2. clone this [git repository](https://github.com/keerthanapalepu/Dashboard) into a existing directory `C:\xampp\htdocs\`
3. install Predis using [Composer](https://getcomposer.org/) and install it from [Packagist](https://packagist.org/packages/predis/predis)
3. start your xampp server
4. In the browser, navigate to the path of your project, prefixed with **localhost/**.`http://localhost/xampp/htdocs/OnlineLibrary/` like so.

## About the project
Redis is used as the primary database for the system, which is a fast, open source, in-memory, key-value data store

**Page1**
The existence of this session will state the user **authentication status**. After authentication, the PHP `$_SESSION` super global variable will contain the user id. That is, the $_SESSION[“Player_name”] is set to manage the logged-in session. 
<img src="https://user-images.githubusercontent.com/98457650/180227779-6c69dd27-3d6a-4b60-b886-a074decf5bd3.png" width="50%" height="50%">

**Page2**
The score of each player will be saved in the **redis** database. and the score will be retrieved from the redis when the player returns
<img src="https://user-images.githubusercontent.com/98457650/180250918-0f4e53a4-11c1-4e8b-a30d-3c39185279fd.png" width="50%" height="50%">

**Page3**
Displays the dice game scores by averaging the scores and the number of chances played by the user
<img src="https://user-images.githubusercontent.com/98457650/180251066-17c94ba3-5bfb-48f7-bed3-7716b6b3e1ab.png" width="50%" height="50%">

## Credits
[Keerthana Palepu](https://github.com/keerthanapalepu)
