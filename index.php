<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
        require_once('head.php');
        $active = '';
  ?>
  </head>
  <body>

  <?php require_once('body.php'); ?>
    <!-- Home Page
    ==========================================-->

    <div id="tf-home" class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>Bienvenidos a  <strong><span class="color">Shark Desarrollos</span></strong></h1>

                    <!-- =========slider 1  texto rotando =============-->
                    <div id="slider" class="img-responsive fuente-18">
                      <div id="slider1" >
                        <div>"Trabajamos con profesionalismo y pasión porqué amamos lo que hacemos".</div>
                        <div>"En Shark Desarrollos ponemos tu negocio en el mapa, preguntanos cómo y te asesoraremos".</div>
                        <div>"Creamos tu página web optimizada para que luzca bien en cualquier dispositivo".</div>
                      </div>
                    </div>

                <a onclick="hover2.playclip()" href="#tf-services" class="fa fa-angle-down page-scroll" hreflang="es"></a>
            </div>
        </div>
    </div>

     <!-- Services Section
    ==========================================-->
    <div id="tf-services" class="text-center">
        <div class="container">
            <div class="section-title center ">
                <h2 class="orange"><strong>Servicios</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                "En Shark Desarrollos esperamos que con nuestros servicios ayudemos a cumplir tus metas".
            </div>
            <!-- ====================Lista de precioss================== -->
            <div class="row">
                <!-- =======Lista negocios=========== -->
                <div class="col-md-4 col-sm-6 service bordes">
                    <div class="lista3-cabecera">
                        <span class="lista3-text-cabecera">Página Web</span>
                    </div>
                    <div class="lista3-precio lista-margen">
                      <br>
                      <i class="fa fa-code"></i>
                        <p class="justificado-">
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;En Shark Desarrollos, diseñamos y desarrollamos páginas web responsivas y optimizadas para los motores de búsqueda (SEO), para que tu negocio tenga presencia en internet.
                        <!--<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Nos adaptamos a tus necesidades, pregunta sin compromiso en nuestra sección de Contacto.--></p>
                    </div>
                     <!--<div class="lista3-footer">
                        <p>Shark Desarrollos</p>
                    </div>-->
                </div><!-- fin lista negocios -->

                <!-- =======Lista personal=========== -->
                <div class="col-md-4 col-sm-6 service bordes">
                    <div class="lista1-cabecera">
                        <span class="lista1-text-cabecera">Diseño responsivo</span>
                    </div>
                    <div class="lista1-precio lista-margen">
                        <br>
                        <i class="fa fa-mobile"></i>
                        <p class="justificado-"><br>&nbsp;&nbsp;&nbsp;&nbsp;El diseño web responsivo o adaptativo es una técnica de diseño web que busca la correcta visualización de una misma página en distintos dispositivos.
                        <!--<br><br>&nbsp;&nbsp;&nbsp;&nbsp;El uso de dispositivos móviles está creciendo a un ritmo increíble, dispositivos como tablets y smartphones han incrementado sus ventas en los últimos años y la navegación en Internet en estos dispositivos es cada vez más común, por eso la importancia del diseño responsivo.--></p>
                    </div>
                     <!--<div class="lista1-footer">
                        <p>Shark Desarrollos</p>
                     </div>-->
                </div><!-- fin lista personal -->

                 <!-- =======Lista profesional=========== -->
                <div class="col-md-4 col-sm-6 service bordes">
                    <div class="lista2-cabecera ">
                        <span class="lista2-text-cabecera">Motores de búsqueda</span><!--Optimización para buscadores-->
                    </div>
                    <div class="lista2-precio lista-margen">
                        <br>
                        <i class="fa fa-line-chart"></i>
                        <p class="justificado-"><br>&nbsp;&nbsp;&nbsp;&nbsp;Conocido como SEO, es el conjunto de recomendaciones para crear/modificar la estructura de una página web, con el fin de ser fácil de encontrar por los motores de búsqueda, como Google, Yahoo, etc.
                        <!--<br><br>&nbsp;&nbsp;&nbsp;&nbsp;Sirve para poder hacer que nuestra página Web, aparezca en los primeros resultados de búsqueda aumentando así el tráfico de clics a nuestro sitio, lo que se traduce a más gente viendo tus productos y/o servicios.--></p>
                    </div>
                      <!--<div class="lista2-footer">
                        <p>Shark Desarrollos</p>
                     </div>-->
                </div><!-- fin lista profesional-->

                <!-- =======Lista prepago=========== --
                <div class="col-md-3 col-sm-6 service bordes">
                    <div class="lista4-cabecera">
                        <br>
                        <span class="lista4-text-cabecera">Prepago</span>
                        <br><br>
                    </div>
                    <!--
                     <div class="lista3-precio lista-margen">
                        <br>
                        <p class="justificado ">
                        <br>&nbsp;&nbsp;No tienes página Web y ¿quieres que tu negocio tenga presencia, atrayendo clientes?.
                        <br>&nbsp;&nbsp;En Shark Desarrollos tenemos el paquete más completo.
                        <br> &nbsp;&nbsp;Incluye diseño y desarrollo de página Web responsiva, optimización Web (SEO) y presupuesto en Adwords.</p>
                        desde:
                        <span class="lista3-precio3"><sub id="indice"> $ </sub><strong>3,999</strong> <sub id="indice1"> <i></i></sub></span>
                    </div>--
                    <div class="lista4-precio lista-margen">
                        <br>
                        <p class="justificado ">
                        <br>&nbsp;&nbsp;No tienes página Web y ¿quieres que tu negocio tenga presencia, atrayendo clientes?.
                        <br>&nbsp;&nbsp;En Shark Desarrollos tenemos el paquete más completo.
                        <br> &nbsp;&nbsp;Incluye diseño y desarrollo de página Web responsiva, optimización Web (SEO) y presupuesto en Adwords.</p>
                        desde:
                        <span class="lista4-precio4"><sub id="indice"> $ </sub><strong>150</strong> <sub id="indice1"> <i>/mes.</i></sub></span>
                    </div>
                    <!--
                     <ul class="features">
                        <li><span class="fontawesome-cog"></span>1 WordPress Install</li>
                        <li><span class="fontawesome-star"></span>25,000 visits/mo.</li>
                        <li><span class="fontawesome-dashboard"></span>Unlimited Data Transfer</li>
                        <li><span class="fontawesome-cloud"></span>10GB Local Storage</li>
                     </ul>
                     --
                     <div class="lista4-footer">
                        <p>Shark Desarrollos</p>
                     </div>-->

                </div><!-- fin lista negocios --  >
            </div><!-- fin fila -->
            </div>
             <a href="#tf-about" class="fa fa-angle-down page-scroll" onclick="hover2.playclip()"></a>
        </div>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <br>
                    <img src="img/Marca_Shark-desarrollos2.png" class="img-responsive" alt="" title="">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title">
                            <h4></h4>
                            <h2 class="orange"><strong>¿Quiénes somos?</strong></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro justificado">&nbsp;&nbsp;&nbsp;Somos una empresa de profesionales con un alto sentido de responsabilidad y compromiso, amantes de los retos y de la capacitación constante. Actualmente nos enfocamos en el marketing, desarrollo de páginas y sistemas Web, además de la optimización para los motores de búsqueda, para que te encuentren los clientes que estén buscando exactamente lo que tú ofreces. En Shark Desarrollos realmente nos motiva poder ayudar a que nuestros clientes den a conocer su marca y/o servicio, por eso los llevamos de la mano en todo el proceso.</p>
                        <!--
                        <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Misión</strong> - <em>Satisfacer a nuestros clientes y apoyarlos al exito en su negocio o empresa.</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Visión</strong> - <em>Nuestra Visión es lograr el exito junto con nuestros clientes, y ser la empresa mas confiable del mercado.</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Valores</strong> - <em>Trabajar con ustedes con todo el respeto y confiabilidad, en <strong>Shark Desarrollos</strong> nos distinguimos en preservar los valores de respeto y confiabilidad profesional.</em>
                            </li>
                        </ul>
                        -->
                    </div>

                </div>
                <center>
                <a href="#tf-team" class="fa fa-angle-down page-scroll" hreflang="es" onclick="hover2.playclip()"></a>
                </center>
            </div>

        </div>

    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2 class="orange"><strong>Nuestros clientes</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <div class="item">
                        <div class="thumbnail">
                           <img src="img/client/Apolinar-Miranda.jpg" class="img-circle team-img" alt="Apolinar Miranda - Director general de splm" title="Apolinar Miranda - Director general de splm">
                            <div class="caption justificado">
                                <center>
                                    <h3>Apolinar Miranda</h3>
                                </center>
                                <p>&nbsp;&nbsp;Director general de Seguridad privada de Los Mochis.</p>
                                <p><br><cite>- "Con mi nueva página he obtenido un crecimiento de un 20% en los ultimos dos meses."</cite></p>
                                <p>Sitio: <a href="http://splm.com.mx" hreflang="es" target="_blank"> splm.com.mx</a></p>



                            </div>
                        </div>
                    </div>
                        <div class="item">
                        <div class="thumbnail">
                            <img src="img/client/interrogacion.png"  class="img-circle team-img" alt="Lugar reservado para ti" title="Lugar reservado para ti">
                            <div class="caption">
                                <h3>"Lugar reservado para ti"</h3>
                                <!--<p>PacificPearl.com / Fundador</p>
                                <p>Agradecemos a nuestro clientes Mike fundador de <a href="http://pacificpearl.com" hreflang="es"> pacificpearl.com</a>.</p>-->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                             <img src="img/client/carlos-osuna.jpg" alt="Carlos Osuna - director general de s3renovable" class="img-circle team-img"  title="Carlos Osuna - director general de s3renovable">
                            <div class="caption justificado">
                                <center>
                                    <h3>Carlos Osuna</h3>
                                </center>
                                <p>&nbsp;&nbsp;Director general de S3RENOVABLE.</p>
                               <p><br><cite>- "Su trabajo es muy profesional y atención muy personalizada. 100% satisfecho."</cite></p>
                               <p>Sitio: <a href="http://s3renovable.mx" hreflang="es" target="_blank">s3renovable.mx</a></p>
                               <br>
                            </div>

                        </div>
                    </div>


                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/client/interrogacion.png" class="img-circle team-img" alt="Lugar reservado para ti" title="Lugar reservado para ti">
                            <div class="caption">
                                <h3>"Lugar reservado para ti"</h3>
                               <!-- <p>PacificPearl.com / Fundador</p>
                                <p>Agradecemos a nuestro clientes Mike fundador de <a href="http://pacificpearl.com" hreflang="es"> pacificpearl.com</a>.</p>-->
                            </div>
                        </div>
                    </div>
                    <!--
                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/04.jpg" alt="..." class="img-circle team-img" alt="" title="">
                            <div class="caption">
                                <h3>Raquel Ramirez</h3>
                                <p>PacificPearl.com / Fundador</p>
                                <p>Agradecemos a nuestro clientes Mike fundador de <a href="http://pacificpearl.com" hreflang="es"> pacificpearl.com</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/04.jpg" alt="..." class="img-circle team-img" alt="" title="">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/01.jpg" alt="..." class="img-circle team-img" alt="" title="">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/02.jpg" class="img-circle team-img" alt="" title="">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="img/team/03.jpg" class="img-circle team-img" alt="" title="">
                            <div class="caption">
                                <h3>Jenn Gwapa</h3>
                                <p>CEO / Founder</p>
                                <p>Do not seek to change what has come before. Seek to create that which has not.</p>
                            </div>
                        </div>
                    </div>
    -->
                </div>
                <a href="#tf-contact" class="fa fa-angle-down page-scroll "  onclick="hover2.playclip()" hreflang="es"></a>
            </div>

        </div>
    </div>


    <!-- Portfolio Section
    ==========================================-->
    <!--<div id="tf-works">
        <div class="container"> <!-- Container --
            <div class="section-title text-center center">
                <h2>Take a look at <strong>our services</strong></h2>
                <div class="line">
                    <hr>
                </div>
                <div class="clearfix"></div>
                <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
            </div>
            <div class="space"></div>

            <div class="categories">

                <ul class="cat">
                    <li class="pull-left"><h4>Filter by Type:</h4></li>
                    <li class="pull-right">
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            <li><a href="#" data-filter=".web">Web Design</a></li>
                            <li><a href="#" data-filter=".photography">Photography</a></li>
                            <li><a href="#" data-filter=".app" >Mobile App</a></li>
                            <li><a href="#" data-filter=".branding" >Branding</a></li>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div id="lightbox" class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 branding">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/05.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 app">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/06.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/07.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 web">
                    <div class="portfolio-item">
                        <div class="hover-bg">
                            <a href="#">
                                <div class="hover-text">
                                    <h4>Logo Design</h4>
                                    <small>Branding</small>
                                    <div class="clearfix"></div>
                                    <i class="fa fa-plus"></i>
                                </div>
                                <img src="img/portfolio/08.jpg" class="img-responsive" alt="...">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>-->

    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="section-title center">
                        <h2 class="orange"><strong>Contacto</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix "></div>
                       <span class="justificado fuente-18">Mandanos un correo y un asesor se pondrá en contacto inmediatamente contigo, cotizamos sin compromiso.</span>
                    </div>


                    <form name="sentMessage" id="contactForm" class="justificado" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 ">
                                <label class=" fuente-18">Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor escribe tu nombre.">
                                <p class="help-block text-danger rojo"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label class="margen fuente-18">Correo </label>
                                <input type="email" class="form-control" placeholder="Correo electrónico" id="email" required data-validation-required-message="Por favor escribe tu correo electronico.">
                                <p class="help-block text-danger rojo"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label class=" fuente-18">Teléfono</label>
                                <input type="tel" class="form-control" placeholder="Teléfono" id="phone" >
                                <p class="help-block text-danger rojo"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label class=" fuente-18">Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Por favor escribe tu mensaje"></textarea>
                                <p class="help-block text-danger rojo"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn tf-btn btn-default btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Registrate Section==========================================-->
    <?php require_once('registrate.php'); ?>
    <!--Registrate Section==========================================-->

    <nav id="footer">
        <div class="container">
        <center>Correo electrónico: <a href="mailto:contacto@sharkdesarrollos.com">contacto@sharkdesarrollos.com</a><br></center>
            <div class="pull-left fnav">

                Copyright &copy; Shark 2015 Desarrollos &nbsp;<br>
                        <a href="http://sharkdesarrollos.com/" target="_blank" onclick="hover2.playclip()" hreflang="es"><span id="shark">Diseñado y desarrollado por Shark Desarrollos </span></a>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social">
                    <li><a href="https://www.facebook.com/Shark-Desarrollos-886389881418168/" target="_blank" onclick="hover2.playclip()" hreflang="es"><i class="fa fa-facebook"></i></a></li>
                    <!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>-->
                    <li><a href="https://plus.google.com/u/0/110130667246661107853/posts" target="_blank" onclick="hover2.playclip()" hreflang="es"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://twitter.com/SharkDesarrollo" target="_blank" onclick="hover2.playclip()" hreflang="es"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>

  </body>
</html>
