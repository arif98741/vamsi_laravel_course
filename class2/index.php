<?php
    
    //
    /*
    access modifiers
        public, private, protected
    */
    class Car{

        public $name;
        private $company;
        public $model;
        public $fuel;
        

        public function __construct($name,$company,$model,$fuel)
        {
           $this->name = $name;
           $this->company = $company;
           $this->model = $model;
           $this->fuel = $fuel;
           
           
        }

        public function details()
        {
            echo 'Car name '.$this->name;
            echo '<br>';
            echo 'Car company is '.$this->company;
            echo '<br>';
            echo 'Car company is '.$this->model;
        }

        public function drive($hour)
        {
            $cost  = $hour * 3;
            $this->fuel -= $cost;
            
        }

        
        public function status()
        {
            echo "Current fuel is ".$this->fuel.' liter';
        }

    }

    $car = new Car('BMW 45H','BMW','K6566',10);
    $car->drive(3);
    print_r($car->status());
   

?>
