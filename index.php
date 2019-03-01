<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2019
 * 
 * 
 * Application Loader
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Savera
 */
  
  require('load.php');

  if(isset($_POST['query'])) {
    $query = mysqli_real_escape_string($link, $_POST['sql_statement']);
    mysqli_query($link, "");
  }

?>
<center>
  <form action="" method='post'>
    <textarea type="textarea" placeholder='Enter SQL Statment here...' rows='5' cols='100' name='sql_statement'></textarea>
    <br><br>
    <input type="submit" name='query' value='Query'>
  </form>
</center>