<?php 
include "/controller/master.php";
include "/controller/rules.php";

$page = new rules();

$action = (isset($_GET['action']) ? $_GET['action'] : "index");
(method_exists($page, $action) ? $page->$action() : $page->notFound());

