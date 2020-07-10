<?php include 'includes/header.php' ?>

    <div class="div2">

        <div class="div-alert">
        <?php 
            if ( isset ($_POST ['inscrire'])) {
                $matricule = $_POST ['matricule'] ;
                $nom = $_POST ['nom'] ;
                $prenom = $_POST ['prenom'] ;
                $password = md5($_POST ['password']) ;
                $req = "INSERT INTO conducteurs(matricule,nom,prenom,password) VALUES ('$matricule','$nom','$prenom','$password')";
                $res = mysqli_query($con,$req) ;
                if ( !$res )
                    echo ('QueryFieled'.mysqli_error()) ;
                else
                    header ('location: index.php?msg_succ=ajoutee avec success') ;
            }
        ?>
        </div>

        <form action="" method="POST">
            <div class="form-group">
                <label> Matricule : </label>
                <input type="text" name="matricule" class='form-control' required>
            </div>
            <div class="form-group">
                <label> Nom : </label>
                <input type="test" name="nom" class='form-control' required>
            </div>
            <div class="form-group">
                <label> Prénom : </label>
                <input type="text" name="prenom" class='form-control' required>
            </div>
            <div class="form-group">
                <label> Mot de passe : </label>
                <input type="password" name="password" class='form-control' required>
            </div>
            <div class="form-group">
                <input type="submit" name="inscrire" class='btn btn-danger form-control'>
            </div>
        </form>

    </div>

<?php include 'includes/footer.php' ?>