<?php

require_once '../core/Controller.php';


class AdminPortalController extends Controller
{

    // private $notificationModel;
    // private $transactionModel;
    // private $sectionModel;
    private $appointmentModel;
    private $studentListModel;


    public function __construct($pdo)
    {
        parent::__construct($pdo);
        // $this->notificationModel = $this->loadModel("NotificationModel");
        $this->appointmentModel = $this->loadModel("AppointmentModel");
        $this->studentListModel = $this->loadModel("StudentListModel");
    }

    public function viewAdminDashboard()
    {
        $data = [
            'contentHeaderTitle' => 'Dashboard',
            'breadcrumbActiveItem' => 'Dashboard',
        ];
        $this->renderView('/portals/admin/admin-dashboard', $data);
    }

    /* 

    METHODS  TO VIEW APPOINTMENTS 
    
    */

    public function viewAppointments()
    {

        $appointments = $this->appointmentModel->fetchAppointments();
        $data = [
            'contentHeaderTitle' => 'Appointments',
            'breadcrumbActiveItem' => 'Appointments',
            'appointments' => $appointments


        ];
        $this->renderView('/portals/admin/management/appointments/appointment', $data);
    }



    /* 

    METHODS  TO VIEW STUDENTS 
    
    */
    public function viewStudents()
    {
        // $students = $this->studentListModel->fetchStudents();
        $data = [
            'contentHeaderTitle' => 'Students',
            'breadcrumbActiveItem' => 'Students',
            // 'students' => $students
        ];
        $this->renderView('/portals/admin/management/students/student', $data);
    }

    /* 

    METHODS  TO VIEW COURSES 
    
    */


    public function viewCourses()
    {
        $data = [
            'contentHeaderTitle' => 'Courses',
            'breadcrumbActiveItem' => 'Courses',
        ];
        $this->renderView('/portals/admin/management/courses/course', $data);
    }
}
