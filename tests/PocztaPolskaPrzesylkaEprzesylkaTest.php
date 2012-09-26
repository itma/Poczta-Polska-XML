<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaPrzesyklaEprzesylka
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Przesylka/PocztaPolskaPrzesylkaEprzesylka.php');

class PocztaPolskaPrzesylkaEprzesylkaTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaPrzesyklaEprzesylka
     * @var object PocztaPolskaPrzesyklaEprzesylka
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaPrzesylkaEprzesylka();
    }  
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('symbol', $this->_object);
        $this->assertObjectHasAttribute('nrNadania', $this->_object);
        $this->assertObjectHasAttribute('masa', $this->_object);
        $this->assertObjectHasAttribute('umowa', $this->_object);
        $this->assertObjectHasAttribute('kartaUmowy', $this->_object);
        $this->assertObjectHasAttribute('ilosc', $this->_object);
        $this->assertObjectHasAttribute('uslugi', $this->_object);
        $this->assertObjectHasAttribute('wartosc', $this->_object);
        $this->assertObjectHasAttribute('kwotaPobrania', $this->_object);
        $this->assertObjectHasAttribute('sposobPobrania', $this->_object);
        $this->assertObjectHasAttribute('sposobPowiadomieniaAdresata', $this->_object);
        $this->assertObjectHasAttribute('sposobPowiadomieniaNadawcy', $this->_object);
        $this->assertObjectHasAttribute('kontaktNadawcy', $this->_object);
        $this->assertObjectHasAttribute('kontaktAdresata', $this->_object);
        $this->assertObjectHasAttribute('kodUP', $this->_object);
        $this->assertObjectHasAttribute('miejscowoscUP', $this->_object);
        $this->assertObjectHasAttribute('guid', $this->_object);
    }
    
    public function testRegulyWalidacji() {
        $this->assertInternalType('array', $this->_object->regulyWalidacji());
    }    
}
?>
