<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">

  <title><?= $this->e($title) ?></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
  <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://getbootstrap.com/docs/4.3/examples/album/album.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong><?= $title; ?></strong>
        </a>
      </div>
    </div>
  </header>

    <div class="album py-5 bg-light">
      <div class="container">
        <?= $this->section('content') ?>
      </div>
    </div>

  </main>

</body>

</html>
