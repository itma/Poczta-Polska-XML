<?php

/**
 * Klasa PocztaPolskaPrzesylkaPocztowa jest reprezentantem struktury Przesylka/Pocztowa
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';
require_once '../PocztaPolska/ElementXML.php';
require_once 'PocztaPolskaPrzesylkaPolecona.php';

class PocztaPolskaPrzesylkaPocztowa extends PocztaPolskaPrzesylkaPolecona implements ElementXML {
    
    /**
     * Identyfikator przesylki w systemie Poczty Polskiej
     */
    const ID = 846;
    
    /**
     * Deklarowana wartość przesyłki; podana w groszach. Wartość pola ograniczona 
     * do 20000 groszy.
     * @var int 
     */
    public $wartosc;
    
    /**
     * Konstruktor
     */
    public function __construct() {
        parent::__construct();
        if (!$this->symbol) {
            $this->symbol = self::ID;
        }        
    }        
    
    /**
     * Metoda ustawia reguly walidacji
     * @return array
     */
    public function regulyWalidacji() {
        return array_merge(
            parent::regulyWalidacji(),
            array(
                array(
                    'pole' => 'wartosc',
                    'wymagane' => true,
                    'typ' => 'int'
                )
            )
        );
    }      
    
    /**
     * Walidacja pol obiektu
     * @return boolean
     */
    public function waliduj() {
        return parent::waliduj();
    }    
    
}
?>
