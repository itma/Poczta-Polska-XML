<?php

/**
 * Klasa PocztaPolska
 * @author Andrzej Bernat <andrzej@itma.pl>
 */
abstract class PocztaPolska {
    
    /**
     * Nazwy pol wykorzystywanych w strukturze xml
     * @var const
     */
    const ATRYBUT = 'Atrybut';
    const TYP = 'Typ';
    const NAZWA = 'Nazwa';
    const ADRESAT = 'Adresat';
    
    /**
     * Unikalny identyfikator nadawcy przesyłek. Pole posiada wartość wyliczoną
     * zgodnie z algorytmem definiowania nr GUID. Kolejne przesyłki tego samego
     * nadawcy muszą zawierać inną wartość pola GUID. 
     * @var string 
     */
    public $guid;
    
    /**
     * Zawartosc pliku xml
     * @var string
     */
    protected $xml;    
    
    /**
     * Konstruktor
     */
    public function __construct() {
    }
    
    /**
     * Walidacja pol obiektu
     * @return boolean
     */
    public function waliduj() {
        foreach ($this->regulyWalidacji() as $regula) {
            if ($regula['wymagane'] && empty($this->$regula['pole'])) {
                return false;
            }
        }
        return true;
    } 
    
   /**
     * Metoda zwraca obiekt DOMNode
     * @return DOMNode 
     */
    public function xml() {
        return is_object($this->xml) ? $this->xml : null;
    }
    
    /**
     * Metoda ustawia xml
     * @param DOMDocument $dom 
     */
    public function dodajXML(DOMDocument $dom) {
        $this->xml = $dom;
    }    
    
    /**
     * Metoda generuje deklaracje XML
     * @return DOMDocument
     */
    public function generujXML() {
        // deklaracja xml
        $this->xml = new DOMDocument('1.0', 'ISO-8859-2');        
        return $this->xml;
    }    

    /**
     * Metoda zwraca dostepne z zewnatrz obiektu pola publiczne
     * @return array
     */
    public function dostepnePola() {
        $dostepnePola = array();
        foreach ($this->regulyWalidacji() as $regula) {
            if (strpos($regula['pole'], '_') !== 0 || strpos($regula['pole'], '_') === false) {
                $dostepnePola[] = $regula['pole'];
            }
        }
        return $dostepnePola;
    }    
    
    /**
     * Metoda zwraca globalne ID
     * @see http://php.net/manual/pl/function.com-create-guid.php#52354
     */
    public function generujGuid() {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        } else {
            mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = chr(123)// "{"
                    .substr($charid, 0, 8).$hyphen
                    .substr($charid, 8, 4).$hyphen
                    .substr($charid,12, 4).$hyphen
                    .substr($charid,16, 4).$hyphen
                    .substr($charid,20,12)
                    .chr(125);// "}"
            return $uuid;
        }
    }
}
?>
