<?php
include_once("./bd/bd.php");
include_once('./bd/sql.php');

class MyUserClass {

	public $sql		= null;

	function __construct() {

		$this->sql = new SQL();

		$this->getUserList();
	}

	public function getUserList()
	{
		$select = mysql_query($this->sql->buscaUsuarios());
		$names = array();
		while($row = mysql_fetch_array($select)){		
			$names[] = $row['name'];
		}
		
		sort($names);
		
		return $names;
			
	}

}

$UserClass = new MyUserClass($_REQUEST);