<?php

/**
 * Klasa PocztaPolskaPrzesylkaAdresat jest reprezentantem struktury Przesylka/Adresat
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

class PocztaPolskaPrzesylkaAdresat {

    /**
     * Oznaczenie pierwszego członu nazwy adresata przesyłki.
     * @var string 
     */
    public $nazwa;
    
    /**
     * Oznaczenie drugiego członu nazwy adresata przesyłki.
     * @var string
     */
    public $nazwaII;
    
    /**
     * Oznaczenie ulicy adresata przesyłki. 
     * @var string 
     */
    public $ulica;
    
    /**
     * Oznaczenie domu adresata przesyłki, pole max 5-znakowe. 
     * @var string 
     */
    public $dom;
    
    /**
     * Oznaczenie lokalu adresata przesyłki, pole max 5-znakowe 
     * @var string 
     */
    public $lokal;
    
    /**
     * Oznaczenie miejscowości adresata przesyłki. 
     * @var string 
     */
    public $miejscowosc;
    
    /**
     * Oznaczenie kodu pocztowego adresata przesyłki. 
     * @var int 
     */
    public $kod;
    
    /**
     * Oznaczenie kraju adresata przesyłki. Pole tekstowe, zawierające nazwę kraju
     * adresata przesyłki (Polska). 
     * @var string 
     */
    public $kraj;
  
}
?>
