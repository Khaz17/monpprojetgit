<?php require_once('Link.php'); ?>

<?php
    $info = $_POST;
    $usrn = isset($info['usrn']) ? $info['usrn'] : '';
    $mat = isset($info['mat']) ? $info['mat'] : '';
?>

<?php include('navhead.php'); ?>
    <div class="container" style="padding: 120px 300px 60px 300px;">
        <div class="row">
            <div class="col-md-12" style="height: 5px; background-color: black;"></div>
            <div class="col-md-12 bg-primary" style="height: 40px; color: white;"> 
                <h4 style="text-align: center">CONNECTEZ-VOUS À VOTRE COMPTE DE PARTICIPANT</h4>
            </div>
            <div class="col-md-12"  style="height: 250px; background-color: white; color: black; ">
                <br>
                <form method="post" class="form-group" action="Page_modules_sil1.php">
                    <label for="usrn">Nom d'utilisateur</label><br>
                    <input type="text" name="usrn" class="form-control text-center" id="un" required>
                    <br>
                    <label for="mat"">Matricule</label><br>
                    <input type="password" name="mat" class="form-control text-center" id="sm" required><br>
                    <div class="col-md-12 text-right">
                        <input type="submit" name="soumettre" class="btn btn-success" style="font-size: 12px;" value="Soumettre"><br>
                    </div>
                    
                </form>
            </div> 
            <div class="col-md-6" style="background-color: #3886c8; height: 5px; margin-top: 0%;"></div>
            <div class="col-md-6" style="background-color: black; height: 5px; margin-top: 0%;"></div>     
        </div> 
    </div>

</body>
</html>
  