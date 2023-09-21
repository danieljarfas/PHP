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
$osztaly = array(
    array("1.oszlop","2.oszlop","3.oszlop","","4.oszlop","5.oszlop"),
    array("Schwarcz Balázs","","Halír Szabolcs","Fehér László","","Gulcsik Zoltán","Harsányi Ferenc"),
    array("Kiss Márton","","Bartha László","Krenner Dominik","","Járfás Dániel","Végh Szabolcs"),
    array("Bella Marcell","","Simon Attila","","","Hadnagy Márk","Rácz Dávid"),
    array("","","","","Tanár Úr","",""),
    array("","","","","","","Topercer Márton"),
);
print "<pre>";
var_dump($osztaly);
print "</pre>";
?>
<div id="behuz">
<table class="table table-bordered">

<?php
 foreach ($osztaly as $sorIndex => $sor ){
    echo "<tr>";
    foreach($sor as $oszlop => $nev){
        $class = "tanulo";
        if(!$nev) $class = "erdekeskek";
        elseif($sorIndex == 5 and $oszlop == 5) $class = "tanulo";
        echo '<td class="'.$class.'">'.$nev.'</td>';
        if($sorIndex== 0){
            if($oszlop == 0){
                echo '<td rowspan="1" class="erdekeskek" style="width: 35px"></td>';
            }
            elseif($oszlop == 2){
                echo '<td rowspan="6" class="erdekeskek" style="width: 70px"></td>';
            }
        }
        }

    echo "</tr>";

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
            <td id="erdekeskek"><?php echo $osztaly[1][0]?></td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">Halír Szabolcs</td>
            <td id="erdekeskek">Fehér László</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">Gulcsik Zoltán</td>
            <td id="erdekeskek">Harsányi Ferenc</td>
        </tr>
        <tr>
            <td id="erdekeskek">Kiss Márton</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">Bartha László </td>
            <td id="erdekeskek">Krenner Dominik</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">Járfás Dániel</td>
            <td id="erdekeskek">Végh Szabolcs</td>
        </tr>
        <tr>
            <td id="erdekeskek">Bella Marcell</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">Simon Attila</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">Hadnagy Márk</td>
            <td id="erdekeskek">Rácz Dávid</td>
        </tr>
        <tr>
            <td colspan="4"></td>
            <td id="lazac"><b>Tanár Úr</b></td>
            <td colspan="2"></td>
        </tr>
        <tr>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">-</td>
            <td id="erdekeskek">Topercer Márton</td>
        </tr>
        </tbody>

    </table>   
</div> 
</body>
</html>