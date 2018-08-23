<?php 
/**
 * (crational)
 * define an object but leave implimentation decisions upstream
 * 
 * key takeaway
 * 1. be sure to define arguments to the factory
 */

abstract class book{
    /**
     * title
     *
     * @var string
     * @access private
     */
    private $title = "";
    private $description;
    /**
     * extract
     *
     * @var string
     * @access protected
     */
    protected $extract;
    abstract public function __construct($title, $description, $extract);
    // public function getTitle(){
    //     return $this->title;
    // }
    public function setTitle($title){
        $this->title = $title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function setDescription($desc){
        $this->description = $desc;
    }
    // abstract public function setExtract();
    abstract public function getExtract(): string;
}

class SciFiBook extends book{

    public function __construct($title, $description, $extract){
        // $this->setTitle($title);
        $this->title = $title;
        $this->setDescription($description);
        $this->extract = $extract;
    }

    public function getExtract():string{
        // return "";
    }
}

$book = new SciFiBook("title", "desc", "ext");
$book->getExtract();