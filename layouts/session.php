<?php
	include 'conn.php';

        session_start();
        if(isset($_SESSION['islogged']) && ($_SERVER['REQUEST_URI']=='/school-management-system-2022.000webhostapp.com/login.php'|| $_SERVER['REQUEST_URI']=='/school-management-system-2022.000webhostapp.com/register.php')){
            header('location: /school-management-system-2022.000webhostapp.com/'.$_SESSION['user'].'/dashboard.php');
        }

?>
