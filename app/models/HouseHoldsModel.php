<?php


class HouseholdsModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchHouseholds()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM households");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
