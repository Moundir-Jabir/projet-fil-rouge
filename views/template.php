<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/style.css">
    <title>iStore Maroc</title>
</head>
<body>
<header>
        <?php if(!is_admin()){ ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?= URL ?>">iStore Maroc</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5">
                  <li class="nav-item">
                    <a class="nav-link"  href="<?= URL."accueil" ?>">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= URL."produits" ?>">Nos Produits</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= URL."propos" ?>">A Propos</a>
                  </li>                 
                  <li class="nav-item">
                    <a class="nav-link" href="<?= URL."contact" ?>">Contact</a>
                  </li>
                </ul>
                <div class="me-5">
                    <a href="<?= URL."profil" ?>"><img src="assets/icons/user-solid.svg" alt="User ico"></a>
                    <a href="<?= URL."panier" ?>" class="position-relative">
                    <i style="margin: 15px;color: black;" class="fa-solid fa-cart-shopping"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        9
                    </span>
                    </a>
                </div>
              </div>
            </div>
          </nav>
          <?php }else{ ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?= URL."dashboard" ?>">iStore Maroc</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-5">
                  <li class="nav-item">
                    <a class="nav-link"  href="<?= URL."dashboard" ?>">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="<?= URL."gestionstock" ?>">Stock</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= URL."gestioncommandes" ?>">Commandes</a>
                  </li>
                </ul>
                <div class="me-5">
                    <a href="<?= URL."logout" ?>"><i style="color: black;" class="fa-solid fa-2x fa-arrow-right-from-bracket"></i></a>
                </div>
              </div>
            </div>
          </nav>
          <?php } ?>
    </header>
        <?= $content ?>
        <?php if(!is_admin()){ ?>
    <footer id="acceuilFooter">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <div>
                <h2>iStore Maroc</h2>
                <span class="d-block mb-2 text-secondary">
                    Email : istore-maroc@gmail.com
                </span>
                <span class="text-secondary">
                    Phone:  06 34 76 33 77
                </span>
            </div>
            <div class="w-75  ps-5">
            <ul class="d-flex justify-content-between list-unstyled fw-bold mt-4 mt-md-0">
                    <li><a class="text-decoration-none text-dark" href="<?= URL."propos" ?>">Qui nous somme</a></li>
                    <li><a class="text-decoration-none text-dark" href="<?= URL."contact" ?>">Contact</a></li>
                    <li><a class="text-decoration-none text-dark" href="<?= URL."blog" ?>">Blog</a></li>
            </ul>
            </div>
        </div>
        <div id="footerSeparatorAcc"></div>
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center mt-4">
            <span class="text-secondary">Copyright © 2020 | Created by Moundir Jabir</span>
            <span class="text-secondary">Terms of Use &nbsp; &nbsp;|&nbsp; &nbsp; Privacy Policy</span>
        </div>
      </footer>
        <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>