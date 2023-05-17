<?php

/** 
 * ## Categoria class
 * defines categoria class
 * @italocirillo
 */
class Categoria
{
    public $nome;

    /**
     * Description
     * @param String $_nome
     */
    function __construct($_nome)
    {
        $this->nome = $_nome;
    }
}
