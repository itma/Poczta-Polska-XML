<?php

/**
 * Klasa PocztaPolskaXML sluzy do generowania pliku XML zgodnego ze standardem EKN. Plik
 * XML zwyczajowo wykorzystywany do komunikacji Klient - Poczta Polska.
 * @see 3_Przykladowy plik XML_EKN do importu w SP2000_v10.1_110222
 * @author Andrzej Bernat <andrzej@itma.pl>
 */
class PocztaPolskaXML {
    
    /**
     * Numer wersji struktury w oparciu, o który został utworzony plik XML
     * zawierający definicje przesyłek pocztowych.
     * 
     * @var string
     */
    const STRUKTURA = '1.6';
    
    /**
     * Nazwa nadawcy (podmiotu, dla którego utworzony został plik z przesyłkami 
     * do nadania). Pole ograniczone do 60 znaków. 
     * @var string 
     */
    public $nadawcaNazwa;
    
    /**
     * Nazwa skrócona klienta nadającego przesyłki. Długość pola od 6 do 10 znaków. 
     * @var string 
     */
    public $nadawcaNazwaSkrocona;
    
    /**
     * Nazwa ulicy nadawcy. Pole ograniczone do 30 znaków.
     * @var string 
     */
    public $nadawcaUlica;
    
    /**
     * Oznaczenie domu nadawcy przesyłek. Pole ograniczone do 5 znaków.  
     * @var string 
     */
    public $nadawcaDom;
    
    /**
     * Oznaczenie domu nadawcy przesyłek. Pole ograniczone do 5 znaków
     * @var string 
     */
    public $nadawcaLokal;
    
    /**
     * Oznaczenie miejscowości nadawcy przesyłek. Pole ograniczone do 30 znaków. 
     * @var string 
     */
    public $nadawcaMiejscowosc;
    
    /**
     * Oznaczenie kodu pocztowego nadawcy przesyłek. Pole musi mieć 5 cyfr. 
     * @var int 
     */
    public $nadawcaKod;
    
    /**
     * Oznaczenie NIP’u nadawcy przesyłek. Pole musi mieć 10 cyfr
     * @var int 
     */
    public $nadawcaNip;
    
    /**
     * Oznaczenie miejsca tworzenia przesyłek. Pole musi mieć wartość 'NADAWCA'
     * @var string 
     */
    public $nadawcaZrodlo;
    
    /**
     * Unikalny identyfikator nadawcy przesyłek. Pole posiada wartość wyliczoną 
     * zgodnie z algorytmem definiowania nr GUID. Kolejne pliki tego samego 
     * nadawcy muszą zawierać tą samą wartość pola GUID
     * @var string 
     */
    public $nadawcaGuid;
    
    /**
     * Nazwa zbioru, jaka została nadana przez system; w formacie: rrrr-mm-dd\lp
     * Przykład: 2009-06-18\1, nazwą zbioru jest rok-miesiąc-dzień, symbol „\”, 
     * nr kolejny zbioru utworzonego w danym dniu. 
     * @var string 
     */
    public $zbiorNazwa;
    
    /**
     * Data i godzina utworzenia zbioru przesyłek; w formacie: rrrr-mm-ddThh:mm:ss
     * @var datatime 
     */
    public $zbiorDataUtworzenia;
    
    /**
     * Opis, jaki został zdefiniowany dla zbioru przesyłek. 
     * @var string 
     */
    public $zbiorOpis;
    
    /**
     * Ilość przesyłek znajdujących się w zbiorze przesyłek 
     * @var int 
     */
    public $zbiorIloscPrzesylek;
    
    /**
     * Unikalny identyfikator nadawcy przesyłek. Pole posiada wartość wyliczoną
     * zgodnie z algorytmem definiowania nr GUID. Kolejne zbiory tego samego
     * nadawcy muszą zawierać inną wartość pola GUID. 
     * @var string 
     */
    public $zbiorGuid;
    
    /**
     * Unikalny identyfikator nadawcy przesyłek. Pole posiada wartość wyliczoną
     * zgodnie z algorytmem definiowania nr GUID. Kolejne przesyłki tego samego
     * nadawcy muszą zawierać inną wartość pola GUID. 
     * @var string 
     */
    public $przesylkaGuid;
    
    /**
     * Cyfrowy symbol odpowiadający typowi przesyłki
     * @var int 
     */
    public $przesylkaSymbol;
    
    /**
     * Dwudziestocyfrowy numer identyfikujący przesyłkę. Pole jest wyliczane wg 
     * specjalnego algorytmu. 
     * @var string 
     */
    public $przesylkaNrNadania;
    
    /**
     * Masa przesyłki, podana w gramach. Pole ograniczone do 2000 gramów.
     * @var int 
     */
    public $przesylkaMasa;
    
    /**
     * Oznaczenie umowy na podstawie, której nadawane są przesyłki pocztowe. Pole 
     * posiadać może konkretną wartość odpowiadającą oznaczeniu umowy lub wpis 
     * Bez umowy. 
     * @var int 
     */
    public $przesylkaUmowa;
    
    /**
     * Oznaczenie karty na podstawie, której nadawane są przesyłki pocztowe. Pole 
     * posiadać może konkretną wartość odpowiadającą oznaczeniu karty umowy.
     * @var int 
     */
    public $przesylkaKartaUmowy;
    
    /**
     * Informuje o tym, jakiej kategorii jest przesyłka;
     * wartości:
     * E – ekonomiczna
     * P – priorytetowa 
     * @var string 
     */
    public $przesylkaKategoria;
    
    /**
     * Informuje o tym, czy przesyłka jest nadana na Poste Restante;
     * wartości:
     * T – tak
     * N – nie 
     * @var string
     */
    public $przesylkaPosteRestante;
    
    /**
     * Informuje o tym, czy przesyłka jest Egzemplarzem bibliotecznym;
     * wartości:
     * T – tak
     * N – nie 
     * @var string 
     */
    public $przesylkaEgzBibl;
    
    /**
     * Informuje o tym, czy przesyłka jest Dla ociemniałych;
     * wartości:
     * T – tak 
     * N – nie 
     * @var string 
     */
    public $przesylkaDlaOciem;
    
    /**
     * Informuje o ilości przesyłek; domyślną wartością jest 1. 
     * @var int 
     */
    public $przesylkaIlosc;
    
    /**
     * Usługi komplementarne, jakie są aktywne dla rozpatrywanej przesyłki;
     * wartości:
     * Z – żądanie zwrotu/dosłania
     * R – polecenie
     * O – potwierdzenie odbioru 
     * Domyślną wartością jest R. 
     * @var string
     */
    public $przesylkaUslugi;
    
    /**
     * Deklarowana wartość przesyłki; podana w groszach. Wartość pola ograniczona 
     * do 20000 groszy.
     * @var int 
     */
    public $przesylkaWartosc;
    
    /**
     * Ilość potwierdzeń odbioru. 
     * @var int 
     */
    public $przesylkaIloscPotwOdb;
    
    /**
     * Dotyczy gabarytu przesyłki, wartości:
     * A – gabaryt A
     * B – gabaryt B
     * @var string
     */
    public $przesylkaStrefa;
    
    /**
     * Numer wersji struktury danych dla danego rodzaju przesyłki. Aktualnym numerem
     * wersji jest 1
     * @var int 
     */
    public $przesylkaWersja;
    
    /**
     * Oznaczenie pierwszego członu nazwy adresata przesyłki.
     * @var string 
     */
    public $przesylkaNazwa;
    
    /**
     * Oznaczenie drugiego członu nazwy adresata przesyłki.
     * @var string
     */
    public $przesylkaNazwaII;
    
    /**
     * Oznaczenie ulicy adresata przesyłki. 
     * @var string 
     */
    public $przesylkaUlica;
    
    /**
     * Oznaczenie domu adresata przesyłki, pole max 5-znakowe. 
     * @var string 
     */
    public $przesylkaDom;
    
    /**
     * Oznaczenie lokalu adresata przesyłki, pole max 5-znakowe 
     * @var string 
     */
    public $przesylkaLokal;
    
    /**
     * Oznaczenie miejscowości adresata przesyłki. 
     * @var string 
     */
    public $przesylkaMiejscowosc;
    
    /**
     * Oznaczenie kodu pocztowego adresata przesyłki. 
     * @var int 
     */
    public $przesylkaKod;
    
    /**
     * Oznaczenie kraju adresata przesyłki. Pole tekstowe, zawierające nazwę kraju
     * adresata przesyłki (Polska). 
     * @var string 
     */
    public $przesylkaKraj;
    
    /**
     * Kwota, jaką należy pobrać w związku z doręczeniem przesyłki pobraniowej.
     * Wartość pola ograniczona do 20000 groszy.
     * @var int 
     */
    public $przesylkaKwotaPobrania;
    
    /**
     * Informuje o tym, jaki jest sposób przekazania kwoty pobrania;
     * wartości:
     * P – na wskazany adres
     * S – na rachunek bankowy 
     * @var string 
     */
    public $przesylkaSposobPobrania;
    
    /**
     * Informuje o sposobie powiadomienia adresata o oczekującej E-PRZESYŁCE;
     * wartości:
     * E – e-mail
     * M – SMS
     * @var string
     */
    public $przesylkaSposobPowiadomieniaAdresata;
    
    /**
     * Informuje o sposobie powiadomienia nadawcy o oczekującej E-PRZESYŁCE;
     * wartości:
     * E – e-mail
     * M – SMS 
     * @var string
     */
    public $przesylkaSposobPowiadomieniaNadawcy;
    
    /**
     * Informuje o konkretnej wartości dla sposobu powiadomienia nadawcy: 
     * e-mail (50 znaków), SMS (9 cyfr) 
     * @var mixed
     */
    public $przesylkaKontaktNadawcy;
    
    /**
     * Informuje o konkretnej wartości dla sposobu powiadomienia adresata: 
     * e-mail (50 znaków), SMS (9 cyfr) 
     * @var mixed 
     */
    public $przesylkaKontaktAdresata;
    
    /**
     * Kod pocztowy Placówki Pocztowej wydającej E-PRZESYŁKĘ. 
     * @var string 
     */
    public $przesylkaKodUP;
    
    /**
     * Nazwa Placówki Pocztowej wydającej E-PRZESYŁKĘ.
     * @var string 
     */
    public $przesylkaMiejscowoscUP;
    
    /**
     * Odległość dla nadawanej przesyłki POCZTEX; podana w kilometrach.
     * @var int 
     */
    public $przesylkaOdleglosc;
    
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
    public $przesylkaTermin;
    
    /**
     * Informuje o uiszczającym opłatę za nadanie przesyłki:
     * N – nadawca
     * A – adresat 
     * @var string 
     */
    public $przesylkaUiszczaOplate;
    
    /**
     * Rodzaj przesyłki:
     * Z – zwykły
     * E – full pack 1
     * F – full pack 2 
     * @var string 
     */
    public $przesylkaTyp;
    
    /**
     * T – jest to Przesyłka ponadwymiarowa
     * N – nie jest to Przesyłka ponadwymiarowa
     * @var string 
     */
    public $przesylkaPonadwymiarowa;
}

?>
