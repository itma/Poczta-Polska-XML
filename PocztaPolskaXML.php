<?php

/**
 * Klasa PocztaPolskaXML sluzy do generowania pliku XML zgodnego ze standardem EKN. Plik
 * XML zwyczajowo wykorzystywany do komunikacji Klient - Poczta Polska.
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once 'PocztaPolska/PocztaPolska.php';
require_once 'PocztaPolska/ElementXML.php';

class PocztaPolskaXML extends PocztaPolska implements ElementXML {
    
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
     * Metoda dodaje nadawce do obiektu
     * @param PocztaPolskaNadawca $nadawca 
     */
    public function dodajNadawce(PocztaPolskaNadawca $nadawca) {
        if ($nadawca->waliduj()) {
            $this->_nadawca = $nadawca;
        } else {
            throw new Exception('Obiekt nadawcy nie zostal wypelniony wymaganymi danymi.');
        }
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
        if ($zbior->waliduj()) {
            $this->_zbior = $zbior;
        } else {
            throw new Exception('Obiekt zbioru nie zostal wypelniony wymaganymi danymi.');
        }
    }
    
    /**
     *
     * @return PocztaPolskaZbior lub null gdy nie ustawiony 
     */
    public function zbior() {
        return is_object($this->_zbior) ? $this->_zbior : null;
    }
    
    /**
     * Metoda dodaje przesylke do zbioru przesylek
     */
    public function dodajPrzesylke($przesylka) {
        if (!in_array('PocztaPolskaPrzesylka', class_parents(get_class($przesylka)))) {
            throw new Exception('Obiekt przesylki musi byc rozszerzany z obiektu PocztaPolskaPrzesylka');
        }
        if ($przesylka->waliduj()) {
            $this->_przesylka[] = $przesylka;
        } else {
            throw new Exception('Obiekt przesylki nie zostal wypelniony wymaganymi danymi.');
        }        
    }
    
    /**
     * Metoda zwraca liste dolaczonych przesylek
     * @return array
     */
    public function przesylki() {
        return is_array($this->_przesylka) ? $this->_przesylka : null;
    }
    
    /**
     * Metoda ustawia reguly walidacji
     * @return array
     */
    public function regulyWalidacji() {
        return array(
            array(
                'pole' => '_zbior',
                'wymagane' => true,
                'typ' => 'object'
            ),
            array(
                'pole' => '_nadawca',
                'wymagane' => true,
                'typ' => 'object'
            ),            
            array(
                'pole' => '_przesylka',
                'wymagane' => true,
                'typ' => 'array'
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
        
    }    
}

?>
