<?php
  function debug($t)
  {
    // foreach (...$t as  $value) {
    //   # code...
    // }
    die(var_dump($t));
  }

  function debug_($t)
  {
    echo var_dump($t)."<br/><br/>";
  }
 ?>
