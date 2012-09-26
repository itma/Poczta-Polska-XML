<?php

/**
 * Klasa PocztaPolskaNadawca jest reprezentantem struktury Nadawca
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';
require_once '../PocztaPolska/ElementXML.php';

class PocztaPolskaNadawca extends PocztaPolska implements ElementXML {
 
    /**
     * Numer wersji struktury w oparciu, o który został utworzony plik XML
     * zawierający definicje przesyłek pocztowych.
     * 
     * @var string
     */
    public $struktura = '1.6';    
    
    /**
     * Nazwa nadawcy (podmiotu, dla którego utworzony został plik z przesyłkami 
     * do nadania). Pole ograniczone do 60 znaków. 
     * @var string 
     */
    public $nazwa;
    
    /**
     * Nazwa skrócona klienta nadającego przesyłki. Długość pola od 6 do 10 znaków. 
     * @var string 
     */
    public $nazwaSkrocona;
    
    /**
     * Nazwa ulicy nadawcy. Pole ograniczone do 30 znaków.
     * @var string 
     */
    public $ulica;
    
    /**
     * Oznaczenie domu nadawcy przesyłek. Pole ograniczone do 5 znaków.  
     * @var string 
     */
    public $dom;
    
    /**
     * Oznaczenie domu nadawcy przesyłek. Pole ograniczone do 5 znaków
     * @var string 
     */
    public $lokal;
    
    /**
     * Oznaczenie miejscowości nadawcy przesyłek. Pole ograniczone do 30 znaków. 
     * @var string 
     */
    public $miejscowosc;
    
    /**
     * Oznaczenie kodu pocztowego nadawcy przesyłek. Pole musi mieć 5 cyfr. 
     * @var int 
     */
    public $kod;
    
    /**
     * Oznaczenie NIP’u nadawcy przesyłek. Pole musi mieć 10 cyfr
     * @var int 
     */
    public $nip;
    
    /**
     * Oznaczenie miejsca tworzenia przesyłek. Pole musi mieć wartość 'NADAWCA'
     * @var string 
     */
    public $zrodlo;
    
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
                'pole' => 'struktura',
                'wymagane' => true,
                'typ' => 'string'
            ),
            array(
                'pole' => 'nazwa',
                'wymagane' => true,
                'typ' => 'string'
            ),
            array(
                'pole' => 'nazwaSkrocona',
                'wymagane' => true,
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
                'typ' => 'int'
            ),
            array(
                'pole' => 'nip',
                'wymagane' => true,
                'typ' => 'int'
            ),
            array(
                'pole' => 'zrodlo',
                'wymagane' => true,
                'typ' => 'string'
            ),            
            array(
                'pole' => 'guid',
                'wymagane' => true,
                'typ' => 'string'
            ),            
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
        // implementacja w klasach potomnych
    }
    
}
?>
