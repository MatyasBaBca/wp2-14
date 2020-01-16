<!DOCTYPE html>
<html lang="cz">
<head>
    <title></title>
</head>
<body>

<?php
$randomcislo = mt_rand(0,100); 
$i = 0;  
echo "hledane číslo: $randomcislo". "<br>";
do{
    
    $randomcislo2 = mt_rand(0,100);
    echo "číslo je " . $randomcislo2 . "<br>";
    $i++;
}
while($randomcislo != $randomcislo2);
echo "uhadl si to na $i pokus."

?>


</body>
</html>               