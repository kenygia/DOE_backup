<?php
  require_once('bdd.php');

  delError();
  delLog();
  delInfo();

  session_destroy();
  session_write_close();
  die('<META HTTP-equiv="refresh" content=0;URL=index.php>');

?>
