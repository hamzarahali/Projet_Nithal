<?php include 'includes/header.php' ?>
    
    <div class="div1">

        <div class="div-alert">
            <?php 
                if ( isset ($_POST ['login']) ) {
                    $matricule = $_POST ['matricule'] ; 
                    $pass = md5($_POST ['password']) ;
                    
                    $req = "SELECT * FROM conducteurs WHERE matricule LIKE '$matricule' AND password LIKE '$pass'" ;
                    $res = mysqli_query($con,$req) ;
                    if ( mysqli_num_rows($res) != 0) {
                        session_start();
                        $_SESSION['matricule'] = $matricule ;
                        header('location: pilotage.php') ; 
                    } 
                    else 
                        echo '<h6 class="alert alert-danger">Matricule ou mot de passe incorrecte </h6>' ; 
                }
            ?>
        </div>

        <form action="" method="POST">
            <div class="form-group">
                <label> Matricule : </label>
                <input type="text" name="matricule" class='form-control' required>
            </div>
            <div class="form-group">
                <label> Mot de passe : </label>
                <input type="password" name="password" class='form-control' required>
            </div>
            <div class="form-group">
                <input type="submit" name="login" class='btn btn-success form-control'>
            </div>
        </form>
        
    </div>

<?php include 'includes/footer.php' ?>