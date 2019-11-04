<?php

require('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';


  $smarty->assign('FORUMName',"DAW Lab");
  $smarty->assign('href0',"index.php");
  $smarty->assign('MENU1',"Blog");
  $smarty->assign('href1',"blog.php");
  $smarty->assign('ActionPost',"Write");
  $PostId=$_GET['Post_id'];
  if(isset($_GET['Post_id']))
    $smarty->assign('Action',"updateblog_action.php?Post_id=$PostId");
  else
    $smarty->assign('Action',"newblog_action.php");

  // Mostra a tabela
  $smarty->display('blog_template.tpl');

?>