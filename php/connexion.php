<form method="POST">
    <input type="text" name="login" placeholder="login" required>.<br/>
    <input type="password" name="mdp" placeholder="mot de passe" required><br/>
    <input type="submit" value="se connecter">
</form>

<?php
    //sesion_start();
    if($_SERVER['REQUEST_METHOD'] === "POST"){
        if(isset($_POST['login']) && isset($_POST['mdp'])){
            if(!empty($_POST['login']) && !empty($_POST['mdp'])){
                extract($_POST);
                $con=mysqli_connect("localhost","root","","revisionhtml_php");

                $requete_sql = "select login from personne where login ='".$login."'"; 
                
                if(mysqli_query($con,$requete_sql) !== false){
                    if(mysqli_num_rows(mysqli_query($con,$requete_sql))==1){
                        //$_SESSION['login'] = $login;
                        $query = mysqli_query($con,"select profil,classe from personne where login = '".$login."'");
                       
                            while($element = mysqli_fetch_array($query)){
                                $data['profil'] = $element['profil'];
                                $data['classe'] = $element['classe'];
                            
                            }

                            $profil = $data['profil'];
                            $classe = $data['classe'];

                        header("location:espace.php?login=$login&profil=$profil&classe=$classe");
                    
                    }
                    else {
                        echo "Ce login n'existe pas";
                    }

                }
                else {
                    echo "Requete Incorrect";
                }


            }
        }
    }

?>