<?=$this->extend('layouts/default')?>

<?=$this->section('content')?>
<script>
  function confirma(){
    if(!confirm('Deseja excluir a ordem de serviço?')){
      return false;
    } return true;
  }
</script>
    <main class="container">

    <div class="row">
      <div class="col">
        <?php echo anchor(base_url('create'), 'Nova ordem', ['class' => 'btn btn-success']) ?>
      </div>
      <div class="col-4">
        <?php echo form_open("search/", ['class' => 'form'])?>
        <?=csrf_field()?>
          <div class="row">
            <div class="col p-0">
              <input type="text" class="form-control" placeholder="Pesquisar ordens" name="q" required>
            </div>
            <div class="col-1 p-0">
              <button class="btn btn-primary"><i class="bi-search"></i></button>
            </div>
          </div>
          <?php echo form_close() ?>
      </div>
    </div>


    <?php if (!empty($orders) && is_array($orders)): ?>

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
        <?php foreach ($orders as $order): ?>
          <tr>
            <td> <?=esc($order['id'])?></td>
            <td> <?=esc($order['data_abertura'])?></td>
            <td> <?=esc($order['cliente_nome'])?></td>
            <td> <?=esc($order['desc_servico'])?></td>
            <td> <?=esc($order['valor_servico'])?></td>
            <td>
              <?php echo anchor('order/edit/' . $order['id'], 'Editar') ?>
              -
              <?php echo anchor('order/delete/' . $order['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
            </td>
          </tr>
        <?php endforeach?>

      </tbody>
    </table>
          <?php echo $pager->links() ?>
    <?php else: ?>
      <h3>Nenhuma ordem foi encontrada!</h3>
    <?php endif?>

    </main>
<?=$this->endSection()?>