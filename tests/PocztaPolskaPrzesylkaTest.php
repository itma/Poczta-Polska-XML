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
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('guid', $this->_object);
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
        $this->assertObjectHasAttribute('wartosc', $this->_object);
        $this->assertObjectHasAttribute('iloscPotwOdb', $this->_object);
        $this->assertObjectHasAttribute('strefa', $this->_object);
        $this->assertObjectHasAttribute('wersja', $this->_object);
        $this->assertObjectHasAttribute('nazwa', $this->_object);
        $this->assertObjectHasAttribute('nazwaII', $this->_object);
        $this->assertObjectHasAttribute('ulica', $this->_object);
        $this->assertObjectHasAttribute('dom', $this->_object);
        $this->assertObjectHasAttribute('lokal', $this->_object);
        $this->assertObjectHasAttribute('miejscowosc', $this->_object);
        $this->assertObjectHasAttribute('kod', $this->_object);
        $this->assertObjectHasAttribute('kraj', $this->_object);
        $this->assertObjectHasAttribute('kwotaPobrania', $this->_object);
        $this->assertObjectHasAttribute('sposobPobrania', $this->_object);
        $this->assertObjectHasAttribute('sposobPowiadomieniaAdresata', $this->_object);
        $this->assertObjectHasAttribute('sposobPowiadomieniaNadawcy', $this->_object);
        $this->assertObjectHasAttribute('kontaktNadawcy', $this->_object);
        $this->assertObjectHasAttribute('kontaktAdresata', $this->_object);
        $this->assertObjectHasAttribute('kodUP', $this->_object);
        $this->assertObjectHasAttribute('miejscowoscUP', $this->_object);
        $this->assertObjectHasAttribute('odleglosc', $this->_object);
        $this->assertObjectHasAttribute('termin', $this->_object);
        $this->assertObjectHasAttribute('uiszczaOplate', $this->_object);
        $this->assertObjectHasAttribute('typ', $this->_object);
        $this->assertObjectHasAttribute('ponadwymiarowa', $this->_object);
    }

}
?>
