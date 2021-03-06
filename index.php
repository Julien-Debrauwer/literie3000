<?php

require_once("system/config.php");
require_once("system/db.php");

$db = new DB(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

$page = "home";
if (isset($_GET["page"]) && !empty($_GET["page"])) {
	$page = $_GET["page"];
}

$data = array(
	"home" => array("model" => "HomeModel", "view" => "HomeView", "controller" => "HomeController"),
	"add" => array("model" => "AddModel", "view" => "AddView", "controller" => "AddController"),
	"edit" => array("model" => "EditModel", "view" => "EditView", "controller" => "EditController"),
	"delete" => array("model" => "DeleteModel", "view" => "DeleteView", "controller" => "DeleteController"),
);

$find = false;

foreach($data as $key => $components){
	if ($page == $key) {
		$find = true;
		
		$model = $components["model"];
		$view = $components["view"];
		$controller = $components["controller"];

		break;
	}
}

if ($find) {
	require_once(DIR_MODEL.$page.".php");
	require_once(DIR_CONTROLLER.$page.".php");
	require_once(DIR_VIEW.$page.".php");
	$pageModel = new $model($db);
	$pageController = new $controller($pageModel);
	$pageView = new $view($pageController);
	$pageView->render();
}