<?php

$host='localhost';
$bd='productos';
$user='postgres';
$pass='2003';

$conexion=pg_connect("host=$host dbname=$bd user=$user password=$pass");
//
$query=("INSERT INTO clientes(nombre,correo,telefono,direccion)
	VALUES('$_REQUEST[nombre]','$_REQUEST[correo]',
	'$_REQUEST[tel]','$_REQUEST[direccion]')");
$consulta=pg_query($conexion,$query);
pg_close();
echo 'succesful';

//
$query=("INSERT INTO productos(codigo,nombre,cantidad,descripcion,)
	VALUES('$_REQUEST[codigo]','$_REQUEST[nombre]',
	'$_REQUEST[cant]','$_REQUEST[descrip]')");
$consulta=pg_query($conexion,$query);
pg_close();
echo 'succesful';

//
$query=("INSERT INTO vendedores(nombre,equipo,telefono,direccion)
	VALUES('$_REQUEST[nombre]','$_REQUEST[Equipo]',
	'$_REQUEST[tel]','$_REQUEST[direccion]')");

$consulta=pg_query($conexion,$query);
pg_close();
echo 'succesful';

?>