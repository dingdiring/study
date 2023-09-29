<?php 
    require_once('lib/print.php');
    require('view/top.php');
?>
    <a href="create.php">새글</a>
    <br><br>
    <form action="create_process.php" method="post">
        <div class="input">
            <h1>title</h1>
            <input type="text" name="title" placeholder="Title">
        </div>
        <div class="input">
            <h1>description</h1>
            <textarea name="description" placeholder="설명좀.."></textarea>
        </div>
        <input type="submit" value="SUBMIT">
    </form>
<?php require('view/bottom.php'); ?>