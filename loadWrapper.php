<?php
$array = array(
  "destinations" => "destinations.php",
  "contact" => "contact.php",
  "home" => "home.php",
);
    include($array[$_GET["page"]]); //treat page

 ?>
