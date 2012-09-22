<?php

/**
 * Klasa PocztaPolskaXML sluzy do generowania pliku XML zgodnego ze standardem EKN. Plik
 * XML zwyczajowo wykorzystywany do komunikacji Klient - Poczta Polska.
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once 'PocztaPolska.php';

class PocztaPolskaXML extends PocztaPolska {
    
    /**
     * Obiekt zbioru
     * @var object PocztaPolskaZbior
     */
    private $_zbior;
    
    /**
     * Obiekt nadawcy
     * @var object PocztaPolskaNadawca
     */
    private $_nadawca;
    
    /**
     * Tablica obiektow PocztaPolskaPrzesylka
     * @var array tablica obiektow PocztaPolskaPrzesylka
     */
    private $_przesylka = array();
    
    /**
     * Numer wersji struktury w oparciu, o który został utworzony plik XML
     * zawierający definicje przesyłek pocztowych.
     * 
     * @var string
     */
    const STRUKTURA = '1.6';

    /**
     * Metoda dodaje nadawce do obiektu
     * @param PocztaPolskaNadawca $nadawca 
     */
    public function dodajNadawce(PocztaPolskaNadawca $nadawca) {
        $this->_nadawca = $nadawca;
    }
    
    /**
     *
     * @return object PocztaPolskaNadawca lub null gdy nie jest ustawiony
     */
    public function nadawca() {
        return is_object($this->_nadawca) ? $this->_nadawca : null;
    }
    
    /**
     * Dodaje zbior do obiektu
     * @param PocztaPolskaZbior $zbior 
     */
    public function dodajZbior(PocztaPolskaZbior $zbior) {
        $this->_zbior = $zbior;
    }
    
    /**
     *
     * @return PocztaPolskaZbior lub null gdy nie ustawiony 
     */
    public function zbior() {
        return is_object($this->_zbior) ? $this->_zbior : null;
    }
    
    /**
     * Metoda zwraca zawartosc pliku XML
     * @return string
     */
    public function generujPlik() {
        switch ($this->rodzajPrzesylki()) {
            case PocztaPolskaXML::POCZTOWA:
                break;
            case PocztaPolskaXML::POBRANIOWA:
                break;
            default:
                throw New Exception('Nieznany rodzaj przesylki.');
        }
    }
}

?>
