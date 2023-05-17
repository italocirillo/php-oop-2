<?php

/** ## Prodotti class
 * defines prodotti class
 * @italocirillo
 */
class Prodotto
{
    public $tipo;
    public $prezzo;
    public $nome;
    public $descrizione;
    public $immagine;
    public $categoria;


    /**
     * Description
     * @param Categoria $_categoria
     * @param Tipo $_tipo
     * @param String $_nome=""
     * @param Float $_prezzo=0
     * @param String $_descrizione=""
     * @param String $_immagine=""
     */
    function __construct(Categoria $_categoria, $_tipo, $_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "")
    {
        $this->categoria = $_categoria;
        $this->tipo = $_tipo;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
        $this->immagine = $_immagine;
    }

    public function get_prodotto_data()
    {
        return "Nome: {$this->nome},Prezzo: {$this->prezzo},Descrizione: {$this->descrizione},Immagine: {$this->immagine},Categoria: {$this->categoria->nome}";
    }
}
