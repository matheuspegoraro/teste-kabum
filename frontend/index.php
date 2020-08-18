<?php
  session_start();
  include("utils/header.php");
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Teste Kabum</h1>
      </div>

      <p>
      1 - Uma área administrativa onde o(s) usuário(s) devem acessar através de login e senha. <br>

      2 - Criar um gerenciador de clientes (Listar, Incluir, Editar e Excluir) <br>

          2.1 - O cadastro do Cliente deve conter: Nome; Data Nascimento;CPF; RG; Telefone. <br>
          2.2 - O Cliente pode ter 1 ou N endereços. <br>

      Desenvolver preferencialmente em PHP sem utilização de frameworks, MySQL, FE: livre. <br>
      </p>

    </div>
  </div>


<?php
  include("utils/footer.php");
?>