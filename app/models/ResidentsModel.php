<?php

class ResidentsModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchResidents()
    {
        return [
            [
                'firstName' => 'John ',
                'middleName' => 'Cruz',
                'lastName' => 'Madrid',
                'date_of_birth' => "05-20-1975",
                'sitio' => "Maligaya",
                "phone" => "09171234567",
                'household' => "#020",
                'status' => 'active',
                'date_of_residency' => '07-12-1980',
            ],

        ];
    }
}
