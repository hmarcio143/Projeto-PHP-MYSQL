<?php  include_once('./templetes/header.php'); ?>

<div class="btn-voltar"><a href="<?= $BASE_URL?>">Voltar</a></div>

<div class="container-show">
    <p><strong>Nome:</strong> <?=$contact['name']?></p>
    <p><strong>Telefone:</strong> <?=$contact['phone']?></p>
    <p><strong>Observação:</strong> <?=$contact['observation']?></p>
</div>


<?php include_once('./templetes/footer.php') ?>