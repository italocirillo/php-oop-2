<?php
require_once __DIR__ . "/Prodotto.php";

class Cuccia extends Prodotto
{
    public $lunghezza;
    public $larghezza;

    function __construct(Categoria $_categoria, $_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "", $_lunghezza = 0, $_larghezza = 0)
    {
        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->lunghezza = $_lunghezza;
        $this->larghezza = $_larghezza;
    }

    public function get_details()
    {
        return "<-|->{$this->lunghezza},{$this->larghezza}";
    }
}
