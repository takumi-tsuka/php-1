<?php
    class doctor{
        public $firstName; //container
        public $lastName;
        public $dob;
        public $speciality;
        public $medID;
        function __construct($firstName, $lastName, $dob, $speciality, $medID)  //construct
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dob = $dob;
            $this->speciality = $speciality;
            $this->medID = $medID;
        }
        function show_info(){
            return ["fname"=>$this->firstName,"lname"=>$this->lastName,"dob"=>$this->dob,"spec"=>$this->speciality,"id"=>$this->medID];
        }
    }
?>