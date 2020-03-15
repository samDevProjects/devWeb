<?php
  session_start();
  //md5() generates a string with 32 charcters
  $random_alpha = md5(rand());
  //substr() can define the char number needed
  $captcha_code = substr($random_alpha, 0, 6); //only the 6 first char
  $_SESSION["captcha_code"] = $captcha_code;

  //styling the created image
  $target_layer = imagecreatetruecolor(80,38);
  $captcha_background = imagecolorallocate($target_layer, 0, 123, 255);
  imagefill($target_layer,0,0,$captcha_background);
  //styling the text
  $captcha_text_color = imagecolorallocate($target_layer, 255, 255, 255);
  imagestring($target_layer, 5, 12, 10, $captcha_code, $captcha_text_color);
  header("Content-type: image/jpeg");
  imagejpeg($target_layer);
?>
