<!DOCTYPE html>
<html>
<head>
  <title>Forms</title>
</head>
<body>
  <form method="GET">
    <input type="text" name="name" value="" placeholder="Name">
    <input type="text" name="age" value="" placeholder="Age">
    <input type="submit">
  </form>
</body>
</html>

<?php
echo "<pre>"; //Format the output
var_dump($_GET); // This is the output
echo "</pre>";
 ?>
