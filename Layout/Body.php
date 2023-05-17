<?php
require_once __DIR__ . "/../Database/db.php";
?>

<body>
    <div class="container py-3">
        <div class="row row-cols-3">
            <?php
            foreach ($prodotti as $prodotto) { ?>
                <div class="col py-3">
                    <div class="card">
                        <img src="<?php echo $prodotto->immagine ?>" class="card-img-top" alt="<?php echo $prodotto->nome ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome ?></h5>
                            <p class="card-text"><?php echo $prodotto->descrizione ?></p>
                            <p class="card-text">
                                <?php if ($prodotto->categoria->nome == "Cane") { ?>
                                    <i class="fa-solid fa-dog"></i>
                                <?php } else { ?>
                                    <i class="fa-solid fa-cat"></i>
                                <?php } ?>
                            </p>
                            <p class="card-text"><?php echo $prodotto->tipo ?></p>
                            <?php if (isset($prodotto->tipologia)) { ?>
                                <p class="card-text"><?php $prodotto->tipologia ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </div>
</body>

</html>