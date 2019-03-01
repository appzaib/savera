<?php
/**
 * Appzaib (https://appzaib.com)
 * @copyright Appzaib 2019
 * 
 * 
 * Application Configuration
 * 
 * 
 * 
 * 
 * 
 * @author Rana Jahanzaib <Jahanzaibv2@gmail.com>
 * 
 * @package Savera
 */

  // Application's database server credentials
  define("HOST", "");
  define("DB", "");
  define("USER", "");
  define("PASS", "");

  $link = mysqli_connect(HOST, USER, PASS, DB);

  if($link) {
    echo (
      "<script>console.log('[OK] Database connection');</script>"
    );
  }else {
    echo (
      "<script>console.log('[FAILED] Database connection');</script>"
    );
  }
