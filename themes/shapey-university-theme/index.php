<?php
  $names = array('Shape', 'Meowsalot', 'Barksalot');

  $i = 0;
  while($i < count($names)) {
    echo "<li>Hi, my name is $names[$i]</li>";
    $i++;
  }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php bloginfo('name') ?></title>
  <!--link rel="stylesheet" href="css/styles.css?v=1.0"-->
</head>

<body>
  <h1><?php bloginfo('name') ?></h1>
  <h2><?php bloginfo('description') ?></h2>
  <!--script src="js/scripts.js"></script-->
</body>
</html>
