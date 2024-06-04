<?php 

trait Weightable {
    private int $weight;

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     */ 
    public function setWeight(int $_weight)
    {
        if($_weight > 0) {
            $this->weight = $_weight;
        } else {
            throw new Exception("Il peso deve essere superiore a 0 grammi", 1);
            
        }

    }
}

?>