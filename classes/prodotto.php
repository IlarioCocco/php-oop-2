
<?php

class Prodotti
{
    private $auto;
    private $casa;
    private $barca;
    private $gioielli;

    public function __construct($_auto, $_casa, $_barca, $_gioielli)
    {
        $this->auto = $_auto;
        $this->casa = $_casa;
        $this->barca = $_barca;
        $this->gioielli = $_gioielli;
    }


    public function getAuto()
    {
        return $this->auto;
    }

    public function getCasa()
    {
        return $this->casa;
    }

    public function getBarca()
    {
        return $this->barca;
    }

    public function getGioielli()
    {
        return $this->gioielli;
    }
}
