<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaPrzesylka
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../PocztaPolskaPrzesylka.php');

class PocztaPolskaPrzesylkaTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaXML
     * @var object PocztaPolskaXML
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaPrzesylka();
    }

    public function testRodzajPrzesylki() {
        $this->markTestIncomplete('Test niekompletny.');        
        $this->_object->rodzajPrzesylki(PocztaPolskaXML::EPRZESYLKA);
        $this->assertEquals($this->_object->rodzajPrzesylki(), PocztaPolskaXML::EPRZESYLKA);
        $this->setExpectedException('Exception');
        $this->_object->rodzajPrzesylki('brak');
    }
    
    public function testId() {
        $this->markTestIncomplete('Test niekompletny.');        
        $listowa = new PocztaPolskaPrzesylkaListowaZwykla();
        $this->assertEquals($listowa->id(), PocztaPolskaPrzesylkaListowaZwykla::ID);
    }
    
}
?>
