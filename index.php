<?php
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/type_product/food.php";
require_once __DIR__ . "/models/type_product/toy.php";
require_once __DIR__ . "/models/type_product/kennel.php";

$dog_category = new Category("cane");
$cat_category = new Category("gatto");

$croccantini = new Food("croccantini", 10.5, 500, "2024/10/5");

$croccantini->setDescription("croccantini molto buoni");
$croccantini->setImagePath("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiN9TMEBqOaw8M2KqbOLwEQh6-xxMHnIPofQ&s");
$croccantini->setCategory($dog_category);

$topo_giocattolo = new Toy("Topo giocattolo", 5.50);
$topo_giocattolo->setMaterial("gomma");
$topo_giocattolo->setDescription("topo molto divertente");
$topo_giocattolo->setImagePath("https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSFXiMabduSjS4n3lID9TPq17dM0nP8pqnH4NQl2iYq0S_AlzZ7wCCXvNOI8cDzuYMXIkmlNDNjYTWx2WLB9_QlukmfCgoheHpoDcibhx0sp5qBguvRWtR6Obw");
$topo_giocattolo->setCategory($cat_category);

$cuccia_cane = new Kennel("Cuccia a 5 stelle", 149.90, "150x20x50");
$cuccia_cane->setDescription("Il vostro cane si entirà un re");
$cuccia_cane->setImagePath("https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTKJYlQcBk98Ycrl7zoiJ1zRXmP_bJ0RyQ_ZqDq4ho8pBu6Nev-3eBzMNUKp7Wvl837s_bLKElFZCXr0cizdM6aj_WicQANXdr-LYTVdWv91QIfejdVMOUN");
$cuccia_cane->setCategory($dog_category);

$catalog[] = $croccantini;
$catalog[] = $topo_giocattolo;
$catalog[] = $cuccia_cane;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Planet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <?php foreach ($catalog as $cur_prod) {

        ?>
            <div class="card">

                <h3><?php echo $cur_prod->getName(); ?></h3>
                <span><?php if ($cur_prod->getCategory()->getName() === "Cane") {
                            echo '<i class="fa-solid fa-dog"></i>';
                        } else {
                            echo '<i class="fa-solid fa-cat"></i>';
                        }
                        ?></span>
                <h3><?php echo $cur_prod->getType(); ?></h3>
                <div class="photo">
                    <img src="<?php echo $cur_prod->getImagePath(); ?>" alt="">
                </div>
                <p><?php echo $cur_prod->getDescription(); ?></p>
                <h4><?php echo $cur_prod->getPrice() . " €" ?></h4>

                <?php
                if ($cur_prod->getType() === "Cibo") {
                ?>
                    <span><?php echo $cur_prod->getWeight() . " g" ?></span>
                    <span>Data di scadenza: <?php echo $cur_prod->getExpirationDate() ?></span>
                <?php }
                if (($cur_prod->getType() === "Gioco")) { ?>
                    <span>Materiale: <?php echo $cur_prod->getMaterial(); ?></span>

                <?php }
                if (($cur_prod->getType() === "Cuccia")) { ?>
                    <span>Dimensioni: <?php echo $cur_prod->getDimension() ?></span>

                <?php } ?>

            </div>

        <?php } ?>


    </div>
</body>

</html>