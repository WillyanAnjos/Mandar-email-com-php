<?php


	//####################################
	//#          Willyan Anjos           #   
	//####################################


	//Verifica se tem algum post no server
    if(count($_POST) > 0){
	//Verifica se tem erros e os mostra
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
	//#####################

	//Configura��o do corpo do email
        $de = "email@gmail.com";
        $para = $_POST['emaildestino'];
        $sujeito = "Atualizar senha";
        $mensagem = "Click no link para criar uma nova senha ";
        $cabecalho = "De: ".$de;
        mail($para, $sujeito, $mensagem, $cabecalho);
        echo 'E-mail enviado, observe sua caixa de e-mail';
    }

?>

<!Doctype html>
<html>
    <head>
        <title>Esqueci a senha</title>
    </head>
    <body>
        
        <form action="" method="post">

        <label>Digite o e-mail</label>
        <input type="text" name="emaildestino" id="emaildestino">

        <input type="submit" value="Enviar">

        </form>
    </body>

</html>