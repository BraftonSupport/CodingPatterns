<?php 

class wow{
    private $feature = "a cool idea";

    public function __construct(){

    }

    public function getFeature(){
        return $this->feature;
    }
}

return new wow();