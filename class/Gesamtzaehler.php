<?php

class Gesamtzaehler
{
    private array $personengesamt = [];

    public function testdaten()
    {

        $this->personengesamt = new Zaehler($anzahlzu);
        $this->personengesamt = new Zaehler1();

    }

    public function getpersonen(): string
    {
        $zuschauersumme = 0;
        foreach ($this->personengesamt as $person) {
            $zuschauersumme += $person;
        }
        return $zuschauersumme;

    }

}