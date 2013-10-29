<?php 

class DB {
	public $db;
	public function connect()
	{
		try {
			$this->db =  new PDO('mysql:dbname=kingscup;host=127.0.0.1', 'gavin', 'corkey2000!');
			
		}catch(PDOException $e) {
			echo  $e->getMessage();
		}
		
	}
	
	public function select()
	{
		$sql = "SELECT * FROM user";
		$sth = $this->db->prepare($sql);
		$sth->execute();
		var_dump($sth->fetchAll());
	}
	
}