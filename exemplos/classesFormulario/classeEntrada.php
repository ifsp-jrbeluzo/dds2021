<?php


     class Entrada{
        public $name;
        public $class;
        public $id;
        public $placeholder;
        public $value;


        public function __construct($valores){
            
            if(isset($valores["name"])){
                $this->name=$valores["name"];
            }
            if(isset($valores["class"])){
                $this->class=$valores["class"];
            }
            if(isset($valores["id"])){
                $this->id=$valores["id"];
            }
            if(isset($valores["placeholder"])){
                $this->placeholder=$valores["placeholder"];
            }
            
            if(isset($valores["value"])){
                $this->value=$valores["value"];
            }
        }


    }


?>