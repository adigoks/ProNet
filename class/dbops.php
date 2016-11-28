<?php
require "dbaccess.php";
class dbops
{
	
	private $con;
	private $hostname = "localhost";
	private $dbname = "pronet";
	private $username = "root";
	private $password = "";
	const failed = false;
	const success = true;
	private $status = self::failed;

	

	public function __construct(){

	}

	public function __construct1($host,$db,$usr,$pass){

		$this->set($host,$db,$usr,$pass);
	}

	public function set($host,$db,$usr,$pass){
		$this->hostname = $host ;
		$this->dbname = $db ;
		$this->username = $usr ;
		$this->password = $pass;
	}

	public function setConnection(){
		$host = $this->hostname;
		$db = $this->dbname;
		$usr = $this->username;
		$pass = $this->password;
		$this->con = new dbaccess($host,$db,$usr,$pass);
		
	}
	public function getUserInfo($nim,$pass)//method untuk select parameter berupa statement 
	{
	
		$this->setConnection();
		$stmt = $this->con->prepare("select * from userdata where NIM = '$nim' and pass = md5('$pass')");
		if(!$stmt->execute())
		{
			return null;
		}else{
			$result= $stmt->fetchall(PDO::FETCH_ASSOC);
			
		}
		$this->con = null;
		
		return $result;
	}
	public function addUser($nama,$pass)//method untuk menambahkan user ke database parameter berupa nama,password,email,dll 
	{
	
		$this->setConnection();
		$stmt = $this->con->prepare("insert into userdata ()");
		if($stmt->execute())
		{
			$result= $stmt->fetchall(PDO::FETCH_ASSOC);
		}else{
			return null;
		}
		$this->con = null;
		
		return $result;
	}
	public function updateUser($nama,$pass)//method untuk select parameter berupa statement 
	{
	
		$this->setConnection();
		$stmt = $this->con->prepare("select * from userdata where user_id = '$nama' and pass = md5('$pass')");
		if($stmt->execute())
		{
			$result= $stmt->fetchall(PDO::FETCH_ASSOC);
		}else{
			return null;
		}
		$this->con = null;
		
		return $result;
	}





	public function closeCon(){
		$this->$con = null;
	}
}
		
?>		