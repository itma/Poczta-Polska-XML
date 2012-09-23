<?php

/**
 * Klasa PocztaPolskaPrzesylkaPolecona jest reprezentantem struktury Przesylka/Polecona
 * @author Andrzej Bernat <andrzej@itma.pl>
 */

require_once 'PocztaPolskaPrzesylka.php';

class PocztaPolskaPrzesylkaPolecona extends PocztaPolskaPrzesylka {
    
    /**
     * Identyfikator przesylki w systemie Poczty Polskiej
     */
    const ID = 845;
    
    /**
     * Dwudziestocyfrowy numer identyfikujący przesyłkę. Pole jest wyliczane wg 
     * specjalnego algorytmu. 
     * @var string 
     */    
    public $nrNadania;
    
    /**
     * Informuje o tym, jakiej kategorii jest przesyłka;
     * wartości:
     * E – ekonomiczna
     * P – priorytetowa 
     * @var string 
     */
    public $kategoria;
    
    /**
     * Informuje o tym, czy przesyłka jest nadana na Poste Restante;
     * wartości:
     * T – tak
     * N – nie 
     * @var string
     */
    public $posteRestante;
    
    /**
     * Informuje o tym, czy przesyłka jest Egzemplarzem bibliotecznym;
     * wartości:
     * T – tak
     * N – nie 
     * @var string 
     */
    public $egzBibl;
    
    /**
     * Informuje o tym, czy przesyłka jest Dla ociemniałych;
     * wartości:
     * T – tak 
     * N – nie 
     * @var string 
     */
    public $dlaOciem;
    
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
     * Ilość potwierdzeń odbioru. 
     * @var int 
     */
    public $iloscPotwOdb;
    
    /**
     * Dotyczy gabarytu przesyłki, wartości:
     * A – gabaryt A
     * B – gabaryt B
     * @var string
     */
    public $strefa;     

}
?>
