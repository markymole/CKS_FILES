<?php 
include 'connect.php';
session_start();

if(!isset($_SESSION['username']))
{
	header("Location:/kapampangan-glossary/admin");
	exit();
}
 ?>