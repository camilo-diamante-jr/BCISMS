<?php

// For views
$this->router->addRoute('/', ['AuthController', 'viewLogin']);
$this->router->addRoute('/login', ['AuthController', 'viewLogin']);

// For API
$this->router->addRoute('/auth/login', ['AuthController', 'loginAuthentication']);
$this->router->addRoute('/auth/registry', ['AuthController', 'loginAuthentication']);
$this->router->addRoute('/auth/logout', ['AuthController', 'logout']);
