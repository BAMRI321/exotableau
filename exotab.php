<?php
$tab =array();
for($i =0; $i<100;$i++)
{
    $tab[$i]=rand(0,100);
}

for($i =0; $i<101;$i++)
{
    
$s=0;
  for($j=0;$j<100;$j++)
  {
      if($tab[$j]==$i)
       {
           $s=$s+1;
       }
  }
  echo "la valeur de ".$i." est presente ".$s." fois <br>";


}
?>