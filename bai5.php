<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>TÍNH USCLN VÀ BSCNN</title>
</head>
<body>
    <fieldset>
        <legend><b>TÍNH USCLN VÀ BSCNN</b></legend>
        <form method="post">
            Số thứ 1: <input type="number" name="num1" required><br><br>
            Số thứ 2: <input type="number" name="num2" required><br><br>
            Kết quả: <input type="text" value="<?php echo isset($result) ? $result : ''; ?>" readonly><br><br>
            <input type="submit" name="uscln" value="USCLN">
            <input type="submit" name="bscnn" value="BSCNN">
        </form>
    </fieldset>

    <?php
    function gcd($a, $b) {
        return $b == 0 ? $a : gcd($b, $a % $b);
    }

    function lcm($a, $b) {
        return ($a * $b) / gcd($a, $b);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = intval($_POST["num1"]);
        $num2 = intval($_POST["num2"]);

        if (isset($_POST["uscln"])) {
            $result = gcd($num1, $num2);
        }

        if (isset($_POST["bscnn"])) {
            $result = lcm($num1, $num2);
        }
    }
    ?>
</body>
</html>
