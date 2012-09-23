<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaXML
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../PocztaPolskaPrzesylka.php');
require_once('../PocztaPolskaNadawca.php');
require_once('../PocztaPolskaZbior.php');
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
        $nadawca->guid = '';
        $this->_object->dodajNadawce($nadawca);
        $this->assertInstanceOf('PocztaPolskaNadawca', $this->_object->nadawca());
    }
    
    public function testDodajZbior() {
        $zbior = new PocztaPolskaZbior();
        $zbior->nazwa = '2009-06-18\1';
        $zbior->dataUtworzenia = '2012-12-12T11:23:54';
        $zbior->opis = 'Opis';
        $zbior->iloscPrzesylek = 1;
        $zbior->guid = '';
        $this->_object->dodajZbior($zbior);
        $this->assertInstanceOf('PocztaPolskaZbior', $this->_object->zbior());
    }
    
    public function testDodajPrzesylki() {
        
        $this->markTestIncomplete('Test niekompletny.');        
        
        $przesylki = array();
        $przesylki[0] = new PocztaPolskaPrzesylkaPobraniowa();
        $przesylki[0]->symbol = 846;
        $przesylki[0]->nrNadania = '';
        $przesylki[0]->masa = '';
        $przesylki[0]->umowa = '';
        $przesylki[0]->kartaUmowy = '';
        $przesylki[0]->kategoria = '';
        $przesylki[0]->posteRestante = '';
        $przesylki[0]->egzBibl = '';
        $przesylki[0]->dlaOciem = '';
        $przesylki[0]->ilosc = '';
        $przesylki[0]->uslugi = '';
        $przesylki[0]->wartosc = '';
        $przesylki[0]->iloscPotwOdb = '';
        $przesylki[0]->strefa = '';
        $przesylki[0]->wersja = '';
        $przesylki[0]->nazwa = '';
        $przesylki[0]->nazwaII = '';
        $przesylki[0]->ulica = '';
        $przesylki[0]->dom = '';
        $przesylki[0]->lokal = '';
        $przesylki[0]->miejscowosc = '';
        $przesylki[0]->kod = '';
        $przesylki[0]->kraj = '';
        $przesylki[0]->kwotaPobrania = '';
        $przesylki[0]->sposobPobrania = '';
        $przesylki[0]->sposobPowiadomieniaAdresata = '';
        $przesylki[0]->sposobPowiadomieniaNadawcy = '';
        $przesylki[0]->kontaktNadawcy = '';
        $przesylki[0]->kontaktAdresata = '';
        $przesylki[0]->kodUP = '';
        $przesylki[0]->miejscowoscUP = '';
        $przesylki[0]->odleglosc = '';
        $przesylki[0]->termin = '';
        $przesylki[0]->uiszczaOplate = '';
        $przesylki[0]->typ = '';
        $przesylki[0]->ponadwymiarowa = '';
                
    }
    
    public function testGenerujPlik() {
        $this->markTestIncomplete('Test niekompletny.');        
        $this->_object->generujPlik();
    }
}
?>
