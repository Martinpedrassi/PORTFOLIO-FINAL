<?php include 'C:\UwAmp\www\sendmail.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!--alert messages start-->
    <?php echo $alert; ?>
        <!--alert messages end-->
    <header class="container header active" id="home">
        <div class="header-content">
            <div class="left-header">
                <div class="h-shape"></div>
                <div class="image">
                    <img src="img/martin.png" alt="">
                </div>
            </div>
            <div class="right-header">
                <h1 class="name">
                    Bonjour ! <span> Je suis Martin PEDRASSI</span>
                    Étudiant en GBS
                </h1>
                <p>
                    Actuellement au gaming campus depuis bientôt 3 ans, je suis en recherche d'un stage afin de valider ma dernière année de Bachelor.
                    Ce site vous permet de visualiser l'ensemble de mon travail sur les 3 années passées.
                </p>
                <div class="btn-con">
                    <a href="Assets/A.pdf" class="main-btn">
                        <span class="btn-text">Télécharger mon CV</span>
                        <span class="btn-icon"><i class="fas fa-download"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="container about" id="about">
            <div class="main-title">
                <h2>A propos de<span> moi</span><span class="bg-text">Statistiques</span></h2>
            </div>
            <div class="about-container">
                <div class="left-about">
                    <h4>Information sur moi</h4>
                    <p>
                        Actuellement au gaming campus depuis bientôt 3 ans, je suis en recherche d'un stage afin de
                        valider ma dernière année de Bachelor. Ce site vous permet de visualiser l'ensemble de mon travail sur les 3 années passées.
                        <br /> <br /> 
                        Au bout de 3 ans, j'ai réussis à réaliser plus de 40 projets, 2 stages très enrichissants en entreprise et beaucoup de rencontre avec des professionels.
                    </p>
                    <div class="btn-con">
                        <a href="Assets/A.pdf" class="main-btn">
                            <span class="btn-text">Télécharger mon CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">40+</p>
                            <p class="small-text">Projets <br /> Réalisés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">3+</p>
                            <p class="small-text">années d'étude<br />dans le jeu video</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">2+</p>
                            <p class="small-text">stages en entreprise<br /> réalisés</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">∞+</p>
                            <p class="small-text">d'amour<br />pour le gaming</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats">
                <h4 class="stat-title">Mes compétences</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">Marketing</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Communication</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Montage Vidéo / Motion design</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">UX, UI</p>
                        <div class="progress-con">
                            <p class="prog-text">85%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">PAO</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Art oratoire</p>
                        <div class="progress-con">
                            <p class="prog-text">90%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="stat-title">Mon parcours</h4>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2017 - 2020</p>
                    <h5>Lycée<span> - Institution Jean d'arc</span></h5>
                    <p>
                        Filière S,<br>Obtention du bac avec mention, été 2020
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2020 - 2021</p>
                    <h5>GBS1<span> - Première année d'étude</span></h5>
                    <p>
                        Découverte des notions global "business", initiation à des outils techniques (montage, web...)
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">mai 2021 - juillet 2021</p>
                    <h5>Stage chez VDV <span> - Stage en entreprise</span></h5>
                    <p>
                        Entreprise de vente de produit animalier.
                        <br>Objectif de digitaliser une entreprise veillissante
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2021 - 2022</p>
                    <h5>GBS2<span> - Deuxième année d'étude</span></h5>
                    <p>
                        Approfondissement notions, Apprentissage d'outils techniques plus complexe
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">mai 2022 - juillet 2022</p>
                    <h5>Stage chez Optivity<span> - Stage en entreprise</span></h5>
                    <p>
                        Start-up / Agence de conseil
                        <br>Participer à la communication et au branding d'une agence
                    </p>
                </div>
                <div class="timeline-item">
                    <div class="tl-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <p class="tl-duration">2022 - present</p>
                    <h5>GBS3<span> - Troisème année d'étude</span></h5>
                    <p>
                        In progress...
                    </p>
                </div>
            </div>
        </section>
        <section class="container" id="portfolio">
            <div class="main-title">
                <h2>Mon <span>Portfolio</span><span class="bg-text">travaux</span></h2>
            </div>
            <p class="port-text">
                Voici quelques un de mes projets réalisés lors de mon parcours scolaire et professionel
            </p>
            <div class="portfolios">
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/trailergg.PNG" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Teaser Motion Design</h3>
                        <div class="icons">
                            <a href="https://www.youtube.com/watch?v=oO-OZS9lkzo" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/logom.PNG" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Logo Motion Design</h3>
                        <div class="icons">
                            <a href="https://youtu.be/V1N4EvQEPNs" class="icon">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/DP.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>UX/UI rework</h3>
                        <div class="icons">
                            <a href="Assets/UXdigit.pdf" class="icon">
                                <i class="fas fa-file-pdf"></i>
                            </a>                           
                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/studio.PNG" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Plan de com studio JV</h3>
                        <div class="icons">
                            <a href="Assets/COM.pdf" class="icon">
                                <i class="fas fa-file-pdf"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/french.jpg" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Création podcast/article</h3>
                        <div class="icons">
                            <a href="Assets/pod.mp3" class="icon">
                                <i class="fas fa-podcast"></i>
                            </a>
                            <a href="Assets/article.pdf" class="icon">
                                <i class="fas fa-file-pdf"></i>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="image">
                        <img src="img/sonix.png" alt="">
                    </div>
                    <div class="hover-items">
                        <h3>Plan marketing</h3>
                        <div class="icons">
                            <a href="https://www.figma.com/proto/he8mwyWzyuAzbzbyQxf6eX/SONIX-PRES?page-id=0%3A1&node-id=1%3A2&starting-point-node-id=1%3A2" class="icon">
                                <i class="fab fa-figma"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container" id="blogs">
            <div class="blogs-content">
                <div class="main-title">
                    <h2>Mes <span>Blogs</span><span class="bg-text">Blogs</span></h2>
                    <p class="port-text">
                        Voici quelques forums liés à mon profil
                </div>
                <div class="blogs">
                    <div class="blog">
                        <img src="img/gc.png" alt="" >
                        <div class="blog-text"> 
                            <a href="https://gamingcampus.fr/ecoles/#bloc__ecole_commerce">                       
                                <h4 >
                                 En savoir plus sur ma formation
                                 </h4>
                            </a>  
                            <p>
                                Descriptif complet de ma formation au sein du Gaming campus, en gaming business school
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container contact" id="contact">
            <div class="contact-container">
                <div class="main-title">
                    <h2>Contactez <span>Moi</span><span class="bg-text">Contactez</span></h2>
                </div>
                <div class="contact-content-con">
                    <div class="left-contact">
                        <h4>Contactez moi ici</h4>
                        <p>
                            Pour toutes questions vis à vis de mon profil, de ma formation
                            ou une simple envie d'echanger avec moi, n'hésitez pas  me contacter
                        </p>
                        <div class="contact-info">
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <span>Localisation</span>
                                </div>
                                <p>
                                    : Lyon, France
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                    <span>Email</span>
                                </div>
                                <p>
                                    <span>: pedrassimartin@gmail.com</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Ecole</span>
                                </div>
                                <p>
                                    <span>: Gaming Campus, Lyon</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-user-graduate"></i>
                                    <span>Numéro de téléphone</span>
                                </div>
                                <p>
                                    <span>: 0675959191</span>
                                </p>
                            </div>
                            <div class="contact-item">
                                <div class="icon">
                                    <i class="fas fa-globe-africa"></i>
                                    <span>Langue</span>
                                </div>
                                <p>
                                    <span>: Français, Anglais, Japonais</span>
                                </p>
                            </div>
                        </div>
                        <div class="contact-icons">
                            <div class="contact-icon">
                                <a href="https://www.linkedin.com/in/martin-pedrassi-18900920b/" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://twitter.com/MarKOfeu" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="right-contact">
                        <form action="" class="contact-form" method="post">
                            <div class="input-control i-c-2">
                                <input type="text" name="name" placeholder="VOTRE NOM" required>
                                <input type="email" name="email" placeholder="VOTRE EMAIL" required>
                            </div>
                            <div class="input-control">
                                <input type="text" name="subject" placeholder="ENTRER LE SUJET" required>
                            </div>
                            <div class="input-control">
                                <textarea name="message" id="" cols="15" rows="8" placeholder="Votre message ici..." required></textarea>
                            </div>
                            <div class="submit-btn">
                                <input type="submit" name="submit" class="send-btn" value="Envoyer">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="controls">
        <div class="control active-btn" data-id="home" >
            <i class="fas fa-home"></i>
        </div>
        <div class="control" data-id="about">
            <i class="fas fa-user"></i>
        </div>
        <div class="control" data-id="portfolio">
            <i class="fas fa-briefcase"></i>
        </div>
        <div class="control" data-id="blogs">
            <i class="far fa-newspaper"></i>
        </div>
        <div class="control" data-id="contact">
            <i class="fas fa-envelope-open"></i>
        </div>
    </div>
    <div class="theme-btn">
        <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
</html>