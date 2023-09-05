

    
    
    
    <?php

echo "<h1> Exercis 1  :show the name and which color to want </h1>";
//echo "<h2> </h2>";
echo " the name: ";

  $kk=($_POST ["name"]);


    echo $kk;
    echo "<br>";
    echo "the favourie color:";
    

$jj= $_POST["fav"];
echo $jj;
echo "<br>";
$statment = $kk." like ".$jj;


echo $statment;


echo "<h1> Exercis 2 </h1>";

echo "<br>";
echo "Your name :";
$ww=($_POST["name2"]);

echo $ww;

echo"<br>";
echo "Birthdate :";
$ii=($_POST["brith"]);


echo $ii;
echo"<br>";


$gg=date("Y");

//echo $gg;
echo"<br>";
echo "The age:";
$age= $gg-$ii;

echo $age;
echo"<br>";

echo "<h1> Exercis 3 </h1>";
$ee=($_POST["weight"]);

echo"The weight in pounds:";
echo $ee;

echo"<br>";
echo"The weight in KG:";

//to caculate weight by kg
$weight=$ee/2.2046;
echo $weight;
echo"<br>";

echo "<h1> Exercis 4 </h1>";


echo"the first number :";

$rr=($_POST["num1"]);
echo $rr;
echo"<br>";

echo"the second number:";
$tt=($_POST["num2"]);
echo $tt;
echo"<br>";

echo "the sum of two numbers :";
$sum=$rr + $tt;

echo $sum;
    ?>

