<?php
require_once __DIR__ . "/../Database/db.php";
?>

<body>
    <div class="container py-3">
        <h1>ANIMAL SHOP BOOL</h1>
        <div class="row row-cols-3">
            <?php
            foreach ($prodotti as $prodotto) { ?>
                <div class="col py-3">
                    <div class="card">
                        <img src="<?php echo $prodotto->immagine ?>" class="card-img-top" alt="<?php echo $prodotto->nome ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->nome ?></h5>
                            <p class="card-text"><?php echo $prodotto->descrizione ?></p>
                            <div class="sezione-sottostante">
                                <p class="card-text">
                                    <i class="<?php echo $prodotto->categoria->icon ?>"></i>
                                </p>
                                <p class="card-text tipo"><?php echo get_class($prodotto) ?></p>
                                <div class="dettagli">
                                    <p class="card-text"><?php echo $prodotto->get_details() ?></p>
                                </div>
                                <p class="prezzo"> <?php echo $prodotto->prezzo ?>€</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </div>
</body>

</html>