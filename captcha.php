<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php
  // get a random number
  $random_number = str_pad(rand(1, 1000), 4, '0', STR_PAD_LEFT);
  // get a random image with the random number as prefix
  $dir = 'samples/';
  $prefix = 'prefix_';
  $files = glob($dir.$random_number.'*');
 
  foreach ($files as $file) {
    echo '<img src="'.$file.'" alt="Image">';
  }

  // cut the string out forverifing the captcha
  $filename = $files[0];

  $firstUnderscore = strpos($filename, "_");
  $firstDot = strpos($filename, ".");
  $length = $firstDot - $firstUnderscore - 1;

  $string = substr($filename, $firstUnderscore + 1, $length);
  // print the string
  echo $string;
  // now check if the user input matches the string

  

?>
</body>
</html>