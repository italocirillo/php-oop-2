<?php

/** 
 * ## ValoriNutrizionali class
 * defines ValoriNutrizionali class
 * @italocirillo
 */
class ValoriNutrizionali
{
    public $carboidrati;
    public $grassi;
    public $proteine;

    /**
     * Description
     * @param String $_carboidrati
     * @param String $_grassi
     * @param String $_proteine
     */
    function __construct($_carboidrati, $_grassi, $_proteine)
    {
        $this->carboidrati = $_carboidrati;
        $this->grassi = $_grassi;
        $this->proteine = $_proteine;
    }
}
