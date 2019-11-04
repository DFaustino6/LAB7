<?php

include 'db.php';

require('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';


// ligação à base de dados
$db = dbconnect($hostname,$db_name,$db_user,$db_passwd);
if($db) {
  // criar query numa string
   $query  = "";
 
  // executar a query
  if(!($result = @ mysql_query($query,$db )))
   showerror();



  // vai buscar o resultado da query

 /* $nrows  = mysql_num_rows($result);
   for($i=0; $i<$nrows; $i++)
     $tuple[$i] = mysql_fetch_array($result,MYSQL_ASSOC);


  // faz a atribuição das variáveis do template smarty
  $smarty->assign('posts',$tuple);*/
  $smarty->assign('FORUMName',"DAW Lab");
  $smarty->assign('href0',"index.php");
  $smarty->assign('MENU1',"Blog");
  $smarty->assign('href1',"blog.php");
  $smarty->assign('Action',"Write");

  // Mostra a tabela
  $smarty->display('blog_template.tpl');

  // fechar a ligação à base de dados
  mysql_close($db);
} // end if
?>