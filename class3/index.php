<?php 

    spl_autoload_register(function($class){
        require 'App/'.$class.'.php';
    });

    /*($java =  new Java();
    $php =  new Php();
    $cplus =  new Cplus();*/

    $cal = new Calculator(15,10);
    print_r($cal->add()->substraction(2)->details()); //method chaining
    
?>