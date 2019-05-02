<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8" />

    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="styl\esheet">

	<title>choose your pizza</title>

</head>
<body>
		<header>
			<h1>Bienvenue dans votre selecteur de pizza</h1>
				<p> Veuillez choisir votre base, votre viande ainsi que votre fromage</p>
		</header>

	<form action="#" method="post">
		<select name="base">
			<option>tomate</option>
			<option>creme fraîche</option>
			<option>barbecue</option>
		</select>
		<select name="viande">
			<option>jambon</option>
			<option>poulet</option>
			<option>viande haché</option>
		</select>
		<select name="fromage">
			<option>mozzarella</option>
			<option>chevre</option>
			<option>gruyere</option>
		</select>
		<div class="bouton">
			<input type="submit" value="let's go">
		</div>
	</form>
	
	<footer>
	<?php

	if (isset($_POST['base']) && isset($_POST['viande']) && isset($_POST['fromage']))
	{
		echo 'Votre pizza est composée de '.$_POST['base'].' '.$_POST['viande'].' '.$_POST['fromage'];
	}

	?>
	</footer>


</body>
</html>