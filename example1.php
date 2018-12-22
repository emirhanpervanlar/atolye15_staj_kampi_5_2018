
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example1</title>
    <meta name="author" content="Emirhan PERVANLAR" >
</head>
<body>
<form action="" method="post">
    <label for="m">İnput :</label>
    <input type="text" name="input"/>

    <input type="submit" value="Bas">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
if(isset($_POST['input']) && $_POST['input'] != null) {
    $finish = 0;
    $error = 0;
    $temp = 0;
    while($finish == 0 && $error == 0){
        $exe = trim($_POST['input']);
        $s_len = strlen($exe);
        $temp = 0;
        $func = 0;
        $number = 0;
        $first = 0;
        for ($i=0 ; $i < $s_len;$i++){
            if(is_numeric($exe[$i])){
                $temp = (int)((string)$temp.(string)$exe[$i]);
            }else{
                $i = $s_len;
            }
            $first ++;
        }

        for ($i=$first-1; $i < $s_len;$i++){
            if($exe[$i] == "+"){
                for ($y=$i+1 ; $y < $s_len;$y++){
                    if(is_numeric($exe[$y])){
                        $number = (int)((string)$number.(string)$exe[$y]);
                        if($y+1 == $s_len){
                            $temp = $temp + $number;

                        }
                    }else{
                        $temp = $temp + $number;
                        $number = 0;
                        $i = $y-1;
                        $y = $s_len;
                    }


                }

            }elseif($exe[$i] == "-"){
                for ($y=$i+1 ; $y < $s_len;$y++){
                    if(is_numeric($exe[$y])){
                        $number = (int)((string)$number.(string)$exe[$y]);
                        if($y+1 == $s_len){
                            $temp = $temp - $number;

                        }
                    }else{
                        $temp = $temp - $number;
                        $number = 0;
                        $i = $y-1;
                        $y = $s_len;
                    }


                }

            }elseif($exe[$i] == "*"){
                for ($y=$i+1 ; $y < $s_len;$y++){
                    if(is_numeric($exe[$y])){
                        $number = (int)((string)$number.(string)$exe[$y]);
                        if($y+1 == $s_len){
                            $temp = $temp * $number;

                        }
                    }else{
                        $temp = $temp * $number;
                        $number = 0;
                        $i = $y-1;
                        $y = $s_len;
                    }


                }

            }elseif($exe[$i] == "/"){
                for ($y=$i+1 ; $y < $s_len;$y++){
                    if(is_numeric($exe[$y])){
                        $number = (int)((string)$number.(string)$exe[$y]);
                        if($y+1 == $s_len){
                            $temp = $temp / $number;
                        }
                    }else{
                        $temp = $temp / $number;
                        $number = 0;
                        $i = $y-1;
                        $y = $s_len;
                    }
                }

            }else{
                if(!is_numeric($exe[$i])){
                    echo "Değer Hatası";
                    $i = $s_len;
                    $error = 1 ;
                }
            }
        }
        break;

    }
    if($finish == 0 && $error == 0){
        echo $temp;
    }
}}

?>
</body>
</html>