<?
  session_start();
  session_unregister('pass');
  session_destroy();
  header("Location: pass.php3");
?>