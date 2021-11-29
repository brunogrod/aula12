<?php
 include('conexao.php');
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid-center">
      <a class="navbar-brand" href="img/">
        <img src="img/Orion.jpeg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Sistema de Controle de Vendas - OrioN Serviços
      </a>
    </div>
  </nav>
        <a href="frmvendas.php">Cadastrar Vendas</a>
        <hr>
    <div class="container">
    <!-- Inicio da tabela -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID Vendedor</th>
      <th scope="col">ID Produto</th>
      <th scope="col">Quantidade</th>
    </tr>
  </thead>
  <tbody>

  <?php

  
        $sql = "select * from tblvendas";
        $resultado = $con->query($sql);
        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
              
            echo "<tr>";
                echo "<th>".$linha['idvendas']."</th>";
                echo "<td>".$linha['idvendedor']."</td>";
                echo "<td>".$linha['idproduto']."</td>";
                echo "<td>".$linha['qtd']."</td>"; 
               
            echo "</tr>";
                
        }

?>


   

   

  </tbody>

</table>


</div>
<a href="index.php" class="btn btn-info" role="button">Página Principal</a>