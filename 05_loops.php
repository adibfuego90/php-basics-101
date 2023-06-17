<?php 
/* ------------------For Loop -----------------*/


/*
For Loop Syntax 
for (initialize; condition ; increment/decrement) {
  // code to be execute;
}
 */

/* for ($x=0; $x<=10; $x++){
  echo "Number is " . $x . '<br>';
} */


/* -------- While loop -------------------- */
/* while loop Syntax 
initialize;
while(condition){
  // code to be execute 
  increment / decrement ;
}
*/
/* 
$x = 1;
while($x <=15){
  echo $x .'<br>';
  $x++;
} */


/* --------Do While Loop Syntax ________________ */
/* 
Do While Loop Syntax 

do{
}while(condition)
*/
/* 
$x =11;
do{
  echo "Number " . $x . '<br>';
  $x++;
}while($x<= 15);
 */

/* ------------ Foreach Loop------------------- */
/* 
------ Foreach Loop Syntax-------------
foreach($array as $value){
  // code to be executed;
} */


$posts = ["first Post","Second Post","Third Post"];

/* for($x =0 ; $x < count($posts); $x++){
  echo $posts[$x];
} */

/* foreach($posts as $post){
  echo $post ;
} */

foreach($posts as $index => $post){
  echo $index ."----".$post ."<br>" ;
}






?>