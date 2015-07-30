<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillabase.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="css/estiloprincipal.css" rel="stylesheet" type="text/css" /><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="css/menu.css" type="text/css" />
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
<form action="controller/login.php" method="post" name="formlogin">

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
<form action ="controller/login.php" method= "POST" > 
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

  <!-- INICIO API GOGLE MAPS -->


    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        width: 650px;
        height: 300px;
        margin: 15px;
        padding: 0px


      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>

    <script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.

var map;

function initialize() {
  var mapOptions = {
    zoom: 15
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Usted está aqui'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>


<div id="map-canvas"></div>


<!-- FIN API GOGLE MAPS -->
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
  
  
<!-- InstanceEnd --></html>
