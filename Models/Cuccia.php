<?php
require_once __DIR__ . "/Prodotto.php";

class Cuccia extends Prodotto
{
    public $lunghezza;
    public $larghezza;

    function __construct(Categoria $_categoria, $_tipo = "", $_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "", $_tipologia = "", $_lunghezza = "", $_larghezza = "")
    {
        parent::__construct($_categoria, $_tipo, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->lunghezza = $_lunghezza;
        $this->larghezza = $_larghezza;
    }
}
