<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="<?php URLROOT ?>/img/cat-02.jpg" />
  <link rel="stylesheet" href="<?php URLROOT ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php URLROOT ?>/css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo SITENAME; ?></title>
</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class=" container-fluid">
      <a class="navbar-brand" href="<?php echo URLROOT ?>">Scandiweb</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT ?>/products/create">New Product</a>
          </li>



        </ul>
      </div>
    </div>
  </nav>