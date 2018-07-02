<?php

$f = json_decode(file_get_contents("https://raw.githubusercontent.com/openfootball/world-cup.json/master/2018/worldcup.groups.json"));

foreach($f->groups as $g){
echo "<table border=1>";
echo "<tr><th>".$g->name."</th><th>Team</th><th>Code</th></tr>";
$i = 1;
foreach($g->teams as $t){
echo "<tr><td>".$i++."</td><td>".$t->name."</td><td>".$t->code."</td></tr>"; }
echo "</table><br>";
}

?>