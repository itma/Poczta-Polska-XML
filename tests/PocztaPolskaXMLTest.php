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
    
    public function testHasAttribute() {
        $this->assertObjectHasAttribute('nadawcaNazwa', $this->_object);
        $this->assertObjectHasAttribute('nadawcaNazwaSkrocona', $this->_object);
        $this->assertObjectHasAttribute('nadawcaUlica', $this->_object);
        $this->assertObjectHasAttribute('nadawcaDom', $this->_object);
        $this->assertObjectHasAttribute('nadawcaLokal', $this->_object);
        $this->assertObjectHasAttribute('nadawcaMiejscowosc', $this->_object);
        $this->assertObjectHasAttribute('nadawcaKod', $this->_object);
        $this->assertObjectHasAttribute('nadawcaNip', $this->_object);
        $this->assertObjectHasAttribute('nadawcaZrodlo', $this->_object);
        $this->assertObjectHasAttribute('nadawcaGuid', $this->_object);
        $this->assertObjectHasAttribute('zbiorNazwa', $this->_object);
        $this->assertObjectHasAttribute('zbiorDataUtworzenia', $this->_object);
        $this->assertObjectHasAttribute('zbiorOpis', $this->_object);
        $this->assertObjectHasAttribute('zbiorIloscPrzesylek', $this->_object);
        $this->assertObjectHasAttribute('zbiorGuid', $this->_object);
        $this->assertObjectHasAttribute('przesylkaGuid', $this->_object);
        $this->assertObjectHasAttribute('przesylkaSymbol', $this->_object);
        $this->assertObjectHasAttribute('przesylkaNrNadania', $this->_object);
        $this->assertObjectHasAttribute('przesylkaMasa', $this->_object);
        $this->assertObjectHasAttribute('przesylkaUmowa', $this->_object);
        $this->assertObjectHasAttribute('przesylkaKartaUmowy', $this->_object);
        $this->assertObjectHasAttribute('przesylkaKategoria', $this->_object);
        $this->assertObjectHasAttribute('przesylkaPosteRestante', $this->_object);
        $this->assertObjectHasAttribute('przesylkaEgzBibl', $this->_object);
        $this->assertObjectHasAttribute('przesylkaDlaOciem', $this->_object);
        $this->assertObjectHasAttribute('przesylkaIlosc', $this->_object);
        $this->assertObjectHasAttribute('przesylkaUslugi', $this->_object);
        $this->assertObjectHasAttribute('przesylkaWartosc', $this->_object);
        $this->assertObjectHasAttribute('przesylkaIloscPotwOdb', $this->_object);
        $this->assertObjectHasAttribute('przesylkaStrefa', $this->_object);
        $this->assertObjectHasAttribute('przesylkaWersja', $this->_object);
        $this->assertObjectHasAttribute('przesylkaNazwa', $this->_object);
        $this->assertObjectHasAttribute('przesylkaNazwaII', $this->_object);
        $this->assertObjectHasAttribute('przesylkaUlica', $this->_object);
        $this->assertObjectHasAttribute('przesylkaDom', $this->_object);
        $this->assertObjectHasAttribute('przesylkaLokal', $this->_object);
        $this->assertObjectHasAttribute('przesylkaMiejscowosc', $this->_object);
        $this->assertObjectHasAttribute('przesylkaKod', $this->_object);
        $this->assertObjectHasAttribute('przesylkaKraj', $this->_object);
        $this->assertObjectHasAttribute('przesylkaKwotaPobrania', $this->_object);
        $this->assertObjectHasAttribute('przesylkaSposobPobrania', $this->_object);
        $this->assertObjectHasAttribute('przesylkaSposobPowiadomieniaAdresata', $this->_object);
        $this->assertObjectHasAttribute('przesylkaSposobPowiadomieniaNadawcy', $this->_object);
        $this->assertObjectHasAttribute('przesylkaKontaktNadawcy', $this->_object);
        $this->assertObjectHasAttribute('przesylkaKontaktAdresata', $this->_object);
        $this->assertObjectHasAttribute('przesylkaKodUP', $this->_object);
        $this->assertObjectHasAttribute('przesylkaMiejscowoscUP', $this->_object);
        $this->assertObjectHasAttribute('przesylkaOdleglosc', $this->_object);
        $this->assertObjectHasAttribute('przesylkaTermin', $this->_object);
        $this->assertObjectHasAttribute('przesylkaUiszczaOplate', $this->_object);
        $this->assertObjectHasAttribute('przesylkaTyp', $this->_object);
        $this->assertObjectHasAttribute('przesylkaPonadwymiarowa', $this->_object);
    }
}
?>
