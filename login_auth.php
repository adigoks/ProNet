<?php
	require "./class/dbops.php";

	if(isset($_POST)){
	$NIM = $_POST['NIM'];
	$Pass = $_POST['pass'];
	}

	try{
		$con = new dbops();
		$result = $con->getUserInfo($NIM,$Pass);

	}catch(Exception $e){
		$_POST['error'] = $e->getMessage(); 
	}

	if (isset($result[0]))
	{
		$username = $result[0]['user_id'];

		setcookie('user',$username,time()+3600*24*30);
		$_COOKIE['user']=$username;
		if (session_status() == PHP_SESSION_NONE) {
    		session_start();
		}
		$_SESSION['login']=true;
		
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = '';
		header("Location: http://$host$uri/$extra");
		exit;
		
	}else{
		global $valid;
		if (session_status() == PHP_SESSION_NONE) {
    		session_start();
		}
		$_SESSION['login']=false;
		
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = '?page=login';
		header("Location: http://$host$uri/$extra");
		exit;
	}
?>