<!-- Barra de navegacion flotante-->
<nav class="navbar sticky-top navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!-- Aqui imagen -->
            <img src="/img/cerebro_logo.png" class="logo-brand" alt="Alzheimer Notes Logo">
            <span id="title-page-header">Alzheimer Notes</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon ion-md-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/index.html" id="home">Inicio <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#introduccion" id="intro">Explorar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/multimedia.html" id="media">Multimedia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus" id="about">Sobre mi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#contact" id="contacts">Contacto</a>
                </li>
            </ul>
            <script type="text/javascript" src="js/nav.js"></script>
        </div>
    </div>
</nav>

<div class="ir-arriba icon-arrow-up2"></div>
<script type="text/javascript" src="js/goto/goto.js"></script>


<!-- Seccion slider -->
<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">

        <img src="img/header_1.png" data-thumb="img/slider/header_1" title="Alzheimer Intro" alt="">
        <img src="img/header_2.png" data-thumb="img/slider/header_2" title="Aplicación informativa disponible también para movil" alt="">
    </div>
</div>
</div>
<script type="text/javascript" src="js/slider/jquery.min.js"></script>
<script type="text/javascript" src="js/slider/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        $('#slider').nivoSlider();
    });
</script>



<!-- Seccion portfolio-->
<section id="introduccion">
    <div class="container-fluid">
        <div class="content-center">
            <h2>¿Sabia <b>usted?</b></h2>
            <p>El alzheimer es una enfermedad que cada año registra a aproximadamente 10 millones de casos nuevos.
                Esta enfermedad neurodegenerativa también es llamada como <strong>La epidemia del siglo XXI</strong>
            </p>
            <p>
                Las enfermedades neurodegenerativas pueden aparecer de forma repentina o progresiva, pueden surgir
                de un ictus, de infecciones o traumatismos. Los tratamientos que se le dan a los pacientes son
                variados pero un tratamiento es altamente efectivo cuando es personalizado, es decir, cuando los
                procedimientos que los médicos realizan son específicos para cada paciente.
            </p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="portfolio-container">
                    <div class="portfolio-details">
                        <a href="/mal_de_alzheimer.html">
                            <h2>¿Que es Mal de alzheimer?</h2>
                        </a>
                        <a href="#portfolio">
                            <p>El mal de alzheimer es una enfermedad que afecta el funcionamiento
                                del cerebro. conozca más en este apartado.
                            </p>
                        </a>
                    </div>
                    <img src="/img/seccion_1.png" class="img-fluid" alt="covinas">
                </div>
            </div>

            <div class="col-md-4">
                <div class="portfolio-container">
                    <div class="portfolio-details">
                        <a href="/musicoterapia.html">
                            <h2>Musicoterapia y dispositivos</h2>
                        </a>
                        <a href="#portfolio">
                            <p>Terapias y dispositivos terapeuticos</p>
                        </a>
                    </div>
                    <img src="/img/seccion_2.png" class="img-fluid" alt="covinas">
                </div>
            </div>


            <div class="col-md-4">
                <div class="portfolio-container">
                    <div class="portfolio-details">
                        <a href="/musica_y_principios.html">
                            <h2>Música y sus principios</h2>
                        </a>
                        <a href="#portfolio">
                            <p>Estructura de la música desde sus componentes más básicos</p>
                        </a>
                    </div>
                    <img src="/img/seccion_3.png" class="img-fluid" alt="covinas">
                </div>

            </div>

            <div class="col-md-4">
                <div class="portfolio-container">
                    <div class="portfolio-details">
                        <a href="/oido_y_funcionamiento.html">
                            <h2>¿Como oímos?</h2>
                        </a>
                        <a href="#portfolio">
                            <p>Exposición del funcionamiento de nuestro oido interno</p>
                        </a>
                    </div>
                    <img src="/img/seccion_4.png" class="img-fluid" alt="covinas">
                </div>
            </div>

            <div class="col-md-4">
                <div class="portfolio-container">
                    <div class="portfolio-details">
                        <a href="/psicologia_musica.html">
                            <h2>Psicología de la música</h2>
                        </a>
                        <a href="#portfolio">
                            <p>¿Como impacta la música en nuestras vidas?</p>
                        </a>
                    </div>
                    <img src="/img/seccion_5.png" class="img-fluid" alt="covinas">
                </div>
            </div>



            <div class="col-md-4">
                <div class="portfolio-container">
                    <div class="portfolio-details">
                        <a href="/soluciones_multimedia.html">
                            <h2>Propuestas y consideraciones</h2>
                        </a> 
                        <a href="#portfolio">
                            <p>Ideas propuestas para intergrarse en planes de Musicoterapia</p>
                        </a>
                    </div>
                    <img src="/img/seccion_6.png" class="img-fluid" alt="covinas">
                </div>
            </div>
        </div>
        <div class="text-center  topmargin-sm">
            <p>Fuentes bibliográficas</p>
            <a href="/bibliografia.html" class="text-dark">Consulte aquí la documentación bibliográfica de esta página</a>
        </div>

    </div>
</section>

<section id="aboutus" class="bg-light-gray">
    <div class="container">
        <div class="content-center">
            <h2>Acerca de <b>mi</b></h2>
            <p>Estoy realizando mi etapa productiva del programa Tecnólogo en Producción Multimedia bajo la
                modalidad de proyecto productivo I+D+i (Investigación + Desarrollo + innovación)
                convocatoria liderada desde la dirección general del SENA con el apoyo de instructores del área
                técnica.
                <br><br>
                Mi nombre es Yessid Samir Acosta aprendíz del SENA. Hice mi tecnología en el Centro de Diseño e Innovación Tecnológica
                Industrial (CDITI) que está ubicada en el municipio Dosquebradas en el departamento de Risaralda.
                Soy de la ciudad San Juan de Pasto en el departamento de Nariño, me gustan los procesos
                investigativos que involucren ahondar en varias áreas del conocimiento como áreas científicas,
                físicas, artisticas como la música y el diseño, tecnológicas como la programación.
            </p>
        </div>

        <div class="row">
            <!-- Columnas de 4 elementos-->
            <div class="col-md-4 content-center">
                <div class="member-container content-center">
                    <div class="member-details">
                        <h5>Yessid Acosta</h5>
                        <span>Ejecutor e investigador de la vigilacia tecnológica</span>
                        <ul class="list-inline">
                            <li class="list-inline-item"> <a href=""><i class="icon ion-logo-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"> <a href=""><i class="icon ion-logo-youtube"></i></a>
                            </li>
                            <li class="list-inline-item"> <a href=""><i class="icon ion-logo-facebook"></i></a>
                            </li>

                        </ul>
                    </div>
                    <img src="/img/yessid.png" class="img-fluid" alt="Miembro 1">
                </div>
            </div>

            
        </div>

    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 topmargin-sm">
                <h3>¿Desea usted  <b>contactarme?</b></h3>
                <p>Usted puede enviar sus sugerencias y/o aportes a la temática de esta página. También puede
                    contactarse por motivos de trabajo o asociación.</p>
            </div>
            <div class="col-md-6 topmargin-sm">
                <form action="enviar.php" method="post">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="col">
                            <input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
                        </div>
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="compania" class="form-control"
                                placeholder="Nombre de compañia (opcional)">
                        </div>
                        <div class="col-md-12">
                            <input type="number" name="telefono" class="form-control"
                                placeholder="Teléfono (opcional)">
                        </div>
                        <div class="col-md-12">
                            <input type="text" name="asunto" class="form-control" placeholder="Asunto" required>
                        </div>
                        <div class="col-md-12">
                            <textarea name="mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                required></textarea>
                        </div>
                    </div>
                    <input type="submit" name="boton" class="btn btn-dark full-width"></input>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="footer" class="bg-dark">
    <div class="container">
        <img src="/img/cerebro_logo.png" class="logo-brand" alt="logo">
        <span id="title-page-footer">Alzheimer Notes</span>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#top">Inicio</a> </li>
            <li class="list-inline-item"><a href="#introduccion">Explorar</a> </li>
            <li class="list-inline-item"><a href="/multimedia.html">Multimedia</a> </li>
            <li class="list-inline-item"><a href="#aboutus">Sobre mi</a> </li>
            <li class="list-inline-item"><a href="#contact">Contactos</a> </li>
        </ul>

        <ul class="list-inline">

            <li class="list-inline-item"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="icon ion-logo-youtube"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
        </ul>

        <small>©2021 Todos los derechos reservados.</small>
    </div>
</section>