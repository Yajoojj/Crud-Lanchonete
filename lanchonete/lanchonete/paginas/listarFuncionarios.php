<?php

include '../php/conexao.php';

$sql = "SELECT * FROM funcionarios";

$resultado = mysqli_query($conexao, $sql);

echo "<table width='500' border='1px'>
<tr>
   <th>Nome</th>
   <th>CPF</th>
   <th>Telefone</th>
   <th>Endereço</th>
   <td>Ação</td>
   ";

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>
     <td>".$linha ['nome_funcionario']."</td>
     <td>".$linha ['cpf_funcionario']."</td>
     <td>".$linha ['telefone_funcionario']."</td>
     <td>".$linha ['endereco_funcionario']."</td>
     <td>
     <a href='../php/procFunc.php?acao=editar'>Editar</a> - 
     <a href='../php/procFunc.php?acao=excluir&id=".$linha['id_funcionario']."'>Excluir</a></td>
     </tr>
     "
     ; 
}

echo "</table>";
