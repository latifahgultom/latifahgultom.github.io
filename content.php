<?php
$page = (isset($_GET['page']))? $_GET['page'] :"main";
switch ($page)
{
	case 'profil': include "profil.php";break;
	case 'Gallery': include "gallery.php";break;
	case 'Bukutamu': include "Bukutamu.php";break;
	case 'aboutme': include "aboutme.php";break;
	default: include 'beranda.php';
}
?>
