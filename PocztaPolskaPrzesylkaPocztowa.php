<?php

/**
 * Klasa PocztaPolskaPrzesylkaPocztowa jest reprezentantem struktury Przesylka/Pocztowa
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once 'PocztaPolskaPrzesylkaPolecona.php';

class PocztaPolskaPrzesylkaPocztowa extends PocztaPolskaPrzesylkaPolecona {
    
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
    
}
?>
