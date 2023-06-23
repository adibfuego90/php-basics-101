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
  $handle = fopen($file,'w');
  $contents = "Adib " .PHP_EOL . "muhin";
  fwrite($handle,$contents);
  fclose($handle);

  
}