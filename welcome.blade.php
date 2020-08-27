<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- icons -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>

        body{
            background-color: #FFEBCD;
        }
        #principal {
            background-image: url(https://upload.wikimedia.org/wikipedia/commons/e/e0/LAVADOS_DE_MUEBLES_A_DOMICILIO.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            padding-top: 90px;
            min-height: 553px;
            color: #ffffff;
            position: relative;
        }

        #principal:before {
            content:'';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0,0,0,0.6);
        }

        #principal h1 {
            font-size: 45px;
            color: #fff;
            position: relative;
        }

        #principal p{
            color: #cdcdcd;
            position: relative;
        }

        .content-center{
            max-width: 800px;
            margin: 0 auto 60px auto;
            text-align: center;
        }

        .btn-light{

            font-size: 14px;           
            padding: 15px 26px;
            min-width: 160px;
            border-radius: 2px;
            display: inline-block;
            position: relative;
            top: 35px;
            background-color: #ffffff;
            color: #1a1a1a;
            border: 2px solid #ffffff;
        }

        .btn ion-icon {
            font-size: 14px;
            margin-left: 5px;
        }

        h1 {
            font-size: 40px;
            color: black;
            position: relative;
            text-align: center;
            font-family: "Garamond", sans-serif;
        }

        #nosotros h2 {
            background: #DCDCDC;
            font-family: "Gabriola", cursive;
            font-size: 40px;
            color: #FF8C00;
        }
        
        #nosotros h3 {
            font-family: "Garamond", sans-serif;
            font-size: 40px;
        }

        #nosotros{
            background-color: #FFFAF0;
            padding: 30px;
        }

        #nosotros img{
            width: 320px;
            height: 280px;
            float: left;
            padding: 40px;
            position: relative;
            left: -10px;
        }

        #vision{
            background-color: #FFFAF0;
            padding: 30px;
        }

        #vision h2{
            background-color: #DCDCDC;
            font-family: "Gabriola", cursive;
            font-size: 40px;
            color: #FF8C00;
        }

        #vision .container{
            padding: 50px;
        }

        #valores h2{
            background-color: #DCDCDC;
            font-family: "Gabriola", cursive;
            font-size: 40px;
            color: #FF8C00;
        }

        #valores{
            background-color: #FFFAF0;
            padding: 30px;
        }

        #valores h4{
            text-align: center;
            font-family: "Garamond", sans-serif;
            font-size: 40px;
        }

        .card{
            max-width: 800px;
            margin: 0 auto 60px auto;
        }

        .form{
            background-color: #FFF;
            padding: 30px;
        }

        #formulario{
            background-color: #F0F8FF;
        }

        #formulario h3{
            background-color: #F0F8FF;
            margin: 10px;
            text-align: center;
            font-family: "Garamond", sans-serif;
            font-size: 40px;
        }

        #contactos{
            background-color: #FFF;
        }

        #contactos .text-center{
            background-color: #4169e1;
            padding-bottom: 10px;
            color: #fff;
            border
        }

        .card{
            background-color: #F0F8FF;
            text-align: center;
        }
        .card h5{
            font-size: 30px;
        }

        .pie a{
            text-decoration:none;
        }

    </style>
    <title>Encage</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; width: 100%; z-index: 1000;">
        <a class="navbar-brand" href="#">
            <img src="https://e7.pngegg.com/pngimages/941/802/png-clipart-e-e.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Engace
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#principal">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">Servicios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#conocenos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Conocenos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#nosotros">Nosotros</a>
                        <a class="dropdown-item" href="#vision">Visión</a>
                        <a class="dropdown-item" href="#valores">Valores</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#formulario">Saber más</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contactos">Contactos</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="section-principal">
        <section id="principal">
            <div class="container">
                <div class="content-center">
                <h1>Compra tus muebles desde la seguridad de tu casa</h1>
                <p>Fracciona tus compras online en 3, 4 o 6 cuotas sin intereses. Con tu tarjeta de crédito en compras mayores a 10,000 RD$ y hasta 65,000 RD$</p>
                <a href="#" class="btn btn-light">Descubrelo ahora<ion-icon name="arrow-forward-circle-outline"></ion-icon></a>
                </div>
            </div>
        </section>
    </div>
    </div class="section-servicios">
        <h1>Servicios</h1>  
        <section id="servicios">       
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://i.pinimg.com/originals/c5/ec/d6/c5ecd68ced9e8a00d5b9869a06eab359.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Juegos de comedor</h5>
                        <p>Jarones, floreria, lavabajillas, cuadros, etc</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="https://decoristas.com/wp-content/uploads/2019/03/c%C3%B3mo-decorar-una-sala-de-estar-con-muebles-negros-2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Juegos de sala</h5>
                        <p>Decoramos las alfombras, las sillas, las mesitas, etc</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="https://www.i-habitaciones.com/Minis/muebles-para-dormitorios.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Juegos de habitación</h5>
                        <p>Desde la decoracion de las camas hasta la decoracion de las alfombras</p>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </div>
    </div class="section-conocenos">
        <h1>Conocenos</h1>
        <section id="nosotros">
            <h2>Nosotros</h2>           
            <div class="container"></div>
                <img src="https://muebles1click.com/blog/wp-content/uploads/2019/02/tienda-muebles-c%C3%B3rdoba.jpg" alt="">
                </div class="text-us">
                <h3>¿Quiénes somos?</h3>
                <p>Somos la marca de muebles que apuesta por hacer las cosas diferentes.</p>
                <p>Trabajamos para revolucionar el sector del mueble, el diseño y la decoración. 
                Apostamos por darle una vuelta y ser la opción para inconformistas como tú que buscan algo más.</p>

                <p>¿Nuestro objetivo? Crear productos de diseño y calidad con un servicio impecable. 
                Porque no enviamos cohetes a la luna (todavía), pero sí que entregamos en tiempo récord.</p>

                <p>¿Nuestra obsesión? Perfeccionar cada detalle. Es por eso por lo 
                que seguimos cuidadosamente todo el proceso de diseño, fabricación
                y distribución de nuestros productos con el fin de crear diseños atractivos
                y funcionales, de gran calidad y a precios asequibles.</p>
                </div>
            </div>
        </section>
        <section id="vision">
            <h2>Visión</h2>
            <div class="container">
                <p>La visión de Encage es ser una empresa con proyección nacional e internacional, 
                lo cual será posible mediante el esfuerzo, dedicación y profesionalismo de nuestro equipo de trabajo, 
                tomando en cuenta las tendencias del mercado, las necesidades actuales y futuras de nuestros clientes, 
                seguirnos renovando y actualizando en esta área para llegar a ser la mejor opción para el público de venta de muebles 
                y accesorios en decoración para residencias, oficinas, hoteles, restaurantes, hospitales y mucho más.</p>
            </div>
        </section>    
        <section id="valores">
            <h2>Valores</h2>
            <div class="container">
                </br>
                <h4>Nuestros valores se basan en:</h4>
                </br>
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">La innovación</li>
                        <li class="list-group-item">El inconformismo y la Pasión</li>
                        <li class="list-group-item">Ser transgresores</li>
                    </ul>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">El compromiso</li>
                        <li class="list-group-item">La orientación al cliente</li>
                        <li class="list-group-item">El respeto al medio ambiente</li>
                    </ul>
                </div>
            </div>
        </section>       
    </div>
    <div class="section-formulario">
    <section id="formulario">
        <h3>Saber más</h3>
        <form class="form">
            <div class="form-group">
                <label for="exampleFormControlInput1">Correo electronico</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre completo</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Información a saber</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
    <div class="section-contactos">
        <section id="contactos">
            <div class="text-center">
                <h2>Contactos</h2>
                <p>Escribenos o llamanos para consultar cualquier duda</p>
            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><ion-icon name="compass-outline"></ion-icon></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Dirección</h6>
                                <p class="card-text">Calle Isabel Aguiar #153, Santo Domingo Oeste</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><ion-icon name="call-outline"></ion-icon></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Teléfonos</h6>
                                <p class="card-text">(829) 819-5019</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><ion-icon name="time-outline"></ion-icon></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Horarios</h6>
                                <p class="card-text">De Lunes a Jueves: 9:00 AM a 5:00 PM - Viernes y Sabados: 8:00 AM a 12:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="pie">
    <footer class="page-footer font-small blue pt-4" style="background-color: #3b83bd;">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase"> Engace</h5>
                <p>Toda la información en esta página es de/para un proyecto.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Redes</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!" style="color: DarkBlue;">Facebook</a>
                </li>
                <li>
                    <a href="#!" style="color: BlueViolet;">Instagram</a>
                </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Correos</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!" style="color: DarkRed;">engace@gmail.com</a>
                </li>
                <li>
                    <a href="#!" style="color: DarkRed;">engaceEmploy@gmail.com</a>
                </li>
                </ul>

            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color: #007cba;">© 2020 Copyright:
            <a href="https://mdbootstrap.com/" style="color: #fff;"> Engace.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>