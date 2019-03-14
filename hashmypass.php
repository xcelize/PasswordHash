<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Password</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="app.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">My Password Hash</a>
    </nav>
    <div class="row justify-content-center mt-4">
        <div id="top-page">
            <h3 id="title" class="text-center">Chiffrer mon mot de passe</h3>
            <p class="lead text-center">
                Cette <strog>fonctionalité</strong> sert à inscrire un mot de passe ou alors en générer un <strong>aléatoirement.</strong><br>
                Pour les tests sans avoir besoin de développer toute la partie User. <strong>C'est cool je partage :p.</strong>
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
    <div class="form-pass">
        <h5 class="text-center">Let's Do It</h5>
        <div class="container">
            <div class="row text-center justify-content-center mt-4">
                <form>
                    <div class="form-group">
                        <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="addon-wrapping"><img width="20" height="20" src="https://image.flaticon.com/icons/svg/1621/1621166.svg" alt="logo_Password"><span class="popup">Régénérer</span></span>
                            </div>
                            <input class="form-control" id="init-password" type="text" name="password" placeholder="Ici je génère le mot de passe">
                        </div>
                    </div>
                    <div class="form-group">
                        <button id="sub-form" type="button" class="btn btn-outline-primary">Chiffrer mon mot de passe</button>
                    </div>
                </form>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="input-group flex-nowrap w-50">
                        <input class="form-control" id="returned-password" value="" placeholder="Resultat de l'algorithme BCRYPT" readonly>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-copy"><img width="20" height="20" src="https://image.flaticon.com/icons/svg/1622/1622069.svg" alt="logo_copied"><span class="popup">Copiez moi!</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="app.js"></script>
    </body>
</html>
