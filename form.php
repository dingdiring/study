<?php
    if(isset($_POST['title'])) {
        echo $_POST['title']."<br>";
        if(isset($_POST['description'])) {
            file_put_contents('data/'.$_POST['title'], $_POST['description']);
        } else {
            echo "description is null";
        }
    } else {
        echo "welcome";
    }
?>