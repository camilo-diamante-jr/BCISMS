<?php

class AppointmentModel
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAppointments()
    {
        return [
            [
                'student_name' => 'John Doe',
                'appointment_date' => '2025-08-20',
                'time' => '09:00:00',
                'purpose' => 'Career Counseling',
                'counselor' => 'Ms. Smith',
                'status' => 'Pending'
            ],
            [
                'student_name' => 'Jane Smith',
                'appointment_date' => '2025-08-21',
                'time' => '10:30:00',
                'purpose' => 'Personal Guidance',
                'counselor' => 'Mr. Johnson',
                'status' => 'Completed'
            ],
            [
                'student_name' => 'Alice Johnson',
                'appointment_date' => '2025-08-22',
                'time' => '13:00:00',
                'purpose' => 'Academic Advising',
                'counselor' => 'Ms. Smith',
                'status' => 'Cancelled'
            ],
        ];
    }
}
