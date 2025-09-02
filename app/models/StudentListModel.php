<?php


class StudentListModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchStudents()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM students");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
