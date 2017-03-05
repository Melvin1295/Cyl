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
    case 'tipo_documento':
        header('Content-Type: application/json');
        print_r(json_encode(tipo_documento($fluent)));
        break;
    case 'departamento':
        header('Content-Type: application/json');
        print_r(json_encode(departamento($fluent)));
        break;
    case 'provincia':
        header('Content-Type: application/json');
        print_r(json_encode(provincia($fluent)));
        break;
    case 'distrito':
        header('Content-Type: application/json');
        print_r(json_encode(distrito($fluent)));
        break;
    case 'profesion':
        header('Content-Type: application/json');
        print_r(json_encode(profesion($fluent)));
        break;
    case 'registrarEmpresa':
        header('Content-Type: application/json');
        $data = json_decode(utf8_encode(file_get_contents("php://input")), true);
        print_r(json_encode(registrarEmpresa($fluent, $data)));
        break;
     case 'registrarAnuncio':
        header('Content-Type: application/json');
        $data = json_decode(utf8_encode(file_get_contents("php://input")), true);
        print_r(json_encode(registrarAnuncio($fluent, $data)));
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

function tipo_documento($fluent)
{
    return $fluent
         ->from('tipo_documento')
         ->select('tipo_documento.*')
         ->orderBy("tipo_documento_id")
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
function provincia($fluent)
{
    return $fluent
         ->from('provincia')
         ->select('provincia.*')
         ->orderBy("provincia_id")
         ->fetchAll();
}
function distrito($fluent)
{
    return $fluent
         ->from('distrito')
         ->select('distrito.*')
         ->orderBy("distrito_id")
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

function registrarEmpresa($fluent, $data)
{
   // $data['FechaRegistro'] = date('Y-m-d');
    $fluent->insertInto('empresa', $data)
             ->execute();
    
    return true;
}
function registrarAnuncio($fluent, $data)
{
    $data['fecha_inicio'] = date('Y-m-d');
    $data['fecha_fin'] = date('Y-m-d');
    //var_dump($data);die();
    $fluent->insertInto('anuncio', $data)
             ->execute();
    
    return true;
}