<?php
require_once('../config.php');
require_once(DBAPI);
$usuarios = null;
$usuario = null;
/**
 *  Listagem de Usuarios
 */
function index() {
	global $usuarios;
	$usuarios = find_all('usuarios');
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
    global $usuario;
    $usuario = find('usuarios', $id);
  }

  /**
 *  Cadastro de Usuarios
 */
function add() {
    if (!empty($_POST['usuario'])) {
      
      $today = 
        date_create('now', new DateTimeZone('America/Sao_Paulo'));
      $usuario = $_POST['usuario'];
      $usuario['modificado'] = $usuario['criacao'] = $today->format("Y-m-d H:i:s");
      
      save('usuarios', $usuario);
      header('location: index.php');
    }
  }