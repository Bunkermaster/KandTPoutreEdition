<?php
require_once "../connect.php";
$stmt = $pdo->query("SELECT `id`, `slug`, `nav-title`, `h1`, `description`, `img-alt`, `img-src` FROM `page`;");
require_once "../includes/adminheader.php";
?>
    <div>
        <a href="add.php">+Page</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Slug</th>
                <th>H1</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['slug']?></td>
            <td><?=$row['h1']?></td>
            <td><a href="edit.php?id=<?=$row['id']?>">Edit</a></td>
            <td><a href="delete.php?id=<?=$row['id']?>">Delete</a></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
<?php
require_once "../includes/adminfooter.php";
?>