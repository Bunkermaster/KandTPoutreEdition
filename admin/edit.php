<?php
require_once "../connect.php";
if(isset($_POST['trololol'])) {
    require_once "../connect.php";
    // on update!!!!
    $stmt = $pdo->query("UPDATE
`page`
SET
`slug` = '".$_POST['trololol']['slug']."',
`nav-title` = '".$_POST['trololol']['nav-title']."',
`h1` = '".$_POST['trololol']['h1']."',
`description` = '".$_POST['trololol']['description']."',
`img-alt` = '".$_POST['trololol']['img-alt']."',
`img-src` = '".$_POST['trololol']['img-src']."'
WHERE
`id` = '".$_POST['trololol']['id']."'
;");
    header('Location: index.php');
} else {
    require_once "../includes/adminheader.php";
    $stmt = $pdo->query("SELECT `id`, `slug`, `nav-title`, `h1`, `description`, `img-alt`, `img-src` FROM `page` WHERE `id` = '".$_GET['id']."';");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>
    <form action="edit.php" method="post">
        <input type="hidden" name="trololol[id]" value="<?=$row['id']?>">
        <p><label for="slug">slug</label><br><input type="text" name="trololol[slug]" value="<?=$row['slug']?>"></p>
        <p><label for="h1">H1</label><br><input type="text" name="trololol[h1]" value="<?=$row['h1']?>"></p>
        <p><label for="nav-title">nav-title</label><br><input type="text" name="trololol[nav-title]" value="<?=$row['nav-title']?>"></p>
        <p><label for="img-alt">slug</label><br><input type="text" name="trololol[img-alt]" value="<?=$row['img-alt']?>"></p>
        <p><label for="img-src">slug</label><br><input type="text" name="trololol[img-src]" value="<?=$row['img-src']?>"></p>
        <p><label for="description">description</label><br><textarea name="trololol[description]" id="" cols="30" rows="10"><?=$row['slug']?></textarea></p>
        <p><input type="submit" value="Modifier"></p>
    </form>
    <?php
    require_once "../includes/adminfooter.php";
}
