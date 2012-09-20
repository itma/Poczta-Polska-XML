<?php

/**
 * Klasa PocztaPolskaNadawca jest reprezentantem struktury Nadawca
 * @author Andrzej Bernat <andrzej@itma.pl>
 */
class PocztaPolskaNadawca extends PocztaPolska {
 
    /**
     * Nazwa nadawcy (podmiotu, dla którego utworzony został plik z przesyłkami 
     * do nadania). Pole ograniczone do 60 znaków. 
     * @var string 
     */
    public $nazwa;
    
    /**
     * Nazwa skrócona klienta nadającego przesyłki. Długość pola od 6 do 10 znaków. 
     * @var string 
     */
    public $nazwaSkrocona;
    
    /**
     * Nazwa ulicy nadawcy. Pole ograniczone do 30 znaków.
     * @var string 
     */
    public $ulica;
    
    /**
     * Oznaczenie domu nadawcy przesyłek. Pole ograniczone do 5 znaków.  
     * @var string 
     */
    public $dom;
    
    /**
     * Oznaczenie domu nadawcy przesyłek. Pole ograniczone do 5 znaków
     * @var string 
     */
    public $lokal;
    
    /**
     * Oznaczenie miejscowości nadawcy przesyłek. Pole ograniczone do 30 znaków. 
     * @var string 
     */
    public $miejscowosc;
    
    /**
     * Oznaczenie kodu pocztowego nadawcy przesyłek. Pole musi mieć 5 cyfr. 
     * @var int 
     */
    public $kod;
    
    /**
     * Oznaczenie NIP’u nadawcy przesyłek. Pole musi mieć 10 cyfr
     * @var int 
     */
    public $nip;
    
    /**
     * Oznaczenie miejsca tworzenia przesyłek. Pole musi mieć wartość 'NADAWCA'
     * @var string 
     */
    public $zrodlo;
    
}
?>
