<?php 
    require_once __DIR__ . "/models/product.php";
    require_once __DIR__ . "/models/category.php";
    require_once __DIR__ . "/models/type_product/food.php";

    $dog_category = new Category("cane");
    $cat_category = new Category("gatto");

    $pettorina = new Food("pettorina", 10.5, 500, "2024/10/5");
    
    $pettorina->setDescription("pettorina molto bella");
    $pettorina->setImagePath("https://m.media-amazon.com/images/I/71JXn5GAfWL._AC_UF894,1000_QL80_.jpg");
    $pettorina->setCategory($dog_category);

    var_dump($pettorina);

?>