<?php

/**
* Database Class
*/
class Database {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    public function __construct(){
        $this->engine   = 'mysql';
        $this->host     = '127.0.0.1';
        $this->database = 'presentations';
        $this->user     = 'root';
        $this->pass     = '';
        $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
        $this->connection = new PDO( $dns, $this->user, $this->pass );
    }

    public function query($sql_statement)
    {
      return $this->connection->query($sql_statement);
    }
}


// Test connection
$obj = new Database;
// Insert Record
$obj->query('INSERT INTO presentations (name, idea, marks, notes)
VALUES ("peter", "car listing system", "8", "Better Video management needed.")');

$obj->query('INSERT INTO presentations (name, idea, marks, notes)
VALUES ("john", "job listing system", "8", "Better Video management needed.")');

$obj->query('INSERT INTO presentations (name, idea, marks, notes)
VALUES ("jane", "shops listing system", "8", "Better Video management needed.")');
// Retrieve a record
//
// Delete SQL Statement
$obj->query('DELETE FROM presentations WHERE id = 4');

// Update SQL Statement
$obj->query('UPDATE presentations SET idea = "Commenting Engine" WHERE id = 1');

// Search
$input = (isset($_GET['search'])) ? $_GET['search']: false;
if ($input)
{
  $presentations = $obj->query("SELECT * FROM presentations WHERE name LIKE '%{$input}%'");
}
else
{
  $presentations = $obj->query('SELECT * FROM presentations');
}

?>

<table>
  <caption>Presentations</caption>
  <thead>
    <tr>
      <th>Name</th>
      <th>Idea</th>
      <th>Marks</th>
      <th>Notes</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($presentations as $p):?>
    <tr>
      <td><?=$p['name'];?></td>
      <td><?=$p['idea'];?></td>
      <td><?=$p['marks'];?></td>
      <td><?=$p['notes'];?></td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
