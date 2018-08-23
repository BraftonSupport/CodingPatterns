<?php 
namespace Tutorial\Models;

use Tutorial\Controllers\AppController as TutAppController;

class AppModel{
    
    public $controller;
    public function __construct(){
        $this->controller = new TutAppController();
    }
}
$scopedVar = 21;
$example = function($var) use ($scopedVar){
        $scopedVar = $var;  
};