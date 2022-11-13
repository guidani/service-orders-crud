<?=$this->extend('layouts/default')?>


<?=$this->section('content')?>
<main class="container">
  <div class="mt-4">
    <?php echo form_open('/create') ?>
    <?=csrf_field()?>

    <div class="form-group mb-3">
      <label for="data_abertura">Data:</label>
      <input type="date" name="data_abertura" id="data_abertura" value="<?php echo isset($order['data_abertura']) ? $order['data_abertura'] : '' ?>">
    </div>

    <h3>Dados do cliente:</h3>
    <div class="form-group  mb-3">
      <label for="cliente_nome" class="mb-1">Cliente:</label>
      <input type="text" name="cliente_nome" id="cliente_nome" class="form-control" value="<?php echo isset($order['cliente_nome']) ? $order['cliente_nome'] : '' ?>" required>
    </div>

    <div class="form-group  mb-3">
      <label for="cliente_endereco" class="mb-1">Endereço:</label>
      <input type="text" name="cliente_endereco" id="cliente_endereco" class="form-control" value="<?php echo isset($order['cliente_endereco']) ? $order['cliente_endereco'] : '' ?>" required>
    </div>
    <div class="form-group  mb-3">
      <label for="cliente_telefone" class="mb-1">Telefone:</label>
      <input type="phone" name="cliente_telefone" id="cliente_telefone" class="form-control" value="<?php echo isset($order['cliente_telefone']) ? $order['cliente_telefone'] : '' ?>">
    </div>
    <div class="form-group  mb-3">
      <label for="cliente_email" class="mb-1">Email:</label>
      <input type="email" name="cliente_email" id="cliente_email" class="form-control" value="<?php echo isset($order['cliente_email']) ? $order['cliente_email'] : '' ?>">
    </div>
    <h3>Dados do serviço:</h3>
    <div class="form-group  mb-3" class="mb-1">
      <label for="desc_servico">Descrição do serviço:</label>
      <br>
      <input type="text" name="desc_servico" id="desc_servico" class="form-control" value="<?php echo isset($order['desc_servico']) ? $order['desc_servico'] : '' ?>">

    </div>
    <div class="form-group  mb-3">
      <label for="valor_servico">Valor:</label>
      <input type="number" name="valor_servico" id="valor_servico" class="form-control" min="0" value="<?php echo isset($order['valor_servico']) ? $order['valor_servico'] : '' ?>" required>
    </div>
    <input type="hidden" name="id" value="<?php echo isset($order['id']) ? $order['id'] : '' ?>">

    <input type="submit" value="Salvar" class="btn btn-primary mt-3 mb-3">
    <?php echo anchor(base_url('/'), 'Cancelar', ['class' => 'btn btn-danger']) ?>


    <?php echo form_close() ?>
  </div>
</main>

<?=$this->endSection()?>