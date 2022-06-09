<main class="container">
<div class="row justify-content-center">
            <div id="item" class="col-lg-5 col-md-7 col-sm-9 col-11">
                <h1 class="h1" id="sign-in">Se Connecter</h1>
                <?php if($status != ""){ ?>
                    <div class="alert alert-danger">
                        <?php echo $status; ?>
                    </div>
                <?php } ?>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control form-control-lg" name="password" id="password">
                    </div>
                    <div class="d-grid gap-2">
                        <button class="submit" type="submit">Se Connecter</button>
                    </div>
                </form>
                <p><a href="<?= URL."signin" ?>">Pas encore inscrit? Créer votre compte</a></p>
            </div>
        </div>
</main>