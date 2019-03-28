<?php

require_once 'app/init.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
</head>
<body>

<form action="add.php" method="post" autocomplete="off">


  <label>
    Title
    <input type="text" name="title">
  </label>
  <br>
  <label>
    Body
    <textarea name="body"rows="8"></textarea>
  </label>
  <br>
  <label>
    Keywords
    <input type="text" name="keywords" placeholder="comma, seperated">
  </label>
  <br>
  <input type="submit" value="Add">
</form>

</body>
</html>