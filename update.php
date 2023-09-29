<?php 
    require_once('lib/print.php');
    require('view/top.php');
?>
    <a href="create.php">새글</a>
    <br><br>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?= $_GET['id'] ?>">글 수정</a>
    <?php } ?>
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?= $_GET['id'] ?>" />
        <div class="input">
            <h1>title</h1>
            <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
        </div>
        <div class="input">
            <h1>description</h1>
            <textarea name="description" placeholder="설명좀.."><?php print_description(); ?></textarea>
        </div>
        <input type="submit" value="SUBMIT">
    </form>
<?php require('view/bottom.php'); ?>