<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/stylehome.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <title>ScoreAdmin - SCAD</title>
</head>
<body>
    <header class="header_content">
        <div class="left_header_content">
            <figure class="icon-container">
                <img class="icon-img" src="{{asset('img/logo_nav.png')}}" alt="logo">
            </figure>
            <div class="principal_header_text">
                <a class="text_principal_nav" href=""><img src="" alt="">Score <span class="slash_color_one">/</span>Admin</a>
            </div>
        </div>
        <nav class="nav_content">
            <ol>
                <li class="nav_item"><a class="text_nav_item" href="">Details</a><hr class="decorate_nav"></li>
                <li class="nav_item"><a class="text_nav_item" href="">Portfolio</a><hr class="decorate_nav"></li>
                <li class="nav_item"><a class="text_nav_item" href="">Contact</a><hr class="decorate_nav"></li>
                <li class="nav_item"><a class="text_nav_item button_nav" href="{{route('students.index')}}">Inicio Sesión</a></li>
            </ol>
        </nav>
    </header>
    <section id="principal">
        <div class="principal_container">
            <figure class="principal_img_figure">
                <img class="principal_img" src="{{asset('img/principal_img.png')}}" alt="">
            </figure>
            <div class="principal_container_text">
                <div class="principal_container_one_text">
                    <h1 class="principal_style_one_text">Score<span class="slash_color_two">/</span>Admin</h1>
                </div>
                <div class="principal_container_two_text">
                    <h3 class="principal_style_two_text">Sistema de Administración y Control de Puntajes Académicos</h3>
                </div>
            </div>
            <div class="container_decorate_space">
                <hr class="decorate_line_white">
                <figure class="container_decorate">
                    <img class="icon_decorate" src="{{asset('img/icondecorate.png')}}" alt="">
                </figure> 
                <hr class="decorate_line_white">
            </div>
        </div>
    </section>
    <!-- <section id="details">
        <div class="details-container">
            <div class="container_details_one_text">
                <h1 class="details_style_one_text">¿Qué es Score/Admin?</h1>
                <hr class="decorate_style_one">
                <p class="details_style_two_text">Se trata de una plataforma educativa para el manejo de 
                calificaciones en diversos centros de estudio, que concede 
                automatizar y proliferar en la forma cómo se dispone el pilar 
                administrativo y educativo de tu institución.
                </p>
            </div>
        </div>
    </section> -->
    <!-- <section id="aspects">
        <div class="aspects_container">
            <div class="aspects_col_one">
                <div class="aspects_icon_container">
                    <i class="icono"></i>
                    <hr class="decorate_style_aspects">
                </div>
                <div class="container_aspects_one_text">
                    <h2 class="aspects_style_one_text">Personalización</h2>
                </div>
                <div class="container_aspects_two_text">
                    <h4 class="aspects_style_two_text">¡La limitación es cosa del ayer!</h4>
                </div>
                <div class="container_aspects_three_text">
                    <p class="aspects_style_three_text">Eres quién decide como utilizar, modificar, agregar y organizar tu plataforma.</p>
                </div>
            </div>
            <div class="aspects_col_two">
                <div class="aspects_icon_container">
                    <i class="icono"></i>
                    <hr class="decorate_style_aspects">
                </div>
                <div class="container_aspects_one_text">
                    <h2 class="aspects_style_one_text">Seguridad Impecable</h2>
                </div>
                <div class="container_aspects_two_text">
                    <h4 class="aspects_style_two_text">¿Dudas acerca de la integración de los datos?</h4>
                </div>
                <div class="container_aspects_three_text">
                    <p class="aspects_style_three_text">Nos identificamos contigo, y te enseñamos la fidelidad de salvaguardar continuamente tu información.</p>
                </div>
            </div>
            <div class="aspects_col_three">
                <div class="aspects_icon_container">
                    <i class="icono"></i>
                    <hr class="decorate_style_aspects">
                </div>
                <div class="container_aspects_one_text">
                    <h2 class="aspects_style_one_text">Experiencia Increible</h2>
                </div>
                <div class="container_aspects_two_text">
                    <h4 class="aspects_style_two_text">¡La decisión está en tus manos!</h4>
                </div>
                <div class="container_aspects_three_text">
                    <p class="aspects_style_three_text">Identificate con las soluciones y herramientas de tu propicia plataforma. </p>
                </div>
            </div>
        </div>
        <div class="container_decorate_space">
            <hr class="decorate-line-white">
                <figure>
                    <img src="" alt="">
                </figure> 
            <hr class="decorate-line-white">
        </div>
    </section>
    <section id="portfolio">
    </section>
    <section id="contact"></section>         -->
    <footer class="footer_section">
        <div class="footer_container">
            <div class="footer_text_container">
                <h1 class="principal_footer_text">Score<span class="slash_color_one">/</span>Admin</h1>
            </div>
            <div class="decorate_space">
                <hr class="decorate_line_white footer_decorate">
            </div>
            <div class="footer_columns">
                <div class="footer_col_one">
                    <div class="title_footer">
                        <h2 class="title_footer">COMPAÑIA</h2>
                    </div>
                    <div class="decorate_space">
                        <hr class="decorate_line_white footer_decorate">
                    </div>
                    <div class="list_footer_one" align="center">
                        <ol>
                            <li><a href="" class="item_footer_one">Sobre Nosotros</a></li>
                            <li><a href="" class="item_footer_one">Nuestros Servicios</a></li>
                            <li><a href="" class="item_footer_one">Contactos</a></li>
                            <li><a href="" class="item_footer_one">Blog</a></li>
                        </ol>
                    </div>
                </div>
                <div class="footer_col_two">
                    <div class="title_footer">
                        <h2 class="title_footer">CONTACTO</h2>
                    </div>
                    <div class="decorate_space">
                        <hr class="decorate_line_white footer_decorate">
                    </div>
                    <div class="list_footer_two" align="center">
                        <ol>
                            <li><p class="item_footer_two">ScoreAdmin@edu.co</p></li>
                            <li><p class="item_footer_two">312 69 80 070</p></li>
                        </ol>
                    </div>
                    <div class="list_icons_footer_two" align="center">
                        <a href="https://es-la.facebook.com/"><i class="fab fa-facebook newicon"></i></a>
                        <a href="https://github.com/GenoXyZ"><i class="fab fa-github newicon"></i></a>
                        <a href="https://twitter.com/?lang=es"><i class="fab fa-twitter-square newicon"></i></a>
                    </div>
                </div>
                <div class="footer_col_three">
                    <div class="title_footer">
                        <h2 class="title_footer">DIRECCIÓN</h2>
                    </div>
                    <div class="decorate_space">
                        <hr class="decorate_line_white footer_decorate">
                    </div>
                    <div class="list_footer_three">
                        <p>95487 Mazie Cove</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section id="copyright">
        <div class="footer_copyright" align="center">
            <p class="copyright_text"> This page is created by Team Score/Admin - All Rights Reserved. "</p>
        </div>
    </section>
</body>
</html>