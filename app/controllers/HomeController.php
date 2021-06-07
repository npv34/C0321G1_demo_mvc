<?php


namespace App\Controller;


class HomeController
{
    function showDashboard() {
        include_once "resource/views/pages/dashboard.php";
    }
}