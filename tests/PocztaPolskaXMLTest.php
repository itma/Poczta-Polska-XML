<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaXML
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Przesylka/PocztaPolskaPrzesylkaListowaZwykla.php');
require_once('../Nadawca/PocztaPolskaNadawca.php');
require_once('../Przesylka/PocztaPolskaPrzesylkaAdresat.php');
require_once('../Zbior/PocztaPolskaZbior.php');
require_once('../PocztaPolskaXML.php');

class PocztaPolskaXMLTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaXML
     * @var object PocztaPolskaXML
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaXML();
    }
    
    public function testWaliduj() {
        $this->assertInternalType('boolean', $this->_object->waliduj());
    }        
    
    public function testRegulyWalidacji() {
        $this->assertInternalType('array', $this->_object->regulyWalidacji());
    }    
    
    public function testDostepnePola() {
        $this->assertInternalType('array', $this->_object->dostepnePola());
    }
    
    public function testDodajNadawce() {
        $nadawca = new PocztaPolskaNadawca();
        $nadawca->nazwa = 'Jan Kowalski';
        $nadawca->nazwaSkrocona = 'janko';
        $nadawca->ulica = 'Obrońców Westerplatte';
        $nadawca->dom = '10';
        $nadawca->lokal = '1c';
        $nadawca->miejscowosc = 'Gdańsk';
        $nadawca->kod = 72382;
        $nadawca->nip = 594147382;
        $nadawca->zrodlo = 'NADAWCA';
        $this->_object->dodajNadawce($nadawca);
        $this->assertInstanceOf('PocztaPolskaNadawca', $this->_object->nadawca());
    }
    
    public function testDodajZbior() {
        $zbior = new PocztaPolskaZbior();
        $zbior->nazwa = '2009-06-18\1';
        $zbior->dataUtworzenia = '2012-12-12T11:23:54';
        $zbior->opis = 'Opis';
        $zbior->iloscPrzesylek = 1;
        $this->_object->dodajZbior($zbior);
        $this->assertInstanceOf('PocztaPolskaZbior', $this->_object->zbior());
    }
    
    public function testDodajPrzesylke() {
        $przesylka = new PocztaPolskaPrzesylkaListowaZwykla();
        $przesylka->ilosc = '1';
        $przesylka->kategoria = 'E';
        $przesylka->posteRestante = 'N';
        $przesylka->egzBibl = 'N';
        $przesylka->dlaOciem = 'N';
        $przesylka->strefa = 'A';
        
        $adresat = new PocztaPolskaPrzesylkaAdresat();
        $adresat->nazwa = 'Jan Kowalski';
        $adresat->ulica = 'Wojskowa';
        $adresat->lokal = '1';
        $adresat->dom = '10';
        $adresat->kod = '61000';
        $adresat->miejscowosc = 'Poznań';
        $adresat->kraj = 'Polska';
        $przesylka->dodajAdresata($adresat);
        
        $this->_object->dodajPrzesylke($przesylka);
        $this->assertInternalType('array', $this->_object->przesylki());
        $przesylki = $this->_object->przesylki();
        $this->assertInstanceOf('PocztaPolskaPrzesylkaListowaZwykla', $przesylki[0]);
    }
    
    public function testGenerujXML() {

        $nadawca = new PocztaPolskaNadawca();
        $nadawca->nazwa = 'Jan Kowalski';
        $nadawca->nazwaSkrocona = 'janko';
        $nadawca->ulica = 'Obrońców Westerplatte';
        $nadawca->dom = '10';
        $nadawca->lokal = '1c';
        $nadawca->miejscowosc = 'Gdańsk';
        $nadawca->kod = 72382;
        $nadawca->nip = 594147382;
        $nadawca->zrodlo = 'NADAWCA';
        $this->_object->dodajNadawce($nadawca);        
        
        $zbior = new PocztaPolskaZbior();
        $zbior->nazwa = '2009-06-18\1';
        $zbior->dataUtworzenia = '2012-12-12T11:23:54';
        $zbior->opis = 'Opis';
        $zbior->iloscPrzesylek = 1;
        $this->_object->dodajZbior($zbior);        
        
        $adresat = new PocztaPolskaPrzesylkaAdresat();
        $adresat->nazwa = 'Jan Kowalski';
        $adresat->ulica = 'Wojskowa';
        $adresat->lokal = '1';
        $adresat->dom = '10';
        $adresat->kod = '61000';
        $adresat->miejscowosc = 'Poznań';
        $adresat->kraj = 'Polska';
        
        $przesylka = new PocztaPolskaPrzesylkaListowaZwykla();
        $przesylka->ilosc = '1';
        $przesylka->kategoria = 'E';
        $przesylka->posteRestante = 'N';
        $przesylka->egzBibl = 'N';
        $przesylka->dlaOciem = 'N';
        $przesylka->strefa = 'A';        
        $przesylka->dodajAdresata($adresat);
        $this->_object->dodajPrzesylke($przesylka);
        
        $this->_object->generujXML();
    }
}
?>
