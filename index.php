<?php 
    require_once('lib/print.php');
    require('view/top.php');
?>
    <a href="create.php">새글</a>
    <br><br>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?= $_GET['id'] ?>">글 수정</a>
        <br><br>
        <form action="delete_process.php" method="post">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
            <input type="submit" value="delete" />
        </form>
    <?php } ?>
    <form action="create_process.php" method="post">
        <div class="input">
            <h1>title</h1>
            <input type="text" name="title" placeholder="Title">
        </div>
        <div class="input">
            <h1>description</h1>
            <textarea name="description" placeholder="설명좀.."><?= file_get_contents("data/".$_GET['id']) ?></textarea>
        </div>
        <input type="submit" value="SUBMIT">
    </form>
<?php require('view/bottom.php'); ?>