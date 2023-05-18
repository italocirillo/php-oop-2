<?php

/** 
 * ## Categoria class
 * defines categoria class
 * @italocirillo
 */
class Categoria
{
    public $nome;
    public $icon;

    /**
     * Description
     * @param String $_nome
     */
    function __construct($_nome, $_icon)
    {
        $this->nome = $_nome;
        $this->icon = $_icon;
    }
}
