<?php
header('Content-type: text/html; charset=utf-8');
require_once 'styleswitcher.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simplon VOD</title>

    <!--SLICK-->

    <link rel="stylesheet" type="text/css" href="slick\slick\slick.css" />
    <link rel="stylesheet" type="text/css" href="slick\slick\slick-theme.css" />

    <!--CSS-->

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" media="screen, projection" type="text/css" id="css" href="<?php echo $url; ?>" />


    <!--GOOGLE FONTS-->

    <link
        href="https://fonts.googleapis.com/css?family=Baloo+Tammudu+2:400,500,600,700,800|Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--FOTORAMA-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.min.js"></script>



</head>

<body>

    <!--TOGGLE MOBILE-->

    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger">
            <div></div>
        </div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <Li><a href="catalogue.html">Films</a></Li>
                        <Li><a href="#">Connexion</a></Li>
                        <form action="">
                            <input type="text" placeholder="" name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    <!--TITRE-->

    <div class="title-dada">
        <h1> <a href="index.html"> SIMPLON VOD</a></h1>
    </div>


    <!--NAV BAR-->

    <div class="nav-dada">
        <div class="logo-dada">
            <h1><a class="lien-home" href="index.html">SIMPLON VOD</a> </h1>
        </div>
        <div class="menu-nav">
            <form class="search-bar" action="">
                <input type="text" placeholder="" name="search">
                <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
            </form>
            <div class="menu-dada">
                <ul>
                    <li><a class="style_axel" href="<?php echo $actuel; ?>?style=style2.css"></a></li>
                    <li><a class="style_pol" href="<?php echo $actuel; ?>?style=style3.css"></a></li>
                    <li><a class="style_steven" href="<?php echo $actuel; ?>?style=style4.css"></a></li>
                    <li><a class="style_ilayda" href="<?php echo $actuel; ?>?style=style.css"></a></li>
                    <li><a href="catalogue.html">Films</a></li>
                    <li><a href="#">Connexion</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="vide"></div>



    <!--SLIDER-->
    <div class="fotorama" data-width="100%">
        <img src="img/banner1.jpg">
        lol
        <img src="img/banner2.jpg">
        <img src="img/banner3.png">
    </div>

    <!--AFFICHE-->

    <div class="title-dada-affiche">
        <h2>A l'affiche</h2>
    </div>



    <div class="center slider">
        <img src="img/poster1.jpg" alt="">
        <img src="img/poster2.jpg" alt="">
        <img src="img/poster3.jpg" alt="">
        <img src="img/poster4.jpg" alt="">
        <img src="img/poster5.jpg" alt="">
        <img src="img/poster6.jpg" alt="">
        <img src="img/poster7.jpg" alt="">
        <img src="img/poster8.jpg" alt="">
    </div>

    <!--PARALLAX-->
    <div class="container">
        <div class="parallax" data-parallax="scroll" data-image-src="parallax.jpeg">

            <!--IMG + TXT -->
            <div class="row mx-auto">
                <div class="img-txt">
                    <img src="img/banner11.jpg" alt="">
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid illum in optio placeat porro
                        ipsam
                        totam, maxime sapiente ab quod at exercitationem quo culpa nemo impedit corrupti, obcaecati
                        accusamus
                        minima!Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid illum in optio placeat
                        porro ipsam
                        totam, maxime sapiente ab quod at exercitationem quo culpa nemo impedit corrupti, obcaecati
                        accusamus
                        minima!</p>
                </div>
            </div>
        </div>
    </div>

    <!--TARIFS-->

    <section class="tarifs-dada">

        <h2>Tarifs</h2>


        <div class="all-tarifs">

            <div class="dada-flex">

                <h3 class="titre-prix">Free</h3>
                <div class="prix-dada">
                    <p class="para-prix">
                        1 screen at a time <br>
                        Standard Definition <br>
                        Download videos on 1 phone or tablets </p>

                    <p class="gros-prix">
                        0€
                    </p>

                </div>
            </div>

            <div class="dada-flex">
                <h3 class="titre-prix">1 compte</h3>
                <div class="prix-dada">
                    <p class="para-prix">
                        2 screens at a time <br>
                        Full HD<br>
                        Download videos on 2 phones or tablets
                    </p>

                    <p class="gros-prix">
                        5€/mois
                    </p>

                </div>
            </div>

            <div class="dada-flex">
                <h3 class="titre-prix">4 comptes</h3>
                <div class="prix-dada">
                    <p class="para-prix">
                        4 screens at a time <br>
                        Full HD and Ultra HD <br>
                        Download videos on 4 phones or tablets
                    </p>

                    <p class="gros-prix">
                        10€/mois
                    </p>
                </div>
            </div>

        </div>

    </section>

    <!--FOOTER-->

    <footer>
        <div class="col-footer">
            <div>
                <p>
                    <h3 class="title-footer">Colonne 1</h3>


                    consectetur adipiscing elit. Etiam
                    bibendum iaculis urna, a iaculis felis
                    luctus vitae. Ut faucibus, ex non
                    scelerisque dignissim, lacus ans
                </p>
            </div>

            <div>

                <p>
                    <h3 class="title-footer">Colonne 2</h3>


                    consectetur adipiscing elit. Etiam
                    bibendum iaculis urna, a iaculis felis
                    luctus vitae. Ut faucibus, ex non
                    scelerisque dignissim, lacus ans
                </p>

            </div>

            <div>

                <p>
                    <h3 class="title-footer">Colonne 3</h3>


                    consectetur adipiscing elit. Etiam
                    bibendum iaculis urna, a iaculis felis
                    luctus vitae. Ut faucibus, ex non
                    scelerisque dignissim, lacus ans
                </p>
            </div>
        </div>
        <div class="copy">© 2020 Simplon VOD Tous droits réservés.</div>

    </footer>












    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="slick\slick\slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            $('.center').slick({
                dots: true,
                autoplay: true,
                arrows: true,
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>