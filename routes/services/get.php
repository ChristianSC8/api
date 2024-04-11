<?php
require_once "controllers/get.controller.php";
//seleccionar el valor del parametro en el indice 0 despues de ?
$table = explode("?",$routeArray[1])[0];
//evalua si biene un parametro
$select = $_GET["select"] ?? '*';
$orderBy = $_GET["orderBy"] ?? null;
$orderMode = $_GET["orderMode"] ?? null;

$response = new getController();

// peticion con filtro
if(isset($_GET["linkTo"]) && isset($_GET["equalTo"])){
    $response -> getDataFilter($table, $select,$_GET["linkTo"],$_GET["equalTo"], $orderBy, $orderMode);
}else{
    // peticion sin filtro
    $response -> getData($table, $select, $orderBy, $orderMode);
}



