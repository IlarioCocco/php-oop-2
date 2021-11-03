<?php

Class Carrello {
    protected $prodotti = [];

    public function __construct()
    {
        
    }

    public function addProdotti(Prodotti $prodotti)
    {
        $this->prodotti[] = $prodotti;
    }
}


?>