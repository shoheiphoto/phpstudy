<!DOCTYPE html>
<head>
  <title>My First Web App</title>
</head>
<body>
<h1>Hi</h1>
<?php
  for ($i = 0; $i <= 100; $i++){
    if ($i % 3 === 0){
      echo $i.",";
    }
  }
  echo "\n";
  echo "Hello!";
?>
<br>
<?php
  echo "world";
?>

</body>
</html>