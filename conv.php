<html>

<head> <title>CONVERTITORE ARABO - ROMANO</title></head>
    <body>
        <form action="conv.php" method = "get">
            <p>numero:<input type="number" name="num"></p>
            <p>romano:<input type="number" name="rom"></p>
            <input type="submit" values="submit">
        </form>


        <?php


$array = array(
    "100" => "C", 
    "500" => "D"
);


$num= $_GET['num'];
$num_romano=" ";
while($num>=1000){
    if($num==4000){
        $num_romano=$num_romano."CMMM";
        $num=$num-4000;
        
           } else {
            $num_romano=$num_romano.'M';
            $num=$num-1000;
        }

} while($num>=500){

    if($num==900){
$num_romano=$num_romano."CM";
$num=$num-900;

   } else {
    $num_romano=$num_romano.'D';
    $num=$num-500;
}

} while($num>=100){
    if($num==400){
        $num_romano=$num_romano."CD";
        $num=$num-400;
    }else{
    $num_romano=$num_romano.'C';
    $num=$num-100;
}
} while($num>=50){
    
    if($num==90){
        $num_romano=$num_romano."XL";
        $num=$num-90;
    }else{
    $num_romano=$num_romano.'L';
    $num=$num-50;
}
} while($num>=10){
    if($num==40){
        $num_romano=$num_romano."IL";
        $num=$num-40;
    }else{
    $num_romano=$num_romano.'X';
    $num=$num-10;
}
} while($num>=5){
    if($num==9){
        $num_romano=$num_romano."IX";
        $num=$num-9;
    }else{
    $num_romano=$num_romano.'V';
    $num=$num-5;
}
} while($num>=1){
    $num_romano=$num_romano.'I';
    $num=$num-1;    
}

echo $num_romano;



?>
  </body>
</html>