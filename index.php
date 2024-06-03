<?php 
    require_once __DIR__ . "/models/product.php";
    require_once __DIR__ . "/models/category.php";

    $pettorina = new Product("Pettorina", 10);
    $dog_category = new Category("cane");
    $cat_category = new Category("gatto");

    $pettorina->setDescription("pettorina molto bella");
    $pettorina->setImagePath("https://m.media-amazon.com/images/I/71JXn5GAfWL._AC_UF894,1000_QL80_.jpg");
    $pettorina->setCategory($dog_category);

    var_dump($pettorina);

?>