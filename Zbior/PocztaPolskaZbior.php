<?php

/**
 * Klasa PocztaPolskaNadawca jest reprezentantem struktury Zbior
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once '../PocztaPolska/PocztaPolska.php';

class PocztaPolskaZbior extends PocztaPolska implements ElementXML {

    /**
     * Nazwa zbioru, jaka została nadana przez system; w formacie: rrrr-mm-dd\lp
     * Przykład: 2009-06-18\1, nazwą zbioru jest rok-miesiąc-dzień, symbol „\”, 
     * nr kolejny zbioru utworzonego w danym dniu. 
     * 
     * Nazwa zbioru moze zostac podana jako liczba calkowita - wtedy zostanie wygenerowana
     * jako kolejna nazwa na dzien dzisiejszy
     * @var string 
     */
    public $nazwa;
    
    /**
     * Data i godzina utworzenia zbioru przesyłek; w formacie: rrrr-mm-ddThh:mm:ss
     * @var datatime 
     */
    public $dataUtworzenia;
    
    /**
     * Opis, jaki został zdefiniowany dla zbioru przesyłek. 
     * @var string 
     */
    public $opis;
    
    /**
     * Ilość przesyłek znajdujących się w zbiorze przesyłek 
     * @var int 
     */
    public $iloscPrzesylek;
    
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
                'pole' => 'dataUtworzenia',
                'wymagane' => true,
                'typ' => 'string'
            ),
            array(
                'pole' => 'opis',
                'wymagane' => false,
                'typ' => 'string'
            ),
            array(
                'pole' => 'iloscPrzesylek',
                'wymagane' => false,
                'typ' => 'int'
            ),
            array(
                'pole' => 'guid',
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
        
        if (!$this->dataUtworzenia) {
            $this->dataUtworzenia = gmdate("Y-m-d\TH:i:s");
        }
        if (!$this->nazwa) {
            $this->nazwa = date('Y-m-d') . '\\1';
        } else if (is_int($this->nazwa)) {
            $this->nazwa = date('Y-m-d') . '\\' . $this->nazwa;
        }                
        
        return parent::waliduj();
    }
    
    /**
     * Metoda generuje czesc wynikowego pliku xml
     * @return DOMNode
     */
    public function generujXML() {
        $element = $this->xml->createElement($this->ElementXmlNazwa());

        foreach ($this->regulyWalidacji() as $regula) {
            $atrybut = $this->xml->createAttribute($regula['pole']);
            $atrybut->value = $this->$regula['pole'];
            $element->appendChild($atrybut);
        }            

        return $this->xml->appendChild($element);
    }
    
    /**
     * Metoda zwraca nazwe elementu xml
     * z tego modelu
     * @return string
     */
    public function ElementXmlNazwa() {
        return 'Zbior';
    }     
}
?>
