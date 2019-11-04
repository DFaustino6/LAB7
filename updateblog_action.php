<?php
include 'db.php';
// ligação à base de dados
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
if($db) {
  // criar query numa string
  $PostId=$_GET['PostId'];
  $query  = "INSERT INTO microposts(content,updated_at) VALUES ('$',NOW()) WHERE id='$PostId'";
 
  // executar a query
  if(!($result = @ mysql_query($query,$db )))
  	showerror();

$nrows  = mysql_num_rows($result);
   for($i=0; $i<$nrows; $i++)
     $tuple[$i] = mysql_fetch_array($result,MYSQL_ASSOC);

  mysql_close($db);
} 
?>