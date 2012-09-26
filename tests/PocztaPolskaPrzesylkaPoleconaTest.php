<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaPrzesylkaPolecona
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Przesylka/PocztaPolskaPrzesylkaPolecona.php');

class PocztaPolskaPrzesylkaPoleconaTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaPrzesylkaPolecona
     * @var object PocztaPolskaPrzesylkaPolecona
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaPrzesylkaPolecona();
    }  
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('symbol', $this->_object);
        $this->assertObjectHasAttribute('nrNadania', $this->_object);
        $this->assertObjectHasAttribute('masa', $this->_object);
        $this->assertObjectHasAttribute('umowa', $this->_object);
        $this->assertObjectHasAttribute('kartaUmowy', $this->_object);
        $this->assertObjectHasAttribute('kategoria', $this->_object);
        $this->assertObjectHasAttribute('posteRestante', $this->_object);
        $this->assertObjectHasAttribute('egzBibl', $this->_object);
        $this->assertObjectHasAttribute('dlaOciem', $this->_object);
        $this->assertObjectHasAttribute('ilosc', $this->_object);
        $this->assertObjectHasAttribute('uslugi', $this->_object);
        $this->assertObjectHasAttribute('iloscPotwOdb', $this->_object);
        $this->assertObjectHasAttribute('strefa', $this->_object);
        $this->assertObjectHasAttribute('wersja', $this->_object);
        $this->assertObjectHasAttribute('guid', $this->_object);
    }
    
    public function testRegulyWalidacji() {
        $this->assertInternalType('array', $this->_object->regulyWalidacji());
    }
}
?>
