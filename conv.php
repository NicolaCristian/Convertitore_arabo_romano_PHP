<html>

<head> <title>CONVERTITORE ARABO - ROMANO</title></head>
    <body>
        <form action="conv.php" method = "get">
            <p>numero:<input type="number" name="num"></p>
            <p>romano:<input type="number" name="rom"></p>
            <input type="submit" values="submit">
        </form>


        <?php


$num= $_GET['num'];
$num_romano=" ";
while($num>=1000){
    $num_romano=$num_romano.'M';
    $num=$num-1000;
} while($num>=500){
    $num_romano=$num_romano.'D';
    $num=$num-500;
} while($num>=100){
    $num_romano=$num_romano.'C';
    $num=$num-100;
} while($num>=50){
    $num_romano=$num_romano.'L';
    $num=$num-50; 
} while($num>=10){
    $num_romano=$num_romano.'X';
    $num=$num-10;
} while($num>=5){
    $num_romano=$num_romano.'V';
    $num=$num-5;    
} while($num>=1){
    $num_romano=$num_romano.'I';
    $num=$num-1;    
}

echo $num_romano;


$rom=$_GET['rom'];
$num_dec=" ";
strlen($str);


$str = "Hello World";


for ($mul = 0; $mul <= strlen($str); ++$mul) {
    echo strlen($title);
    substr($string, $start, $lenght);
    }
;

?>
  </body>
</html>