<?php
	require "./class/dbops.php";

	try{
		$con = new dbops();
		$result = $con->getUserInfo("A11.2014.08469","Tolonglah");

	}catch(Exception $e){
		echo "terjadi kesalahan".$e->getMessage();
	}

	if (!isset($result[0]))
	{
		echo "ups kosong";
	}else{
		
		var_dump($result);
	}
?>