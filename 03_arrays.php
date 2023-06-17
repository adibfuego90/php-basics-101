<?php

// simple array 2 way to create a array 

/* // 1. using []
$numbers = [90,89,45];
print_r ($numbers);
echo $numbers[1]; //access the array  */

/* // 2. using array() function 
$fruits = array("banana","mango","apple","orange");
print_r ($fruits); */

// Associative array : 

/* $fr =[
  1 => "apple",
  23 => "banana"   //not use this kind of array 
];
echo $fr[2]; */

/* $hex = [
  "red" => "#ff0000",
  "orange" => "#ffA500"     //it can use in DB or like that 

];
print_r($hex); */
/* 
$person = [
  "first_name" => "Md. Adibur Rahman",
  "last_name" => "Adib",
  "email" => "adiburraman11@gmail.com"
];
echo $person["email"]; //output : adiburramna11@gmail.com */


// Multidimensional array 

/* $people = [
  [
  "first_name" => "Md. Adibur Rahman",
  "last_name" => "Adib",
  "email" => "adiburraman11@gmail.com"
  ],
  [
  "first_name" => "Md. Muhibur Rahman",
  "last_name" => "muhin",
  "email" => "muhinraman11@gmail.com"
  ],
  [
  "first_name" => "Shamima Akter",
  "last_name" => "sheuly",
  "email" => "sheuly11@gmail.com"
]
];
echo $people [1]["last_name"]; // output : muhin;
var_dump(json_encode($people));  //it will change it to the json format 
 */