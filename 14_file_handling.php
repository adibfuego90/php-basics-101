<?php

/* File handing is the ability to write and read any files on the server  */

$file = "extra/name.txt";

if(file_exists($file)){
  // echo readfile($file); //not recommended 

  $handle = fopen($file,'r');
  $contents = fread($handle,filesize($file));
  fclose($handle);

  echo $contents;
}else{
  
}