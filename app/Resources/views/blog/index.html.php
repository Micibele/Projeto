<!DOCTYPE html>
<html>
<head>
	<title>Bem vindo</title>
	<style type="text/css">
	 body { 
	 	background: #FF1493; 
	 	padding: 10% 40%;
	 	font-size: 30px;
	 	font-family: 'Comic Sans MS'
	 	 } 
	 input[type=submit]{
	 	margin-left: 43%;
	 }
	 </style>
</head>
<body>
<form action="<?php echo $view['router']->path ('home_page') ?>" method="POST">
	<laber> <b> Faça seu login </b> <label> <br> <br>
	<label> <b> Nome </b> </label>
	<input type="text" name="nome"> <br> <br>
	<label> <b> Senha </b> </label>
	<input type="password" name="senha"> <br> <br>
	<input type="submit" name="Enviar">
</form>

</body>
</html>