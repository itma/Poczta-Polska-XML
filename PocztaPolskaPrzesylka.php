<?php

/**
 * Klasa PocztaPolskaPrzesylka jest reprezentantem struktury Przesylka
 * @author Andrzej Bernat <andrzej@itma.pl>
 */
class PocztaPolskaPrzesylka extends PocztaPolska {
    
    /**
     * Cyfrowy symbol odpowiadający typowi przesyłki
     * @var int 
     */
    public $symbol;
    
    /**
     * Dwudziestocyfrowy numer identyfikujący przesyłkę. Pole jest wyliczane wg 
     * specjalnego algorytmu. 
     * @var string 
     */
    public $nrNadania;
    
    /**
     * Masa przesyłki, podana w gramach. Pole ograniczone do 2000 gramów.
     * @var int 
     */
    public $masa;
    
    /**
     * Oznaczenie umowy na podstawie, której nadawane są przesyłki pocztowe. Pole 
     * posiadać może konkretną wartość odpowiadającą oznaczeniu umowy lub wpis 
     * Bez umowy. 
     * @var int 
     */
    public $umowa;
    
    /**
     * Oznaczenie karty na podstawie, której nadawane są przesyłki pocztowe. Pole 
     * posiadać może konkretną wartość odpowiadającą oznaczeniu karty umowy.
     * @var int 
     */
    public $kartaUmowy;
    
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
     * Informuje o ilości przesyłek; domyślną wartością jest 1. 
     * @var int 
     */
    public $ilosc;
    
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
    
    /**
     * Numer wersji struktury danych dla danego rodzaju przesyłki. Aktualnym numerem
     * wersji jest 1
     * @var int 
     */
    public $wersja;
    
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
    
    /**
     * Odległość dla nadawanej przesyłki POCZTEX; podana w kilometrach.
     * @var int 
     */
    public $odleglosc;
    
    /**
     * Termin-serwis dla przesyłki:
     * B – Bezpośredni
     * D – Na dziś krajowy
     * M – Na dziś miejski
     * U – Na dziś miejski super 
     * A – Na dziś aglomeracja
     * P – Na jutro południe
     * R – Na jutro poranek
     * S – Na jutro standard 
     * @var string 
     */
    public $termin;
    
    /**
     * Informuje o uiszczającym opłatę za nadanie przesyłki:
     * N – nadawca
     * A – adresat 
     * @var string 
     */
    public $uiszczaOplate;
    
    /**
     * Rodzaj przesyłki:
     * Z – zwykły
     * E – full pack 1
     * F – full pack 2 
     * @var string 
     */
    public $typ;
    
    /**
     * T – jest to Przesyłka ponadwymiarowa
     * N – nie jest to Przesyłka ponadwymiarowa
     * @var string 
     */
    public $ponadwymiarowa;
    
    /**
     * Metoda jesli przyjmuje jako parametr wartosc inna niz null to wartosc
     * ta jest ustawiana w polu 'rodzaj wysylki'. Jesli nie przyjmuje zadnego
     * parametru to zwraca wczesniej ustawiona wartosc.
     * @param string $rodzajPrzesylki (@see Obslugiwane rodzaje przesylek)
     * @return string
     */
    public function rodzajPrzesylki($rodzajPrzesylki = null) {
        if (is_null($rodzajPrzesylki)) {
            return $this->symbol;
        } else {
            return $this->symbol = $rodzajPrzesylki;
        }
    }    
}
?>
