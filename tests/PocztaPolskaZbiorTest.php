<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaZbior
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Zbior/PocztaPolskaZbior.php');

class PocztaPolskaZbiorTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaZbior
     * @var object PocztaPolskaZbior
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaZbior();
    }
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('nazwa', $this->_object);
        $this->assertObjectHasAttribute('dataUtworzenia', $this->_object);
        $this->assertObjectHasAttribute('opis', $this->_object);
        $this->assertObjectHasAttribute('iloscPrzesylek', $this->_object);
        $this->assertObjectHasAttribute('guid', $this->_object);
    }
    
    public function testRegulyWalidacji() {
        $this->assertInternalType('array', $this->_object->regulyWalidacji());
    }    
    
    public function testGenerujGuid() {
        $this->assertInternalType('string', $this->_object->generujGuid());
    }                
}
?>
