<?php

try{
  $bdd = new PDO("mysql:host=1x22r.myd.infomaniak.com;dbname=1x22r_projet_3", "1x22r_projet_3", "Projet3$$$");
}
catch (PDOException $e) 
{
  echo $e->getMessage();
}
