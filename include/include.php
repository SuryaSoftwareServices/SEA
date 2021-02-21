<?php 
ob_start(); // Added to avoid a common error of 'header already sent' (not discussed in the tutorial)
session_start();
require_once 'konek.php';
require_once 'pdo.php';
require_once 'proteksi.php';
$users 		= new Users($db);
$proteksi 	= new Proteksi();
$errors = array();
?>
