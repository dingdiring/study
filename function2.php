<!DOCTYPE html>

<html>
<head>
    <title>PHP function test</title>
</head>
<body>
    <?php
        function basic() {
            print('<p>dingdiring</p>');
            print('<p>dingdiring</p>');
        }
        basic();
        function sum($left, $right){
            return $left + $right;
        }
        print(sum(2, 4));
        file_put_contents('result.txt', sum(5, 7));
        sum(4, 9);
    ?>
</body>
</html>