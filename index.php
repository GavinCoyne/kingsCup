<?php 

include "/controller/master.php";
include "/controller/rules.php";


$page = new rules();

if(isset($_GET['action']))
{
	$action = $_GET['action'];
}else
{
	$action = "index";
}

if(function_exists($page->$action())
{
	$page->$action();
}else{
	$page->index();
}