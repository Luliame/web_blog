<?php
class Comment{
    private $author;
    private $description;

    public function getAuthor(): string{
        return $this->author;
    }

    public function setAuthor(string $author){
        $this->author = $author;
    }

    public function getDesc(): string{
        return $this->description;
    }

    public function setDesc(string $desc){
        $this->description = $desc;
    }
    
}

?>