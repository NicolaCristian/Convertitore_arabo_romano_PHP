<html>

<head> <title>CONVERTITORE ARABO - ROMANO</title></head>
    <body>
        <form action="conv_array.php" method = "get">
            <p>numero:<input type="number" name="num"></p>
            <p>romano:<input type="number" name="rom"></p>
            <input type="submit" values="submit">
        </form>


        <?php




$num= intval($_GET['num']);
$num_romano=" ";
$i=0;


$numArabi(1000,900,500,400,100,90,50,40,10,9,5,4,1);
$numRomani("M","CM","D","CD","C","CX","L","XL","X","IX","V","IV","I");

while($num>0){
    if($num>=$numArabi[$i]){
    $num=$num-$numArabi[$i];
    $num_romano=$num_romano.$numRomani[$i];
    }else {
        $i=$i+1;
    }

}

echo $num_romano;


?>
    </body></html>