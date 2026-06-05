<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <H1>งาน 1 วสุธร ธรรมสุทธิ์ BIT.2/5 เลขที่ 13</H1>
    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <Br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคูณแม่" . $num;
        }
    ?>

</body>
</html>