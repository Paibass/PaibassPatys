<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/Global/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Contacto | Paibas´s Paty</title>
</head>

<body>
    <div class="gridPadre">
        <header>
            <a href="../index.html">
                <img class="logo" src="../assets/Global/logo1.png" alt="logo">
            </a>
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar">Menu</label>
            <nav>
                <ul>
                    <li><a href="../index.html">Inicio</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="#">Populares</a>
                        <ul>
                            <li><a href="populares/mc.html">Mcdonalds</a></li>
                            <li><a href="populares/bk.html">Burger King</a></li>
                            <li><a href="populares/mostaza.html">Mostaza</a></li>
                            <li><a href="populares/wendys.html">Wendy´s</a></li>
                            <li><a href="populares/kfc.html">KFC</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Locales</a>
                        <ul>
                            <li><a href="locales/bp.html">BurgaPoint</a></li>
                            <li><a href="locales/porthos.html">Porthos</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <section>
                <div id="Nosotros" class="container">
                    <div>
                        <img src="../assets/Global/cocinero.png" class="imgNosotros" alt="Cocinero">
                    </div>
                    <div class="TextoNosotros">
                        <h2 class="nosotrosTitulo">¿Quienes Somos?</h2>
                        <p class="nosotrosTexto">Nuestro objetivo es replicar las hamburguesas tan famosas y ricas, pero la diferencia es que si cumplimos con el tamaño y contenido que ellos muestran. Te invitamos a confiar en nosotros y a que pruebes nuestras hamburguesas.</p>
                    </div>
                </div>
            </section>
            <section>
                <div class="conteiner">
                    <div class="row pt-4 ">
                        <div class="col-lg-12 justify-content-center">
                            <div class="card shadow-lg p-3 mb-5 bg-white">
                                <div id="headercard" class="card-header">Deja tu Opinion!</div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3 justify-content-center">
                                                <label for="Nombre">Nombre</label>
                                                <input name="name" type="text" class="form-control" id="nombre" placeholder="Nombre" value="" required>
                                                <div class="valid-feedback">¡Ok válido!</div>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                                                <input name="email" type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Tu Opinion</label>
                                                <textarea name="feedback" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tu Opinion..."></textarea>
                                                <div class="invalid-feedback">Complete el campo.</div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary align-self-end" type="submit" name="register">Enviar</button>
                                    </form>
                                    <?php
                                        include("../php/registrar.php");
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                      <script type="text/javascript" src="../js/refresh.js"></script>
            </section>
            <section>
                <h2 class="Titulos">OPINIONES</h2>
            </section>
            <section class="container-fluid text-center fs-3">
                <?php
          include("../php/mostrar.php");
         ?>
            </section>
        </main>
        <footer>
            <p>Paibas´s Patys. &copy; Todos Los Derechos Reservados 2022</p>
            <div class="Iconos">
                <a href="https://wa.me/541164018602" target="_BLANK"><i class='bx-fw bx bxl-whatsapp'></i></a>
                <a href="mailto:joancho2012@hotmail.com.ar"><i class='bx-fw bx bx-envelope'></i></a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>