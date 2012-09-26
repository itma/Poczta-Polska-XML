<?php

/**
 * Klasa PocztaPolskaPrzesylkaAdresat jest reprezentantem struktury Przesylka/Adresat
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';
require_once '../PocztaPolska/ElementXML.php';
require_once 'PocztaPolskaPrzesylka.php';

class PocztaPolskaPrzesylkaAdresat extends PocztaPolska implements ElementXML {

    /**
     * Oznaczenie pierwszego członu nazwy adresata przesyłki.
     * @var string 
     */
    public $nazwa;
    
    /**
     * Oznaczenie drugiego członu nazwy adresata przesyłki.
     * @var string
     */
    public $nazwaII;
    
    /**
     * Oznaczenie ulicy adresata przesyłki. 
     * @var string 
     */
    public $ulica;
    
    /**
     * Oznaczenie domu adresata przesyłki, pole max 5-znakowe. 
     * @var string 
     */
    public $dom;
    
    /**
     * Oznaczenie lokalu adresata przesyłki, pole max 5-znakowe 
     * @var string 
     */
    public $lokal;
    
    /**
     * Oznaczenie miejscowości adresata przesyłki. 
     * @var string 
     */
    public $miejscowosc;
    
    /**
     * Oznaczenie kodu pocztowego adresata przesyłki. 
     * @var int 
     */
    public $kod;
    
    /**
     * Oznaczenie kraju adresata przesyłki. Pole tekstowe, zawierające nazwę kraju
     * adresata przesyłki (Polska). 
     * @var string 
     */
    public $kraj;
    
    /**
     * Konstruktor
     */
    public function __construct() {
        if (!$this->guid) {
            $this->guid = $this->generujGuid();
        }
    } 
    
    /**
     * Metoda ustawia reguly walidacji
     * @return array
     */
    public function regulyWalidacji() {
        return array(
            array(
                'pole' => 'nazwa',
                'wymagane' => true,
                'typ' => 'string'
            ),
            array(
                'pole' => 'nazwaII',
                'wymagane' => false,
                'typ' => 'string'
            ),                
            array(
                'pole' => 'ulica',
                'wymagane' => false,
                'typ' => 'string'
            ),                
            array(
                'pole' => 'dom',
                'wymagane' => true,
                'typ' => 'string'
            ),
            array(
                'pole' => 'lokal',
                'wymagane' => false,
                'typ' => 'string'
            ),
            array(
                'pole' => 'miejscowosc',
                'wymagane' => true,
                'typ' => 'string'
            ),
            array(
                'pole' => 'kod',
                'wymagane' => true,
                'typ' => 'string'
            ),                
            array(
                'pole' => 'kraj',
                'wymagane' => true,
                'typ' => 'string'
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
    
    /**
     * Metoda generuje czesc wynikowego pliku xml
     */
    public function generujXML() {
        
    }        
}
?>
