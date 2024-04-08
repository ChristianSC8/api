<?php
require_once "controllers/get.controller.php";

$table = explode("?",$routeArray[1])[0];

$select = $_GET["select"] ?? '*';

$response = new getController();
$response -> getData($table, $select);
