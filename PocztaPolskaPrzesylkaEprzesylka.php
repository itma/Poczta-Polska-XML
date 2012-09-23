<?php

/**
 * Klasa PocztaPolskaPrzesylkaPobraniowa jest reprezentantem struktury Przesylka/Eprzesylka
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once 'PocztaPolskaPrzesylka.php';

class PocztaPolskaPrzesylkaEprzesylka extends PocztaPolskaPrzesylka {
    
    /**
     * Identyfikator przesylki w systemie Poczty Polskiej
     */
    const ID = 850;
    
    /**
     * Dwudziestocyfrowy numer identyfikujący przesyłkę. Pole jest wyliczane wg 
     * specjalnego algorytmu. 
     * @var string 
     */    
    public $nrNadania;
    
    /**
     * Usługi komplementarne, jakie są aktywne dla rozpatrywanej przesyłki;
     * wartości:
     * Z – żądanie zwrotu/dosłania
     * R – polecenie
     * O – potwierdzenie odbioru 
     * Domyślną wartością jest R. 
     * @var string
     */
    public $uslugi;    
    
    /**
     * Deklarowana wartość przesyłki; podana w groszach. Wartość pola ograniczona 
     * do 20000 groszy.
     * @var int 
     */
    public $wartosc;    
    
    /**
     * Kwota, jaką należy pobrać w związku z doręczeniem przesyłki pobraniowej.
     * Wartość pola ograniczona do 20000 groszy.
     * @var int 
     */
    public $kwotaPobrania;
    
    /**
     * Informuje o tym, jaki jest sposób przekazania kwoty pobrania;
     * wartości:
     * P – na wskazany adres
     * S – na rachunek bankowy 
     * @var string 
     */
    public $sposobPobrania;    
    
    /**
     * Informuje o sposobie powiadomienia adresata o oczekującej E-PRZESYŁCE;
     * wartości:
     * E – e-mail
     * M – SMS
     * @var string
     */
    public $sposobPowiadomieniaAdresata;
    
    /**
     * Informuje o sposobie powiadomienia nadawcy o oczekującej E-PRZESYŁCE;
     * wartości:
     * E – e-mail
     * M – SMS 
     * @var string
     */
    public $sposobPowiadomieniaNadawcy;
    
    /**
     * Informuje o konkretnej wartości dla sposobu powiadomienia nadawcy: 
     * e-mail (50 znaków), SMS (9 cyfr) 
     * @var mixed
     */
    public $kontaktNadawcy;
    
    /**
     * Informuje o konkretnej wartości dla sposobu powiadomienia adresata: 
     * e-mail (50 znaków), SMS (9 cyfr) 
     * @var mixed 
     */
    public $kontaktAdresata;
    
    /**
     * Kod pocztowy Placówki Pocztowej wydającej E-PRZESYŁKĘ. 
     * @var string 
     */
    public $kodUP;
    
    /**
     * Nazwa Placówki Pocztowej wydającej E-PRZESYŁKĘ.
     * @var string 
     */
    public $miejscowoscUP;    

}
?>
