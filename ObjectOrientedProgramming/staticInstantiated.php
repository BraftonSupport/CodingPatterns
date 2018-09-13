<?php

class _Static{
    public $open = "Open assessability";
    public static  $var = "_Static";
    public static function _staticMethod(){

        $self = self::$var;
        print(" using self ".$self);
        $static = static::$var;
        print(" using static ".$static);
        $direct = _Static::$var;
        print( " using direct ".$direct);

    }
    public function usingThis(){
        print($this->open);
    }
}
class _Extend extends _Static{
    public static $var = "set defined in _Extend";
}

$object = new _Static;

_Static::_staticMethod();
$object->_staticMethod();


class Book{
    public $title;
    public $text;

    public function printTitle(){
        print($this->title);
    }
}

$book = new Book;

class ObjectBase{

    public static function getCoords(Base $object){

    }
}

class Square{
    public $x;
    public $y;
    public $z;

    public function __construct($x, $y, $z){
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

    }
    public function getCoords(){
        return [$this->x, $this->y, $this->z];
    }
}

$square = new Square(2, 4, 12);
$coords = $square->getCoords();

$coords = ObjectBase::getCoords($square);
