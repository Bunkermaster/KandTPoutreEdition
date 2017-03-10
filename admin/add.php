<?php
if(isset($_POST['trololol'])) {
    require_once "../connect.php";
    // on insert!!!!
    $stmt = $pdo->query("INSERT INTO 
`page`
(`slug`, `nav-title`, `h1`, `description`, `img-alt`, `img-src`) 
VALUES 
(
'".$_POST['trololol']['slug']."', 
'".$_POST['trololol']['nav-title']."', 
'".$_POST['trololol']['h1']."', 
'".$_POST['trololol']['description']."', 
'".$_POST['trololol']['img-alt']."',
'".$_POST['trololol']['img-src']."');");
    header('Location: index.php');
} else {
    require_once "../includes/adminheader.php";
?>
    <form action="add.php" method="post">
        <p><label for="slug">slug</label><br><input type="text" name="trololol[slug]"></p>
        <p><label for="h1">H1</label><br><input type="text" name="trololol[h1]"></p>
        <p><label for="nav-title">nav-title</label><br><input type="text" name="trololol[nav-title]"></p>
        <p><label for="img-alt">Image Alt</label><br><input type="text" name="trololol[img-alt]"></p>
        <p><label for="img-src">Image Source</label><br><input type="text" name="trololol[img-src]"></p>
        <p><label for="description">description</label><br><textarea name="trololol[description]" id="" cols="30" rows="10"></textarea></p>
        <p><input type="submit" value="Ajouter"></p>
    </form>
<?php
    require_once "../includes/adminfooter.php";
}
