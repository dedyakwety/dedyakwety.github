<?php
require "../App/Auth.php";
$auth = new Auth($email, $password);
$auth::IsConnecter();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/homePage.css">
    <link rel="stylesheet" href="Styles/Responsive/homePageResponsive.css">
    <title>homePage</title>
</head>
<body>
    <div class="div-fixed">
        <img src="Images/photo-1.jpg" alt="Ma-photo-1" class="photo-1">
    </div>
    <header>
        <div class="div-header-1">
            <h1>Bienvenu(e) chez Dedy Akwety Desgo</h1>
            <div class="div-header-1-1"></div>
            <div class="div-h-1"></div>
            <div class="div-h-2">
                <div class="div-reseaux">
                    <div class="div-reseaux-sociaux">
                        <div class="div-logo">
                            <img src="Images/facebook.jpg" alt="logo facebook" class="logo">
                            <p class="p-logo"></p>
                        </div>
                        <div class="div-logo">
                            <img src="Images/watshapp.jpg" alt="logo watshapp" class="logo">
                            <p class="p-logo"></p>
                        </div>
                        <div class="div-logo">
                            <img src="Images/twitter.jpg" alt="logo facebook" class="logo">
                            <p class="p-logo"></p>
                        </div>
                        <div class="div-logo">
                            <img src="Images/instagram.jpg" alt="logo instagram" class="logo">
                            <p class="p-logo"></p>
                        </div>
                        </div>
                        <div class="div-valeur">
                            <p class="p-logo">Dedy Akwety</p>
                            <p class="p-logo">+243 813 896 978</p>
                            <p class="p-logo">@AkwetyDesgo</p>
                            <p class="p-logo">Dedy Akwety</p>
                        </div>
                    </div>
                </div>
            <div class="div-h-3"></div>
            <div class="div-h-4"></div>
            <div class="div-rot-1"></div>
        </div>
    </header>
    <section>
        <div class="div-section-1"></div>
    </section>
    <div class="div-h2-competences">
        <h2>Mes competences</h2>
    </div>
    <div class="div-competences">
        <div class="div-competences-1">
            <div class="competence"><p class="p-competence">Word</p></div>
            <div class="competence"><p class="p-competence">Excel</p></div>
            <div class="competence"><p class="p-competence">Photoshop</p></div>
            <div class="competence"><p class="p-competence">Html</p></div>
            <div class="competence"><p class="p-competence">Css</p></div>
            <div class="competence"><p class="p-competence">Bootstrap</p></div>
            <div class="competence"><p class="p-competence">Javascript</p></div>
            <div class="competence"><p class="p-competence">Dart</p></div>
            <div class="competence"><p class="p-competence">Php</p></div>
            <div class="competence"><p class="p-competence">Dart</p></div>
            <div class="competence"><p class="p-competence">Git & Github</p></div>
            <div class="competence"><p class="p-competence">Laravel</p></div>
            <div class="competence"><p class="p-competence">Flutter</p></div>
            <div class="competence"><p class="p-competence">React.js</p></div>
            <div class="competence"><p class="p-competence">Mysql</p></div>
            <div class="competence"><p class="p-competence">Sqlite</p></div>
            <div class="competence"><p class="p-competence">Phpmyadmin</p></div>
        </div>
    </div>
    <div class="div-tete">
        <img src="Images/mon-logo.jpg" alt="Mon-logo" class="mon-logo">
        <div class="div-liens">
            <div class="div-move"></div>
            <a href="/mon-cv">Mon Cv</a>
            <a href="/mon-parcour">Motivation</a>
            <a href="mailto:dedyakwety@gmail.com">M'envoyer un mail</a>
        </div>
    </div>
    <footer>
        <div class="div-footer">
            <p class="p-footer">Mes contacts: </p>
            <p class="p-footer">+243 813 896 978</p>
            <p class="p-footer">+243 897 283 842</p>
            <p class="p-footer">+243 977 478 386</p>
        </div>
    </footer>
</body>
</html>