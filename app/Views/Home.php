<?=$this->extend('layouts/default')?>

<?=$this->section('content')?>
    <main class="container">

    <?php echo anchor(base_url('create/order'), 'Nova ordem', ['class' => 'btn btn-success']) ?>
    <br>

      <?php if (sizeof($orders) > 0) {
    echo "Hello";
} else {
    echo "Nothing!!!";
}
?>
    </main>
<?=$this->endSection()?>