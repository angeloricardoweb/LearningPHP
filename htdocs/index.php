<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curso PHP</title>

	<style>
		div {
			display: grid;
			justify-content: center;
			align-items: center;
			width: 100vw;
			height: 100vh;
		}

		h1 {
			border-radius: 10px;
			display: inline-block;
			padding: 10px;
			background-color: gray;
			color: white;
			position: relative;
			animation: eita 3s ease infinite;
		}

		@keyframes eita {
			0%, 100%{
				padding: 10px;
			}
			50%{
				padding: 20px;
			}			
		}

	</style>

</head>

<body>


	<?php
	$msgMain = 'Bem vindo ao PHP, bixo!';
	?>

	<div>

		<h1><?
			echo $msgMain;
			?></h1>

	</div>



</body>

</html>