<?php
class Admin extends User{
	private $password;

	public function __construct(){
		parent::__construct(0);
		$this->password = func_get_arg(1);
	}

	public function getPassword(): String{
		return $this->password;
	}

	public function setPassword(String $password){
		$this->password = $password;
	}
}
?>