<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="node_modules/open-iconic/font/css/open-iconic-bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Sugerencias</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-inverse navbar-fixed-top">
        <a class="navbar-brand" href="./index.php">TooList</a>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a href="./index.php">Inicio</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catálogos
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="./tornillos.php">Tornillos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Tuercas</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Láminas</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Proveedores
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="#">Proveedor 1</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Proveedor 2</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Proveedor 3</a></li>
                    </ul>
                </li>
                <li class="nav-item active"><a href="./formulario.php">Sugerencias</a></li>
                <li class="nav-item"><a href="./nosotros.php">Nosotros</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item"><a class="nav-link" href="./registration/register.php"><span class="glyphicon glyphicon-user"></span> Registrarse </a></li>
                <li class="nav-item"><a class="nav-link" href="./registration/login.php"><span class="glyphicon glyphicon-log-in"></span> Ingresar </a></li>
            </ul>
        </div>
    </nav>

    <div style="text-align:center" class="jumbotron">
        <h1>TooList
            <span><img class="img-card-bot" src="Imágenes/Colombia.png" alt="Imporcol logo" style="width:100x;height:50px;"></span>
        </h1>
        <p>Tu mejor aliado en la compra de maquinaria y herramientas en todo el
            territorio colombiano.</p>
        <i>¡100% colombiano, 100% confiable!</i>
    </div>

    <div class="container">
        <h2>¡Déjanos tus datos y te contactaremos!</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="nombre">Nombres</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                </div>
                <div class="form-group col-sm-6">
                    <label for="apellido">Apellidos</label>
                    <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Ingrese su e-mail">
                </div>
                <div class="form-group col-sm-6">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Ingrese su direccion">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-3">
                    <label for="departamento">Departamento</label>
                    <select id="departamento" class="form-control">
                        <option selected>Escoge tu departamento</option>
                        <option>Amazonas</option>
                        <option>Antioquia</option>
                        <option>Arauca</option>
                        <option>Atlántico</option>
                        <option>Bolívar</option>
                        <option>Boyacá</option>
                        <option>Caldas</option>
                        <option>Caquetá</option>
                        <option>Casanare</option>
                        <option>Cauca</option>
                        <option>Cesar</option>
                        <option>Chocó</option>
                        <option>Córdoba</option>
                        <option>Cundinamarca</option>
                        <option>Guainía</option>
                        <option>Guajira</option>
                        <option>Guaviare</option>
                        <option>Huila</option>
                        <option>Magdalena</option>
                        <option>Meta</option>
                        <option>Norte De Santander</option>
                        <option>Nariño</option>
                        <option>Putumayo</option>
                        <option>Quindío</option>
                        <option>Risaralda</option>
                        <option>San Andrés</option>
                        <option>Santander</option>
                        <option>Sucre</option>
                        <option>Tolima</option>
                        <option>Valle Del Cauca</option>
                        <option>Vaupés</option>
                        <option>Vichada</option>
                    </select>
                </div>
                <div class="form-group col-sm-3">
                    <label for="direccion">Municipio</label>
                    <input type="text" class="form-control" name="municipio" placeholder="Ingrese su municipio">
                    </select>

                </div>
                <div class="form-group col-sm-6">
                    <label for="asunto">Escribe un asunto</label>
                    <input type="text" class="form-control" name="asunto" placeholder="Ingrese un asunto">
                </div>
            </div>
            <div class="form-group col-sm-12">
                <label for="comentarios">¿Tienes algún comentario?</label>
                <textarea name="message" class="form-control" placeholder="Escribe un comentario" rows="10"></textarea>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gridCheck">
                    <label for="gridCheck" class="form-check-label">Quiero que me contacten</label>
                </div>
            </div>
            <button type="submit" class="btn btn-outline-primary">Enviar</button>
        </form>
    </div>

    <footer class="footer">
        <div class="row">
            <div class="column column-footer">
                <a href="https://www.facebook.com/TooList-101076045164980/?hc_ref=ARRrJU3dUyVDJOdk8Ac2CVbPTnm5qedBF8b1D2_w1anqQN63wjwESzo89OfcdEUVy3c&__xts__[0]=68.ARC1Z1piwB1hui1pNxarwJRNEeJmnd_VVFaVxlUZuEsakGVbyHfQqFWFd7PLgwMEp7Bu9re2yQAIy-3kShIEeYg8dyPclynzX-cTODKLeV0UQwTPdaOjVu-kku8RaIcSXzg9BwTC40GnZ91UcLAxbJQdE6sMO2urtjAe6IlqOU90tzTHE59WoOGmosTBfaoMohBC2RaDrgz2IO1DKcoRu9i3jqPQHSFwtqBTkZRPtfZm_d_yHEjaNWSXW8izrHH10qADCW0--1QKhd-GfJ-Ke4yzKVDSdtN195NtcCnSwed_BCQeYDepc5ZPmVD5GA&__tn__=kC-R"><i class="fa fa-facebook-square media-icon" style="font-size:24px"></i></a>
                <a href="www.twitter.com"><i class="fa fa-twitter media-icon" style="font-size:24px"></i></a>
                <a href="https://www.instagram.com/toolist.col/"><i class="fa fa-instagram media-icon" style="font-size:24px"></i></a>
                <a href="www.google.com"><i class="fa fa-google-plus media-icon" style="font-size:24px"></i></a>
            </div>

            <div class="column">
                <address>
                    <h3>Oficina Central</h3>
                    <p>Cra 81 # 6A 58 704.</p>
                    <p><span class="oi oi-phone footer-address-icon"></span>(+57)3002297826</p>
                    <p><span class="oi oi-envelope-closed footer-address-icon"></span>deussen@unal.edu.co</p>
                    <p><span class="oi oi-flag footer-address-icon"></span>Medellin, Colombia, Sudamérica</p>
                </address>
            </div>

            <div class="column">
                <a class="footer-link" href="./formulario.php">Sugerencias</a>
                <a class="footer-link" href="./proveedores.php">Proveedores</a>
                <a class="footer-link" href="./seguridad.php">Para tu seguridad</a>
                <a class="footer-link" href="./nosotros.php">Sobre nosotros</a>
            </div>
        </div>

    </footer>

    <!-- Optional JavaScript-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>