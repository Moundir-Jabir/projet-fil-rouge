<main class="container">
<div class="row justify-content-center">
            <div id="item" class="col-lg-5 col-md-7 col-sm-9 col-11">
                <h1 class="h1" id="sign-in">Création de nouveau compte</h1>
                <?php if($status != ""){ ?>
                    <div class="alert alert-danger">
                        <?php echo $status; ?>
                    </div>
                <?php } ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Nom complet</label> <span id="fullname-validation"></span>
                        <input type="text" class="form-control form-control-lg" name="fullname" id="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label> <span id="email-validation"></span>
                        <input type="email" class="form-control form-control-lg" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Télephone</label> <span id="phone-validation"></span>
                        <input type="text" class="form-control form-control-lg" name="phone" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="ville" class="form-label">Ville</label> <span id="ville-validation"></span>
                        <input type="text" class="form-control form-control-lg" name="ville" id="ville">
                    </div>
                    <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse de livraison</label> <span id="adresse-validation"></span>
                        <textarea class="form-control" name="adresse" id="adresse" cols="20" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Photo de profil</label> <span id="image-validation"></span>
                        <input type="file" class="form-control form-control-lg" name="image" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label> <span id="password-validation"></span>
                        <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="password must contain at least 8 caracters">
                    </div>
                    <div class="mb-3">
                        <label for="password2" class="form-label">Confirmation du mot de passe</label> <span id="password2-validation"></span>
                        <input type="password" class="form-control form-control-lg" id="password2" placeholder="confirm password">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="submit" type="submit">Valider</button>
                    </div>
                </form>
                <p><a href="<?= URL."login" ?>">Déja Client? Se connecter</a></p>
            </div>
        </div>
    </main>
    <script src="assets/script/sign-up.js"></script>