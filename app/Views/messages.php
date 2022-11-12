<?=$this->extend('layouts/default')?>

<?=$this->section('content')?>
    <main class="container">
      <?= esc($message) ?>
      <br>
      <?php echo anchor(base_url('/'), 'Voltar', ['class' => 'btn btn-primary']) ?>
    </main>
<?=$this->endSection()?>