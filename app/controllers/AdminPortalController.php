<?php

require_once '../core/Controller.php';


class AdminPortalController extends Controller
{

    private $residentsModel;
    private $recentActivityModel;


    public function __construct($pdo)
    {
        parent::__construct($pdo);

        $this->residentsModel = $this->loadModel("ResidentsModel");
        $this->recentActivityModel  = $this->loadModel("RecentActivityModel");
    }

    public function viewAdminDashboard()
    {
        $recentActivities = $this->recentActivityModel->fetchRecentRecentActivities();
        $data = [
            'contentHeaderTitle' => 'Dashboard',
            'breadcrumbActiveItem' => 'Dashboard',
            'recentActivities' => $recentActivities
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
