<?php
    include "config.php";
    include BASE_DIR."lib".DS."utils.php";
    include BASE_DIR."model".DS."pessoa.php";

    //Validações e inserção de novo colaborador
    $erros = array();
    if(isset($_POST['userName'])){

        //Valida se todos os dados foram informados
        if (empty($_POST['userName'])) {
            $erros[] = "Favor informar um nome de usuário<br/>";
        }elseif (empty($_POST['userEmail'])) {
            $erros[] = "Favor informar um email<br/>";
        }elseif (empty($_POST['userPassword'])){
            $erros[] = "Favor informar a senha de acesso";
        } elseif (empty($_POST['userPasswordRepeat'])){
            $erros[] = "Favor informar a confirmação da senha";
        } 
        
        //Valida se dados estão respeitando padrão determinado    
        elseif ($_POST['userPassword'] !== $_POST['userPasswordRepeat']) {
            $erros[] = "A senha e sua confirmação precisam ser idênticas";
        } elseif (strlen($_POST['userPassword']) < 6) {
            $erros[] = "A senha precisa ter no mínimo 6 caracteres";
        } elseif (strlen($_POST['userName']) > 255 || strlen($_POST['userName']) < 5) {
            $erros[] = "O nome do usuário deve estar entre 5 e 255 caracteres";
        } elseif (!preg_match('/^[a-z\d\s]{2,255}$/i', $_POST['userName'])) {
            $erros[] = "O nome de usuário deve conter apenas letras de a-Z e números";
        } elseif (strlen($_POST['userEmail']) > 100) {
            $erros[] = "O email não deve exceder 100 caracteres";
        } elseif (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)) {
            $erros[] = "O Email informado não está em um formato válido";
        }
        //Se todos os dados foram informados de acordo com as regras então cadastra cliente no banco
        elseif (!empty($_POST['userName'])
            && strlen($_POST['userName']) <= 255
            && strlen($_POST['userName']) >= 5
            && preg_match('/^[a-z\d\s]{2,255}$/i', $_POST['userName'])
            && !empty($_POST['userEmail'])
            && strlen($_POST['userEmail']) <= 100
            && filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['userPassword'])
            && !empty($_POST['userPasswordRepeat'])
            && ($_POST['userPassword'] === $_POST['userPasswordRepeat'])
        ) {
            //Se estiver tudo ok cria o objeto pessoa
            $pessoa = new pessoa();
            $pessoa->nomePessoa = $_POST['userName'];
            $pessoa->emailPessoa = $_POST['userEmail'];
            $pessoa->senhaPessoa = encriptar($_POST['userPassword']);
            $pessoa->tipoPessoa = 1;

            //e insere os dados no banco
            $pessoa->inserePessoa($pessoa);
            
        }
        else{
            echo "entrei, mas deu erro! ";
            echo $erros;
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Cadastro de cliente</title>
    </head>
    <body>
        <h3>
            Cadastro de cliente
        </h3>
        <form method="post" action="cadastro.php">

            <!--utilizando padrão HTML5 de validação-->
            <label for="userName">Nome</label>
            <input type="text" 
                   id="userName"
                   name="userName"
                   title="Favor usar apenas letras e espaços. O nome deve ter entre 5 e 255 "
                   pattern="[a-zA-Z0-9\s]{5,255}" 
                   required /><br/>

            <label for="userEmail">Email</label>
            <input type="email"
                   id="userEmail" 
                   name="userEmail"
                   autocomplete="on"
                   required /><br/>

            <label for="userPassword">Senha</label>
            <input type="password"
                   id="userPassword" 
                   name="userPassword"  
                   pattern=".{6,}" 
                   autocomplete="off" 
                   required /><br/>

            <label for="userPasswordRepeat">Confirma Senha</label>
            <input type="password"
                   id="userPasswordRepeat" 
                   name="userPasswordRepeat" 
                   pattern=".{6,}"
                   autocomplete="off" 
                   required/><br/>
            
            <input type="submit" value="Cadastrar" />
        </form>
    </body>
</html>


<?php
// VALIDAR SE PODE SER APAGADO
/*session_start();
echo session_id();
$lixo = session_id();
$caminho = DIRETORIO_PADRAO.$lixo;
if(!file_exists($caminho)) {
    if(!mkdir($caminho)){
        die('Failed to create folders...');
    }
}

$eventos = buscaAgendamentosCliente(2);
criaEventosCliente($eventos);
    */

?>