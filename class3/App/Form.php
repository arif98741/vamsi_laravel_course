<?php
   
    class Form  
    {

        public $error = [];

        /**
         * constructor
         */
        public function __construct()
        {
            //TODO:: constructor
        }
    
        public function submitForm($data)
        {
            if(empty($data['name']))
            {
                array_push($this->error, 'Name should not be empty');
            }

            if(strlen($data['name']) < 3)
            {
                array_push($this->error, 'Name should be at least 3 characters');
            }

            if(!filter_var($data['age'],FILTER_VALIDATE_INT))
            {
                array_push($this->error, 'Age should be in number');
            }

            if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
            {
                array_push($this->error, 'Email is not valid');
            }

            $name = $this->validation($data['name']);
            $age = $this->validation($data['age']);
            $email = $this->validation($data['email']);
            $address = $this->validation($data['address']);

            return $this;

        }

        private function validation($data)
        {
            $data = trim($data);
            $data = htmlspecialchars($data);
            $data = stripslashes($data);
            return $data;
        }
    
    }
        
?>