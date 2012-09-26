<?php

/**
 * Interfejs dla obiektow bedacych skladnikiem wyniku XML
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

interface ElementXML  {
    
    /**
     * Implementacja metody powinna zawierac reguly walidacji pol obiektu
     */
    public function regulyWalidacji();
    
    /**
     * Implementacja metody powinna walidowac poprawnosc
     * wypelnienia pol obiektow bedacych skladnikiem xml
     */
    public function waliduj();
    
    /**
     * Implementacja powinna generowac czesc lub calosc wyniku xml
     */
    public function generujXML();
}
?>
