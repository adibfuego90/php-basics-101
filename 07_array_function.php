<?php

$fruits = ["Apple","Orange","Pear"];

// Get Length 
// echo count($fruits)."<br>";

// Search Array 
// var_dump(in_array("Apple",$fruits));  //return boolean

// Add to array 
$fruits[] = "Mango";  //Add element to last ;
array_push($fruits,"Blueberry"); //Add element to last
array_unshift($fruits,"Strawberry"); //Add in first position 

// Remove from Array 
array_pop($fruits);  //remove from last
array_shift($fruits); //remove from first 
// unset($fruits[2]); //remove item with index (not use this)

/* // Split into chunks 
$chunked = array_chunk($fruits,1);
print_r($chunked) ; */

// print_r($fruits);




// Merge arrays 

$arr1 =[12,23,34,45,23];
$arr2 =[121,232,324,415,323];
$arr3 =[1,2,3,4,2];

// $arrMerge = array_merge($arr3,$arr1,$arr2);
$arrSpread = [...$arr1,...$arr2];  
// print_r($arrSpread);


// Array Combined 

$a =["color-1","color-2","color-3"];
$b= ["Red","Green","Black"];

$arrCombined= array_combine($a,$b); //set as key value pair 
// print_r($arrCombined);

$keys =array_keys($arrCombined);
// print_r($keys);

$flipped = array_flip($arrCombined);
// print_r($flipped);

$numbers = range(1,23);
// print_r($numbers);

$newNum = array_map(function($number){
return "Number ${number}";
},$numbers);
// print_r($newNum);

$newFilter = array_filter($numbers,fn($number)=> $number <= 10 );
// print_r($newFilter);

$sum = array_reduce($numbers,fn($carry,$number)=> $carry + $number);

// var_dump($sum);
















?>