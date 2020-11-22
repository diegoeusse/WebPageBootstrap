<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> TooList - Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../css/main.css">
    <link rel="stylesheet" href="./../node_modules/open-iconic/font/css/open-iconic-bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-inverse navbar-fixed-top">
        <a class="navbar-brand" href="./../index.php">TooList</a>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a href="./../index.php">Inicio</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Catálogos
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="./../tornillos.php">Tornillos</a></li>
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
                <li class="nav-item"><a href="./../formulario.php">Sugerencias</a></li>
                <li class="nav-item"><a href="./../nosotros.php">Nosotros</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
				<li class="nav-item"><a class="nav-link" href="./register.php"><span class="glyphicon glyphicon-user"></span> Registrarse </a></li>
                <li class="nav-item active"><a class="nav-link" href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Ingresar </a></li>
            </ul>
        </div>
	</nav>

    <div style="text-align:center" class="jumbotron">
        <h1>Bienvenido a TooList
            <span><img class="img-card-bot" src="./../Imágenes/Colombia.png" alt="Colombia Flag" style="width:100x;height:50px;"></span>
        </h1>
        <p>Tu mejor aliado en la compra de maquinaria y herramientas en todo el
            territorio colombiano.</p>
        <i>¡Regístrate o inicia sesión para acceder a todos nuestros catálogos!</i>
    </div>
	
    <div class="header">
        <h2>Iniciar sesión</h2>
    </div>
	 
    <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Nombre de usuario</label>
            <input type="text" name="username" >
        </div>
        <div class="input-group">
            <label>Contraseña</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="register-btn" name="login_user">Iniciar sesión</button>
        </div>
        <p>
            ¿Aún no tienes una cuenta? <a href="register.php">Regístrate</a>
        </p>
  </form>

  <footer class="footer">
        <div class="row">
            <div class="column column-footer">
                <a href="https://www.facebook.com/TooList-101076045164980/?hc_ref=ARRrJU3dUyVDJOdk8Ac2CVbPTnm5qedBF8b1D2_w1anqQN63wjwESzo89OfcdEUVy3c&__xts__[0]=68.ARC1Z1piwB1hui1pNxarwJRNEeJmnd_VVFaVxlUZuEsakGVbyHfQqFWFd7PLgwMEp7Bu9re2yQAIy-3kShIEeYg8dyPclynzX-cTODKLeV0UQwTPdaOjVu-kku8RaIcSXzg9BwTC40GnZ91UcLAxbJQdE6sMO2urtjAe6IlqOU90tzTHE59WoOGmosTBfaoMohBC2RaDrgz2IO1DKcoRu9i3jqPQHSFwtqBTkZRPtfZm_d_yHEjaNWSXW8izrHH10qADCW0--1QKhd-GfJ-Ke4yzKVDSdtN195NtcCnSwed_BCQeYDepc5ZPmVD5GA&__tn__=kC-R"><i class="fa fa-facebook-square media-icon"
                        style="font-size:24px"></i></a>
                <a href="http://www.twitter.com"><i class="fa fa-twitter media-icon" style="font-size:24px"></i></a>
                <a href="https://www.instagram.com/toolist.col/"><i class="fa fa-instagram media-icon" style="font-size:24px"></i></a>
                <a href="http://www.google.com"><i class="fa fa-google-plus media-icon" style="font-size:24px"></i></a>
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

            <div class="column column-footer2">
                <a class="footer-link" href="./../formulario.php">Sugerencias</a>
                <a class="footer-link" href="./../proveedores.php">Proveedores</a>
                <a class="footer-link" href="./../seguridad.php">Para tu seguridad</a>
                <a class="footer-link" href="./../nosotros.php">Sobre nosotros</a>
            </div>
        </div>

    </footer>
</body>
</html>