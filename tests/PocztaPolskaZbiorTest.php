<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaZbior
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../PocztaPolskaZbior.php');

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
    
    public function testRodzajPrzesylki() {
        $this->_object->rodzajPrzesylki(PocztaPolskaXML::EPRZESYLKA);
        $this->assertEquals($this->_object->rodzajPrzesylki(), PocztaPolskaXML::EPRZESYLKA);
        $this->setExpectedException('Exception');
        $this->_object->rodzajPrzesylki('brak');
    }    
    
    public function testGenerujPlik() {
        $this->_object->generujPlik();
    }
}
?>
