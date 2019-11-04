<?php
include 'db.php';
// ligação à base de dados
session_start();
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
if($db) {
  // criar query numa string
  $PostId=$_GET['Post_Id'];
  if(isset($_GET['Post_Id'])){
 	 $query  = "SELECT * FROM microposts WHERE id='$PostId'";
 	 if(!($result = @ mysql_query($query,$db)))
   			showerror();
   	 $nrows  = mysql_num_rows($result);
   	 if(isset($_SESSION['username']) && $nrows>0){
   	 	$content=$_REQUEST['postContent'];
  		$query  = "UPDATE microposts SET content=$content WHERE id='$PostId'";
  		$result= @ mysql_query($query,$db);
  }
  }
} 
mysql_close($db);
?>