<?php  include_once('./templetes/header.php');?>

<div class="btn-voltar"><a href="<?= $BASE_URL?>">Voltar</a></div>

   <div class="container">
   <h1>Editar contato</h1>

      <form action="<?=$BASE_URL?>config/process.php" method="POST">
      <input type="hidden" name="type" value="edit">
       <input type="hidden" name="id" value="<?=$contact['id']?>"> 
         <div class="form-grup">
            <label for="name">Nome do contato</label>
            <input type="text" class="form-control" id="name" name="name" value="<?=$contact['name']?>" required>
         </div>
         <div class="form-grup">
            <label for="phone">Telefone do contato</label>
            <input type="text" class="form-control" id="phone"  name="phone" value="<?=$contact['phone']?>" required>
         </div>
         <div class="form-grup">
            <label for="observation">Telefone do contato</label>
            <textarea class="text-create" type="text" class="form-control"  name="observation"  rows="3"><?=$contact['observation']?></textarea>
         </div>
         <button class="btn-create" type="submit">Atualizar</button>

      </form>
     
   </div>

<?php include_once('./templetes/footer.php') ?>