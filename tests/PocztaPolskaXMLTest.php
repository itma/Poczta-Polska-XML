<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaXML
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

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
    
    public function testGenerujPlik() {
        $this->_object->generujPlik();
    }
}
?>
