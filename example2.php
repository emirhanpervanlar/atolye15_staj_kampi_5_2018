<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example2</title>
    <meta name="author" content="Emirhan PERVANLAR" >
</head>
<body>
<form action="" method="post">
    <label for="m">A :</label>
    <input type="number" name="a"/>
    <label for="b">B : </label>
    <input type="number" name="b"/>
    <label for="c">C : </label>
    <input type="number" name="c"/>
    <input type="submit" value="Bas">
</form>

<?php

function fx($x,$a,$b,$c){
    return $a*pow($x,2)+($b*$x)+$c;
}
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && $_POST['c'] != null && $_POST['b'] != null && $_POST['a'] != null){
            $a_new = $_POST['a'];
            $b_new = $_POST['b'];
            $c_new = $_POST['c'];
            $y = 250;
            ?>
                <canvas id="canvas" style="float:left;margin-top:150px;height:500px;width:100%;">
                    Browser'ınız Canvas'ı desteklemiyor.
                </canvas>
                <script>
                    var canvas = document.getElementById('canvas');
                    canvas.width = canvas.scrollWidth;
                    canvas.height = canvas.scrollHeight;
                    var ctx = canvas.getContext('2d');

                    ctx.beginPath();


                    <?php

                    for($i=-100;$i<100;$i++){

                        ?>

                    ctx.lineTo(<?php  echo ($i+200).",".($y-fx($i,$a_new,$b_new,$c_new)); ?>);

                    <?php } ?>
                    ctx.strokeStyle = "black";
                    ctx.stroke();
                </script>
           <?php  } } ?>
</body>
</html>