<?php
  $connection = mysqli_connect('localhost', 'root', '', 'websites'); //vlu-website is the database we are connecting;

  if(!$connection) {
    die('Database connection failed..');
  }
?>