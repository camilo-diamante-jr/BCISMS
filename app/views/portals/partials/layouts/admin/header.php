<?php //checkSession("Admin"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Admin | <?= $contentHeaderTitle ?></title>
    <link rel="stylesheet" href="/css/import.css" />

    <script src="/js/jquery-3.7.1.js"></script>
</head>

<body class="layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-mini sidebar-collapse sidebar-closed">
    <main class="wrapper">

        <?php
        // Preloader
        // $this->renderView('/portals/partials/components/preloader');

        // Navbar
        $this->renderView('/portals/partials/components/admin/navbar');

        // Sidebar
        $this->renderView('/portals/partials/components/admin/sidebar');
        ?>