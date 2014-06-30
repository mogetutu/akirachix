<!-- Some Classmates -->
<!DOCTYPE html>
<html>
<head>
  <title>Classmates</title>
</head>
<body>
<?php foreach ($classmates as $classmate): ?>
  <tr>
    <td><?=$classmate['name']?></td>
    <td><?=$classmate['age']?></td>
    <td><?=$classmate['phone']?></td>
  </tr>
<?php endforeach ?>
</body>
</html>
