<?php 
/**
 * singletons are implimentations you only ever want or should have one of. Best for DB connections
 * provides way to instantate via getInstance static method
 */

 class SingletonClass{
    public $name = "my name";

    static private $instance = null;

    private function __construct(){
        
    }

    public static function getInstance(){
        if(!static::$instance){
            static::$instance = new self;
        }
        return static::$instance;
    }
 }

 $instance = SingletonClass::getInstance();
 var_dump($instance);