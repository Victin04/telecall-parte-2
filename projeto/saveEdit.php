<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $confirmarsenha = $_POST['confirmarsenha'];
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nascimento'];
        $nomematerno = $_POST['nomematerno'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['genero'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $telefonefixo = $_POST['telefonefixo'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',confirmarsenha='$confirmarsenha',usuario='$usuario',email='$email',data_nascimento='$data_nasc',nomematerno='$nomematerno',cpf='$cpf',genero='$sexo',endereco='$endereco',telefone='$telefone',telefonefixo='$telefonefixo'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>