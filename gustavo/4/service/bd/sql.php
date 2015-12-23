<?php
class SQL{

	function buscaTarefas()
	{
		$q = "select titulo, descricao, prioridade from ticket order by prioridade";
		return $q;
	}
	
	function gravaTarefas($titulo, $descricao, $prioridade)
	{
		$q = "INSERT INTO `ticket`(`titulo`, `descricao`, `prioridade`) VALUES ('".$titulo."','".$descricao."',$prioridade);";
		return $q;
	}

}

?>