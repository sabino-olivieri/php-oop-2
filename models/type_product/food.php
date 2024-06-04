<?php 

class Food extends Product {
    use Weightable;
    private string $expirationDate;
    private string $type;

    public function __construct(string $_name, float $_price, int $_weight, string $_expirationDate)
    {
        parent::__construct($_name, $_price);

        $this->setWeight($_weight);
        $this->setExpirationDate($_expirationDate);
        $this->type = "Cibo";
    }

    /**
     * Get the value of expirationDate
     */ 
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Set the value of expirationDate

     */ 
    public function setExpirationDate(string $_expirationDate)
    {   if(strtotime(trim($_expirationDate)) !== false) {

        $date = date("d/m/Y", strtotime(trim($_expirationDate)));

        $this->expirationDate = $date;
    } else {
        throw new Exception("Formato data errato! inserire il seguente formato AAAA/MM/DD", 1);
        
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