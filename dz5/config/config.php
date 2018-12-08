<?php
                                                       
error_reporting(E_ALL);
ini_set('display_errors','On');  

$messages=array(); 
  $dblocation = "127.0.0.1";
  $dbname = "geekbrains";
  $dbuser = "root";
  $dbpasswd = "";       
  $dbcnx = @mysql_connect($dblocation, $dbuser, $dbpasswd);
  if (!$dbcnx)
  {     echo "<p>Недоступен сервер mySQL</p>";     exit();    }
  if (!@mysql_select_db($dbname,$dbcnx) )
  {       echo "<p>Недоступна база данных</p>";     exit();   }    

?>