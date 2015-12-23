<?php
include("./MyUserClass.php");

class ShowNames {

	function __construct() {

		$UserClass = new MyUserClass();
		
		$names = $UserClass->getUserList();
		
		foreach($names as $name){
			echo $name;
			echo "<br />";
		}

	}


}

$Names = new ShowNames($_REQUEST);
