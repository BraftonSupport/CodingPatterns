<?php 
/**
 *  (structural)
 * Adapts a simple class you can not change to add more complex methods
 * 
 * In this example we have bookA class. we can not modify the bookA class so we create an adapter myBookA that will have a capitalizeTitle classs
 * simple book, advanced book, sci fi book
 * 
 * few keys
 * 
 * 1. the adapter has an instance of the adapted class
 * 2. adapter makes things work after all else has been designed
 * 3. change the interface of an object
 */
interface book{
    public function getTitle();
}

class bookA implements book{
    public $title = "something";
    public $description = "";
    private $extract = "extract";
    public function capitalizeDescription(){
        return strtoupper($this->description);
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
}


class myBookA{ //bookA adapter
    private $book;
    public function __construct(bookA $book){
        $this->book = $book;
    }
    public function capitalizeTitle(){
        return strtoupper($this->book->getTitle());
    }
}

class sciBook extends bookA{

    public $spaceSector;

    public function getSector(){

    }
    public function setExtract($string){
        $this->extract = $string;
    }
    public function getExtract(){
        echo $this->extract;
    }
}