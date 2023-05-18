<?php

trait Fabricazione
{
    private $fabricazione;

    public function setFabricazione($_fabricazione = "Italia")
    {
        $this->fabricazione = $_fabricazione;
    }

    public function getFabricazione()
    {
        return $this->fabricazione;
    }
}
