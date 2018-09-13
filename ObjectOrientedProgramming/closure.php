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

$var = ["value", "something"];

$callback = function() use (&$var){
    $var[] = "else";
};


function helpme(){
    preg_replace('||', $callback);
}