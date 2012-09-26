<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaNadawca
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Nadawca/PocztaPolskaNadawca.php');

class PocztaPolskaNadawcaTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaNadawca
     * @var object PocztaPolskaNadawca
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaNadawca();
    }
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('nazwa', $this->_object);
        $this->assertObjectHasAttribute('nazwaSkrocona', $this->_object);
        $this->assertObjectHasAttribute('ulica', $this->_object);
        $this->assertObjectHasAttribute('dom', $this->_object);
        $this->assertObjectHasAttribute('lokal', $this->_object);
        $this->assertObjectHasAttribute('miejscowosc', $this->_object);
        $this->assertObjectHasAttribute('kod', $this->_object);
        $this->assertObjectHasAttribute('nip', $this->_object);
        $this->assertObjectHasAttribute('zrodlo', $this->_object);
        $this->assertObjectHasAttribute('guid', $this->_object);
    }
    
    public function testRegulyWalidacji() {
        $this->assertInternalType('array', $this->_object->regulyWalidacji());
    }        
    
    public function testGenerujGuid() {
        $this->assertInternalType('string', $this->_object->generujGuid());
    }       
    
    public function testDodajAdresata() {
        $adresat = new PocztaPolskaPrzesylkaAdresat();
        $adresat->nazwa = 'Jan Kowalski';
        $adresat->ulica = 'Wojskowa';
        $adresat->lokal = '1';
        $adresat->dom = '10';
        $adresat->kod = '61000';
        $adresat->miejscowosc = 'Poznań';
        $adresat->kraj = 'Polska';
        $przesylka = new PocztaPolskaPrzesylka();
        $przesylka->dodajAdresata($adresat);
        $this->assertInstanceOf('PocztaPolskaPrzesylkaAdresat', $przesylka->adresat());
    }
}
?>
