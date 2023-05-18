<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto
{
    public $valori_nutrizionali;

    function __construct(Categoria $_categoria, ValoriNutrizionali $_valori_nutrizionali, $_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "")
    {
        parent::__construct($_categoria, $_nome, $_prezzo, $_descrizione, $_immagine);
        $this->valori_nutrizionali = $_valori_nutrizionali;
    }

    public function get_details()
    {
        return "Carboidrati:{$this->valori_nutrizionali->carboidrati},Grassi: {$this->valori_nutrizionali->grassi},Proteine: {$this->valori_nutrizionali->proteine}";
    }
}
