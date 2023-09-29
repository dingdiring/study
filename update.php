<?php
    function print_title() {
        if(isset($_GET['id'])){
            echo $_GET['id'];
        }else{
            echo "welcome";
        }
    }
    function print_list() {
        $list = scandir('./data');
        $i = 0;
        while($i < count($list)) {
            if($list[$i] != '.') {
                if($list[$i] != '..') {
                    echo "<a href=\"index.php?id=$list[$i]\"><li>$list[$i]</li></a>\n";
                }
            }
            $i = $i + 1;
        }
    }
    function print_description() {
        $str = "어쩌고 저쩌고 계속 늘어나네. PHP is a widely-used general-purpose scripting.
        language that is especially suited for Web development and can be embedded into HTML.";
        if(isset($str)){
            echo $str;
        } else {
            print "welcome hoho";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php print_title() ?></title>
    <style>
        body {background-color:#333;color: #fff;}
        a {color: #fff;}
    </style>
</head>
<body>
    <?php
        print_list();
    ?>
    <br>
    <a href="create.php">새글</a>
    <br><br>
    <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?= $_GET['id'] ?>">글 수정</a>
    <?php } ?>
    <form action="create_process.php" method="post">
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
</body>
</html>