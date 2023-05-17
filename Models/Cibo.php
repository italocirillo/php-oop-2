<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto
{
    public $valori_nutrizionali;

    function __construct(Categoria $_categoria, $_tipo = "", $_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "")
    {
        parent::__construct($_categoria, $_tipo, $_nome, $_prezzo, $_descrizione, $_immagine);
    }
}
