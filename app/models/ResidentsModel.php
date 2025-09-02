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
                'firstName' => 'John Doe',
                'middleName' => 'John Doe',
                'lastName' => 'John Doe',
                'date_of_birth' => "05-20-1975",
                'date_of_residency' => '07-12-1980',
                'status' => 'Active'
            ],

        ];
    }
}
