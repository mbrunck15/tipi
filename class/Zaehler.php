<?php


class Zaehler
{

    /**
     * @var int
     * wenn ich starte ist das zelt leer.
     */
    private int $anzahlZuschauer=0;

    const MAXANZAHL=100;


    public function fuegeZuschauerhinzu(int $anzahl): string{
        if ($this->anzahlZuschauer+$anzahl <= self::MAXANZAHL){
            $this->anzahlZuschauer+=$anzahl;
            return "reinlassen <br>";
        }else{
            return "Zelt ist Voll";
        }
    }
}
?>