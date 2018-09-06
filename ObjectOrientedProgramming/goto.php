<?php 


function doSomethingclever(){
    echo 'something clever';
}

function notSomethingWeWant(){
    echo 'this is very very bad';
}
goto a;
notSomethingWeWant();
a: doSomethingclever();


//use to get out of a loop
$string = "something cool";
for($i=0;$i< count(str_split($string));$i++ ){
    $char = str_split($string)[$i];
    echo $char;
    if($char == 't') goto done;
}
//more code that should only exicute if there is no t

goto something;
done: echo "should only say some";
die();

something: echo "complete exectution";
