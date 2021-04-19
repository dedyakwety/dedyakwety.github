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
    <link rel="stylesheet" href="Styles/curriculumVitae.css">
    <title>Mon-cv</title>
</head>
<body>
    <div class="div-mere">
        <header>
            <div class="div-header-1">
                <div class="div-header-1-1"></div>
            </div>
            <div class="div-header-2">
                <h1>Akwety Dedy Desgo Developpeur Web et Mobile</h1>
                <div class="div-header-2-1">
                    <div class="div-header-2-2">
                        <div class="div-header-2-2-1">
                            <p class="p-header">Nº 155, Avenue Nkoli</p>
                            <p class="p-header">Quartier Ngampani, Commune Kimbanseke</p>
                            <p class="p-header">Télephone: +243 813 896 978 / 897 283 842</p>
                        </div>
                    </div>
                    <div class="div-header-2-2">
                        <div class="div-header-2-2-1">
                            <p class="p-header">Adresse Email: dedyakwety@gmail.com</p>
                            <p class="p-header">Twitter: dedy-akwety</p>
                            <p class="p-header">Instagram: dedy-akwety</p>
                        </div>
                        <p class="p-header">Télécharger mon cv en pdf<a href="#">ici</a></p>
                    </div>
                </div>
            </div>
        </header>
        <aside>
            <div class="div-aside">
                <p class="p-aside">A propos</p>
            </div>
            <div class="div-aside">
                <p class="p-aside">Formations</p>
            </div>
            <div class="div-aside">
                <p class="p-aside">Qualités</p>
            </div>
        </aside>
        <section>
            <div class="div-section">
                <div class="div-section-1"></div>
            </div>
            <div class="div-section">
                <div class="div-section-1"></div>
            </div>
            <div class="div-section">
                <div class="div-section-1"></div>
            </div>
        </section>
        <footer>
            <div class="div-footer-1">
                <p class="p-footer">Competences</p>
                <div class="div-footer-1-1">
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Word<br>70%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Excel<br>72%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Photoshop<br>65%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Html<br>80%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Css<br>75%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Bootstrap<br>55%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Javascript<br>55%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Dart<br>55%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Php<br>85%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Git & github<br>En cours</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Laravel<br>En cours</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Flutter<br>En cours</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">React.js<br>En cours</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Mysql<br>70%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Sqlite<br>60%</p></div>
                    <div class="div-footer-1-1-child"><p class="p-footer-1-1-child">Phpmyadmin<br>70%</p></div>
                </div>
            </div>
            <div class="div-footer-2">
                <p class="p-footer">Langues parler</p>
                <div class="div-footer-1-1">
                    <div class="div-langue">
                        <p class="p-langues">Lingala langue<br> maternelle</p>
                    </div>
                    <!--div class="div-langue">
                        <p class="p-langues">Kikongo bien</p>
                    </div-->
                    <div class="div-langue">
                        <p class="p-langues">Français Très bien</p>
                    </div>
                    <div class="div-langue">
                        <p class="p-langues">Anglais En cours</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>