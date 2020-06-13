<?php 

class Show{

    public $object;

    public function __construct($object)
    {
        $this->object = $object;

    }

    public function showDetails()
    {
        return $this->object->details();
    }


}