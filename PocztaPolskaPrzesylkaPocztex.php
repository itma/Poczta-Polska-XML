<?php

/**
 * Klasa PocztaPolskaPrzesylkaPocztex jest reprezentantem struktury Przesylka/Pocztex
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once 'PocztaPolskaPrzesylka.php';

class PocztaPolskaPrzesylkaPocztex extends PocztaPolskaPrzesylka {
    
    /**
     * Identyfikator przesylki w systemie Poczty Polskiej
     */
    const ID = 812;
    
    /**
     * Dwudziestocyfrowy numer identyfikujący przesyłkę. Pole jest wyliczane wg 
     * specjalnego algorytmu. 
     * @var string 
     */    
    public $nrNadania;    
    
    /**
     * Usługi komplementarne, jakie są aktywne dla rozpatrywanej przesyłki;
     * wartości:
     * Z – żądanie zwrotu/dosłania
     * R – polecenie
     * O – potwierdzenie odbioru 
     * Domyślną wartością jest R. 
     * @var string
     */
    public $uslugi;     
    
    /**
     * Odległość dla nadawanej przesyłki POCZTEX; podana w kilometrach.
     * @var int 
     */
    public $odleglosc;
    
    /**
     * Termin-serwis dla przesyłki:
     * B – Bezpośredni
     * D – Na dziś krajowy
     * M – Na dziś miejski
     * U – Na dziś miejski super 
     * A – Na dziś aglomeracja
     * P – Na jutro południe
     * R – Na jutro poranek
     * S – Na jutro standard 
     * @var string 
     */
    public $termin;
    
    /**
     * Informuje o uiszczającym opłatę za nadanie przesyłki:
     * N – nadawca
     * A – adresat 
     * @var string 
     */
    public $uiszczaOplate;
    
    /**
     * Rodzaj przesyłki:
     * Z – zwykły
     * E – full pack 1
     * F – full pack 2 
     * @var string 
     */
    public $typ;
    
    /**
     * T – jest to Przesyłka ponadwymiarowa
     * N – nie jest to Przesyłka ponadwymiarowa
     * @var string 
     */
    public $ponadwymiarowa;    

}
?>
