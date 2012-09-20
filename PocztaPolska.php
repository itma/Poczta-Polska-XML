<?php

/**
 * Klasa PocztaPolska
 * @author Andrzej Bernat <andrzej@itma.pl>
 */
abstract class PocztaPolska {

    /**
     * Obslugiwane rodzaje przesylek
     */
    const POLECONA = 'pocztex';
    const POCZTOWA = 'pocztowa';
    const POBRANIOWA = 'pobraniowa';
    const LISTOWA_ZWYKLA = 'listowa_zwykla';
    const EPRZESYLKA = 'eprzesylka';
    const POCZTEX = 'pocztex';
    
    
    /**
     * Unikalny identyfikator nadawcy przesyłek. Pole posiada wartość wyliczoną
     * zgodnie z algorytmem definiowania nr GUID. Kolejne przesyłki tego samego
     * nadawcy muszą zawierać inną wartość pola GUID. 
     * @var string 
     */
    public $guid;    
}
?>
