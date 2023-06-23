<?php
session_start();

if(isset($_SESSION['username'])){
  echo '<h1> Welcome' . $_SESSION['username']. '</h1>';
}else{
  echo '<h1>Welcome guest !</h1>';
  echo '<a href="/php-basics-101/13_session.php">Home</a>';
};


// if you want to destroy th session we must use the : session_destroy()