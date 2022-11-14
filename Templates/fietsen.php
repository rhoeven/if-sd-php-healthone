<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
<?php
include_once('defaults/header.php');
include_once('defaults/menu.php');
include_once('defaults/pictures.php');
?>
<?php
global $fietsen;
$teller = 1;
echo "<style>table, tr, td {border: 1px solid; border-collapse: collapse;}</style>";
echo "<table class='table'>";
echo "<tr>";
echo "<th>nummer</th>";
echo "<th>merk</th>";
echo "<th>type</th>";
echo "<th>prijs</th>";
echo "<th>voorraad</th>";
echo "</tr>";

foreach ($fietsen as $fiets) {
    echo "<tr>";
    echo "<td>".$teller. "</td> ";
    echo "<td>".$fiets['merk']. "</td>";
    echo "<td>".$fiets['type']. "</td> ";
    echo "<td>".$fiets['prijs']. "</td>";
    echo "<td>".$fiets['voorraad']."</td>";
    echo "<td><a href='detail/".$fiets['id']."'>detail</a></td>";
    echo "<tr>";
    $teller++;
}

?>
</div>
</body>
</html>
