<?php

try {
    $conn = new PDO('mysql:host=localhost;port=8100;dbname=u2289897', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } 
  catch (PDOException $exception) {
  echo "Oh no, there was a problem" . $exception->getMessage();
  }
  
  