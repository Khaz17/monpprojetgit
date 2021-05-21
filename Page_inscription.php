<?php
session_start();
include('Link.php');
?>
<?php
    if (isset($_POST["submit1"]))  {
        header('Location:Page_accueil_modules.php');
    }

    if (isset($_POST["submit2"]))  {
        header('Location:Result.php');
    }
?>

<?php include('navhead.php'); ?>
    <div class="container" style="padding-top: 20px; padding-left: 150px; padding-right: 150px; padding-bottom: 30px">
        <div class="row">
          
            <div class="col-md-5 text-right" style="background-color: black; color: white; height: 150px">
                <h3><strong>REKTO<br></strong><small>Logiciel de gestion d'anonymat d'examens</small></h3>
                <p> </p>
                <p>Pour les centres de formation, les lycées, les universités et concours !</p>
            </div>
            <div class="col-md-7" style="background-color: #3886c8; color: white; height: 150px; padding-right: 10px; height: 150px">
                <h3><strong>Candidats déjà inscrits</strong></h3>
                <p>Si vous avez déjà un compte, vous pouvez vous connecter et composer dans vos modules dès maintenant.</p>
                <form method="post">
                    <input type="submit" name="submit1" class="btn btn-default" style="font-size: 12px;" value="J'ai déjà un compte"><br>
                </form>
            </div>
            <div class="col-md-12" style="background-color: white; padding: 2%; height: 370px">
                <h3 class="text-primary"><strong>SI VOUS ÊTES NOUVEAU...</strong></h3>
                <form action="Result.php" method="post">
                    <div class="col-xs-4 form-group">
                        <br>
                        <label for="fname">Nom</label><br>
                        <input type="text" name="fname" class="form-control" id="fn" required>
                    </div>
                    <div class="col-xs-4 form-group">
                        <br>  
                        <label for="lname">Prénoms</label><br>
                        <input type="text" name="lname" class="form-control" id="ln" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <br>
                        <label for="sex">Sexe</label><br>
                        <select name="sex" class="form-control" id="sex" required>
                            <option>Non renseigné</option>
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                    </div>
                    <div class="col-xs-4 form-group">
                        <label for="birthd">Date de naissance</label><br>
                        <input type="date" name="birthd" class="form-control" id="bd" placeholder="Sous la forme aaaa-mm-jj">
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="fpays">Nationalité</label><br>
                        <input type="text" name="fpays" class="form-control" id="fp" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="mat">Matricule</label><br>
                        <input type="text" name="mat" class="form-control" id="me" required>
                    </div>
                   
                    <div class="col-md-6 form-group">
                        <label for="usrn">Nom d'utilisateur</label><br>
                        <input type="text" name="usrn" class="form-control" id="un" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="filiere">Filière</label><br>
                        <select class="form-control" id="filiere" name="filiere" required>
                            <option>Non renseigné</option>
                            <optgroup label="LMD">
                                <option value="1">GEA (Gestion des Entreprises et Administration)</option>
                                <option value="2">GEII (Génie électrique et informatique industrielle)</option>
                                <option value="3">GLT (Gestion Logistique et Transports)</option>
                                <option value="4">GMP (Génie Mécanique et Productique)</option>
                                <option value="5">INFO-COM (Information et Communication)</option>
                                <option value="6">SIL (Systèmes informatiques et Logiciels)</option>
                                <option value="7">TC (Techniques de commercialisation)</option>
                            </optgroup>
                            <optgroup label="Autres">
                                <option value="8">BTS (Brevet de technicien supérieur)</option>
                                <option value="9">ILA (International Language Academy)</option>
                                <option value="10">CCNA-CISCO</option>
                                <option value="11">JA (Journalisame et Audiovisuel)</option>
                                <option value="12">CME (Communication et Management des Entreprises)</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="col-xs-12 text-right">
                    <input type="submit" name="submit2" class="btn btn-primary" style="font-size: 12px;" value="Soumettre"><br>
                    </div>
                    <br><br>
                </form>
            </div>
            <div class="col-md-7" style="background-color: black; height: 7px">

            </div>
            <div class="col-md-5" style="background-color: #3886c8; height: 7px">

            </div>
        </div>
    </div>  
</body>
</html>