<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	You've landed on the home page <br>
	<?php 
		if(!empty($params)) {
			foreach ($params as $param) {
				echo $param . '<br>';
			}
		}
	 ?>
</body>
</html>