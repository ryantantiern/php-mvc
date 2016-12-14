<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		if (!empty($params)){
			echo 'First Name: ' . $params[0] . '<br>';
			echo 'Last Name: ' . $params[1] . '<br>';
		}
	 ?>
</body>
</html>