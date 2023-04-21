<?php

$title = 'Users';
ob_start();
?>

    <h1 class="mb-4">Users<h1>

    <a href="index.php?page=users&action=create" class="btn btn-success">Create User</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Email Verified</th>
            <th scope="col">Admin</th>
            <th scope="col">Role</th>
            <th scope="col">Active</th>
            <th scope="col">Last Login</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['email_verification'] ? 'Yes' : 'No'; ?></td>
            <td><?php echo $user['is_admin'] ? 'Yes' : 'No'; ?></td>
            <td><?php echo $user['role']; ?></td>
            <td><?php echo $user['is_active'] ? 'Online' : 'Offline'; ?></td>
            <td><?php echo $user['last_login']; ?></td>

            <td>
                <a class="btn btn-primary" href="index.php?page=users&action=edit&id=<?php echo $user['id']; ?>">Edit</a>
                <a class="btn btn-danger" href="index.php?page=users&action=delete&id=<?php echo $user['id']; ?>">Delete</a>
            </td>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php $content = ob_get_clean();

include 'app/views/layout.php';
?>