<?php
    unlink('data/'.basename($_POST['id']));
    header('Location: /study/index.php?id='.$_POST['title']);
?>