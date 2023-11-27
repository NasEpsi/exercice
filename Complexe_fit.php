<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="compfit.css">
    <title>Complexe-Fit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<style>
#log {
  margin-left:-15px;
  width: 160px;
  height: 32px;
}

    body {
        background-color: #252526;
        color: white;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    nav {
        background-color: #8C031C;
    }

    .navbar {
        padding: 1rem 2rem;
    }

    .navbar-brand img {
        width: 120px; /* Adjust as needed */
        height: auto;
    }

    .nav-link {
        color: white !important;
        font-weight: bold;
        margin-right: 20px;
        transition: color 0.3s ease-in-out;
    }

    .nav-link:hover {
        color: #D92949 !important;
    }

    .jumbotron {
        background-color: #8C031C;
        color: white;
        padding: 4rem 2rem;
        text-align: center;
        border-radius: 15px;
    }

    .btn-primary {
        background-color: #D92949;
        border-color: #D92949;
    }

    .btn-primary:hover {
        background-color: #BF0426;
        border-color: #BF0426;
    }

    .textdivPro {
        background-color: #8C031C;
        color: white;
        padding: 3rem;
        text-align: center;
    }

    .feature {
        text-align: center;
        margin: 2rem 0;
    }

    .feature-icon {
        font-size: 3rem;
        color: #007bff;
    }

    #pricing {
        background-color: #8C031C;
        color: white;
        padding: 3rem;
        text-align: center;
    }

    .pricing-card {
        margin-top: 2rem;
    }

    .testimonial {
        text-align: center;
        padding: 2rem;
        background-color: #8C031C;
        margin: 1rem 0;
        border-radius: 15px;
    }

    .gallery {
        padding: 3rem 0;
        background-color: #8C031C;
        text-align: center;
    }

    .gallery img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 1rem;
    }

    .cta {
        background-color: #8C031C;
        color: white;
        padding: 3rem 0;
        text-align: center;
    }

    .footerPage {
        background-color: #252526;
        padding: 3rem 0;
        text-align: center;
    }

    .site-footer {
        color: white;
    }

    .social-icons img {
        width: 45px;
        height: 45px;
        margin-right: 15px;
    }

    .copyright-text {
        margin-top: 15px;
        color: #8C031C;
    }
</style>
</style>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
        <div class="logo">
            <img src="Complexefit_logo-removebg.png" alt="" id="log">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="VenteProjet.php">Produit</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link"  href="articles.php">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="EquipeDir.php">Equipe</a>
                </li>
            <li class="nav-item ">
                <a class="nav-link"  href="MapProjet.php">Emplacements</a>
                </li>
            <li class="nav-item ">
                <a class="nav-link"  href="#foot">Contacts</a>
                </li>
            </ul>
                

                </div>
        <div class= login>
        <form action="signup.php">
        <input id="logg" type="submit" value="S'incrire">
    </form>
        <form action="projet-login1.php">
        <input id="logg2" type="submit" value="Se Connecter">
    </form>
</div>


            <!-- Liens de navigation vers les différentes sections du site --> 
</nav>
 <!-- Main Content -->
 <div class="container mt-4">

<!-- Jumbotron/Welcome Section -->
<div class="jumbotron">
    <h1 class="display-4">Bienvenue chez Complexe-Fit!</h1>
    <p class="lead">Votre voyage vers une vie plus saine et plus en forme commence ici.</p>
    <hr class="my-4">
    <p>Découvrez nos installations ultramodernes, nos programmes d’entraînement personnalisés et nos conseils d’experts.</p>
    <a class="btn btn-primary btn-lg" href="#pricing" role="button">Découvrez les adhésions</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Features Section -->
<div class="textdivPro">
<div class="row">
    <h2 class="text-center">Nos Caractéristique</h2>
    <br>
    <br>
    <br>
    <div class="col-md-4 feature">
        <i class="bi bi-trophy feature-icon"></i>
        <h3>Conseils D'experts</h3>
        <p>Nos entraîneurs certifiés sont là pour vous guider dans votre parcours de remise en forme.</p>
    </div>
    <div class="col-md-4 feature">
        <i class="bi bi-geo-alt feature-icon"></i>
        <h3>Multiple Emplacements</h3>
        <p>Salles de sport idéalement situées dans les grandes villes de France.</p>
    </div>
    <div class="col-md-4 feature">
        <i class="bi bi-clock feature-icon"></i>
        <h3>Horaires Flexibles</h3>
        <p>Entraînez-vous selon votre horaire grâce à nos heures d’entraînement prolongées.</p>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Pricing Section -->
<div id="pricing" class="row pricing-card">
  <h2 class="text-center">Nos abonnements</h2>
  <br>
  <br>
  <br>
    <!-- Bootstrap Pricing Card -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Basique</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">14.99€ <small class="text-muted">/ mois</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Accès à une salle de sport de base</li>
                    <li>Plans d’entraînement personnalisés</li>
                    <li>Assistance par email</li>
                </ul>
                <a href="sub.php" class="btn btn-lg btn-block btn-outline-primary" role="button">Rejoignez</button></a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Musclé</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">24.99€ <small class="text-muted">/ mois</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Accès à une salle de sport de base</li>
                    <li>Plans d’entraînement personnalisés</li>
                    <li>Assistance par email</li>
                    <li>Coach personnalisé</li>
                </ul>
                <a href="sub.php" class="btn btn-lg btn-block btn-outline-primary" role="button">Rejoignez</button></a>            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h4 class="my-0 font-weight-normal">Pro</h4>
            </div>
            <div class="card-body">
                <h1 class="card-title pricing-card-title">34.99€ <small class="text-muted">/ mois</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>Accès à une salle de sport de base</li>
                    <li>Plans d’entraînement personnalisés</li>
                    <li>Assistance par email</li>
                    <li>Coach personnalisé</li>
                    <li>Massage et accées espace détente</li>
                </ul>
                <a href="sub.php" class="btn btn-lg btn-block btn-outline-primary" role="button">Rejoignez</button></a>            </div>
        </div>
    </div>
    <!-- Repeat the above card structure for other pricing plans -->

</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="textdivPro">
<div class="row">
    <div class="col-md-12">
        <h2 class="text-center">Ce que disent nos membres</h2>
    </div>
    <br>
    <div class="col-md-4 testimonial">
        <p>"Complexe-Fit a transformé ma vie. Les formateurs sont compétents, et les installations sont de qualité. Hautement recommandé!"</p>
        <strong>- Sarah M.</strong>
    </div>
    <div class="col-md-4 testimonial">
        <p>"J’adore la souplesse des heures d’entraînement. Complexe-Fit m’a permis de rester fidèle à mes objectifs de condition physique."</p>
        <strong>- John D.</strong>
    </div>
    <div class="col-md-4 testimonial">
        <p>"La variété d’équipement et de cours offerts au Complexe-Fit rend mes séances d’entraînement excitantes. C’est plus qu’une simple salle de fitness; c’est une communauté."</p>
        <strong>- Emily R.</strong>
    </div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="gallery">
    <h2 class="text-center">Gallerie Photo</h2><br>
    <div class="row">
        <div class="col-md-4">
            <img src="https://lightinfitness.com/wp-content/uploads/2022/11/Appareils-de-musculation-professionnels.jpg" class="img-fluid" alt="Gym Image 1" weight="800px" height="550px">
        </div>
        <div class="col-md-4">
            <img src="https://www.pariscountryclub.com/wp-content/uploads/2022/12/pcc-actus-debuter-salle-sport.jpg" class="img-fluid" alt="Gym Image 2" weight="800px" height="550px">
        </div>
        <div class="col-md-4">
            <img src="https://www.toute-la-franchise.com/images/zoom/news/xl/542474.jpg" class="img-fluid" alt="Gym Image 3" weight="800px" height="550px">
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- Call to Action Section -->
<div class="cta">
    <h2>Prêt à vous mettre en forme?</h2>
    <p>Joignez-vous à Complexe-Fit aujourd’hui et commencez votre parcours de conditionnement physique avec nous!</p>
    <a href="#pricing" class="btn btn-light btn-lg">Inscrivez-vous dès maintenant</a>
</div>
</div>
<div class="footerPage">
<footer id="foot"class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>A propos</h6>
            <p class="text-justify">Complexe-Fit est une entreprise émergeante dans le fitness en France. Présente avec ses salles de sport sur Paris, Lyon, Rouen, Lille et Marseille, Complexe-Fit propose aussi à la vente des accessoires de sport, type élastiques, haltères, machines mais aussi des compléments alimentaires sportif.</p>
            <br>
            <br>
            <h6>Contact</h6>
            <p>Contacter notre service clients: 06 10 14 89 74</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Liens</h6>
            <ul class="footer-links">
              <li><a href="Complexe_fit.php">Accueil</a></li>
              <li><a href="VenteProduit.php">Produit</a></li>
              <li><a href="Comps">Article</a></li>
              <li><a href="EquipeDir.php">Equipe</a></li>
              <li><a href="MapProjet.php">Emplacements</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2023 All Rights Reserved by 
         <a href="Complexe_fit.php">Complex-Fit</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="instagram" href="https://www.instagram.com/complexfit2023/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/2048px-Instagram_icon.png" wight="45px" height="45px"><i class="fa fa-instagram"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/ComplexFit2023"><img src="https://images.frandroid.com/wp-content/uploads/2023/07/logo-1.png" wight="45px" height="45px"><i class="fa fa-twitter"></i></a></li>
              <li><a class="tiktok" href="https://www.tiktok.com/@complexfit1?lang=fr"><img src="https://img.freepik.com/vecteurs-premium/logo-tik-tok_578229-290.jpg" wight="45px" height="45px"><i class="fa fa-tiktok"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>



</html>