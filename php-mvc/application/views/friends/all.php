<!DOCTYPE html>
<html>
<head>
  <title>Friends</title>
</head>
<body>
<table>
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Phone</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($friends as $friend): ?>
    <tr>
      <td><?=$friend['name']?></td>
      <td><?=$friend['age']?></td>
      <td><?=$friend['phone']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>
