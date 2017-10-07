<?php
echo
"
<!-- navbar.php -->
<nav>
  <ul class=\"navbar\">
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"home.php\">Home </a></li>
    <li class=\"nav-item\"><a class=\"nav-link\" href=\"codex.php\">Codex </a></li>
";
if(isset($_COOKIE['DOE_log']))
{
  echo
  "
      <li class=\"nav-item\"><a class=\"nav-link\" href=\"logout.php\">Logout </a></li>
  ";
}
else
{
  include_once("login.php");
}
echo "
   </ul>
</nav>
<!-- navbar.php -->
";
?>
