<?php
/* 
// < less than 
// > Grater Than 
// <= less than or equal to
// >= Grater than or equal to 
// == equal to 
// === Identical to 
// != Not equal to 
// !== Not Identical to */

/*  -------------------If Statement  -----------------*/
// $age =19;

/* if($age>=18){
  echo "You are old enough to Vote";
}else {
  echo "You can not 😌";
} */

// $date = date("F j");  //date() function use for date information like month and date and year etc; F= month , j=date , H = hours 
// echo $date ;

$t = date("H");
if($t < 12 ){
echo "Good Morning ☕";
}else if ($t <17){
  echo "Good Afternoon ! ";
}else {
  echo "Good Evening 🍇";
}
?>