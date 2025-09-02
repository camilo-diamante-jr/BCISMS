<?php



$this->router->addRoute('/admin/dashboard', ['AdminPortalController', 'viewAdminDashboard']);
$this->router->addRoute('/admin/residents', ['AdminPortalController', 'viewResidents']);
$this->router->addRoute('/admin/students', ['AdminPortalController', 'viewStudents']);
$this->router->addRoute('/admin/courses', ['AdminPortalController', 'viewCourses']);
