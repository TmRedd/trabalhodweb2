<?php
session_start();

$username =  "";
$email = "";

$db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
if(isset($_POST['adicionarator'])) {
    $nome = mysqli_escape_string($db, $_POST['ator']);
    $image = mysqli_escape_string($db, $_POST['image']);
    $biblio = mysqli_escape_string($db, $_POST['biblio']);
    $sql = "INSERT INTO atores (image, name, biblio) VALUES ( '$image', '$nome','$biblio');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">
                         alert("Ator adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">
                         alert("Erro")
                         </script>';
    }
}
if(isset($_POST['adicionarrealizador'])) {
    $nome = mysqli_escape_string($db, $_POST['realizador']);
    $image = mysqli_escape_string($db, $_POST['image']);
    $biblio = mysqli_escape_string($db, $_POST['biblio']);
    $sql = "INSERT INTO realizadores (image, name, biblio) VALUES ( '$image', '$nome','$biblio');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">
                         alert("Realizador adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">
                         alert("Erro")
                         </script>';
    }
}
if(isset($_POST['adicionarestudios'])) {
    $nome = mysqli_escape_string($db, $_POST['estudio']);
    $image = mysqli_escape_string($db, $_POST['image']);
    $biblio = mysqli_escape_string($db, $_POST['biblio']);
    $sql = "INSERT INTO estudios (image, name, biblio) VALUES ( '$image', '$nome','$biblio');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">
                         alert("Estudio adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">
                         alert("Erro")
                         </script>';
    }
}
if(isset($_POST['adicionarfilmes'])) {
    $nome = mysqli_escape_string($db, $_POST['filme']);
    $image = mysqli_escape_string($db, $_POST['image']);
    $biblio = mysqli_escape_string($db, $_POST['biblio']);
    $sql = "INSERT INTO filmes (image, name, biblio) VALUES ('$image', '$nome','$biblio');";
    $insert= mysqli_query($db,$sql);
    if ($insert) {
        echo '<script type="text/JavaScript">
                         alert("Filme adicionado com sucesso")
                         </script>';
    } else {
        echo '<script type="text/JavaScript">
                         alert("Erro")
                         </script>';
    }
}
if(isset($_GET['removerator'])){
    $nomeator= $_GET['removerator'];
    $resultSet = ("DELETE FROM atores WHERE name='$nomeator'");
    $result = mysqli_query($db, $resultSet);
    if($result){
        echo '<script type="text/JavaScript">  
                         alert("Ator removido com sucesso")
                         </script>';
    }
    header("Location: BackOffice.php");
}
if(isset($_GET['removerrealizador'])){
    $nomerealizador= $_GET['removerrealizador'];
    $resultSet = ("DELETE FROM realizadores WHERE name='$nomerealizador'");
    $result = mysqli_query($db, $resultSet);
    if($result){
        echo '<script type="text/JavaScript">  
                         alert("Realizador removido com sucesso")
                         </script>';
    }
    header("Location: BackOffice.php");
}
if(isset($_GET['removerestudio'])){
    $nomeestudio= $_GET['removerestudio'];
    $resultSet = ("DELETE FROM estudios WHERE name='$nomeestudio'");
    $result = mysqli_query($db, $resultSet);
    if($result){
        echo '<script type="text/JavaScript">  
                         alert("Estudio removido com sucesso")
                         </script>';
    }
    header("Location: BackOffice.php");
}
if(isset($_GET['removerfilme'])){
    $nomefilme= $_GET['removerfilme'];
    $resultSet = ("DELETE FROM filmes WHERE name='$nomefilme'");
    $result = mysqli_query($db, $resultSet);
    if($result){
        echo '<script type="text/JavaScript">  
                         alert("Filme removido com sucesso")
                         </script>';
    }
    header("Location: BackOffice.php");
}
?>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/BackOffice.css" rel="stylesheet">

        <title>MovieHub BackOffice</title>
    
  </head>
<body style="color:black">
    <!--aqui--> 
    <div class="container" id="navbar" class="navbar" style="display: block">

        <div class="topnav" id=muda>

            <!-- link da nav bar -->
            <div class="topnav" id="barra">
              <div> 
                <a  id="home_btn" class="topnav a active">Home</a>
                <a  id="atores_btn" class="topnav a">Atores</a>
                <a  id="realizadores_btn" class="topnav a">Realizadores</a>
                <a  id=estudios_btn class="topnav a">Estudios</a>
                <a  id=filmes_btn class="topnav a">Filmes</a>
                </div>
                <!-- logout voltar  -->
                <div class="topnav-right">            
                    <a href="index.php">Go Back</a>         
                </div>
                <div class="topnav-right">            
                    <a href="logout.php">Logout</a>         
                </div>
           </div>
        </div>

        <p><br></p>           
         <p><br></p>
        <h1>Configurações de Administrador</h1>
        <p><br></p>
        <p><br></p>

        <div class="card" id="tab_home">
            
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 " >Configurar Destaque Filme</h3>
        
            <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">Nome</th>
                    
                    <th class="text-center">Foto</th>
                    <th class="text-center">Remove</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="pt-3-half" contenteditable="true">Da 5 Bloods</td>
                    
                    
                    <td>
                        <span class="table-remove"><button type="button"
                            class="btn btn-info btn-rounded btn-sm my-0">Escolher ficheiro</button></span>
                    </td>
                    <td>
                        <span class="table-remove"><button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>

                </tr>
                
                </tbody>
            </table>
            <p><br></p>
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 " >Configurar Destaque Ator</h3>
        
            <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">Nome</th>
                    
                    <th class="text-center">Foto</th>
                    <th class="text-center">Remove</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="pt-3-half" contenteditable="true">Chris Hermsworth</td>
                    
                    
                    <td>
                        <span class="table-remove"><button type="button"
                            class="btn btn-info btn-rounded btn-sm my-0">Escolher ficheiro</button></span>
                    </td>
                    <td>
                        <span class="table-remove"><button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>

                </tr>
                
                </tbody>
            </table>
            <p><br></p>

            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 " >Configurar Destaque Realizador</h3>
        
            <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                <tr>
                    <th class="text-center">Nome</th>
                    
                    <th class="text-center">Foto</th>
                    <th class="text-center">Remove</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="pt-3-half" contenteditable="true">Christopher Nolan</td>
                    
                    
                    <td>
                        <span class="table-remove"><button type="button"
                            class="btn btn-info btn-rounded btn-sm my-0">Escolher ficheiro</button></span>
                    </td>
                    <td>
                        <span class="table-remove"><button type="button"
                        class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>

                </tr>
                
                </tbody>
            </table>

        </div>
        <div class="card" id="tab_atores">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 " >Configurar Atores</h3>
            <button data-toggle="modal" data-target="#adicionarator" class="btn-rounded btn-info btnadd" data-toggle="modal" id="badd">Adicionar Ator</button>
            <div class=" justify-content-center mt-5">
                        <div class="container">
                            <?php
                            $db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
                            $sql = "SELECT * FROM atores ";
                            $resultado = mysqli_query($db,$sql);
                            ?>
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Descrição</th>
                            </tr>
                            </thead>
                            <?php
                            if($resultado){
                            foreach ($resultado as $dados){
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $dados['name']?></td>
                                <td><?php echo $dados['image']?></td>
                                <td><?php echo $dados['biblio']?></td>
                                <td><a href="BackOffice.php?removerator=<?php echo $dados['name']; ?>">Remover</a></td>
                            </tr>
                            </tbody>
                                <?php
                            }
                            }else{
                                echo "Erro";
                            }
                            ?>
                        </table>
                        </div>
        </div>
            <div class="modal fade" id="adicionarator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="false">
                <div class="modal-dialog bg-light" role="document">
                    <div class="modal-content card card-image bg-light " >
                        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                            <div class="modal-header text-center pb-4">
                                <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Adicionar Ator</strong> <a
                                            class=" font-weight-bold"><strong></strong></a></h3>
                                <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="login" method="POST" action="backoffice.php">
                                    <div class="md-form mb-5">
                                        <input type="text" id="ator" class="form-control validate text-dark" name="ator" required>
                                        <label data-error="wrong" data-success="right" for="ator" class="text-dark">Nome do Ator</label>
                                    </div>

                                    <div class="md-form mb-5">
                                        <input type="text" id="image" class="form-control validate text-dark" name="image" required>
                                        <label data-error="wrong" data-success="right" for="image" class="text-dark">Imagem</label>
                                    </div>

                                    <div class="md-form mb-5">
                                        <input type="text" id="biblio" class="form-control validate text-dark" name="biblio" required>
                                        <label data-error="wrong" data-success="right" for="biblio" class="text-dark">Descrição</label>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="text-center mb-3 col-md-12">
                                            <button name="adicionarator" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Adicionar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" id="tab_realizadores">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 " >Configurar Realizadores</h3>
            <button data-toggle="modal" data-target="#adicionarrealizador" class="btn-rounded btn-info btnadd" data-toggle="modal" id="badd">Adicionar Realizador</button>
            <div class=" justify-content-center mt-5">
                        <div class="container">
                            <?php
                            $db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
                            $sql = "SELECT * FROM realizadores ";
                            $resultado = mysqli_query($db,$sql);
                            ?>
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Descrição</th>
                            </tr>
                            </thead>
                            <?php
                            if($resultado){
                            foreach ($resultado as $dados){
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $dados['name']?></td>
                                <td><?php echo $dados['image']?></td>
                                <td><?php echo $dados['biblio']?></td>
                                <td><a href="BackOffice.php?removerrealizador=<?php echo $dados['name']; ?>">Remover</a></td>
                            </tr>
                            </tbody>
                                <?php
                            }
                            }else{
                                echo "Erro";
                            }
                            ?>
                        </table>
                        </div>
        </div>
            <div class="modal fade" id="adicionarrealizador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="false">
                <div class="modal-dialog bg-light" role="document">
                    <div class="modal-content card card-image bg-light " >
                        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                            <div class="modal-header text-center pb-4">
                                <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Adicionar Realizador</strong> <a
                                            class=" font-weight-bold"><strong></strong></a></h3>
                                <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="login" method="POST" action="backoffice.php">
                                    <div class="md-form mb-5">
                                        <input type="text" id="realizador" class="form-control validate text-dark" name="realizador" required>
                                        <label data-error="wrong" data-success="right" for="realizador" class="text-dark">Nome do Realizador</label>
                                    </div>

                                    <div class="md-form mb-5">
                                        <input type="text" id="image" class="form-control validate text-dark" name="image" required>
                                        <label data-error="wrong" data-success="right" for="image" class="text-dark">Imagem</label>
                                    </div>

                                    <div class="md-form mb-5">
                                        <input type="text" id="biblio" class="form-control validate text-dark" name="biblio" required>
                                        <label data-error="wrong" data-success="right" for="biblio" class="text-dark">Descrição</label>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="text-center mb-3 col-md-12">
                                            <button name="adicionarrealizador" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Adicionar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" id="tab_estudios">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 " >Configurar Estudios</h3>
            <button data-toggle="modal" data-target="#adicionarestudios" class="btn-rounded btn-info btnadd" data-toggle="modal" id="badd">Adicionar Estudio</button>
            <div class=" justify-content-center mt-5">
                        <div class="container">
                            <?php
                            $db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
                            $sql = "SELECT * FROM estudios ";
                            $resultado = mysqli_query($db,$sql);
                            ?>
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Descrição</th>
                            </tr>
                            </thead>
                            <?php
                            if($resultado){
                            foreach ($resultado as $dados){
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $dados['name']?></td>
                                <td><?php echo $dados['image']?></td>
                                <td><?php echo $dados['biblio']?></td>
                                <td><a href="BackOffice.php?removerestudio=<?php echo $dados['name']; ?>">Remover</a></td>
                            </tr>
                            </tbody>
                                <?php
                            }
                            }else{
                                echo "Erro";
                            }
                            ?>
                        </table>
                        </div>
        </div>
            <div class="modal fade" id="adicionarestudios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="false">
                <div class="modal-dialog bg-light" role="document">
                    <div class="modal-content card card-image bg-light " >
                        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                            <div class="modal-header text-center pb-4">
                                <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Adicionar Estudio</strong> <a
                                            class=" font-weight-bold"><strong></strong></a></h3>
                                <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="login" method="POST" action="backoffice.php">
                                    <div class="md-form mb-5">
                                        <input type="text" id="estudio" class="form-control validate text-dark" name="estudio" required>
                                        <label data-error="wrong" data-success="right" for="realizador" class="text-dark">Nome do Estudio</label>
                                    </div>

                                    <div class="md-form mb-5">
                                        <input type="text" id="image" class="form-control validate text-dark" name="image" required>
                                        <label data-error="wrong" data-success="right" for="image" class="text-dark">Imagem</label>
                                    </div>

                                    <div class="md-form mb-5">
                                        <input type="text" id="biblio" class="form-control validate text-dark" name="biblio" required>
                                        <label data-error="wrong" data-success="right" for="biblio" class="text-dark">Descrição</label>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="text-center mb-3 col-md-12">
                                            <button name="adicionarestudios" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Adicionar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" id="tab_filmes">
            <h3 class="card-header text-center font-weight-bold text-uppercase py-4 " >Configurar Filmes</h3>
            <button data-toggle="modal" data-target="#adicionarfilmes" class="btn-rounded btn-info btnadd" data-toggle="modal" id="badd">Adicionar Filme</button>
            <div class=" justify-content-center mt-5">
                        <div class="container">
                            <?php
                            $db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');
                            $sql = "SELECT * FROM filmes ";
                            $resultado = mysqli_query($db,$sql);
                            ?>
                        <table class="table table-dark">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Descrição</th>
                            </tr>
                            </thead>
                            <?php
                            if($resultado){
                            foreach ($resultado as $dados){
                            ?>
                            <tbody>
                            <tr>
                                <td><?php echo $dados['name']?></td>
                                <td><?php echo $dados['image']?></td>
                                <td><?php echo $dados['biblio']?></td>
                                <td><a href="BackOffice.php?removerfilme=<?php echo $dados['name']; ?>">Remover</a></td>
                            </tr>
                            </tbody>
                                <?php
                            }
                            }else{
                                echo "Erro";
                            }
                            ?>
                        </table>
                        </div>
        </div>
            <div class="modal fade" id="adicionarfilmes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="false">
                <div class="modal-dialog bg-light" role="document">
                    <div class="modal-content card card-image bg-light " >
                        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4 bg-light">
                            <div class="modal-header text-center pb-4">
                                <h3 class="modal-title w-100 text-dark font-weight-bold mb-2" id="Login1"><strong>Adicionar Filme</strong> <a
                                            class=" font-weight-bold"><strong></strong></a></h3>
                                <button id="botaoclose" type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="login" method="POST" action="backoffice.php">
                                    <div class="md-form mb-5">
                                        <input type="text" id="filme" class="form-control validate text-dark" name="filme" required>
                                        <label data-error="wrong" data-success="right" for="filme" class="text-dark">Nome do Filme</label>
                                    </div>

                                    <div class="md-form mb-5">
                                        <input type="text" id="image" class="form-control validate text-dark" name="image" required>
                                        <label data-error="wrong" data-success="right" for="image" class="text-dark">Imagem</label>
                                    </div>

                                    <div class="md-form mb-5">
                                        <input type="text" id="biblio" class="form-control validate text-dark" name="biblio" required>
                                        <label data-error="wrong" data-success="right" for="biblio" class="text-dark">Descrição</label>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="text-center mb-3 col-md-12">
                                            <button name="adicionarfilmes" id="submitting" type="submit" class="btn btn-warning btn-block btn-rounded z-depth-1 text-white w-50 mx-auto">Adicionar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script src="BackOfficeScript.js"></script>
</body>
</html>
