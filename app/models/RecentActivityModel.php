<?php


class RecentActivityModel
{

    private $pdo;


    public function __construct($pdo)
    {

        $this->pdo = $pdo;
    }


    public function fetchRecentRecentActivities()
    {


        $recentActivities = [
            [
                "headline" => "New resident has been registered",
                "activity" => "A resident named Ahab G. Salab is registered",
                "activityType" => "resident",
                "dateCreated" => "2 hrs. ago"
            ]
        ];


        return $recentActivities;
    }
}
