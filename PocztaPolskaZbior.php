<?php

/**
 * Klasa PocztaPolskaNadawca jest reprezentantem struktury Zbior
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once 'PocztaPolska.php';

class PocztaPolskaZbior extends PocztaPolska {

    /**
     * Nazwa zbioru, jaka została nadana przez system; w formacie: rrrr-mm-dd\lp
     * Przykład: 2009-06-18\1, nazwą zbioru jest rok-miesiąc-dzień, symbol „\”, 
     * nr kolejny zbioru utworzonego w danym dniu. 
     * @var string 
     */
    public $nazwa;
    
    /**
     * Data i godzina utworzenia zbioru przesyłek; w formacie: rrrr-mm-ddThh:mm:ss
     * @var datatime 
     */
    public $dataUtworzenia;
    
    /**
     * Opis, jaki został zdefiniowany dla zbioru przesyłek. 
     * @var string 
     */
    public $opis;
    
    /**
     * Ilość przesyłek znajdujących się w zbiorze przesyłek 
     * @var int 
     */
    public $iloscPrzesylek;
    
}
?>
