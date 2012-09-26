<?php

/**
 * Klasa PocztaPolska
 * @author Andrzej Bernat <andrzej@itma.pl>
 */
abstract class PocztaPolska {
    
    /**
     * Unikalny identyfikator nadawcy przesyłek. Pole posiada wartość wyliczoną
     * zgodnie z algorytmem definiowania nr GUID. Kolejne przesyłki tego samego
     * nadawcy muszą zawierać inną wartość pola GUID. 
     * @var string 
     */
    public $guid;  
    
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
     * Metoda zwraca globalne ID
     */
    public function generujGuid() {
        return 'fakeGuid';
    }
}
?>
