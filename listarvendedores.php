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
    <a href="frmvendedores.php" class="btn btn-info" role="button">Cadastrar Vendedor</a>
        <hr>
    <div class="container">
    <!-- Inicio da tabela -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto do Produto</th>
      <th scope="col">Vendedor</th>
      <th scope="col">Data de Admissão</th>
      <th scope="col">Salario</th>
    </tr>
  </thead>
  <tbody>

  <?php

  
        $sql = "select * from tblvendedores";
        $resultado = $con->query($sql);
        while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
              
            echo "<tr>";
                echo "<th>".$linha['idvendedor']."</th>";
                echo "<td><img src='".$linha['foto']."' width='50px' height='65px'></td>";
                echo "<td>".$linha['vendedor']."</td>";
                echo "<td>".$linha['dataadmissao']."</td>";
                echo "<td>".$linha['salario']."</td>"; 
               
            echo "</tr>";
                
        }

?>


   

   

  </tbody>

</table>


</div>
<a href="index.php" class="btn btn-info" role="button">Página Principal</a>