<!DOCTYPE html>
<html>
	<head>
        <title>Card</title>
	</head>
	<body>
		<h1>Nome: <?php echo (isset($name)) ? $name : ''; ?></h1>
		<h2>Email: <?php echo (isset($email)) ? $email : ''; ?></h2>
	</body>
</html>