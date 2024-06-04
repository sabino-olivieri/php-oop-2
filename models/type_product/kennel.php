<?php 
class Kennel extends Product {
    use Weightable;
    private string $dimension;
    private string $type;

    public function __construct(string $_name, float $_price, string $_dimension)
    {
        parent::__construct($_name, $_price);
        $this->setDimension($_dimension);
        $this->type = "Cuccia";
    }

    /**
     * Get the value of dimension
     */ 
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set the value of dimension
     */ 
    public function setDimension($_dimension)
    {
        if(strlen(trim($_dimension)) > 3) {
            $this->dimension = $_dimension;
        } else {
            throw new Exception("Inserisci le dimensioni", 1);
            
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