<?php

/**
 * Klasa PocztaPolskaPrzesylkaPocztex jest reprezentantem struktury Przesylka/Pocztex
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';
require_once '../PocztaPolska/ElementXML.php';
require_once 'PocztaPolskaPrzesylka.php';

class PocztaPolskaPrzesylkaPocztex extends PocztaPolskaPrzesylka implements ElementXML {

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
                    'pole' => 'nrNadania',
                    'wymagane' => false,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'uslugi',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'odleglosc',
                    'wymagane' => false,
                    'typ' => 'int'
                ),
                array(
                    'pole' => 'termin',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'uiszczaOplate',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'typ',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'ponadwymiarowa',
                    'wymagane' => false,
                    'typ' => 'string'
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
