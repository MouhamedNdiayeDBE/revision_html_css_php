<head>
    <link rel="stylesheet" href="../css/inscription.css">
</head>
<body>

    <header>
    </header>

    <main>
        <div>
            <form method="POST" action="">
                <h1>nom:</h1>           <input type="text" placeholder="nom" name="nom"> <br/>
                
                <h1>login:</h1>         <input type="text" placeholder="login" name="login"> <br/>
                
          <!--      <h1>profil:</h1>         <select>
                                            <option>Etudiant</option>
                                            <option>Professeur</option>
                                         </select>

                <h1>Classe:</h1>         <select>
                                            <option>DBE</option>
                                            <option>DFE</option>
                                        </select>

-->
                
                <h1>mot de passe:</h1>  <input type="password" placeholder="mot de passe" name="mdp"> <br/>
                
                <h1>envoyer:</h1>       <input type="submit" value="s'inscrire">
            </form>
    
        </div>
    </main>


    <footer>
    </footer>


</body>

<?php
   
    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST['nom'])&& isset($_POST['login']) && isset($_POST['mdp'])){
            if(!Empty($_POST['nom']) && !Empty($_POST['login']) && !Empty($_POST['mdp'])){
                extract($_POST);
                
                //connexion de la base de donnee
                $con=mysqli_connect("localhost","root","","revisionhtml_php");
                //Requete dans la bd
    
                if(mysqli_num_rows(mysqli_query($con,"select * from Personne where login='$login'"))===0){
                    mysqli_query($con, "INSERT INTO Personne VALUES ('$login', '$nom', '$mdp')");
                    header("location: inscription.php?success=Compte creer avec succes");
                    echo $_GET['success'];
                }
                else {
                    header("location:?error=Ce login existe deja");
                    echo $_GET['error'];
                }

    
            }
        }
    }

    

?>