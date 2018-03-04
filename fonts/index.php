<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once('head.php'); 
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
                        <div>"En Shark Desarrollos literalmente ponemos tu negocio en el mapa, preguntanos cómo, te asesoramos sin compromiso".</div>
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

                <!--<a href="javascript:void();" onclick="hover2.playclip()">Efecto hover 2</a>-->
                <!--<div class="demo" onmouseover="hover2.playclip()">Hover 2</div></div>-->
            </div>
            <div class="space"></div>
            <div class="row">


                <div class="col-md-4 col-sm-6 service " >
                    <!--<i class="fa fa-desktop"></i>-->
                    <div>
                    <!-- Button trigger modal -->                   
                    <a onclick="hover2.playclip()" href="#myModal" data-toggle="modal" hreflang="es">
                            <canvas id="myCanvas" width="270" height="200"  class="imagen-a diseno-web" alt="En Shark Desarrollos, nos especializamos en el diseño y desarrollo web" title="En Shark Desarrollos, nos especializamos en el diseño y desarrollo web"></canvas> 
                    </a>
                            <script>
                                var c = document.getElementById("myCanvas");
                                var ctx = c.getContext("2d");                        
                                ctx.font = "33px Arial ";
                                ctx.fillStyle ="#fff";
                                ctx.fillText("Diseño",80,70);
                                ctx.fillText("y",120,100);
                                ctx.fillText("desarrollo Web",30,130);
                            </script> 
                    </div>
                    <!-- Modal diseño y desarrollo web-->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hover2.playclip()"><span aria-hidden="true">&times;</span></button>
                                <img src="img/logonegro.png" class="logo modal-izq" alt="Shark desarrollos - amamos lo que hacemos" title="Shark desarrollos - amamos lo que hacemos">
                            <h4 class="modal-title orange" id="myModalLabel"><strong>Diseño y desarrollo Web</strong></h4>
                            <br>
                          </div>
                          <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-xs-12 col-md-6" >
                                        <img src="img/diseño-web.jpg" class="img-responsive img-thumbnail" alt="En Shark Desarrollos, nos especializamos en el diseño y desarrollo web" title="En Shark Desarrollos, nos especializamos en el diseño y desarrollo web">
                                    </div>                                    
                                    <!--<div class="col-xs-12 col-md-6">
                                        <strong>En Shark Desarrollos</strong>, nos especializamos en el diseño y desarrollo web.
                                    </div>-->
                                    <div>
                                      <strong>En Shark Desarrollos</strong>, nos especializamos en el diseño y desarrollo web. 
                                      <br><br> &nbsp;&nbsp;No tienes página Web y ¿quieres que tu negocio tenga presencia, atrayendo clientes?. 
                                      En Shark Desarrollos tenemos el paquete más completo.
                                      Incluye diseño y desarrollo de página Web responsiva, optimización Web (SEO) y presupuesto en Adwords.
                                    </div>
                                </div>
                                <!--<p class="justificado ">-->
                                <!--</p>-->

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="hover2.playclip()">Cerrar</button>                    
                          </div>
                        </div>
                      </div>
                    </div>
</div>


                    <!--<h4><strong>Diseño y desarrollo Web</strong></h4><br><br>-->
                    <!--<p class="justificado">Te ofrecemos tegnologías nuevas para el diseño de tu <strong>sitio web</strong> y <strong>posicionamiento en los mejores buscadores web</strong>, para que tu pagina sea muy visitada y prospecto a muchos clientes.<br>"Tu hazlo en persona, nosotros nos encargamos desde la web" </p>-->
                

                <div class="col-md-4 col-sm-6 service  ">
                       
                        <div>
                         <a onclick="hover2.playclip()" href="#myModal2" data-toggle="modal" hreflang="es">
                        <canvas id="myCanvas3" width="270" height="200"  class="imagen-a diseno-web3" alt="En Shark Desarrollos, optimizamos tu página para un buen posicionamiento web (SEO)" title="En Shark Desarrollos, optimizamos tu página para un buen posicionamiento web (SEO)"></canvas>
                        </a>
                                <script>
                                    var c = document.getElementById("myCanvas3");
                                    var ctx = c.getContext("2d");                        
                                    ctx.font = "23px Arial ";
                                    ctx.fillStyle ="000";
                                    ctx.fillText("Posicionamiento Web",25,60);
                                    ctx.fillText("(SEO)",100,170);
                                </script>
                        
                </div>

                    <!-- Modal Marketing (Adwords Google)-->
                    <!--<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hover2.playclip()"><span aria-hidden="true">&times;</span></button>
                                <img src="img/logonegro.png" class="logo modal-izq" alt="Shark desarrollos - amamos lo que hacemos" title="Shark desarrollos - amamos lo que hacemos">
                            <h4 class="modal-title orange" id="myModalLabel"><strong>Marketing (Adwords Google)</strong></h4>
                            <br>
                          </div>
                          <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <img src="img/marketing.jpg" class="img-responsive img-thumbnail" alt="En Shark Desarrollos, hacemos tus campañas de Marketing Web" title="En Shark Desarrollos, hacemos tus campañas de Marketing Web">
                                    </div>                                    
                                    <div class="col-xs-12 col-md-6">
                                        <strong>En Shark Desarrollos</strong>, hacemos tus campañas de Marketing Web.
                                    </div>                                    
                                </div>


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="hover2.playclip()">Cerrar</button>                    
                          </div>
                        </div>
                      </div>
                    </div>-->



                   <!-- <i class="fa fa-mobile"></i>
                    <h4><strong>Marketing (Adwords Google)</strong></h4>
                    <p class="justificado">Te ofrecemos sitios web de e-commerce, e-bissiness, para tu negocio, como tienda en linea, para que promociones tus productosy gestiones tus propios clientes.<br>Asi como un reporte semanal de su sitio web y sus visitas, para controlar el trafico de visitantes.</em></p>
                </div>-->

                <!--<div class="col-md-4 col-sm-6 service  " >
                    <div>

                     <a onclick="hover2.playclip()" href="#myModal1" data-toggle="modal" hreflang="es">
                         <canvas id="myCanvas2" width="270" height="200"  class="imagen-a diseno-web2" alt="En Shark Desarrollos, hacemos tus campañas de Marketing Web" title="En Shark Desarrollos, hacemos tus campañas de Marketing Web" ></canvas>
                        </a>

                    <script>
                        var c = document.getElementById("myCanvas2");
                        var ctx = c.getContext("2d");                        
                        ctx.font = "33px Arial ";
                        ctx.fillStyle ="#fff";
                        ctx.fillText("Marketing",60,90);
                        ctx.fillText("(Adwords Google)",5,120);

                    </script>
                        
                    </div>-->
                    <!--<i class="fa fa-camera"></i>
                    <i class="fa fa-desktop"></i>
                    <h4><strong>Posicionamiento Web (SEO)</strong></h4>
                    <p class="justificado">Te ofrecemos posicionamiento web para que tu sitio pueda ser encontrado mas facilmente en los mejores buscadores como google, bing. <br>Te apoyamos a gestionar tramites en el <strong>SAT</strong>. </p>
                </div>-->
                <!--
                <div class="col-md-3 col-sm-6 service bordes">
                    <i class="fa fa-bullhorn"></i>
                    <h4><strong>Marketing</strong></h4>
                    <p class="justificado">Te ofrecemos sitios web de e-commerce, e-bissiness, para tu negocio, como tienda en linea, para que promociones tus productosy gestiones tus propios clientes.<br>Asi como un reporte semanal de su sitio web y sus visitas, para controlar el trafico de visitantes.</p>
                </div>
               -->
               <!-- Modal Marketing (Adwords Google)-->
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="hover2.playclip()"><span aria-hidden="true">&times;</span></button>
                                <img src="img/logonegro.png" class="logo modal-izq" alt="Shark desarrollos - amamos lo que hacemos" title="Shark desarrollos - amamos lo que hacemos">
                            <h4 class="modal-title orange" id="myModalLabel"><strong>Posicionamiento Web (SEO)</strong></h4>
                            <br>
                          </div>
                          <div class="modal-body">
                                
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <img src="img/posicionamiento-web.jpg" class="img-responsive img-thumbnail" alt="En Shark Desarrollos, optimizamos tu página para un buen posicionamiento web (SEO)" title="En Shark Desarrollos, optimizamos tu página para un buen posicionamiento web (SEO)">
                                    </div>                                    
                                    <div class="col-xs-12 col-md-6">
                                        <strong>En Shark Desarrollos</strong>, optimizamos tu página para un buen posicionamiento web (SEO).
                                    </div>                                    
                                </div>


                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" onclick="hover2.playclip()">Cerrar</button>                    
                          </div>
                        </div>
                      </div>
                    </div>
            </div>

            <!-- ====================Lista de precioss================== -->
             <div class="space"></div>
             
            <div class="row">

                <!-- =======Lista personal=========== -->
                <div class="col-md-4 col-sm-6 service bordes">
                    <div class="lista1-cabecera">
                        <br>
                        <span class="lista1-text-cabecera">Ponme en el mapa</span>
                        <br><br>                        
                    </div>
                    <div class="lista1-precio lista-margen">
                        <br> 
                        <p class="justificado ">&nbsp;&nbsp;Tienes tu página web, pero ¿no aparece bien posicionada en los buscadores?.
                        <br>&nbsp;&nbsp;En Shark Desarrollos tenemos la solución, pregúntanos ¿cómo? en la sección de Contacto.</p> 
                        <!--desde:                      
                        <span class="lista1-precio1"><sub id="indice"> $ </sub><strong>499</strong> <sub id="indice1"> <i></i></sub></span>-->                        
                    </div>
                    <!--
                     <ul class="features">
                        <li><span class="fontawesome-cog"></span>1 WordPress Install</li>
                        <li><span class="fontawesome-star"></span>25,000 visits/mo.</li>
                        <li><span class="fontawesome-dashboard"></span>Unlimited Data Transfer</li>
                        <li><span class="fontawesome-cloud"></span>10GB Local Storage</li>
                     </ul>
                     -->
                     <div class="lista1-footer">
                        <p>Shark Desarrollos</p>
                     </div>
                    
                </div><!-- fin lista personal -->
                <br>
                 <!-- =======Lista profesional=========== -->
                <div class="col-md-4 col-sm-6 service bordes">
                    <div class="lista2-cabecera ">
                        <br>
                        <span class="lista2-text-cabecera">Promueve tu negocio</span>
                        <br><br>                        
                    </div>
                    <div class="lista2-precio lista-margen">
                        <br>  
                        <p class="justificado ">&nbsp;&nbsp;Tienes tu página web y quieres promocionarla más allá de la búsqueda orgánica.
                        <br>&nbsp;&nbsp;En Shark Desarrollos hacemos tus campañas publicitarias, cotiza sin compromiso en la sección de Contacto.</p> 
                        <!--desde:                        
                        <span class="lista2-precio2"><sub id="indice"> $ </sub><strong>499</strong> <sub id="indice1"> <i></i></sub></span>-->                       
                    </div>
                    <!--
                     <ul class="features">
                        <li><span class="fontawesome-cog"></span>1 WordPress Install</li>
                        <li><span class="fontawesome-star"></span>25,000 visits/mo.</li>
                        <li><span class="fontawesome-dashboard"></span>Unlimited Data Transfer</li>
                        <li><span class="fontawesome-cloud"></span>10GB Local Storage</li>
                     </ul>
                     -->
                     <div class="lista2-footer">
                        <p>Shark Desarrollos</p>
                     </div>
                    
                </div><!-- fin lista profesional-->
                <br>
                 <!-- =======Lista negocios=========== -->
                <div class="col-md-4 col-sm-6 service bordes">
                    <div class="lista3-cabecera">
                        <br>
                        <span class="lista3-text-cabecera">Tiburón</span>
                        <br><br>                        
                    </div>
                    <div class="lista3-precio lista-margen">
                        <br> 
                        <!--<div style="border-radius:20px;"><center><img src="img/descuento.png" class="img-responsive" style="width:200px; height=200px; "></center></div>-->
                        <p class="justificado " style="color:#fff;">

                        <br>&nbsp;&nbsp;No tienes página Web y ¿quieres que tu negocio tenga presencia, atrayendo clientes?.
                        <br>&nbsp;&nbsp;En Shark Desarrollos tenemos el paquete más completo.
                        <br> &nbsp;&nbsp;Incluye diseño y desarrollo de página Web responsiva, optimización Web (SEO) y presupuesto en Adwords.</p> 
                        <!--desde:                       
                        <span class="lista3-precio3"><sub id="indice"> $ </sub><strong>3,999</strong> <sub id="indice1"> <i></i></sub></span>-->                        
                    </div>
                    <!--
                     <ul class="features">
                        <li><span class="fontawesome-cog"></span>1 WordPress Install</li>
                        <li><span class="fontawesome-star"></span>25,000 visits/mo.</li>
                        <li><span class="fontawesome-dashboard"></span>Unlimited Data Transfer</li>
                        <li><span class="fontawesome-cloud"></span>10GB Local Storage</li>
                     </ul>
                     -->
                     <div class="lista3-footer">
                        <p>Shark Desarrollos</p>
                     </div>
                    
                </div><!-- fin lista negocios -->
                <br>

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