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
    protected $_zbior;
    
    /**
     * Obiekt nadawcy
     * @var object PocztaPolskaNadawca
     */
    protected $_nadawca;
    
    /**
     * Tablica obiektow PocztaPolskaPrzesylka
     * @var array tablica obiektow PocztaPolskaPrzesylka
     */
    protected $_przesylka = array();
    
    /**
     * Sciezka do pliku w ktorym zostanie zapisany wynikowy xml
     * Format /home/user/
     * @var string
     */
    public $plik;
    
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
     * Metoda generuje wynikowy xml
     * @return string
     */
    public function generujXML() {
        parent::generujXML();
        
        if ($this->waliduj() &&
            $this->_nadawca->waliduj() &&
            $this->_zbior->waliduj()) {
            $this->_nadawca->dodajXML($this->xml());
            $this->_nadawca->generujXML();
            $this->_zbior->dodajXML($this->xml());
            $zbiorXML = $this->_zbior->generujXML();
            
            // przesylka
            foreach ($this->przesylki() as $przesylka) {
                if (!$przesylka->waliduj()) {
                    throw new Exception('Podczas generowania pliku XML wystapily bledy. Obiekt ktorejs z przesylek nie jest wypelniony poprawnie.');
                } else {
                    $przesylka->dodajXML($this->xml());
                    $przesylkaXML = $przesylka->generujXML();
                    $zbiorXML->appendChild($przesylkaXML);
                }
            }                  
            echo $this->xml()->saveXML();
        } else {
            throw new Exception('Podczas generowania pliku XML wystapily bledy. Obiekt PocztaPolskaXML nie jest wypelniony poprawnie lub ktorys z obiektow dolaczonych.');
        }
    }   
    
    /**
     * Metoda zwraca nazwe elementu xml
     * z tego modelu
     * @return string
     */
    public function ElementXmlNazwa() {
        return 'PocztaPolskaXML';
    } 
    
    /**
     * Metoda zapisuje wygenerowany xml na dysk
     * return boolean
     */
    public function zapiszXML() {
        $xml = $this->generujXML();
        if ($this->plik) {
            return file_put_contents($this->plik . $this->generujNazwePliku(), $xml, LOCK_EX);
        } else {
            throw new Exception('Nie mozna zapisac xml do pliku. Sciezka do pliku do ktorego ma zostac zapisana zawartosc nie zostala podana.');
        }
    }
    
    /**
     * Metoda zwraca nazwe pliku w ktorym zostanie zapisana struktura xml
     * @return string
     */
    public function generujNazwePliku() {
        return date('ymd') . '_' . date('His') . '_' . $this->_nadawca->nazwaSkrocona;
    }
}

?>
