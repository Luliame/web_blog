<?php
class AdminGateway{

    private $user = 'root';
    private $pass = '';
    private $dsn = 'mysql:host=localhost;dbname=dbtest';
    private $conn;

    public function __construct(){
        $this->conn = new Connection($dsn, $user, $pass);
    }

    //pas sûr + voir constru Admin
    public function findById(int $id): Admin{
    	$query = "SELECT * FROM TADMIN WHERE id = :id";
    	$this->conn->executeQuery($query, array('id' =>$id, PDO::PARAM_INT));
    	$results = $this->conn->getResults();
    	foreach($results as $item){
			$admin = new Admin($item['Name'],$item['Password']);
			$admin->setNbComment($item['NbComment']);
    	}
    	return $user;
    }

    public function findAllAdmin(): array{
    	$query = "SELECT * FROM TADMIN";
        $this->conn->executeQuery($query, array());
        return $this->conn->getResults();
    }
}
?>