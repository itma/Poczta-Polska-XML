<?php

/**
 * Klasa PocztaPolskaPrzesylka jest reprezentantem struktury Przesylka
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once 'PocztaPolska.php';

class PocztaPolskaPrzesylka extends PocztaPolska {
    
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
     * Metoda jesli przyjmuje jako parametr wartosc inna niz null to wartosc
     * ta jest ustawiana w polu 'rodzaj wysylki'. Jesli nie przyjmuje zadnego
     * parametru to zwraca wczesniej ustawiona wartosc.
     * @param string $rodzajPrzesylki (@see Obslugiwane rodzaje przesylek)
     * @return string
     */
    public function rodzajPrzesylki($rodzajPrzesylki = null) {
        if (is_null($rodzajPrzesylki)) {
            return $this->symbol;
        } else {
            return $this->symbol = $rodzajPrzesylki;
        }
    }
    
    /**
     * Metoda zwraca ID uslugi w systemie Poczty Polskiej
     * @return int
     */
    public function id() {
        return self::ID;
    }
}
?>
