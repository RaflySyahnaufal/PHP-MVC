<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $data['title']; ?></title>
  <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">EMVISI</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASE_URL; ?>/home">Home</a>
          </li>
          <!-- <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL; ?>/user">User</a>
        </li> -->
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL; ?>/blog">Blog</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              User
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>/user">User</a></li>
              <li><a class="dropdown-item" href="<?= BASE_URL; ?>/user/profile">User/Profile</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>