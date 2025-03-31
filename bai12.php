<!DOCTYPE html>
<html>
<head>
    <title>Bàn Cờ Vua</title>
    <style>
        .chessboard {
            width: 320px;
            height: 320px;
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            grid-template-rows: repeat(8, 1fr);
            border: 2px solid black;
        }
        .square {
            width: 40px;
            height: 40px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
    <h2>Bàn Cờ Vua</h2>
    <div class="chessboard" id="board"></div>

    <script>
        const board = document.getElementById("board");
        for (let row = 0; row < 8; row++) {
            for (let col = 0; col < 8; col++) {
                let square = document.createElement("div");
                square.classList.add("square");
                if ((row + col) % 2 === 1) {
                    square.classList.add("black");
                } else {
                    square.classList.add("white");
                }
                board.appendChild(square);
            }
        }
    </script>
</body>
</html>