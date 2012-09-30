Poczta-Polska-XML
=================

Biblioteka generująca plik w formacie XML służący do wymiany danych o przesyłkach pomiędzy Klientem a Pocztą Polską. Plik w standardzie EKN.

Przykład użycia:

```php

        $ppxml = new PocztaPolskaXML();
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
        $ppxml->dodajNadawce($nadawca);        
        
        $zbior = new PocztaPolskaZbior();
        $zbior->nazwa = '2009-06-18\1';
        $zbior->dataUtworzenia = '2012-12-12T11:23:54';
        $zbior->opis = 'Opis';
        $zbior->iloscPrzesylek = 1;
        $ppxml->dodajZbior($zbior);        
        
        $adresat = new PocztaPolskaPrzesylkaAdresat();
        $adresat->nazwa = 'Jan Kowalski';
        $adresat->ulica = 'Wojskowa';
        $adresat->lokal = '1';
        $adresat->dom = '10';
        $adresat->kod = '61000';
        $adresat->miejscowosc = 'Poznań';
        $adresat->kraj = 'Polska';
        
        $przesylka = new PocztaPolskaPrzesylkaListowaZwykla();
        $przesylka->ilosc = '1';
        $przesylka->kategoria = 'E';
        $przesylka->posteRestante = 'N';
        $przesylka->egzBibl = 'N';
        $przesylka->dlaOciem = 'N';
        $przesylka->strefa = 'A';        
        $przesylka->dodajAdresata($adresat);
        $ppxml->dodajPrzesylke($przesylka);
        
        $ppxml->generujXML();
```

TODO:
    - automatyczne zliczanie ilości przesyłek dołączonych do zbioru
    - rezultat walidacji obiektow zwracany przez metode np. $obiekt->bledy()