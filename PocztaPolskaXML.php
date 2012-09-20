<?php

/**
 * Klasa PocztaPolskaXML sluzy do generowania pliku XML zgodnego ze standardem EKN. Plik
 * XML zwyczajowo wykorzystywany do komunikacji Klient - Poczta Polska.
 * @author Andrzej Bernat <andrzej@itma.pl>
 */
class PocztaPolskaXML extends PocztaPolska {
    
    /**
     * Numer wersji struktury w oparciu, o który został utworzony plik XML
     * zawierający definicje przesyłek pocztowych.
     * 
     * @var string
     */
    const STRUKTURA = '1.6';

    /**
     * Metoda zwraca zawartosc pliku XML
     * @return string
     */
    public function generujPlik() {
        switch ($this->rodzajPrzesylki()) {
            case PocztaPolskaXML::POCZTOWA:
                break;
            case PocztaPolskaXML::POBRANIOWA:
                break;
            default:
                throw New Exception('Nieznany rodzaj przesylki.');
        }
    }
}

?>
