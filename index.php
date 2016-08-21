<!DOCTYPE html>
<head>
	<title>Advanced III</title>
	<link rel="stylesheet" type="text/css" href="main.css.php">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="main.js.php"></script>
</head>
<body>
	<h1>Heading 1</h1>
	<p>I had no Idea you could use PHP to create a CSS file or any other files than html!!!!</p>
	<?php
	for($i = 0; $i < 5; $i++)
	{
		echo "<img src='image.php' alt=''></br>";
	}
	?>
</body>
</html>