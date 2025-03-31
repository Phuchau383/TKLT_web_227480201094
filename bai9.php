<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 5px;
            text-align: left;
            vertical-align: top;
        }
        pre {
            font-size: 16px;
            font-family: monospace;
        }
    </style>
</head>
<body>

<h2 align='center'><font face='aril'color='violet'>Bảng Cửu Chương</h2>

<table>
    <tr>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<td><pre>";
            for ($j = 1; $j <= 10; $j++) {
                echo "$i x $j = " . ($i * $j) . "<br>";
            }
            echo "</pre></td>";
            if ($i % 5 == 0) echo "</tr><tr>"; // Xuống dòng sau 5 cột
        }
        ?>
    </tr>
</table>

</body>
</html>