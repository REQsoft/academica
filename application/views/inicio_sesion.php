<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practica academica</title>
	<script src="<?php echo base_url(); ?>static/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>static/js/bootstrap.js"></script>
	<link href="<?php echo base_url ();?>static/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>Universidad de Nariño</h1>
	<br>
	<h2>Sistema de informacion de docentes</h2>
	<br>
	<hr
	<br>
	<form method="post" action="<?php echo base_url() ?>inicio/validar_usuario">
		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1">Cedula</span>
  			<input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="usuario" required>
		</div>
		<br>
		<div class="input-group">
  			<span class="input-group-addon" id="basic-addon1">Contraseña</span>
  			<input type="password" class="form-control" placeholder="" aria-describedby="basic-addon1" name="clave" required>
		</div>
		<br>
		<button type="submit" class="btn btn-default">Ingresar</button>
	</form>