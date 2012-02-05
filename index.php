<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  mysql_close($cont);
  }else{

mysql_select_db("test", $con);

mysql_query("INSERT INTO users
VALUES ('Mushfiqur', 'Rahman',Now()");

mysql_close($con);
}
?> 
