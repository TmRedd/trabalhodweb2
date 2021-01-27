<?php include "app.php"
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>MovieHub</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Alatsi&family=Bebas+Neue&display=swap">
    <link href="css/style.css" rel="stylesheet">


</head>



<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="titulosite  mr-4 text-warning" style="cursor:pointer" onclick="openPage('Home', this)" id="default">
            <img class="logo" src="Images/prolifes_is_the_best.png">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <button class="tablink" onclick="openPage('Realizadores', this)">Realizadores</button>
                </li>
                <li class="nav-item">
                    <button class="tablink" onclick="openPage('Estudios', this)">Estúdios</button>
                </li>
                <li class="nav-item">
                    <button class="tablink" onclick="openPage('Filmes', this)">Filmes</button>
                </li>
                <li class="nav-item">
                    <button class="tablink" onclick="openPage('Atores', this)">Atores</button>
                </li>
            </ul>
            <div id="semLogin" class="semLogin1">
                <button href="#myLogin" class="btnlogin" data-toggle="modal" id="loginBotton">Login »</button>
                <button href="#myRegister" class="btnlogin btn-success" data-toggle="modal"
                    id="registerBotton">Register</button>
            </div>
            <div id="comLogin" class="comLogin1">
                <button class="btnperfil" id="favoritos" onclick="openPage('Favoritos', this)">Favoritos</button>
                <button class="btnperfil" id="perfilBotton" onclick="openPage('Perfil', this)">Perfil</button>
                <button class="btnperfil" id="outBotton"><a href="logout.php">Logout</a></button>
            </div>
            <div id="comLoginAd" class="comLoginAd1">  
                <button class="btnperfil"style="width: 100px"><a href="BackOffice.php">BackOffice</a></button> 
            </div>
        </div>
    </nav>

    <!-- Register -->

    <div id="myRegister" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src="Images/img_avatar2.png" alt="Avatar" style="margin-top: -12px">
                    </div>
                    <h4 class="modal-title">Member Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                        id="btnclose">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="register" method="POST" action="index.php">
                        <div class=" form-group">
                            <label for="nome"></label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="Username"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="e-mail" placeholder="E-mail"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="pass" placeholder="Password"
                                required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="passwordConfirm" id="passConfirm"
                                placeholder="Confirm Password" required="required">
                        </div>
                        <button id="login_btn" type="submit" name="botaoRegister"
                            class="btn btn-primary btn-lg btn-block login-btn">Register User</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Login -->

    <div id="myLogin" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="avatar">
                        <img src=" Images/img_avatar2.png" alt="Avatar" style="margin-top: -12px">
                    </div>
                    <h4 class="modal-title">Member Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"
                        id="btnclose">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="login" method="POST" action="index.php">
                        <div class=" form-group">
                            <label for="nome"></label>
                            <input type="text" class="form-control" name="nome1" id="nome1" placeholder="Username"
                                   required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1" id="password1"
                                placeholder="Password" required="required">
                        </div>
                        <button id="login_btn" type="submit" name="botaoLogin"
                            class="btn btn-primary btn-lg btn-block login-btn">Login User</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagina Inicial -->

    <div class="tabcontent" id="Home">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3 hmpgt">Bem-Vindo ao MovieHub</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="destaque col-sm">
                    <h2 class="momentos">Filme do Mês</h2>
                    <div class="h-75 card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width=auto height=650px x="50%" y="50%">
                            <image href="Images/da5bloods.jpg" class="imagemf"></image>
                        </svg>
                        <div class="card-body">
                            <h3 style="margin-top: -165px">Da 5 Bloods</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <p><a class="btn btn-secondary" onclick="openPage('Filmes', this)">View details
                                            &raquo;</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="destaque col-sm">
                    <h2 class="momentos">Ator do Mês</h2>
                    <div class="h-75 card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width=auto height=550px x="50%" y="50%">
                            <image href="Images/Chris.png" class="imagemf"></image>
                        </svg>
                        <div class="card-body">
                            <h3 style="margin-top: -65px">Chris Hemsworth</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <p><a class="btn btn-secondary" onclick="openPage('Atores', this)">View details
                                            &raquo;</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="destaque col-sm">
                    <h2 class="momentos">Realizador do Mês</h2>
                    <div class="h-75 card mb-4 shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width=auto height=550px x="50%" y="50%">
                            <image href="Images/cnh.jpg" class="imagemf"></image>
                        </svg>
                        <div class="card-body">
                            <h3 style="margin-top: -75px">Christopher Nolan</h3>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <p><a class="btn btn-secondary" onclick="openPage('Realizadores', this)">View
                                            details &raquo;</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Realizadores -->

    <div class="tabcontent" id="Realizadores">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="titulossub hmpgt">REALIZADORES DO MOMENTO</h1>
                <p class="descricao">Nesta página podes ver alguns dos grandes realizadores do momento e adicionares os
                    teus
                    preferidos à tua lista de Favoritos!</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <?php
                        $db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
                        $sql = "SELECT * FROM realizadores";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?php echo $dados['image'] ?>" class="imagemf">
                            <div class="card-body">
                                <h3><?php echo $dados['name'] ?></h3>
                                <p class="card-text"><?php echo $dados['biblio'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="favF1" type="button">Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>

    <!-- Estudios -->

    <div class="tabcontent" id="Estudios">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="titulossub hmpgt">MAIORES ESTUDIOS ATUAIS</h1>
                <p class="descricao">Nesta página podes ver os maiores estudios da atualidade!</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

            <div class="row">
                    <?php
                        $db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
                        $sql = "SELECT * FROM estudios";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?php echo $dados['image'] ?>" class="imagemf">
                            <div class="card-body">
                                <h3><?php echo $dados['name'] ?></h3>
                                <p class="card-text"><?php echo $dados['biblio'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="favF1" type="button">Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Filmes -->

    <div class="tabcontent" id="Filmes">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="titulossub hmpgt">FILMES DO MOMENTO</h1>
                <p class="descricao">Nesta página pode saber sobre os novos lançamentos e escolher os teus filmes
                    favoritos!</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php
                        $db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
                        $sql = "SELECT * FROM filmes";
                        $resultado = mysqli_query($db,$sql);
                        while ($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img src="<?php echo $dados['image'] ?>" class="imagemf">
                            <div class="card-body">
                                <h3><?php echo $dados['name'] ?></h3>
                                <p class="card-text"><?php echo $dados['biblio'] ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="favF1" type="button">Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </div>

    <!-- Atores -->

    <div class="tabcontent" id="Atores">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="titulossub hmpgt">ATORES MAIS REQUISITADOS</h1>
                <p class="descricao">Nesta página podemos saber um bocado mais sobre os nossos atores favoritos, e até
                    mesmo
                    adiciona-los aos favoritos para saberes sempre quando ele/ela fizer algum filme novo!</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="album py-5 bg-light">
                        <div class="container">
                            <div class="row">
                                <?php
                                    $db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
                                    $sql = "SELECT * FROM atores";
                                    $resultado = mysqli_query($db,$sql);
                                    while ($dados = mysqli_fetch_array($resultado)):
                                ?>
                                <div class="col-md-4">
                                    <div class="card mb-4 shadow-sm">
                                        <img src="<?php echo $dados['image'] ?>" class="imagemf">
                                        <div class="card-body">
                                            <h3><?php echo $dados['name'] ?></h3>
                                            <p class="card-text"><?php echo $dados['biblio'] ?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <button class="btnfav" id="favF1" type="button">Favorito <i
                                                            class="fa fa-star"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    

    <!-- favoritos -->

    <div class="tabcontent" id="Favoritos">
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="titulossub hmpgt">FILMES DO MOMENTO</h1>
            </div>
        </section>
        <h2 class="favtitles">Filmes Favoritos</h2>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" id="filme1">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=900px height=350px x="50%" y="50%">
                                <image href="Images/da5bloods.jpg" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Da 5 Bloods</h3>
                                <p class="card-text">Filme de guerra, Ação</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rFav1" type="button">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                    <small class="text-muted">2h 34mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="filme2">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=900px height=350px x="50%" y="50%">
                                <image href="Images/tigertail.jpg" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>TigerTail</h3>
                                <p class="card-text">Drama</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rFav2" type="button">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                    <small class="text-muted">1h 31mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="filme3">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=900px height=350px x="50%" y="50%">
                                <image href="Images/relic.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Relic</h3>
                                <p class="card-text">Terror, Drama</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rFav3" type="button">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                    <small class="text-muted">1h 29mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="filme4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=900px height=350px x="50%" y="50%">
                                <image href="Images/clouds.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Clouds</h3>
                                <p class="card-text">Musical</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rFav4" type="button">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                    <small class="text-muted">2h 01mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="filme5">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=900px height=350px x="50%" y="50%">
                                <image href="Images/eraumavez.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Era Uma Vez Um Sonho</h3>
                                <p class="card-text">Drama</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rFav5" type="button">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                    <small class="text-muted">1h 56mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="filme6">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=900px height=350px x="50%" y="50%">
                                <image href="Images/Rebecca.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Rebecca</h3>
                                <p class="card-text">Romance, Suspense</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rFav6" type="button">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                    <small class="text-muted">2h 01mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="favtitles">Estúdios Favoritos</h2>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4" id="estudio1">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/sony.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Sony Pictures</h3>
                                <p class="card-text">Sony Pictures Entertainment Inc. (SPE) é uma empresa
                                    norte-americana de
                                    entretenimento com sede em Culver City, Califórnia, Estados Unidos. A sua
                                    inauguração foi em 1991.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rEFav1">Remover Favorito <i
                                                class="fa fa-star"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="estudio2">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/universal.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Universal Studios</h3>
                                <p class="card-text">A Universal Studios (também conhecida como Universal Pictures) é um
                                    estúdio de
                                    cinema norte-americano de propriedade da Comcast e de sua subsidiária NBCUniversal.
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rEFav2">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="estudio3">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/waltdisney.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Walt Disney</h3>
                                <p class="card-text">The Walt Disney Company, conhecida simplesmente como Disney, é uma
                                    companhia
                                    multinacional estadunidense de mídia de massa sediada no Walt Disney Studios na
                                    Califórnia.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rEFav3">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="estudio4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/warnerbros.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Warner Bros</h3>
                                <p class="card-text">A Warner Bros. Entertainment, é uma produtora e distribuidora
                                    estadunidense de
                                    filmes e entretenimento televisivo. Foi fundada em 4 de abril de 1923 pelos irmãos
                                    Warner.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rEFav4">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="estudio5">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/Paramount_Pictures.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Paramount Studios</h3>
                                <p class="card-text">A Paramount Pictures Corporation é um dos principais estúdios de
                                    cinema dos Estados
                                    Unidos, fundado por Adolph Zukor, em 1912, e com este nome desde 1925.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rEFav5">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="estudio6">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/nbc.estudio.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>NBC Sudios</h3>
                                <p class="card-text">Os estúdios da NBC em Nova Iorque, Nova Iorque estão localizados no
                                    30 Rockefeller
                                    Plaza (na 49th Street, entre as Avenidas 5 e 6) em Manhattan, o histórico GE
                                    Building abriga a sede da
                                    rede de televisão NBC.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rEFav6">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="favtitles">Realizadores Favoritos</h2>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4" id="realizador1">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/ft1.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Quentin Tarantino</h3>
                                <p class="card-text">Tarantino já tem dois Óscares, ambos para Melhor Argumento. Típico
                                    da Academia
                                    quando quer homenagear alguém com talento mas cujos filmes nunca podem ganhar nas
                                    grandes categorias
                                    porque não se ajustam ao molde dos Óscares. Como exemplo, a maioria das nomeações de
                                    Woody Allen ou
                                    Thomas Anderson, como disse em cima, são para Argumento. </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rRFav1">Remover Favorito <i
                                                class="fa fa-star"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="realizador2">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/ft2.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Edward Zwick</h3>
                                <p class="card-text">O cinema “épico” de hoje basicamente corresponde a extravagâncias
                                    de ficção
                                    científica carregadas de efeitos especiais. Mas outrora não foi assim e Zwick foi um
                                    dos últimos
                                    realizadores americanos a realizar épicos na tradição de David Lean, ou seja,
                                    assentes principalmente
                                    na força do trabalho de câmara, no poder das localizações e na intimidade das
                                    actuações. </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rRFav2">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="realizador3">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/ft3.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Christopher Nolan</h3>
                                <p class="card-text">Nolan surgiu quase de repente. ‘Following’ (1998) quase ninguém viu
                                    mas ‘Memento’
                                    (2000) tornou-se um filme de culto praticamente do dia para a noite. E daí em
                                    diante, cada novo filme
                                    de Nolan trouxe algo fresco à sétima arte. As suas obras costumam basear-se em
                                    influências
                                    filosóficas, sociológicas e éticas, a partir de conceitos da moralidade humana. </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rRFav3">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="realizador4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/stevenSpielberg.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Steven Spielberg</h3>
                                <p class="card-text">Steven Allan Spielberg KBE OMRI (Cincinnati, 18 de dezembro de
                                    1946[2]) é um
                                    premiado cineasta, produtor cinematográfico, roteirista e empresário
                                    norte-americano.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rRFav4">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="realizador5">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/Martin_Scorsese.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Martin Scorsese</h3>
                                <p class="card-text">Martin Scorsese (Queens, Nova Iorque, 17 de novembro de 1942) é um
                                    cineasta,
                                    produtor de cinema, roteirista e ator norte-americano vencedor do Oscar de melhor
                                    diretor por Os
                                    Infiltrados.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rRFav5">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="realizador6">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="auto" height="225" x="50%" y="50%">
                                <image href="Images/kirkDouglas.png" class="imagem"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Kirk Douglas</h3>
                                <p class="card-text">Kirk Douglas (nascido Issur Danielovitch Demsky; Amsterdam, 9 de
                                    dezembro de 1916 —
                                    Beverly Hills, 5 de fevereiro de 2020) foi um ator, cineasta e autor
                                    norte-americano.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rRFav6">Remover Favorito <i
                                                class="fa fa-star"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="favtitles">Atores Favoritos</h2>
        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4" id="ator1">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=auto height=400px x="50%" y="50%">
                                <image href="Images/Dwayne.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Dwayne Johnson</h3>
                                <p class="card-text">Dwayne Douglas Johnson (Hayward, 2 de maio de 1972), também
                                    conhecido pelo seu nome
                                    no ringue The Rock, é um ator americano, ex-lutador profissional e ex-jogador de
                                    futebol americano
                                    universitário.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rAFav1">Remover Favorito <i
                                                class="fa fa-star"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="ator2">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=auto height=400px x="50%" y="50%">
                                <image href="Images/Chris.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Chris Hemsworth</h3>
                                <p class="card-text">Christopher Hemsworth (Melbourne, 11 de agosto de 1983) é um ator
                                    australiano,
                                    sendo mais conhecido por interpretar o capitão Mitch Nelson no filme 12 hérois,e
                                    Thor.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rAFav2">Remover Favorito <i
                                                class="fa fa-star"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="ator3">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=auto height=400px x="50%" y="50%">
                                <image href="Images/Robert.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Robert Downey Jr.</h3>
                                <p class="card-text">Robert John Downey, Jr. (Nova Iorque, 4 de abril de 1965) é um
                                    ator, cantor,
                                    compositor e pianista americano. Robert ficou mais conhecido pela participação dos
                                    filmes da franquia
                                    da Marvel. </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rAFav3">Remover Favorito <i
                                                class="fa fa-star"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="ator4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=auto height=400px x="50%" y="50%">
                                <image href="Images/Akshay.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Akshay Kumar</h3>
                                <p class="card-text">Akshay Kumar (nascido Rajiv Hari Om Bhatia em 9 de setembro de
                                    1967) é um ator de
                                    cinema da índia, produtor e artista marcial que apareceu em centenas de filmes de
                                    Bollywood. </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rAFav4">Remover Favorito <i
                                                class="fa fa-star"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="ator5">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=1000px height=400px x="50%" y="50%">
                                <image href="Images/Bradley.png" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Bradley Cooper</h3>
                                <p class="card-text">Bradley Charles Cooper (Filadélfia, 5 de janeiro de 1975) é um
                                    ator, cineasta e
                                    produtor americano. Começou sua carreira como convidado na série de televisão Sex
                                    and the City em
                                    1999.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rAFav5">Remover Favorito <i
                                                class="fa fa-star"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="ator6">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width=1000px height=400px x="50%" y="50%">
                                <image href="Images/Will.jpg" class="imagemf"></image>
                            </svg>
                            <div class="card-body">
                                <h3>Will Smith</h3>
                                <p class="card-text">Willard Carroll “Will” Smith Jr. (Filadélfia, 25 de setembro de
                                    1968) é um ator,
                                    rapper, produtor cinematográfico, produtor musical e produtor de televisão afro
                                    americano.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btnfav" id="rAFav6">Remover Favorito <i
                                                class="fa fa-star"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- perfil -->

    <div class="tabcontent" id="Perfil">
        <div class="container rounded bg-white mt-5">
            <div class="row">
                <div class="col-md-4 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img
                            class="rounded-circle mt-5" src="Images/leonardo-dicaprio-1273-06-05-2020-06-55-21.jpg"
                            width="150"><span class="display-4 font-weight-bold"><?php echo $_SESSION["username"]?></span>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="titulosite  mr-4 text-primary" style="cursor:pointer"
                                onclick="openPage('Home', this)" id="logo">
                                <h6>Voltar atrás</h6>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <h3>First Name</h3>
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="first name"
                                    value="João"></div>
                        </div>
                        <div class="row mt-3">
                            <h3>Last Name</h3>
                            <div class="col-md-6"><input type="text" class="form-control" placeholder="last name"
                                    value="Sebastião">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <h3>Country</h3>
                            <div class="col-md-6"><input type="text" class="form-control" value="Portugal"
                                    placeholder="Country">
                            </div>
                        </div>
                        <div class="mt-5 text-right"><button class="btn btn-primary profile-button" type="button">Save
                                Profile</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->

    <footer class="container-fluid" id="footer">
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <img class="img-footer" src="Images/uallogo.png" alt="img-footer" style="width: 180px">
                        <p style="margin-top: 30px">Cadeira lecionado pelo<br>Professor Laercio Cruvinel</p>
                    </div>
                    <div class="col-md-4 col-lg-4 offset-lg-1">
                        <img class="logo-footer" src="Images/prolifes_is_the_best.png" alt="logo-footer">
                        <p>
                            Website feito por:<br>David Mezia - 30003332<br>José Pedreira - 30003318<br>Marcelo Santos -
                            30003628<br>Tomás Reis - 30003245
                        </p>
                    </div>
                    <div class="col-md-4 col-lg-3 footer-social">
                        <h3>Follow us</h3>
                        <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Tomás Reis</a><br>
                        <a href="https://www.youtube.com/channel/UCGsV9lQnWHt9dQnqCHSBO1g">José Pedreira</a><br>
                        <a href="https://www.youtube.com/watch?v=xsgmjdC9jYQ">David Mezia</a><br>
                        <a href="https://www.youtube.com/watch?v=2-DiSv23M_I">Marcelo Santos</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <script>
        function openPage(pageName) {
            let i, tabcontent;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            document.getElementById(pageName).style.display = "block";
        }
        document.getElementById("default").click();
    </script>

</body>

</html>