<?php

/**
 * Test jednostkowy dla klasy PocztaPolskaPrzesylkaAdresat
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once('../Przesylka/PocztaPolskaPrzesylkaAdresat.php');

class PocztaPolskaPrzesylkaAdresatTest extends PHPUnit_Framework_TestCase {
    
    /**
     * Obiekt klasy PocztaPolskaPrzesylkaAdresat
     * @var object PocztaPolskaPrzesylkaAdresat
     */
    protected $_object;
    
    public function setUp() {
        $this->_object = new PocztaPolskaPrzesylkaAdresat();
    }  
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('nazwa', $this->_object);
        $this->assertObjectHasAttribute('nazwaII', $this->_object);
        $this->assertObjectHasAttribute('ulica', $this->_object);
        $this->assertObjectHasAttribute('dom', $this->_object);
        $this->assertObjectHasAttribute('lokal', $this->_object);
        $this->assertObjectHasAttribute('miejscowosc', $this->_object);
        $this->assertObjectHasAttribute('kod', $this->_object);
        $this->assertObjectHasAttribute('kraj', $this->_object);
    }  
    
    public function testRegulyWalidacji() {
        $this->assertInternalType('array', $this->_object->regulyWalidacji());
    }    
}
?>
