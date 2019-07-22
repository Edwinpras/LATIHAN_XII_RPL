<?php
//mencetak bintang dengan perulangan berjajar
for($i=1;$i<=5;$i++){
echo "*";
}

echo "<br/><br/><br/>";

//mencetak bintang dengan perulangan menurun
for($i=1;$i<=5;$i++){
echo "*<br/>";
}

echo "<br/><br/><br/>";

//mencetak segitiga bintang dengan perulangan
for($i=1;$i<=5;$i++){
  for ($a=1; $a<=$i;$a++){
    echo "*";
  }
  echo "<br/>";
}

echo "<br/><br/><br/>";

//mencetak segitiga bintang dengan perulangan
for($i=1;$i<=5;$i++){
  for ($z=5;$z>$i;$z--){
	echo " ";
  }
  for ($a=1; $a<=$i;$a++){
    echo "*";
  }
  echo "<br/>";
}

echo "<br/><br/><br/>";

//mencetak segitiga bintang dengan perulangan
for($i=1;$i<=5;$i++){
  for ($z=5;$z>$i;$z--){
	echo "-";
  }
  for ($a=1; $a<=$i;$a++){
    echo "*";
  }
  echo "<br/>";
}

?>
