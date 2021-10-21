<html>

<head> <title>CONVERTITORE ARABO - ROMANO</title></head>
    <body>
        <form action="conv_array.php" method = "get">
            <p>numero:<input type="number" name="num"></p>
            <p>romano:<input type="TEXT" name="rom"></p>
            <input type="submit" values="submit">
        </form>


        <?php




$num= intval($_GET['num']);
$num_romano=" ";
$i=0;


$numArabi=array(1000,900,500,400,100,90,50,40,10,9,5,4,1);
$numRomani=array("M","CM","D","CD","C","CX","L","XL","X","IX","V","IV","I");

while($num>0){
    if($num>=$numArabi[$i]){
    $num=$num-$numArabi[$i];
    $num_romano=$num_romano.$numRomani[$i];
    }else {
        $i=$i+1;
    }

}

echo $num_romano;

$somma="";
$rom= "".$_GET['rom'];
$x=0;
$length=strlen($rom);

for ($mul = 0; $mul < $length; ++$mul) {
    //echo("<br><br>". "stampa:".substr($rom,$x,1));
    //$x=$x+1;
    $sub=substr($rom,$x,1);
    echo("nuovo simbolo");

for ($s = 0; $s < sizeof($numRomani); ++$s) { 
    if($sub==$numRomani[$s]){
        echo("si");
        $somma=$somma+$numArabi[$s];
    }
    echo("avanti");
}
}


echo $somma;



?>
    </body></html>