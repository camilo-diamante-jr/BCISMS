<?php


class SettingsController extends Controller
{

    private $settingsModel;



    public function __construct($pdo)
    {
        parent::__construct($pdo);

        $this->settingsModel = $this->loadModel("SettingsModel");
    }
    public function viewSettings()
    {
        $data = [
            'contentHeaderTitle' => 'Settings',
            'breadcrumbActiveItem' => 'Settings',
        ];
        $this->renderView('/settings/system-settings', $data);
    }
}
