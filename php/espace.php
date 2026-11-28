<?php
    //session_start();
    if($_SERVER['REQUEST_METHOD'] === "GET"){
        if(isset($_GET['login'])){
            echo "Bienvenu ".$_GET['login'];
        }
    }
?>