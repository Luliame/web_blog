<?php
class UserController {
	public function __construct(){
		$action = $_GET['action'] ?? null;
		try{
			switch (strtolower($action)) {
				case null:
				case 'show':
					$this->showNews();
					break;
				case 'find':
					$this->findNews();
					break;
				case 'addComment':
					$this->addComment();
					break;
				case 'getNbComment':
					$this->getNbComment();
					break;
				case 'getNbAllComment':
					$this->getNbAllComment();
					break;
				case 'connect':
					$this->connect();
					break;
				case 'formConnect':
					$this->formConnect();
					break;
				
				default:
					require('../../res/html/erreur.php');
					break;
			}
		} catch (PDOException $e){
			$err = 'Erreur base de données';
			require("../../res/htmlerreur.php");
		} catch (Exception $e){
			$err = 'Erreur inconnue!';
			require('../../res/html/erreur.php');
		}
	}

	public function showNews()
	{
		$id = $_GET['id'] ?? null;
		if($id == null){
			$err = 'News innexistante';
			require('../../res/html/erreur.php');
		} else {
			$mdl = new NewsModel();
			$news = $mdl->getNewsById($id);
			header('location: '.$news->getURL());
		}
	}
	
	public function findNews()
	{
		$date = $_GET['date'] ?? null;
		if($id == null){
			$err = 'News innexistante';
			require('../../res/html/erreur.php');
		} else {
			$mdl = new NewsModel();
			//? en faite je sais pas trop comment faire ça
		}

	}
	
	public function addComment()
	{
		$comment = $_GET['comment'] ?? null;
		if($comment == null){
			$err = 'Ajout d\'un commentaire impossible';
			require('../../res/html/erreur.php');
		} else {
			$mdl = new UserModel();
			$mdl->addComment();
		}
	}
	
	public function getNbComment()
	{
		$user = $_GET['user'] ?? null;
		if($comment == null){
			$err = 'Erreur utilisateur';
			require('../../res/html/erreur.php');
		} else {
			$mdl = new UserModel();
			$nbComment = $mdl->getNbComment();
		}
	}
	
	public function getNbAllComment()
	{
		$mdl = new NewsModel();
		$nbNews = $mdl->getNews();
		count($nbNews)
	}
	
	public function connect()
	{
	}
	
	public function formConnect()
	{
	}
}