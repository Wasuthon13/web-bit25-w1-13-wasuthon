<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แม่สูตรคูณ While Loop</title>
    <style>
        body{
            background:#f4f6f9;
            font-family:Tahoma,sans-serif;
        }

        .container{
            width:500px;
            margin:50px auto;
            background:#fff;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            color:#333;
        }

        .menu{
            text-align:center;
            margin-bottom:20px;
        }

        .menu a{
            text-decoration:none;
            background:#007bff;
            color:white;
            padding:8px 15px;
            border-radius:5px;
            margin:5px;
        }

        .menu a:hover{
            background:#0056b3;
        }

        input[type=number]{
            width:100%;
            padding:10px;
            margin:10px 0;
            box-sizing: border-box; /* ป้องกัน input ล้นขอบคอนเทนเนอร์ */
        }

        input[type=submit]{
            width:100%;
            padding:10px;
            background:#28a745;
            color:white;
            border:none;
            border-radius:5px;
            cursor:pointer;
        }

        .result{
            margin-top:20px;
            background:#f8f9fa;
            padding:15px;
            border-radius:5px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>โปรแกรมคำนวณสูตรคูณ (While Loop)</h2>
    
    <div class="menu">
        <a href="index.php">For Loop</a>
        <a href="while.php">While Loop</a>
    </div>

    <form method="get">
        กรอกแม่สูตรคูณ :
        <input type="number" name="num" required>
        <input type="submit" value="คำนวณ">
    </form>

    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];
        $i = 1;

        echo "<div class='result'>";
        echo "<h3>สูตรคูณแม่ $num</h3>";

        while ($i <= 12) {
            echo "$num × $i = " . ($num * $i) . "<br>";
            $i++;
        }
        
        echo "</div>";
    }
    ?>

</div>

</body>
</html>