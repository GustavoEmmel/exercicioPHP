<?php
include_once("./bd/bd.php");
include_once('./bd/sql.php');

class GravarTarefas {

	public $sql		= null;

	function __construct() {

		$this->sql = new SQL();
	}

	public function setTarefas($titulo, $descricao, $prioridade)
	{
		$insert = mysql_query($this->sql->gravaTarefas($titulo, $descricao, $prioridade));

	}

}

// creates the soap server
$server = new SoapServer(NULL, array('encoding' => 'ISO-8859-1', 'uri' => 'http://test-uri/'));

// define the server class
$server->setClass('GravarTarefas');

// handle requests
$server->handle();
?>

