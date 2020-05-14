<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>FizzBuzz問題</h1>
    
    <form action="php_subject2.php" method="post">
    FizzNum:
    <input type="text" name="fizz">
    <br>
    BuzzNum:
    <form action="php_subject2.php" method="post">
    <input type="text" name="buzz">
    <br>
    <input type="submit" value="実行">
    </form>
    <br>
    <p>【出力】</p>
    
    
    
    <?php //処理の関数
    function fizzbuzzArray($fizz, $buzz)
    {
        $fizz = $_POST['fizz'];
        $buzz = $_POST['buzz'];    
        for($i = 1; $i < 100; $i++) {
            if($i % $fizz == 0 && $i % $buzz == 0) {
                echo "FizzBuzz"." ".$i.'<br>';
            } elseif ($i % $fizz == 0) {
                echo "Fizz"." ".$i.'<br>';
            } elseif ($i % $buzz == 0) {
                echo "Buzz"." ".$i.'<br>';
            }
        }
    }
    ?>

    <?php //処理結果出力
    //FizzNum, BuzzNumのいずれかが空欄　→　「FizzNumとBuzzNumに数字を入力してください」と出力
    //FizzNum, BuzzNumともに整数を入力済み　→　関数fizzbuzzArrayの処理を実行
    //FizzNum, BuzzNumともに入力済みだが、少なくとも一方が小数または文字列　→　「FizzNumとBuzzNumに整数を入力してください」と出力
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if(empty($_POST['fizz']) || empty($_POST['buzz'])) {
        echo "FizzNumとBuzzNumに数字を入力してください";
        } elseif (preg_match('/^[0-9]+$/', $_POST['fizz']) && preg_match('/^[0-9]+$/', $_POST['buzz'])) {
         $fizz = $_POST['fizz'];
         $buzz = $_POST['buzz'];  
            echo fizzbuzzArray($fizz, $buzz);
        } else {
            echo "FizzNumとBuzzNumに整数を入力してください";
        }
    }
    ?>
</body>
</html>
