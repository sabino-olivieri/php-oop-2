<?php

class Toy extends Product {
    private string $material;
    private string $type;
    
    public function __construct(string $_name, float $_price)
    {
        parent::__construct($_name, $_price);
        $this->type = "Gioco";
    }

    /**
     * Get the value of material
     */ 
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set the value of material

     */ 
    public function setMaterial($_material)
    {   
        if(strlen(trim($_material)) > 3) {

            $this->material = ucfirst(trim($_material));
        } else {
            throw new Exception("Il campo 'MATERIALE' deve avere alemno 4 caratteri", 1);
            
        }

    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }
}

?>