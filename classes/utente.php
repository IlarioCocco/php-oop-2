<!-- esercizio: php-oop-2

Provate ad immaginare quali sono le classi necessarie per creare uno shop online; 
ad esempio;
- ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

Strutturare le classi gestendo l'ereditarietà dove necessario; 
ad esempio;
- ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi,
oppure diverse tipologie di prodotti.

Provate a far interagire tra di loro gli oggetti:
ad esempio;
- l'utente dello shop inserisce una carta di credito...

$c = new CreditCard(..);
$user->insertCreditCard($c);

BONUS:
Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php
require __DIR__ . "/Carrello.php";

class Utenti {
    private $nomi;
    private $tipologie;
    private $cdc;
    public $carrello;

   

    public function __construct($_nomi, $_tipologie, $_cdc)
    {   
        $this->nomi = $_nomi;
        $this->tipologie = $_tipologie;
        $this->cdc = $_cdc;
        $this->carrello = new Carrello();
        
    }


    public function getNomi($_nome)
    {
        $this->nomi[] = $_nome;
    }

    public function getTipologie($_tipologia)
    {
        $this->tipologie[] = $_tipologia;
    }

    public function getNome($_cdc_tipo)
    {   
        $this->cdc[] = $_cdc_tipo;
    }

}




