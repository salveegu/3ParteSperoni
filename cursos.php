<?php
  include('cabecalho.html');
  include('dados.php');
  
?>
  <main class="container">
      <h2>Lista dos Cursos</h2>
      <table class="table table-striped">
          <thead>
              <th>Id</th>
              <th>Nome</th>
              <th>Semestres</th>
              <th>Coordenador</th>
          </thead>
          <tbody id="tabela-cursos">
              <!-- Aqui vão as linhas com os dados -->
              
          </tbody>
      </table>
  </main>
  <script src="js/cursos.js"></script> 
<?php
  include('rodape.html');
?>
