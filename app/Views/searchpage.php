<?=$this->extend('layouts/default')?>

<?=$this->section('content')?>

<main class="container">
<?php if (!empty($result) && is_array($result)): ?>

<table class="table">
  <thead>
    <tr>
      <td>ID</td>
      <td>Abertura</td>
      <td>Cliente</td>
      <td>Serviço</td>
      <td>Valor</td>
      <td></td>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($result as $order): ?>
      <tr>
        <td> <?=esc($order->id)?></td>
        <td> <?=esc($order->data_abertura)?></td>
        <td> <?=esc($order->cliente_nome)?></td>
        <td> <?=esc($order->desc_servico)?></td>
        <td> <?=esc($order->valor_servico)?></td>
        <td>
          <?php echo anchor('order/edit/' . $order->id, 'Editar') ?>
          -
          <?php echo anchor('order/delete/' . $order->id, 'Excluir', ['onclick' => 'return confirma()']) ?>
        </td>
      </tr>
    <?php endforeach?>

  </tbody>
</table>
      <?php
       // echo $pager->links() 
       ?>
<?php else: ?>
  <h3>Nenhuma ordem foi encontrada!</h3>
<?php endif?>
  
  
</main>

<?=$this->endSection()?>