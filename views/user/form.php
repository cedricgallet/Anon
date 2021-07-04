<form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" id="formUser">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header bg-primary bg-gradient text-center text-white fw-bold fs-5">
                        Créer votre compte
                    </div>
                    <div class="card-body">
                        
                            <div class="mb-3">
                            <!-- =============================================CHAMP PSEUDO=============================================== -->
                                <label for="name" class="form-label">Pseudo</label>
                                <input type="text" name="pseudo" id="pseudo"
                                    title="Le pseudo n' est pas au format attendu"
                                    value="<?=htmlentities($pseudo ?? '') ?>" placeholder="Entrez votre prénom"
                                    class="form-control <?=isset($error['pseudo']) ? 'errorField' : ''?>"
                                    autocomplete="given-name" minlength="2" maxlength="70"
                                    pattern="<?=REGEX_NO_NUMBER?>">
                                <div class="error"><?=$error['pseudo'] ?? ''?></div>
                            </div>

                            <div class="mb-3">
                            <!-- ============================================CHAMP EMAIL=================================================== -->
                                <label for="email" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="email" required
                                    value="<?=htmlentities($email ?? '') ?>"
                                    class="form-control <?=isset($error['email']) ? 'errorField' : ''?>"
                                    placeholder="Votre E-mail" autocomplete="email">
                                <div class="error"><?=$error['email'] ?? ''?></div>
                            </div>

                            <div class="mb-3">
                            <!-- =====================================CHAMP EMAIL CONFIRMATION============================================== -->
                                <label for="email" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="email" required
                                    value="<?=htmlentities($email ?? '') ?>"
                                    class="form-control <?=isset($error['email']) ? 'errorField' : ''?>"
                                    placeholder="Confirmation  E-mail" autocomplete="email">
                                <div class="error"><?=$error['email'] ?? ''?></div>
                            </div>

                            <div class="mb-3">
                            <!-- =======================================CHAMP MOT DE PASSE================================================== -->
                                <label for="password1" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password1"
                                    placeholder="Votre mot de passe" required>
                            </div>

                            <div class="mb-3">
                            <!-- ================================CHAMP MOT DE PASSE CONFIRMATION============================================= -->
                                <label for="password2" class="form-label">Confirmation mot de passe</label>
                                <input type="password" class="form-control" id="password2"
                                    placeholder="Confirmation mot de passe" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Créer un compte</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>