<?php
require_once __DIR__ . "/Prodotto.php";

class Gioco extends Prodotto
{

    public $tipologia;

    function __construct(Categoria $_categoria, $_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "", $_tipologia = "")
    {
        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->tipologia = $_tipologia;
    }

    public function get_details()
    {
        return "{$this->tipologia}";
    }
}
