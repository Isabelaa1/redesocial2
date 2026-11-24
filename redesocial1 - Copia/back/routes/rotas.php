<?php
require_once __DIR__ . "/../controllers/UsuarioController.php";
require_once __DIR__ . "/../controllers/PublicacaoController.php";
require_once __DIR__ . "/../controllers/CurtidaController.php";

$rota = $_GET["rota"] ?? "";
$metodo = $_SERVER["REQUEST_METHOD"];

if ($rota === "usuario"){
    switch($metodo){
        case "POST":
            createUsuario($con);
            break;
        case "GET":
            readUsuario($con);
            break;
        case "PUT":
            updateUsuario($con);
            break;
        case "DELETE":
            deleteUsuario($con);
            break;
        default:
            teste();
    }
}else if ($rota === "publicacao") {
    switch($metodo){
        case "POST":
            createPUblicacao($con, $corpo);
            break;
        case "GET":
            readPublicacao($con);
            break;
        case "PUT":
            updatePublicacao($con, $_GET["id"], $corpo);
            break;
        case "DELETE":
            deletePublicacao($con, $_GET["id"]);
            break;
        default:
            teste();
    }
}else if ($rota === "curtida") {
    switch($metodo){
        case "POST":
            createCurtida($con, $corpo);
            break;
        case "GET":
            readCurtida($con);
            break;
        case "PUT":
            updateCurtida($con, $_GET["id"], $corpo);
            break;
        case "DELETE":
            deleteCurtida($con, $_GET["id"]);
            break;
        default:
            teste();
    }
}