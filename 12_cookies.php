<?php

/* Cookies are a mechanism for storing data in the remote browser anf thus tracking or identifying return users. You can set specific data to be stored in the browser , and then retrieve it when the user visits the site again.  */

// set cookies 

setcookie('name',"Adib", time()+86400*30);

if(isset($_COOKIE["name"])){
  echo $_COOKIE['name'];
}

// Delete cookies
setcookie('name','',time()-86400);