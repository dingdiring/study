<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Conditional</title>
</head>
<body>
    <h2>Conditional</h2>
    <?php
        $var = '1';
        $b = 'welcome';

        // if(isset($var)) {
        //     echo $var;
        // } else {
        //     echo $b;
        // }
        $list = scandir('./data', 0);
        echo "<p>$list[0]</p>";
        echo "<p>$list[1]</p>";
        echo "<p>$list[2]</p>";
        echo "<p>$list[3]</p>";
        echo "<p>$list[4]</p>";
        $i = 0;

        while($i < count($list)){
            if($list[$i] == '.' || $list[$i] == '..') {
                $i = $i + 1;
                continue;
            }
            echo "<li><a href='./index.php?id=$list[$i]'>$list[$i]</a></li>";
            $i = $i + 1;
        }

        function basic() {
            print("Lorem ipsum dolor1<br>");
            print("Lorem ipsum dolor2<br>");
        }
        basic();
        
        function numSum($left, $right) {
            return $left + $right;
        }
        // print(numSum(2, 4).'<br>');
        // file_put_contents('result.txt', numSum(2, 4));
    ?>
</body>
</html>