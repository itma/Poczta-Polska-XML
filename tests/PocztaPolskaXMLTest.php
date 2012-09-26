<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaXML
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Przesylka/PocztaPolskaPrzesylka.php');
require_once('../Nadawca/PocztaPolskaNadawca.php');
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
        $nadawca->guid = '123';
        $this->_object->dodajNadawce($nadawca);
        $this->assertInstanceOf('PocztaPolskaNadawca', $this->_object->nadawca());
    }
    
    public function testDodajZbior() {
        $zbior = new PocztaPolskaZbior();
        $zbior->nazwa = '2009-06-18\1';
        $zbior->dataUtworzenia = '2012-12-12T11:23:54';
        $zbior->opis = 'Opis';
        $zbior->iloscPrzesylek = 1;
        $zbior->guid = '123';
        $this->_object->dodajZbior($zbior);
        $this->assertInstanceOf('PocztaPolskaZbior', $this->_object->zbior());
    }
}
?>
