<?php
if (isset($_POST['submit'])){
  if(!empty($_FILES['upload']['name'])){
    print_r($_FILES);
  }else{
    $message = '<p style = "color:red;">Please choose a file !</p>';
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php echo $message ?? null; ?>;
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 Select Image To Upload :
 <input type="file" name="upload">
 <input type="submit" value="submit" name="submit">

 </form>
</body>
</html>