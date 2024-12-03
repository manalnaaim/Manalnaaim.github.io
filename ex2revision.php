<?php

$personne=array(
'mdupond'=>array('prenom'=> 'martin','nom'=>'dupond','age'=>25,'ville'=>'paris'),
'jm'=>array('prenom'=>'jean','nom'=>'martin','age'=>20,'ville'=>'villetaneuse'),
'toto'=>array('prenom'=>'tom','nom'=>'tonge','age'=>18,'ville'=>'epinay'),
'arn'=>array('prenom'=>'arnaud','nom'=>'dupond','age'=>33,'ville'=>'paris'),
'email'=>array('prenom'=>'emilie','nom'=>'ailta','age'=>46,'ville'=>'villetaneuse'),
'dask'=>array('prenom'=>'damien','nom'=>'askier','age'=>7,'ville'=>'villetaneuse')
);

foreach($personne as $k1 =>$v)
{
echo "$k1 : $v";
  echo "<br>";
}


