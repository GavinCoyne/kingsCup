<?php 
include '/controller/db.connect.php';
include "/controller/master.php";
include "/controller/rules.php";
include '/controller/security.php';

$magicSalt = 'Our Hashbrownz has SaLtZ';
$page = new rules();


$action = (isset($_GET['action']) ? $_GET['action'] : "index");
(method_exists($page, $action) ? $page->$action() : $page->notFound());


