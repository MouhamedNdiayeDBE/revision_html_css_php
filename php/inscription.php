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
                
          
                
                <h1>mot de passe:</h1>  <input type="password" placeholder="mot de passe" name="mdp"> <br/>

                <h1>profil:</h1>         <select name="profil">
                                            <option value="e">Etudiant</option>
                                            <option value="p">Professeur</option>
                                         </select>

                <h1>Classe:</h1>         <select name="classe">
                                            <option value="dbe">DBE</option>
                                            <option value="dfe">DFE</option>
                                        </select>


                
                <h1>envoyer:</h1>       <input type="submit" value="s'inscrire">
            </form>
    
        </div>
    </main>


    <footer>
    </footer>


</body>

<?php
   
    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST['nom']) && isset($_POST['login']) && isset($_POST['mdp']) && isset($_POST['profil']) && isset($_POST['classe'])){
            if(!Empty($_POST['nom']) && !Empty($_POST['login']) && !Empty($_POST['mdp']) && !empty($_POST['profil']) && !empty($_POST['classe'])){
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