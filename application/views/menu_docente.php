<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>practica academica</title>
	<script src="<?php echo base_url(); ?>static/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>static/js/bootstrap.js"></script>
	<link href="<?php echo base_url(); ?>static/css/estilo.css" rel="stylesheet">
	<link href="<?php echo base_url ();?>static/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1 ALIGN=center>Universidad de Nariño</h1>
	<br>
	<h2 ALIGN=center>Sistema de informacion de docentes</h2>
	<hr>
	<h4 ALIGN=right><?php echo $this->session->userdata('usuario') ?></h4>
	<p ALIGN=right><?php echo $this->session->userdata('rol') ?></p>
	<nav class="navbar navbar-inverse">
 		<div class="container-fluid">
 			  <div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        			<span class="sr-only">Toggle navigation</span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="#">Inicio</a>
    		</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			<ul class="nav navbar-nav">
    				<li><a href='<?php echo base_url()?>administrador/usuarios'>Mis estudios<span class="sr-only">(current)</span></a></li>
        		<li><a href='<?php echo base_url()?>administrador/eventos'>Mi productividad academica</a></li>
            <li><a href='<?php echo base_url()?>administrador/eventos'>Eventos disponibles</a></li>
        	</ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cuenta <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Actualizar perfil</a></li>
              <li><a href="#">Cambiar contraseña</a></li>
              <li><a href="#">Cerrar sesion</a></li>
            </ul>
            </li>
          </ul>
    		</div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>