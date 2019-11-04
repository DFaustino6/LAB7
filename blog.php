<?php

require('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

$PostId=$_GET['Post_id'];

$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
if($db){
   $query  = "SELECT content * FROM microposts WHERE id='$PostId'";
   $result = @ mysql_query($query,$db);
}
mysql_close($db);
  
  $smarty->assign('FORUMName',"DAW Lab");
  $smarty->assign('href0',"index.php");
  $smarty->assign('MENU1',"Blog");
  $smarty->assign('href1',"blog.php");
  $smarty->assign('ActionPost',"Write");
  $smarty->assign('Post_content',$result);
 
  if(isset($_GET['Post_id']))
    $smarty->assign('Action',"updateblog_action.php?Post_id=$PostId");
  else
    $smarty->assign('Action',"newblog_action.php");

  // Mostra a tabela
  $smarty->display('blog_template.tpl');

?>