<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sequência de Fibonacci</title>
    </head>
    <body>
        <?php
            $n=$_POST["sequencia"];
            $total=array();

            echo 'Sequência de tamnho: '.$n.'.<br><br>';

            for($i=0;$i<$n;$i++){
                if($i<=1){
                    $total[$i]=$i;
                }else{
                    $total[$i] = $total[$i-1] + $total[$i-2];
                }
                echo ''.$total[$i].'<br>';
            }

            echo '<br><br><a href="index.php">Tente outro tamanho de sequência</a>';
        ?>
    </body>
</html>
