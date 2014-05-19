<!DOCTYPE html>
<html>
<head>
  <title>Forms</title>
</head>
<body>
  <form method="post">
    <input type="text" name="name" value="" placeholder="Name">
    <input type="text" name="age" value="" placeholder="Age">
    <input type="submit">
  </form>
</body>
</html>

<?php
  echo "<pre>";
  $age = $_POST['age'];
  $new_age = $age + 1;
  var_dump($new_age);
  echo "</pre>";
 ?>
