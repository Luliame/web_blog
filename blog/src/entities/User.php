<?php
class User{
    protected $name;
    protected $nbComment = 0;

    public function __construct(){
        $this->name = func_get_arg(0);
    }

    public function getName() : string{
        return $this->name;
    }

    public function getNbComment() : int{
        return $this->nbComment;
    }

    public function setNbComment(int $nbComment){
        $this->nbComment = $nbComment;
    }

    public function __toString() :string{
        return $this->userName . ' a commenté ' . $this->nbComment . ' fois.';
    }
}

?>

