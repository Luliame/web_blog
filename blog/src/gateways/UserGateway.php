<?php
class UserGateway{

    private $user = 'root';
    private $pass = '';
    private $dsn = 'mysql:host=localhost;dbname=dbtest';
    private $conn;

    public function __construct(){
        $this->conn = new Connection($dsn, $user, $pass);
    }

    public function findById(int $id): User{
    	$query = "SELECT * FROM TUSER WHERE id = :id";
    	$this->conn->executeQuery($query, array('id' =>$id, PDO::PARAM_INT));
    	$results = $this->conn->getResults();
    	foreach($results as $item){
			$user = new User($item['Name']);
			$user->setNbComment($item['NbComment']);
    	}
    	return $user;
    }

    public function findNbComment(int $id): int{
    	$query = "SELECT * FROM TUSER WHERE id = :id";
    	$this->conn->executeQuery($query, array('id' =>$id, PDO::PARAM_INT));
    	$results = $this->conn->getResults();
    	foreach($results as $item){
    		$nb = $item['NbComment'];
    	}
    	return $nb;
    }
}
?>