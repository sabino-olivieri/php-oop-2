<?php 
    class Category {

        private string $name; 

        public function __construct(string $_name)
        {

            $_name = ucfirst(strtolower($_name));

            if($_name === "Cane" || $_name === "Gatto"){
                $this->name = $_name;
            } else {
                throw new Exception("La categoria può essere solo 'CANE' o 'GATTO'", 1);
                
            }
        }
    }
?>