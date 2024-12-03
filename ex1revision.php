<?php

$employe=array(
"loubna"=>array("poste"=>"ingenieur en info","salaire"=>9500),
"amin"=>array("poste"=>"comptable","salaire"=>6000),
"khadija"=>array("poste"=>"ingnieur en info","salaire"=>11500),
"nassim"=>array("poste"=>"data scientist","salaire"=>12700)

);



foreach($employe as $key => $k1)
{
    echo "$key : <br>";
    echo "poste :" . $k1['poste'] . "<br>";
    echo "Salaire : " . $k1['salaire'] . " DH<br><br>";

}

$nbemploye=count($employe);

foreach($employe as $key => $k1)
{

   if($key="salaire")
   {

    $s=0;
     $s=$s+$k1['salaire'];

   $moy=($nbemploye/$s);

   }

}

echo "le salaire moyen : $moy";