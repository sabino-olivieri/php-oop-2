<?php 
    require_once __DIR__ . "/models/product.php";
    require_once __DIR__ . "/models/category.php";
    require_once __DIR__ . "/models/type_product/food.php";
    require_once __DIR__ . "/models/type_product/toy.php";

    $dog_category = new Category("cane");
    $cat_category = new Category("gatto");

    $pettorina = new Food("pettorina", 10.5, 500, "2024/10/5");
    
    $pettorina->setDescription("pettorina molto bella");
    $pettorina->setImagePath("https://m.media-amazon.com/images/I/71JXn5GAfWL._AC_UF894,1000_QL80_.jpg");
    $pettorina->setCategory($dog_category);

    var_dump($pettorina);

    $topo_giocattolo = new Toy("Topo giocattolo", 5.50);
    $topo_giocattolo->setMaterial("gomma");
    $topo_giocattolo->setDescription("topo molto divertente");
    $topo_giocattolo->setImagePath("https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSFXiMabduSjS4n3lID9TPq17dM0nP8pqnH4NQl2iYq0S_AlzZ7wCCXvNOI8cDzuYMXIkmlNDNjYTWx2WLB9_QlukmfCgoheHpoDcibhx0sp5qBguvRWtR6Obw");
    $topo_giocattolo->setCategory($cat_category);

    var_dump($topo_giocattolo);

?>