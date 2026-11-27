<?php
    //session_start();
    if($_SERVER['REQUEST_METHOD'] === "GET"){
        if(isset($_GET['login']) && isset($_GET['classe']) && isset($_GET['profil'])){
            echo "<h1>Bienvenu ".$_GET['login']." tu es ".$_GET['profil']." en filliere de ".$_GET['classe']."</h1>";

            if($_GET['profil']==="p"){
                //
            }
            else if($_GET['profil']==="e"){

            }

        }
    }
?>