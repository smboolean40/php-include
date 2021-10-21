<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php 
		include __DIR__ . "/partials/functions.php";
		$somma = sum(2,2);
		var_dump(isEven($somma));
	?>

	<?php include __DIR__ . "/partials/template/header.php"; ?>

	<main id="home-page">
		<h1>Home Page</h1>
		<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum sunt, magni corrupti sapiente, dolorem fugiat necessitatibus beatae id deserunt dolore animi ad! Recusandae repudiandae commodi ut exercitationem voluptas odit laboriosam!</p>
	</main>
	
	<?php include __DIR__ . "/partials/template/footer.php"; ?>
</body>
</html>