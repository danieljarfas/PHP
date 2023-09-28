<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ulesrend.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>uresrend</title>
</head>
<body>

<?php
require "mysql.php";


/*print "<pre>";
var_dump($osztaly);
print "</pre>";*/
?>
<div id="behuz">
<table class="table table-bordered">

<?php
$sql = "SELECT id, nev, sor, oszlop FROM `osztaly` ORDER BY sor, oszlop;";
$result = $conn->query($sql);
if($result->num_rows > 0){
    echo "          <tr>";
    $sorId = NULL;
    while($row = $result->fetch_assoc()){
        if($row["sor"] != $sorId){
            $sorId = $row["sor"];
            echo "          <tr>";
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            echo "        <tr>";
        }

    }
}
?>
</table>
<table class="table table-bordered">
    <?php

    ?>

<?php
$osztaly = array(
    array("1.oszlop","2.oszlop","3.oszlop","","4.oszlop","5.oszlop"),
    array("Schwarcz Balázs","","Halir Szabolcs","Fehér László","","Gulcsik Zoltán","Harsányi Ferenc"),
    array("Kiss Márton","","Bartha László","Krenner Dominik","","Járfás Dániel","Végh Szabolcs"),
    array("Bella Marcell","","Simon Attila","","","Hadnagy Márk","Rácz Dávid"),
    array("","","","","Tanár Úr","",""),
    array("","","","","","","Topercer Márton"),
);

 foreach ($osztaly as $sorIndex => $sor ){
    echo "<tr>";
    foreach($sor as $oszlop => $nev){
        $class = "tanulo";
        if(!$nev) $class = "tolto";
        elseif($sorIndex == 5 and $oszlop == 5) $class = "tanulo";
        echo '<td class="'.$class.'">'.$nev.'</td>';
        if($sorIndex== 0){
            if($oszlop == 0){
                echo '<td rowspan="1" class="tolto" style="width: 40px"></td>';
            }
            elseif($oszlop == 2){
                echo '<td rowspan="6" class="tolto" style="width: 70px"></td>';
            }
        }
        }

    echo "            </tr>";

 }

?>

</table>

<div id="behuz">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th><?php echo $osztaly[0][0]; ?></th>
            <th>Üres oszlop</th>
            <th>2.oszlop</th>
            <th>3.oszlop</th>
            <th>Üres oszlop</th>
            <th>4.oszlop</th>
            <th>5.oszlop</th>
        </thead>
        <tbody>
        </tr>
        <tr>
            <td id="tolto"><?php echo $osztaly[1][0]?></td>
            <td id="tolto">-</td>
            <td id="tolto">Halír Szabolcs</td>
            <td id="tolto">Fehér László</td>
            <td id="tolto">-</td>
            <td id="tolto">Gulcsik Zoltán</td>
            <td id="tolto">Harsányi Ferenc</td>
        </tr>
        <tr>
            <td id="tolto">Kiss Márton</td>
            <td id="tolto">-</td>
            <td id="tolto">Bartha László </td>
            <td id="tolto">Krenner Dominik</td>
            <td id="tolto">-</td>
            <td id="tolto">Járfás Dániel</td>
            <td id="tolto">Végh Szabolcs</td>
        </tr>
        <tr>
            <td id="tolto">Bella Marcell</td>
            <td id="tolto">-</td>
            <td id="tolto">Simon Attila</td>
            <td id="tolto">-</td>
            <td id="tolto">-</td>
            <td id="tolto">Hadnagy Márk</td>
            <td id="tolto">Rácz Dávid</td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td id="lazac"><b>Tanár Úr</b></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td id="tolto">-</td>
            <td id="tolto">-</td>
            <td id="tolto">-</td>
            <td id="tolto">-</td>
            <td id="tolto">-</td>
            <td id="tolto">-</td>
            <td id="tolto">Topercer Márton</td>
        </tr>
        </tbody>

    </table>   
</div> 
</body>
</html>