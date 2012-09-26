<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaPrzesylkaPocztex
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Przesylka/PocztaPolskaPrzesylkaPocztex.php');

class PocztaPolskaPrzesylkaPocztexTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaPrzesylkaPocztex
     * @var object PocztaPolskaPrzesylkaPocztex
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaPrzesylkaPocztex();
    }  
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('symbol', $this->_object);
        $this->assertObjectHasAttribute('nrNadania', $this->_object);
        $this->assertObjectHasAttribute('masa', $this->_object);
        $this->assertObjectHasAttribute('umowa', $this->_object);
        $this->assertObjectHasAttribute('kartaUmowy', $this->_object);
        $this->assertObjectHasAttribute('ilosc', $this->_object);
        $this->assertObjectHasAttribute('uslugi', $this->_object);
        $this->assertObjectHasAttribute('wersja', $this->_object);
        $this->assertObjectHasAttribute('odleglosc', $this->_object);
        $this->assertObjectHasAttribute('termin', $this->_object);
        $this->assertObjectHasAttribute('uiszczaOplate', $this->_object);
        $this->assertObjectHasAttribute('typ', $this->_object);
        $this->assertObjectHasAttribute('ponadwymiarowa', $this->_object);
        $this->assertObjectHasAttribute('guid', $this->_object);
    }    
    
    public function testRegulyWalidacji() {
        $this->assertInternalType('array', $this->_object->regulyWalidacji());
    }    
}
?>
