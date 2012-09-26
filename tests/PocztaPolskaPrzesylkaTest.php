<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaPrzesylka
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Przesylka/PocztaPolskaPrzesylka.php');

class PocztaPolskaPrzesylkaTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaXML
     * @var object PocztaPolskaXML
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaPrzesylka();
    }
    
    public function testRegulyWalidacji() {
        $this->assertInternalType('array', $this->_object->regulyWalidacji());
    }
    
    public function testGenerujGuid() {
        $this->assertInternalType('string', $this->_object->generujGuid());
    }                
}
?>
