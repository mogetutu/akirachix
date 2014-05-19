<?php
// Process Form here
$form_values = $_POST;

// Expose data on browser
var_dump($form_values);

$name = $form_values['name'];

echo "<br>";
echo "my name is $name";

$age = $form_values['age'];
echo " of age $age";
