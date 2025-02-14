<?php
include 'conexao.php';

if ($_GET ['acao'] == 'cadastrar'){
   
    $nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];

$sql = "INSERT INTO funcionarios (nome_funcionario, cpf_funcionario, telefone_funcionario, endereco_funcionario) VALUES ('$nome', '$cpf', '$telefone', '$endereco')";

$conexao->query($sql);
$conexao->close();



}

if($_GET['acao'] == 'excluir'){
   $id = $_GET['id'];
   $sql = "DELETE FROM funcionarios WHERE id_funcionario='$id' ";

   $resultado = mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['excluir_funcionario'] = true;
        header("Location: ../paginas/listarFuncionarios.php");
    }
}
