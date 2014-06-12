<?php

function getSmilies($text){
  $smilies = array(
    ":-)" => "happy.png",
    "^^" => "smile2.png",
    ":-x" => "shut-mouth.png",
    ":-s" => "confused.png",
  );
  foreach($smilies as $smile => $img){
    $text = str_replace($smile, "![".$smile."](static/img/smilies/".$img.")", $text);
  }
  return $text;
}
?>
