<?php
 class Calculator implements  TestInterface {

    public $error;
    public $message;
    public $result;
    public $number1;
    public $number2;

    public function __construct($number1, $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    /**
     * addition
     */
    public function add()
    {
        $this->result = $this->number1 + $this->number2;
        return $this;
    }

    /**
     * subtraction
     */
    public function substraction($value)
    {
        $this->result -= $value;
        return $this;
    }

    /**
     * subtraction
     */
    public function details()
    {
        return 'The final value is '.$this->result;
    }

     public function test1(){

     }
     public function test2(){

     }
      public function test3(){

     }

}