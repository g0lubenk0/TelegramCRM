<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <title><?= $title ?></title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php?page=" class="navbar-brand">TelegramCRM</a>
        <div class="navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php?page=users" class="nav-link">Users</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=roles" class="nav-link">Roles</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=pages" class="nav-link">Pages</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=roles&action=create" class="nav-link">New Role</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=register" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=logout" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <?= $content ?>
    </div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js.bootstrap.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" </script>
</body>
</html>

