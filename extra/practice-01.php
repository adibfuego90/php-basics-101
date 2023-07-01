<?php
$glob = "I am Global variable";
function myTest(){
  $x =90;
  echo $x;
  $x++;
  echo $x;
  // echo $glob; //not accessible 
  global $glob; //can be access 
}

myTest();

?>