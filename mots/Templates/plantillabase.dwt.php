<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="../css/estiloprincipal.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="../css/menu.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Exo+2:400,700,600' rel='stylesheet' type='text/css'>

<?php include("includes/google.php"); ?>

<?php
session_start();
session_destroy();
?>

</head>




<body>

<div class="container">
  <div class="header">
  <?php include("includes/cabecera.php"); ?>
  <div class="clearfloat"></div>
  <?php include("includes/menu.php"); ?></div>
  


<!-- Inicio login-->
<form action="../controller/login.php" method="post" name="formlogin">

<table>
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Cedula:</td>
      <td><label for="cedula"></label>
        <input type="text" name="cedula" id="cedula" /></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><label for="password"></label>
        <input type="password" name="password" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Entrar" />
        <input type="reset" name="reset" id="reset" value="Limpiar" /></td>
    </tr>
  </tbody>
</table>



</form>

<!-- Fin login-->



<!-- Inicio login viejo-->
<section id="Formulario">
<center><h1> Bienvenido a MOTS </h1></center>
<br>
<br>

<div class ="login">
<form action ="../controller/login.php" method= "POST" > 
<center>    
    <fieldset>       
        <legend>Inicie sesion para tomar su turno</legend>	
		<p>
                    <input title = "se necesita el nombre" type = "text" name = "cedula" placeholder = "cedula" required>
                </p> 
                <p>
                    <input  title = "se necesita la contraseña" type = "password" name = "password" placeholder = "password" required>
                </p> 
                <p>
                   <input  type = "submit" value = "Entrar"> 
                   <input  type = "reset" value = "Limpiar"> 
                </p>               
                <p>
                    <a href ="crear.html">
                        Crear cuenta
                    </a>
                </p>
<br>

<!-- Fin login viejo-->
     
    

 
  <!-- end .container --></div>
</body>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <footer>
    <?php include("includes/pie.php"); ?>
    <address>
    </address>
  </footer>
  
  
</html>
