<!DOCTYPE html>
<html>
<head>
    <title>Xử lý Ma trận</title>
</head>
<body>
    <h2>Chương trình xử lý ma trận</h2>

    <?php
    $matrix = [
        [1.1, 2.3, 3.1, 4.0, 5.0],
        [6.2, 7.7, 8.8, 9.5, 1.2],
        [4.6, 1.9, 3.6, 8.9, 1.5],
        [1.6, 1.7, 1.8, 1.9, 2.0]
    ];
    function findMax($matrix) {
        $max = $matrix[0][0];
        foreach ($matrix as $row) {
            foreach ($row as $num) {
                if ($num > $max) {
                    $max = $num;
                }
            }
        }
        return $max;
    }
    function findMin($matrix) {
        $min = $matrix[0][0];
        foreach ($matrix as $row) {
            foreach ($row as $num) {
                if ($num < $min) {
                    $min = $num;
                }
            }
        }
        return $min;
    }
    function sumMatrix($matrix) {
        $sum = 0;
        foreach ($matrix as $row) {
            foreach ($row as $num) {
                $sum += $num;
            }
        }
        return $sum;
    }
    function printMatrix($matrix) {
        echo "<pre>";
        foreach ($matrix as $row) {
            foreach ($row as $num) {
                printf("%4.1f ", $num);
            }
            echo "\n";
        }
        echo "</pre>";
    }
    if (isset($_POST["option"])) {
        $option = $_POST["option"];

        if ($option == "max") {
            echo "<p>Số lớn nhất trong ma trận: " . findMax($matrix) . "</p>";
        } elseif ($option == "min") {
            echo "<p>Số nhỏ nhất trong ma trận: " . findMin($matrix) . "</p>";
        } elseif ($option == "sum") {
            echo "<p>Tổng các số trong ma trận: " . sumMatrix($matrix) . "</p>";
        } elseif ($option == "print") {
            echo "<p>Ma trận số thực:</p>";
            printMatrix($matrix);
        }
    }
    ?>
    <form method="post">
        <label>Chọn chức năng:</label>
        <select name="option">
            <option value="max">Tìm số lớn nhất</option>
            <option value="min">Tìm số nhỏ nhất</option>
            <option value="sum">Tính tổng</option>
            <option value="print">In ma trận</option>
        </select>
        <input type="submit" value="Thực hiện">
    </form>
</body>
</html>
