<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto
{
    public $valori_nutrizionali;

    function __construct(ValoriNutrizionali $valori_nutrizionali, $_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "")
    {
        parent::__construct($_nome, $_prezzo, $_descrizione, $_immagine);
        $this->valori_nutrizionali = $valori_nutrizionali;
    }
}
