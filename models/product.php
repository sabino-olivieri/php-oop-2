<?php
require_once __DIR__ . "/category.php";

class Product
{
    private string $name;
    private string $description;
    private float $price;
    private string $imagePath;
    private Category $category;

    public function __construct(string $_name, float $_price)
    {
        if (strlen(trim($_name)) > 3) {
            $this->name = ucfirst(trim($_name));
        } else {
            throw new Exception("Il campo 'NOME' deve avere almeno 4 caratteri", 1);
        }

        $this->setPrice($_price);
    }

    
    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription(string $_description)
    {
        if (strlen(trim($_description)) > 3) {

            $this->description = ucfirst(trim($_description));
        } else {
            throw new Exception("Il campo 'DESCRIZIONE' deve avere almeno 4 caratteri", 1);
        }
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice(float $_price)
    {
        if ($_price > 0) {
            $this->price = $_price;
        } else {
            throw new Exception("Il campo 'PREZZO' deve essere superiore a 0", 1);
        }
    }

    /**
     * Get the value of imagePath
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * Set the value of imagePath
     */
    public function setImagePath(string $_imagePath)
    {
        if(strlen(trim($_imagePath)) > 3) {
            $this->imagePath = $_imagePath;
        } else {
            throw new Exception("Il percorso dell'immagine non è corretto", 1);
        }
    }

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     */ 
    public function setCategory(Category $_category)
    {
        $this->category = $_category;

    }

}
