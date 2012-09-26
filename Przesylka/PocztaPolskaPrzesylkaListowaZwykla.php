<?php

/**
 * Klasa PocztaPolskaPrzesylkaListowaZwykla jest reprezentantem struktury Przesylka/Listowa zwykła
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';
require_once '../PocztaPolska/ElementXML.php';
require_once 'PocztaPolskaPrzesylka.php';

class PocztaPolskaPrzesylkaListowaZwykla extends PocztaPolskaPrzesylka implements ElementXML {
    
    /**
     * Identyfikator przesylki w systemie Poczty Polskiej
     */
    const ID = 840;

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
