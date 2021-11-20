<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Site Professionnel</title>
    </head>
    
    <body>
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <div id="logo">
                        <img src="images/logoISAE.jpg" alt="Logo ISAE" />
                        <h1>Tene_Remzo</h1>    
                    </div>
                    <h2>Bienvenue Dans mon Site</h2>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="accueil2.php">Accueil</a></li>
                        <li><a href="htmlcss.php">Htmlcss</a></li>
                        <li><a href="javascript1.php">JavaScript</a></li>
                        <li><a href="Phpmysql1.php">PhpMysql</a></li>
                        <li><a href="cv.php">CV</a></li>
                        <li><a href="Contacts.php">Contact</a></li>
                    </ul>
                </nav>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Univers Webmaqtering...
                    <a href="#" class="bouton_rouge">Voir l'article <img src="images/flecheblanchedroite.png" alt="" /></a>
                </div>
            </div>
            
            <section>
                <article>
                    <h1><img src="images/ico_epingle.png" alt="Catégorie voyage" class="ico_categorie" />Je suis un passionné du web</h1>
                    <div>
                        <?php include "moncv.php";?>
                    </div>
                    </article>
                    <aside>
                    <h1>À propos de moi</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor"><img src="images/zozor_classe.png" alt="Photo de Zozor" /></p>
                    <p>Laisse-moi le temps de me présenter&nbsp;: je m'appelle Rémy Noel , je suis né un 13 novembre 1997. Je suis etudiant en Informatique de Gestion, ici à l'UCAO de Thiès.</p>
                    <p>Dans le futur, je souhaite devenir un webmaster, concevoir beaucoup de sites. J'espère devoir compter sur vous pour de futurs partenaires.</p>
                    <p><img src="images/facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" /><img src="images/vimeo.png" alt="Vimeo" /><img src="images/flickr.png" alt="Flickr" /><img src="images/rss.png" alt="RSS" /></p>
                </aside>
                </aside>
            </section>
            
            <footer>
                <div id="tweet">
                    <h1>Mon dernier article sur Facebook</h1>
                    <p>La plus grande gloire, ce n(estgpas de ne jamais tomber, mais de de se relever à chaque quéon tombe</p>
                    <p>Le  04 Novembre 2021 à 11h 12mn!</p>
                </div>
                <div id="mes_photos">
                    <h1>Mes photos</h1>
                    <p><img src="images/photo1.jpg" alt="Photographie" /><img src="images/photo2.jpg" alt="Photographie" /><img src="images/photo3.jpg" alt="Photographie" /><img src="images/photo4.jpg" alt="Photographie" /></p>
                </div>
                <div id="mes_amis">
                    <h1>Informatique</h1>
                    <div id="listes_amis">
                        <ul>
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">JavaScript</a></li>
                            <li><a href="#">HtmlCss</a></li>
                            <li><a href="#">MySQL</a></li>
                            <li><a href="#">PooJava</a></li>
                            <li><a href="#">Linux</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">WindowsServer</a></li>
                            <li><a href="#">Entrepreunariat & Leadership</a></li>
                            <li><a href="#">Développement Personnelle</a></li>
                            <li><a href="#">Mr Fan</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
