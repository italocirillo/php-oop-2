<?php
require_once __DIR__ . "/Prodotto.php";

class Gioco extends Prodotto
{
    public $tipologia;
    public $valori_nutrizionali;

    function __construct($_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "", $_tipologia = "")
    {
        parent::__construct($_nome, $_prezzo, $_descrizione, $_immagine);
        $this->tipologia = $_tipologia;
    }
}
