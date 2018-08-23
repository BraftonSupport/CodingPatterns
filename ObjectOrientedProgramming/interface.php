<?php 
/**
 * Used to defien the shape of an object, forcing classes to impliment the required methods for a defined object
 * 
 */
interface book{
    public function getTitle();
}
abstract class bookA implements book{
    public $title = "something";

    public function capitalizeTitle(){
        return strtoupper($this->title);
    }
    public function getTitle(){
        return $this->title;
    }
}
// $book = new bookA();
// class myBookA{

    
// }

class sciBook implements book{

    public $spaceSector;

    public function getSector(){

    }
    public function getTitle(){
        return $this->capitalizeTitle();
    }
}

$abook = new sciBook();
// var_dump($abook->getTitle() );
// // var_dump($abook->capitalizeTitle());