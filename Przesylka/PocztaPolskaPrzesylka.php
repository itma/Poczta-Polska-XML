<?php

/**
 * Klasa PocztaPolskaPrzesylka jest reprezentantem struktury Przesylka
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';
require_once '../PocztaPolska/ElementXML.php';

class PocztaPolskaPrzesylka extends PocztaPolska implements ElementXML {

    /**
     * Obiekt zawierajacy adresata przesylki
     * @var object PocztaPolskaPrzesylkaAdresat
     */
    protected $_adresat;
    
    /**
     * Cyfrowy symbol odpowiadający typowi przesyłki
     * @var int
     */
    public $symbol;

    /**
     * Masa przesyłki, podana w gramach. Pole ograniczone do 2000 gramów.
     * @var int
     */
    public $masa;

    /**
     * Oznaczenie umowy na podstawie, której nadawane są przesyłki pocztowe. Pole
     * posiadać może konkretną wartość odpowiadającą oznaczeniu umowy lub wpis
     * Bez umowy.
     * @var int
     */
    public $umowa;

    /**
     * Oznaczenie karty na podstawie, której nadawane są przesyłki pocztowe. Pole
     * posiadać może konkretną wartość odpowiadającą oznaczeniu karty umowy.
     * @var int
     */
    public $kartaUmowy;

    /**
     * Informuje o ilości przesyłek; domyślną wartością jest 1.
     * @var int
     */
    public $ilosc;

    /**
     * Numer wersji struktury danych dla danego rodzaju przesyłki. Aktualnym numerem
     * wersji jest 1
     * @var int
     */
    public $wersja;

    /**
     * Konstruktor
     */
    public function __construct() {
        if (!$this->guid) {
            $this->guid = $this->generujGuid();
        }
        if (!$this->wersja) {
            $this->wersja = 1;
        }
    }    
    
    /**
     * Metoda dodaje adresata przesylki
     * @param PocztaPolskaPrzesylkaAdresat $adresat 
     */
    public function dodajAdresata(PocztaPolskaPrzesylkaAdresat $adresat) {
        if ($adresat->waliduj()) {
            $this->_adresat = $adresat;
        } else {
            throw new Exception('Obiekt adresata nie zostal wypelniony wymaganymi danymi.');
        }
    }

    /**
     * Metoda zwraca obiekt adresata
     * @return object PocztaPolskaPrzesylkaAdresat
     */
    public function adresat() {
        return is_object($this->_adresat) ? $this->_adresat : null;
    }
    
    /**
     * Metoda ustawia reguly walidacji
     * @return array
     */
    public function regulyWalidacji() {
        return array(
            array(
                'pole' => 'symbol',
                'wymagane' => true,
                'typ' => 'int'
            ),
            array(
                'pole' => 'masa',
                'wymagane' => false,
                'typ' => 'int'
            ),
            array(
                'pole' => 'umowa',
                'wymagane' => false,
                'typ' => 'int'
            ),
            array(
                'pole' => 'kartaUmowy',
                'wymagane' => false,
                'typ' => 'int'
            ),
            array(
                'pole' => 'ilosc',
                'wymagane' => true,
                'typ' => 'int'
            ),
            array(
                'pole' => 'wersja',
                'wymagane' => true,
                'typ' => 'int'
            ),
            array(
                'pole' => 'guid',
                'wymagane' => true,
                'typ' => 'string'
            ),
            array(
                'pole' => '_adresat',
                'wymagane' => true,
                'typ' => 'object'
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
