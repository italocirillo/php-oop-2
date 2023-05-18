<?php

/** ## Prodotti class
 * defines prodotti class
 * @italocirillo
 */
class Prodotto
{
    public $prezzo;
    public $nome;
    public $descrizione;
    public $immagine;
    public $categoria;
    public $sconto;


    /**
     * Description
     * @param Categoria $_categoria
     * @param String $_nome=""
     * @param Float $_prezzo=0
     * @param String $_descrizione=""
     * @param String $_immagine=""
     */
    function __construct(Categoria $_categoria, $_nome = "", $_prezzo = 0, $_descrizione = "", $_immagine = "")
    {
        $this->categoria = $_categoria;
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->descrizione = $_descrizione;
        $this->immagine = $_immagine;
    }

    public function get_prodotto_data()
    {
        return "Nome: {$this->nome},Prezzo: {$this->prezzo},Descrizione: {$this->descrizione},Immagine: {$this->immagine},Categoria: {$this->categoria->nome}";
    }

    public function get_details()
    {
        return "";
    }

    public function prodotto_sconto($percentuale)
    {
        if ($percentuale > 0 && $percentuale < 100) {
            $this->sconto = $this->prezzo - ($this->prezzo / 100 * $percentuale);
            return $this->sconto;
        } else {
            throw new Exception("non è una percentuale calcolabile");
        }
    }
}
