<?php
    function print_title() {
        if(isset($_GET['id'])){
            echo htmlspecialchars($_GET['id']);
        }else{
            echo "welcome";
        }
    }
    function print_description() {
        if(isset($_GET['id'])){
            echo htmlspecialchars(file_get_contents("data/".$_GET['id']));
        } else {
            print "welcome hoho";
        }
    }
    function print_list() {
        $list = scandir('./data');
        $i = 0;
        while($i < count($list)) {
            $title = htmlspecialchars($list[$i]);
            if($list[$i] != '.') {
                if($list[$i] != '..') {
                    echo "<a href=\"index.php?id=$title\"><li>$title</li></a>\n";
                }
            }
            $i = $i + 1;
        }
    }
?>