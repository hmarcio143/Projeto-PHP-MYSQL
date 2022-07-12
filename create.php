<?php  include_once('./templetes/header.php'); ?>

<div class="btn-voltar"><a href="<?= $BASE_URL?>">Voltar</a></div>

   <div class="container">
   <div class="main-title"><h1>Criar contato</h1></div>

      <form class="container-table" action="<?=$BASE_URL?>config/process.php" method="POST">
      <input type="hidden" name="type" value="create">
         <div class="form-grup">
            <label for="name">Nome do contato:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
         </div>
         <div class="form-grup">
            <label for="phone">Telefone do contato:</label>
            <input type="text" class="form-control" id="phone"  name="phone" placeholder="Digite o nome" required>
         </div>
         <div class="form-grup">
            <label for="observation">Observação:</label>
            <textarea class="text-create" type="text" class="form-control"  name="observation" placeholder="Insira as observações" rows="3"></textarea>
         </div>
         <button class="btn-create" type="submit">Adicionar Contato</button>

      </form>
     
   </div>

<?php include_once('./templetes/footer.php') ?>