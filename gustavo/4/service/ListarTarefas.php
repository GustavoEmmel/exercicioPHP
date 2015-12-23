<?php
include_once("./bd/bd.php");
include_once('./bd/sql.php');

class ListarTarefas {

	public $sql		= null;

	function __construct() {

		$this->sql = new SQL();

		$this->getTarefas();
	}

	public function getTarefasBD()
	{
		$select = mysql_query($this->sql->buscaTarefas());

		while($row = mysql_fetch_array($select)){
			$tarefas[] = array('id' => utf8_encode($row['id']), 'titulo' => utf8_encode($row['titulo']), 'descricao' => utf8_encode($row['descricao']), 'prioridade' => utf8_encode($row['prioridade']));
		}
		print json_encode($tarefas);

	}

	public function getTarefas()
	{
		$tarefas[] = array('id' => 2, 'titulo' => 'Refatore o código', 'descricao' => 'Refatore o código xpto', 'prioridade' => 3);
		$tarefas[] = array('id' => 1, 'titulo' => 'Imprimir números', 'descricao' => 'Escreva um programa que imprima números de 1 a 100.', 'prioridade' => 2);
		$tarefas[] = array('id' => 3, 'titulo' => 'Refatore o código', 'descricao' => 'Refatore o código kyzt', 'prioridade' => 1);
		$tarefas[] = array('id' => 4, 'titulo' => 'API REST', 'descricao' => 'Desenvolva uma API Rest para um sistema gerenciador de tarefas', 'prioridade' => 1);

		print json_encode($tarefas);

	}

}

$Tarefas = new ListarTarefas($_REQUEST);