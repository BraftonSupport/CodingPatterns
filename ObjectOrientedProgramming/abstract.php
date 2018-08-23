<?php 
/**
 * Abstract class is an implimentation of a class that can NOT be instantiated by itself. it must be extended by a concrete class.
 * the purpose is to provide an extended interface that can contain properties as well as default implimentation of methods
 * 
 */

abstract class book{
    private $title;
    private $description;
    private $extract;
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    abstract public function getExtract();
}

class myBook extends book{

    public function getExtract(){

    }
}