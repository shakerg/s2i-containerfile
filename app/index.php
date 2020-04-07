<html>
<head> 
<title>Containerfile Build</title>
</head>
<body> 

<?php
  echo "<h2>Built from Dockerfile v2!</h2>";
  echo "<p>Your User-Agent is still:</p>";
  echo "<p>";
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "</p>";
?>

</body>
</html>