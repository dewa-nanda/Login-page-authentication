<?php
// Start the session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/style/admin.css">
    <link rel="stylesheet" href="./src/style/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin</title>
</head>

<body>
    <nav class="navbar bg-light">
      <div class="container-fluid">
        <a class="navbar-brand ps-5">KET_industi</a>

        <div class="nav-item dropdown pe-5">
          <a class="nav-link dropdown-toggle pe-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?PHP echo $_SESSION['userweb']?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Help</a></li>
            <li><a class="dropdown-item" href="./index.php">Log Out</a></li>
        </div>
    </nav>

    <main class="pt-5">
        <div class="container d-flex login">
            <img src="./src/img/Admin-cuate.svg" height="240px" class="login-img"></img>
            <div class="d-flex flex-column mb-3">
                <h1>Selamat Datang di halaman admin</h1>
                <p>Tetap semangat dan ughwahgr</p>

                <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>