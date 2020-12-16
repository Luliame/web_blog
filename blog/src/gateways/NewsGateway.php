<?php
require_once('../entities/Connection.php');
class NewsGateway{

    private $user = 'root';
    private $pass = '';
    private $dsn = 'mysql:host=localhost;dbname=dbtest';
    private $conn;

    public function __construct(){
        $this->conn = new Connection($dsn, $user, $pass);
    }

    public function insert(News $new){
        $query = "INSERT INTO TNEWS VALUES(:title, :desc, :date, :author, :category, :url)";
        $this->conn->executeQuery($query, array(
        'title' => array($new->getTitle(), PDO::PARAM_STR),
        'desc' => array($new->getDescription(), PDO::PARAM_STR),
        'date' => array($new->getDate(), PDO::PARAM_STR),
        'author' => array($new->getAuthor(), PDO::PARAM_STR),
        'category' => array($new->getCategory(), PDO::PARAM_STR),
        'url' => array($new->getUrl(), PDO::PARAM_STR)));
    }

    public function delete(int $id){
        $query = "DELETE FROM TNEWS WHERE Id = :id";
        $this->conn->executeQuery($query, array('id' => array($id, PDO::PARAM_INT)));
    }

    public function findById(int $id): news{
        $query = "SELECT * FROM TNEWS WHERE Id = :id";
        $this->conn->executeQuery($query, array('id' => array($id, PDO::PARAM_INT)));
        $results = $this->conn->getResults();
        foreach($results as $item){
            $news = new News($item['Title'],$item['Description'],$item['Author'],$item['Category'],$item['URL'],$item['Date']);
        }
        return $news;
    }

    public function findByTitle(string $title) :array{
        $query = "SELECT * FROM TNEWS WHERE Title = :title";
        $this->conn->executeQuery($query, array('title' => array($title, PDO::PARAM_STR)));
        $results = $this->conn->getResults();
        foreach($results as $item){
            $tabNews[] = new News($item['Title'],$item['Description'],$item['Author'],$item['Category'],$item['URL'],$item['Date']);
        }
        return $tabNews;
    }

    public function findNbNews() :int{
        $query = "SELECT COUNT(*) FROM TNEWS";
        $this->conn->executeQuery($query, array());
        $results = $this->conn->getResults();
        return $results[0]['COUNT(*)'];
    }
}
?>