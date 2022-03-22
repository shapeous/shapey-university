<?php
  function greet($name, $color) {
    echo "<p>Hello, my name is $name and my favorite color is $color!</p>";
  }

  greet("Shape", "green");
  greet("Octavio", "purple");
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
