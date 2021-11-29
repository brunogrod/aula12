<?php
    include('conexao.php');
    try {
      $sql = "insert into tblvendedores (vendedor,dataadmissao,salario) values (:vendedor,:dataadmissao,:salario)";
      $stmt = $con->prepare($sql);
 

      $stmt->bindValue(":vendedor",$_POST["vendedor"]);
      $stmt->bindValue(":dataadmissao",$_POST["dataadmissao"]);
      $stmt->bindValue(":salario",$_POST["salario"]);
      $stmt->execute();
  
    } catch(PDOException $e){
        echo "Não Cadastrou. ".$e->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendedores</title>
</head>
<body>
    <h1>Cadastro de Vendedores</h1>
    <!-- método de envio são 2 
        * method="GET" - Enviar sem segurança pois exibe os dados na url - mais rápido
        * method="POST" - Oculta os dados da url - mais lento
    -->
    <form method="post">
        Vendedor <input type="text" name="vendedor"><br>
        <br>
        Data de Admissão   <input type="date" name="dataadmissao"><br>
        <br>
        Salario   <input type="text" name="salario"><br>
        <br>

        <input type="submit" value="Cadastrar"><br>
        <a href="index.php"> Voltar
    </form>

</body>
</html>