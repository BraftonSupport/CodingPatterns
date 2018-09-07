<?php 

$function = function($var){

    return function ($name) use ($var){
        echo $var . ' me ' . $name;

        return function($last){
            echo $var .' me '. $name . ' '. $last;
        };
    };

};

$secondary = $function('help');




$third = $secondary('james');

$third('allan');

$var = 'testing';

$callback = function() use (&$var){

};


function helpme(){
    preg_replace('||', $callback);
}