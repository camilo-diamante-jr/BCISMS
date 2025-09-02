<?php


class RecentActivityModel
{

    private $pdo;


    public function __construct($pdo)
    {

        $this->pdo = $pdo;
    }
}
