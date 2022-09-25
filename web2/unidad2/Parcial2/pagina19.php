<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprintf</title>
</head>
<body>
    <h1 align=center>Arreglo </h1>
    <?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
for($a=0; $a<4;$a++){
    echo $cars[$a][0].": In stock: ".$cars[$a][1].", sold: ".$cars[$a][2].".<br>";
}

?>

</body>
<footer> 
    <hr>
    <p style="text-align:center;">Ana Karen Cuenca Esquivel - 177932<br>UNIVERSIDAD POLITECNICA DE SAN LUIS POTOSI<br>Programacion Web I</p>
</footer>
</html>