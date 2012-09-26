<?php

/**
 * Klasa PocztaPolskaPrzesylkaPobraniowa jest reprezentantem struktury Przesylka/Pobraniowa
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';
require_once '../PocztaPolska/ElementXML.php';
require_once 'PocztaPolskaPrzesylka.php';

class PocztaPolskaPrzesylkaPobraniowa extends PocztaPolskaPrzesylka implements ElementXML {
    
    /**
     * Identyfikator przesylki w systemie Poczty Polskiej
     */
    const ID = 848;
    
    /**
     * Dwudziestocyfrowy numer identyfikujący przesyłkę. Pole jest wyliczane wg 
     * specjalnego algorytmu. 
     * @var string 
     */    
    public $nrNadania;    
    
    /**
     * Kwota, jaką należy pobrać w związku z doręczeniem przesyłki pobraniowej.
     * Wartość pola ograniczona do 20000 groszy.
     * @var int 
     */
    public $kwotaPobrania;
    
    /**
     * Informuje o tym, jaki jest sposób przekazania kwoty pobrania;
     * wartości:
     * P – na wskazany adres
     * S – na rachunek bankowy 
     * @var string 
     */
    public $sposobPobrania;    
    
    /**
     * Informuje o tym, jakiej kategorii jest przesyłka;
     * wartości:
     * E – ekonomiczna
     * P – priorytetowa 
     * @var string 
     */
    public $kategoria;
    
    /**
     * Informuje o tym, czy przesyłka jest nadana na Poste Restante;
     * wartości:
     * T – tak
     * N – nie 
     * @var string
     */
    public $posteRestante;
    
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
     * Ilość potwierdzeń odbioru. 
     * @var int 
     */
    public $iloscPotwOdb;
    
    /**
     * Dotyczy gabarytu przesyłki, wartości:
     * A – gabaryt A
     * B – gabaryt B
     * @var string
     */
    public $strefa; 
    
    /**
     * Deklarowana wartość przesyłki; podana w groszach. Wartość pola ograniczona 
     * do 20000 groszy.
     * @var int 
     */
    public $wartosc;    
    
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
                    'pole' => 'kwotaPobrania',
                    'wymagane' => true,
                    'typ' => 'int'
                ),
                array(
                    'pole' => 'sposobPobrania',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'kategoria',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'posteRestante',
                    'wymagane' => true,
                    'typ' => 'string'
                ),                
                array(
                    'pole' => 'uslugi',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'iloscPotwOdb',
                    'wymagane' => true,
                    'typ' => 'int'
                ),
                array(
                    'pole' => 'strefa',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'wartosc',
                    'wymagane' => true,
                    'typ' => 'int'
                ),
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
