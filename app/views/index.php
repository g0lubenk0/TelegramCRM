<?php
if ($_SERVER['REQUEST_URI'] === '/TelegramCRM/index.php') {
    header('Location: /TelegramCRM');
    exit();
}

$title = 'Home Page';
ob_start();
?>
<h1>Home Page</h1>

<?php $content = ob_get_clean();

include 'app/views/layout.php';
?>