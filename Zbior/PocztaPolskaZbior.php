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
                'wymagane' => true,
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
