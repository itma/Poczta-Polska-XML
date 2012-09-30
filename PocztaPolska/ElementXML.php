<?php

/**
 * Interfejs dla obiektow bedacych skladnikiem wyniku XML
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

interface ElementXML  {
    
    /**
     * Implementacja metody powinna zawierac reguly walidacji pol obiektu
     * @return array
     */
    public function regulyWalidacji();
    
    /**
     * Implementacja metody powinna walidowac poprawnosc
     * wypelnienia pol obiektow bedacych skladnikiem xml
     * @return boolean
     */
    public function waliduj();
    
    /**
     * Implementacja powinna generowac czesc lub calosc wyniku xml
     * @return string
     */
    public function generujXML();
    
    /**
     * Implementacja powinna zwracac nazwe elementu xml
     * @return string
     */
    public function ElementXmlNazwa();    
}
?>
