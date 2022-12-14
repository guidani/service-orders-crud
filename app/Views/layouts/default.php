<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Um crud simples usando Codeigniter 4">
  <meta name="author" content="github.com/guidani">
  <!-- <link rel="stylesheet" href="./styles.css"> -->
  <title>Service Orders CRUD</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>

<body>
  <header class="container">
    <h1><?=  isset($title) ? esc($title) : '' ?></h1>
  </header>
  <?= $this->renderSection('content') ?>

</body>

</html>