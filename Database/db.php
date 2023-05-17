<?php
require_once __DIR__ . "/../Models/Prodotto.php";
require_once __DIR__ . "/../Models/Categoria.php";
require_once __DIR__ . "/../Models/Gioco.php";
require_once __DIR__ . "/../Models/Cibo.php";
require_once __DIR__ . "/../Models/Cuccia.php";

$osso = new Gioco(new Categoria("Cane"), "osso", 20.10, "lorem", "https://i0.wp.com/dietabarf.shop/wp-content/uploads/2019/09/buffelhautknochen-mit-knoten-fur-den-hund.jpg?fit=1500%2C1000&ssl=1");
