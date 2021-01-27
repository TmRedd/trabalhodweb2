<?php
session_start();

$username =  "";
$email = "";

$db = mysqli_connect('localhost','root','','projeto') or die('Conexão falhada');


if(isset($_SESSION['username'])){
    echo '<style type="text/css">
        #semlogin{
            display: none;
        }
        #comlogin{
            display: block;
        }
    </style>';
}

if(isset($_GET["vkey"])){
    $vkey1 = $_GET['vkey'];
    $resultSet = ("SELECT 1 FROM users WHERE verification=0 AND vkey='$vkey1' ");
    $result = mysqli_query($db, $resultSet);
    if(mysqli_num_rows($result) == 1){
        $update = $db->query("UPDATE users SET verification=1 WHERE vkey='$vkey1' LIMIT 1");
        if($update){
            echo '<script type="text/JavaScript">  
     window.alert("A sua conta foi verificada, já pode fazer o login")
     </script>';
        }else{
            echo '<script type="text/JavaScript">  
     window.alert("ERRO")
     </script>';
        }
    }else{
        echo '<script type="text/JavaScript">  
     window.alert("Erro")
     </script>';
    }
}

if(isset($_POST['botaoRegister'])) {
    $username = mysqli_real_escape_string($db, $_POST['nome']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password1 = mysqli_real_escape_string($db, $_POST['password']);
    $password2 = mysqli_real_escape_string($db, $_POST['passwordConfirm']);

    if ($password1 != $password2) {
        echo '<script type="text/JavaScript">  
     window.alert("As passwords não coincidem")
     </script>';

    } else if(strlen($username) < 3){
        echo '<script type="text/JavaScript">  
     window.alert("Username necessita no minimo de 3 caracteres")
     </script>';
    } else{

        $user_check_query = "SELECT * FROM users WHERE username = '$username' or email= '$email' LIMIT 1";
        $results = mysqli_query($db, $user_check_query);
        if(mysqli_num_rows($results) > 0){
            $user = mysqli_fetch_assoc($results);
            if ($user['username'] == $username) {
                echo '<script type="text/JavaScript">  
     window.alert("Username existente, tente outro")
     </script>';
            }
            if ($user['email'] == $email) {
                echo '<script type="text/JavaScript">  
     window.alert("Email existente, tente outro")
     </script>';
            }
        }
        else{
            $vkey = md5(time().$username);
            $password = password_hash($password1, PASSWORD_DEFAULT);
            $date = date('Y-m-d H:i:s');
            $query = "INSERT INTO users (username, email, password,vkey,date) VALUES ('$username','$email','$password','$vkey','$date')";
            $insert= mysqli_query($db, $query);
            if($insert){
                $to = $email;
                $assunto= "Verificação de email";
                $mensagem= "<p>Obrigado pelo seu registo no MovieHub<br>Para confirmar a sua conta carregue neste link:
                    <a href='http://localhost/index.php?vkey=$vkey'>Confirmar Registo</a></p>";
                $headers="From: projetoualdweb@gmail.com \r\n";
                $headers .= "MIME-Version: 1.0" . "\r\n";
                $headers .="Content-type:text/html;charset=UTF-8" ."\r\n";
                mail($to,$assunto,$mensagem,$headers);
                echo '<script type="text/JavaScript">
                     window.alert("Obrigado pelo registo, enviamos-lhe um email de confirmação")
                     </script>';
        }
            }
        }
}
if(isset($_POST['botaoLogin'])) {
    $uname = mysqli_real_escape_string($db, $_POST['nome1']);
    $pass = mysqli_real_escape_string($db, $_POST['password1']);
    if (!empty($uname) || !empty($pass)) {
        $query  = "SELECT * FROM users WHERE username = '$uname'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result) == 1){
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($pass, $row['password']))  {
                    $verificacao =$row['verification'];
                    if ($verificacao == 1){
                        $_SESSION['username'] = $uname;
                        echo '<script type="text/JavaScript">  
                         alert("LogIn efetuado com sucesso")
                         </script><style type="text/css">
                            #semLogin{
                                display: none;
                            }
                            #comLogin{
                                display: block;
                            }
                        </style>';

                    }else{
                        echo '<script type="text/JavaScript">  
                     alert("A sua conta precisa de ser verificada, por favor verifique o seu email")
                     </script>';
                    }

                }else{
                    echo '<script type="text/JavaScript">  
                     alert("Username ou password incorreto")
                     </script>';
                }
            }
        }else if($uname == "admin" & $pass == "1234"){
            $_SESSION['username'] = $uname;
            echo '<script type="text/JavaScript">  
                alert("LogIn efetuado com sucesso")
                </script>';echo '<style type="text/css">
                #semLogin{
                    display: none;
                }
                #comLogin{
                    display: block;
                }
                #comLoginAd{
                    display:block;
                }
            </style>';{
        }
    }
}

}

?>