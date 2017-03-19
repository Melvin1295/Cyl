<?php

// Cargamos Vendor
require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=cyl;charset=utf8', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

$fluent = new FluentPDO($pdo);

$action = isset($_GET['a']) ? $_GET['a'] : null;

switch($action) {
    
    case 'listar':
        header('Content-Type: application/json');
        print_r(json_encode(listarAnuncios($fluent)));
        break;
    case 'departamento':
        header('Content-Type: application/json');
        print_r(json_encode(departamento($fluent)));
        break;
    case 'profesion':
        header('Content-Type: application/json');
        print_r(json_encode(profesion($fluent)));
        break;
    case 'registrar':
        header('Content-Type: application/json');
        $data = json_decode(utf8_encode(file_get_contents("php://input")), true);
        print_r(json_encode(registrar($fluent, $data)));
        break;
    case 'eliminar':
        header('Content-Type: application/json');
        print_r(json_encode(eliminar($fluent, $_GET['id'])));
        break;
}



function listarAnuncios($fluent)
{
    return $fluent
         ->from('anuncio')
         ->select('anuncio.*')
         ->orderBy("id DESC")
         ->fetchAll();
}
function departamento($fluent)
{
    return $fluent
         ->from('departamento')
         ->select('departamento.*')
         ->orderBy("dpto_id")
         ->fetchAll();
}
function profesion($fluent)
{
    return $fluent
         ->from('profesion')
         ->select('profesion.*')
         ->orderBy("id")
         ->fetchAll();
}

function eliminar($fluent, $id)
{
    $fluent->deleteFrom('empleado', $id)
             ->execute();
    
    return true;
}

function registrar($fluent, $data)
{
   // $data['FechaRegistro'] = date('Y-m-d');
    $fluent->insertInto('usuarios', $data)
             ->execute();
    
    return true;
}