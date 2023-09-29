<?php
    unlink('data/'.$_POST['id']);
    header('Location: /study/index.php?id='.$_POST['title']);
?>