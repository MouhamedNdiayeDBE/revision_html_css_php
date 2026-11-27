<form method="POST">
    <input type="text" name="login" placeholder="login" required>.<br/>
    <input type="password" name="mdp" placeholder="mot de passe" required><br/>
    <input type="submit" value="se deconnecter">
</form>

<?php

    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(isset($_POST['login']) && isset($_POST['mdp'])){
            if(!empty($_POST['login']) && !empty($_POST['mdp'])){
                extract($_POST);
                $con=mysqli_connect("localhost","root","","revisionhtml_php");

                $requete_sql = "select login from personne where login ='".$login."'"; 
                
                if(mysqli_query($con,$requete_sql) == false){
                    if(mysqli_num_rows(mysqli_query($con,$requete_sql))==1){
                        header("location");
                    }
                }
                else {
                    echo "Echec de la requete";
                }


            }
        }
    }

?>