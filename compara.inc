<?php
  if (ISSET($_COOKIE["corperso"]))
  {
    $cor = $_COOKIE["corperso"].".css";
    echo "<link rel=\"STYLESHEET\" type=\"text/css\" href=\"css/$cor\">";
  }
  else
  {
    echo '<link rel="STYLESHEET" type="text/css" href="css/azul.css">';
  }
?>