<?php
class dbaccess extends PDO{

	public function __construct($host,$db,$usr,$pass)
	{
			parent::__construct("mysql:host=$host;dbname=$db",$usr,$pass,null);	
			$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}
	
}
?>