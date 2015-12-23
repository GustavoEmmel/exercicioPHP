<?php
class SQL{

	function buscaUsuarios()
	{
		$q = "select name from user";
		return $q;
	}

}

?>