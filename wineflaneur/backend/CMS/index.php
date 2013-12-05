<?php 
$pageTitle="CMS";
require_once('../../inc/config.php');
include(ROOT_PATH . 'inc/header.php'); ?>

<html lang="en">

  <head>
    <title>CMS</title>
  
  
  </head>

  <body>
  <h1>This is my basic CMS</h1>
  <h2>Give it a try!</h2>
  <p class="text-info">This little project got me to really think about what is an object, class, function and method. Also how useful a framework can be. A few months ago I was playing with ruby on rails and used scaffold to make something very similar except this took hours and that took 45 seconds.</p>
  </body>
 
  
  <?php

  include_once(ROOT_PATH . 'backend/CMS/class.cms.php');
  $obj = new CMS();
  $obj->host = 'wineflaneur.com';
  $obj->username = 'cms_user';
  $obj->password = 'matt2904';
  $obj->table = 'cms';
  $obj->connect();

  if ( $_POST )
    $obj->write($_POST);

  echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();

?>

  </body>

</html>