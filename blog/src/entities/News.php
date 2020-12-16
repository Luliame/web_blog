<?php

class News{
    
    private $title;
    private $description;
    private $date;
    private $author;
    private $category;
    private $url;

    public function __construct(){
        $this->title = func_get_arg(0);
        $this->description = func_get_arg(1);
        $this->author = func_get_arg(2);
        $this->category = func_get_arg(3);
        $this->url = func_get_arg(4);
        switch(func_num_args()){
            case 5:
                $this->date = date('d/m/y',time());
            break;
            case 6:
                $this->date = func_get_arg(5);
            break;
        }
    }

    public function getTitle() :string {
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getDescription() :string {
        return $this->description;
    }

    public function setDesc(string $description){
        $this->description = $description;
    }

    public function getDate() :string {
        return $this->date;
    }

    public function setDate(string $date){
        $this->date = $date;
    }

    public function getAuthor() :string {
        return $this->author;
    }

    public function setAuthor(string $author){
        $this->author = $author;
    }

    public function getCategory() :string {
        return $this->category;
    }

    public function setCategory(string $category){
        $this->category = $category;
    }

    public function geturl() :string {
        return $this->url;
    }

    public function seturl(string $url){
        $this->url = $url;
    }

    public function __toString() :string{
        return $this->title . ' ; ' . $this->description . ' ; ' . $this->author . ' ; ' . $this->category . ' ; ' . $this->url . ' ; ' . $this->date;
    }
}

?>