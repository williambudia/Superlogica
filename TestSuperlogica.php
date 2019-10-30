<?php

for ($i=1;$i<=100;$i++){

	$imprimir = true;

while($i%3==0 && $i%5==0){
	echo "$i Superlógica <br>";
	$imprimir = false;
	break;
}
while($i%3==0 && $i%5!=0){
	echo "$i Super <br>";
	$imprimir = false;
	break;
}
while($i%5==0 && $i%3!=0){
	echo "$i Lógica <br>";
	$imprimir = false;
	break;
}
if($imprimir):
echo "$i<br>";
endif;
}
?>