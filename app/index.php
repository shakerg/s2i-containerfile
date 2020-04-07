<html>
<head> 
<title>Containerfile Build</title>
</head>
<body> 

<?php
  echo "<h2>Built from Dockerfile v1!</h2>";
  echo "<p>Your User-Agent is:</p>";
  echo "<p>";
  echo $_SERVER['HTTP_USER_AGENT'];
  echo "</p>";
?>

</body>
</html>