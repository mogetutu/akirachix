Conditionals
============

Question 1
----------

Given the code below. What is the correct response?

a) "Have a nice weekend!"  
b) "Have a nice day!"  
c) "Today is Friday!"

<html>
<body>
<?php
$d=date("D");
if ($d=="Fri")
{
  echo "Have a nice weekend!"; 
}
else
{
  echo "Have a nice day!"; 
}
?>
</body>

</html>
