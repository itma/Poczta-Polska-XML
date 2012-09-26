<?php

/**
 * Klasa PocztaPolskaPrzesylkaPolecona jest reprezentantem struktury Przesylka/Polecona
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';
require_once '../PocztaPolska/ElementXML.php';
require_once 'PocztaPolskaPrzesylka.php';

class PocztaPolskaPrzesylkaPolecona extends PocztaPolskaPrzesylka implements ElementXML {
    
    /**
     * Identyfikator przesylki w systemie Poczty Polskiej
     */
    const ID = 845;
    
    /**
     * Dwudziestocyfrowy numer identyfikujący przesyłkę. Pole jest wyliczane wg 
     * specjalnego algorytmu. 
     * @var string 
     */    
    public $nrNadania;
    
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
     * Informuje o tym, czy przesyłka jest Egzemplarzem bibliotecznym;
     * wartości:
     * T – tak
     * N – nie 
     * @var string 
     */
    public $egzBibl;
    
    /**
     * Informuje o tym, czy przesyłka jest Dla ociemniałych;
     * wartości:
     * T – tak 
     * N – nie 
     * @var string 
     */
    public $dlaOciem;
    
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
                    'pole' => 'egzBibl',
                    'wymagane' => true,
                    'typ' => 'string'
                ),
                array(
                    'pole' => 'dlaOciem',
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
