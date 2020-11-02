<?php
$punakawan = array("Semar","Gareng","Petruk","Bagong");
echo$punakawan[0];
echo "<br>";
echo $punakawan[3];

$punakawan[1]="semar";
$punakawan[2]="Gareng";
$punakawan[3]="Petruk";
$punakawan[4]="Bagong";
echo $punakawan[0];
for($x=4;$x>1;$x--){
	echo $punakawan[$x]."<br/>";
}
?>
