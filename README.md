Poczta-Polska-XML
=================

Biblioteka generująca plik w formacie XML służący do wymiany danych o przesyłkach pomiędzy Klientem a Pocztą Polską. Plik w standardzie EKN.

Przykład użycia:

```php

// Obiekt generujacy wynikowy XML
$ppxml = new PocztaPolskaXML();
$ppxml->plik = '/home/user/' // sciezka do pliku w ktorym zostanie zapisany xml

// Obiekt nadawcy
$nadawca = new PocztaPolskaNadawca();
$nadawca->nazwa = 'Jan Kowalski';
$nadawca->nazwaSkrocona = 'janko';
$nadawca->ulica = 'Obrońców Westerplatte';
$nadawca->dom = '10';
$nadawca->lokal = '1c';
$nadawca->miejscowosc = 'Gdańsk';
$nadawca->kod = 72382;
$nadawca->nip = 594147382;
$nadawca->zrodlo = 'NADAWCA';

// Dodajemy obiekt nadawcy do obiektu XML
$ppxml->dodajNadawce($nadawca);        

// Dodajemy zbioru
$zbior = new PocztaPolskaZbior();
$zbior->nazwa = '2009-06-18\1';
$zbior->dataUtworzenia = '2012-12-12T11:23:54';
$zbior->opis = 'Opis';
$zbior->iloscPrzesylek = 1;

// Dodajemy obiekt zbioru do obiektu XML
$ppxml->dodajZbior($zbior);        

// Obiekt adresata
$adresat = new PocztaPolskaPrzesylkaAdresat();
$adresat->nazwa = 'Jan Kowalski';
$adresat->ulica = 'Wojskowa';
$adresat->lokal = '1';
$adresat->dom = '10';
$adresat->kod = '61000';
$adresat->miejscowosc = 'Poznań';
$adresat->kraj = 'Polska';

// Obiekt przesylki
$przesylka = new PocztaPolskaPrzesylkaListowaZwykla();
$przesylka->ilosc = '1';
$przesylka->kategoria = 'E';
$przesylka->posteRestante = 'N';
$przesylka->egzBibl = 'N';
$przesylka->dlaOciem = 'N';
$przesylka->strefa = 'A';        

// Dodajemy obiekt adresata do obiektu przesylki
$przesylka->dodajAdresata($adresat);

// Dodajemy obiekt przesylki do obiektu XML
$ppxml->dodajPrzesylke($przesylka);

// Generujemy i zapisujemy wynikowy XML
$ppxml->zapiszXML();

```

TODO:

    * automatyczne zliczanie ilości przesyłek dołączonych do zbioru
    * rezultat walidacji obiektow zwracany przez metode np. $obiekt->bledy()
    * metoda generujaca nazwe pliku xml

Notatka dotycząca języka polskiego użytego w nazwach właściwości i metod: osobiście nie przepadam za używaniem polskiego języka we wcześniej wymionych przypadkach ale z racji tego, że Poczta Polska to typowo polska instytucja i biblioteka nie będzie raczej wykorzystywana przez obcokrajowców postanowiłem wykorzystac w niej język polski.