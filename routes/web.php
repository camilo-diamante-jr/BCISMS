<?php



$this->router->addRoute('/admin/dashboard', ['AdminPortalController', 'viewAdminDashboard']);
$this->router->addRoute('/admin/appointments', ['AdminPortalController', 'viewAppointments']);
$this->router->addRoute('/admin/students', ['AdminPortalController', 'viewStudents']);
$this->router->addRoute('/admin/courses', ['AdminPortalController', 'viewCourses']);
