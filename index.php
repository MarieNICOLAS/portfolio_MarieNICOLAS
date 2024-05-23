<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <meta name="description" content="Ceci est mon portfolio étudiant">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <link rel="stylesheet" href="styles/nav/banner.css">
</head>

    <?php include 'pages/utils/header.php'; ?>

    <div class="banner">
        <img src="img/illustration/img_coding.jpg" alt="Bannière animée">
        <div class="banner-content">
            <h1 class="highlighted-title">Portfolio</h1>
        </div>  
    </div>
    <body>

    <!-- PRESENTATION -->
        <section>
            <div class="presentation-wrapper">
                <div class="presentation">
                    <h2>Qui suis-je?</h2>
                    <p>Prénom: Marie <br></p>
                    <p>Nom: Nicolas <br></p>
                    <p>Age: 25 ans <br></p>
                    <p>Actuellement: Etudiante <br></p>
                    <a href="../../ressources/CVMarieNICOLAS24v1.pdf" target="_blank">Télécharger mon CV</a>
                </div>
                <div class="image-container">
                    <img src="img/img_profil/profil_pic.png" alt="myo pics">
                </div>
            </div>
        </section>

        <div  class="presentation">
            <p>
                Actuellement en 2ème année de <strong>BTS-SIO option SLAM</strong><br>
                Je suis en alternance chez <strong>Activ Browers</strong> dans le pôle TMA. <br><br>
                Mon parcours académique m'a permis d'acquérir des compétences variées dans le domaine de l'informatique et du développement, ainsi qu'une solide base en sciences grâce à ma Licence de Biologie.<br>
            </p>
        </div>

    <!-- FORMATIONS ETUDES -->
    <h2>Formations</h2>
    <section class="timeline-wrapper">
        <div class="timeline">
            <article class="left">
                <div class="timeline-content">
                    <h3>BTS SIO (Services Informatiques aux Organisations)</h3>
                    <p><strong>Option SLAM</strong></p>
                    <p><strong>ENSITECH</strong><i> Montigny-le-Bx(78180) - 2023/2024</i><br></p>
                    <p><strong>CNED</strong><i> - 2022/2023</i><br></p>
                </div>
            </article>
            <article class="right">
                <div class="timeline-content">
                    <h3>Licence de Biologie</h3>
                    <p><strong>URF des Sciences de Versailles</strong> <i> Versailles (78000)</i><br></p>
                    <p><i>Juin 2021</i><br></p>
                </div>
            </article>
            <article class="left">
                <div class="timeline-content">
                    <h3>Baccalauréat Général Scientifique</h3>
                    <p><strong>Lycée Saint-François d'Assise</strong> <i> Montigny-le-Bretonneux (78180)</i><br></p>
                    <p><i>Juillet 2017</i><br></p>
                </div>
            </article>
        </div>
    </section>

    <hr>

    <!-- PARCOURS PROFESSIONNELS -->
    <h2>Expériences professionnelles</h2>
    <section class="exp_pro">
        <div class="parcours_pro">
            <ul class="gallery">
                <li class="xp-card">
                    <img src="../../img/img_work/blog-activ-browser-titre.jpg" alt="xp" class="xp-img">
                    <ul class="side-social">
                        <a href="https://www.activbrowser.com/">
                            <img src="../../img/icon/icon_site.png" alt="icon_site">
                        </a>
                    </ul>
                    <div class="article-info">
                        <p class="article-name">Alternance - ActivBrowers</p>
                        <p class="article-work">TMA - Développement Web</p>
                    </div>
                </li>

                <li class="xp-card">
                    <img src="../../img/img_work/téléchargement.png" alt="xp" class="xp-img">
                    <ul class="side-social">
                        <a href="https://www.easyreunion.fr/">
                            <img src="../../img/icon/icon_site.png" alt="icon_site">
                        </a>
                    </ul>
                    <div class="article-info">
                        <p class="article-name">Stage - Easy Réunion</p>
                        <p class="article-work">Développement Web</p>
                    </div>
                </li>

                <li class="xp-card">
                    <img src="../../img/img_work/informalys.png" alt="xp" class="xp-img">
                    <ul class="side-social">
                        <a href="https://informalys.fr/">
                            <img src="../../img/icon/icon_site.png" alt="github icon">
                        </a>
                    </ul>
                    <div class="article-info">
                        <p class="article-name">Stage - Informa'Lys</p>
                        <p class="article-work">Diagnostic et dépannage informatique</p>
                    </div>
                </li>

                <li class="xp-card">
                    <img src="../../img/img_work/intermarche.jpg" alt="xp" class="xp-img">
                    <ul class="side-social">
                        <a href="#">
                            <img src="../../img/icon/icon_site.png" alt="icon_site">
                        </a>
                    </ul>
                    <div class="article-info">
                        <p class="article-name">Intérim - Intermarché </p>
                        <p class="article-work">Hôtesse de caisse</p>
                    </div>
                </li>

                <li class="xp-card">
                    <img src="../../img/img_work/uexpress.png" alt="xp" class="xp-img">
                    <ul class="side-social">
                        <a href="#">
                            <img src="../../img/icon/icon_site.png" alt="icon_site">
                        </a>
                    </ul>
                    <div class="article-info">
                        <p class="article-name">CDI - U Express</p>
                        <p class="article-work">Hôtesse de caisse</p>
                    </div>
                    
                </li>
                <li class="xp-card">
                    <img src="../../img/leclerc.png" alt="xp" class="xp-img">
                    <ul class="side-social">
                        <a href="#">
                            <img src="../../img/icon/icon_site.png" alt="icon_site">
                        </a>
                    </ul>
                    <div class="article-info">
                        <p class="article-name">CDI - Leclerc</p>
                        <p class="article-work">Mise en rayon</p>
                    </div>
                </li> 
                <li class="xp-card">
                    <img src="../../img/img_work/mcdo_logo.svg" alt="xp" class="xp-img">
                    <ul class="side-social">
                        <a href="#">
                            <img src="../../img/icon/icon_site.png" alt="icon_site">
                        </a>
                    </ul>
                    <div class="article-info">
                        <p class="article-name">CDI - McDonald's</p>
                        <p class="article-work">Equipière polyvalente</p>
                    </div>
                </li>
        </div>
    </section>

    <hr>

    <!-- DETAILS PRO -->
    <section class="details-pro">
        <!-- ALTERNANCE -->
        <section class="alternance">
            <h4>ActivBrowers</h4>
            <div class="introduction-entreprise">
                <p>
                    ActivBrowsers, une filiale d’AxivIT, est une agence spécialisée dans la transformation digitale et les solutions IT. Elle accompagne les entreprises dans le développement de sites web, d’applications mobiles, et dans l’optimisation de leur présence digitale. Forts d’une expertise en technologies telles que Drupal, WordPress, Magento, Prestashop, Vue.js, et Node.js, les consultants d’ActivBrowsers apportent un soutien technique complet et personnalisé pour assurer le succès des projets clients.
                </p>
                <p>
                    Dans le cadre du pôle TMA (Tierce Maintenance Applicative), ActivBrowsers se distingue par sa capacité à gérer et maintenir des applications complexes, en offrant des services de support et d’amélioration continue. Le pôle TMA veille à la pérennité et à l'évolution des systèmes d'information, assurant une performance optimale et une adaptation constante aux besoins changeants des entreprises.
                </p>
            </div>
            <div>
                <h2>Projet: Plugin Wordpress</h2>
                <p>Au cours de mon alternance, j'ai travaillé en peer-programming au développement d'un plugin Wordpress. <br>
                Celui-ci permet d'effectuer l'évolution et la migration de la base de données Wordpress. 
                Il permet une montée de version du site et des  .</p>

                <h3>Stack utilisé</h3>
                <ul>
                    <li>IDE: VS Code</li>
                    <li>Serveur web: Xampp</li>
                    <li>Langages: 
                        <li>Php: </li>
                        <li>HTML</li>
                        <li>CSS/SCSS/Tailwind</li>
                        <li>SGBR: DBeaver</li>
                        <li>Travail collaboratif: Github</li>
                    </li>
                </ul>
                <h3>Réalisation</h3>
                <p><a href="ressources/roadmaps.png">Roadmaps du projet</a></p>
                
            </div>
        </section>

        <!-- STAGE -->
        <section class="stage">
            <h3>Easy Réunion</h3>

        </section>
    </section>

        
    <hr>
    <!-- PROJETS -->
    <h2>Projets</h2>
    <section class="projets">
        <!-- GBS GESTION RAPPORT  -->
        <div>
            <h3>GSB - Gestion de rapport de visites - Atelier Professionnel</h3>
            <p>Application Web - PHP/HTML/CSS/MYSQL</p>
            <p><a href="">Plus de détails</a></p>
        </div>
        <!-- GBS LOCATION APPARTEMENT -->
        <div>
            <h3>GSB - Location d'appartements</h3>
            <p>Application bureau - C#</p>
            <p><a href="">Plus de détails</a></p>
        </div>
        <!-- PLUGIN WORDPRESS -->
        <div>
            <h3>Plugin Wordpress - Alternance</h3>
            <p>Développement d'un plugin de migration de version d'un site Wordpress</p>
            <p><a href="">Plus de détails</a></p>
        </div>
    </section>

    <!-- COMPETENCE -->
    <section class="skills">
        <h3>Skills</h3>
    
        <section>
            <h4>Langages de Programmation</h4>
            <ul>
                <li><strong>PHP</strong></li>
                <li><strong>Python</strong></li>
                <li><strong>Java</strong></li>
                <li><strong>JavaScript</strong></li>
                <li><strong>C#</strong></li>
                <li><strong>HTML/CSS</strong></li>
                <li><strong>Tailwind</strong></li>
            </ul>
        </section>
        
        <section>
            <h4>Frameworks et Bibliothèques</h4>
            <ul>
                <li><strong>Laravel</strong></li>
                <li><strong>Django</strong></li>
            </ul>
        </section>
        
        <section>
            <h4>Systèmes de Gestion de Bases de Données (SGBD)</h4>
            <ul>
                <li><strong>MySQL</strong></li>
                <li><strong>MariaDB</strong></li>
                <li><strong>DBeaver</strong></li>
            </ul>
        </section>
        
        <section>
            <h4>Outils de Développement</h4>
            <ul>
                <li><strong>VS Code</strong></li>
                <li><strong>PyCharm</strong></li>
                <li><strong>Eclipse</strong></li>
            </ul>
        </section>
        
        <section>
            <h4>Environnements de Développement</h4>
            <ul>
                <li><strong>WAMP</strong></li>
                <li><strong>XAMPP</strong></li>
            </ul>
        </section>
        
        <section>
            <h4>Outils de Collaboration et Gestion de Projets</h4>
            <ul>
                <li><strong>Git</strong></li>
                <li><strong>GitHub</strong></li>
                <li><strong>Trello</strong></li>
            </ul>
        </section>
        
        <section>
            <h4>Outils de Conception et Prototypage</h4>
            <ul>
                <li><strong>Figma</strong></li>
                <li><strong>Pencil</strong></li>
            </ul>
        </section>
        
        <section>
            <h4>Outils de Conteneurisation et Déploiement</h4>
            <ul>
                <li><strong>Docker</strong></li>
                <li><strong>GitHub Pages</strong></li>
            </ul>
        </section>
        
        <section>
            <h4>CMS (Système de Gestion de Contenu)</h3>
            <ul>
                <li><strong>WordPress</strong></li>
            </ul>
        </section>
        
        <section>
            <h2>Autres Compétences</h2>
            <ul>
                <li><strong>SEO</strong></li>
                <li><strong>API REST</strong></li>
            </ul>
        </section>
    </section>

    <!-- VEILLE TECHNOLOGIQUE -->
    <section class="veille-technologique">
        <h2>Veille Technologique</h2>
        <div class="introduction">
            <p>
                En tant qu'étudiant en BTS SIO option SLAM, je m'oriente vers le développement fullstack, une spécialisation qui requiert une connaissance approfondie des technologies front-end et back-end. <br>
                Dans cette optique, il est crucial de réaliser une veille technologique régulière pour rester à jour avec les évolutions rapides et constantes dans le domaine du développement web.
            </p>
            <p>
                Cette veille technologique couvre les principales tendances et innovations dans le développement web et l'analyse de données avec Python, incluant les frameworks, langages, outils de gestion et de déploiement, ainsi que les récentes régulations en matière de protection des données. <br>
                En suivant cette veille, je m'assure de développer des compétences à la pointe de la technologie, indispensables pour réussir dans le domaine du développement fullstack.
            </p>
        
        <section>
            
        </div>
    </section>
    </body>
    <?php include 'pages/utils/footer.php';?>

    
</html>