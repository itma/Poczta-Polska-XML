<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaPrzesylkaListowaZwykla
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../PocztaPolskaPrzesylkaListowaZwykla.php');

class PocztaPolskaPrzesylkaListowaZwyklaTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaPrzesylkaListowaZwyklaTest
     * @var object PocztaPolskaPrzesylkaListowaZwyklaTest
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaPrzesylkaListowaZwykla();
    }  
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('symbol', $this->_object);
        $this->assertObjectHasAttribute('masa', $this->_object);
        $this->assertObjectHasAttribute('umowa', $this->_object);
        $this->assertObjectHasAttribute('kartaUmowy', $this->_object);
        $this->assertObjectHasAttribute('kategoria', $this->_object);
        $this->assertObjectHasAttribute('posteRestante', $this->_object);
        $this->assertObjectHasAttribute('egzBibl', $this->_object);
        $this->assertObjectHasAttribute('dlaOciem', $this->_object);
        $this->assertObjectHasAttribute('ilosc', $this->_object);
        $this->assertObjectHasAttribute('strefa', $this->_object);
        $this->assertObjectHasAttribute('wersja', $this->_object);
        $this->assertObjectHasAttribute('guid', $this->_object);
    }    
}
?>
