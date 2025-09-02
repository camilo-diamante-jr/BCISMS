<?php

require_once '../core/Controller.php';


class AdminPortalController extends Controller
{

    private $residentsModel;


    public function __construct($pdo)
    {
        parent::__construct($pdo);

        $this->residentsModel = $this->loadModel("ResidentsModel");
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

    public function viewResidents()
    {

        $residents = $this->residentsModel->fetchResidents();
        $data = [
            'contentHeaderTitle' => 'Residents',
            'breadcrumbActiveItem' => 'Residents',
            'residents' => $residents


        ];
        $this->renderView('/portals/admin/management/residents/residents', $data);
    }



    /* 

    METHODS  TO VIEW STUDENTS 
    
    */
}
