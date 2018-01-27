<?php
$array = array(
  "destinations" => "destinations.html",
  "contact" => "contact.html",
  "home" => "home.html",
);
    include($array[$_GET["page"]]); //treat page

 ?>
