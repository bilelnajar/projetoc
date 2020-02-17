<?php
    $bdd = new PDO("mysql:host=1x22r.myd.infomaniak.com;dbname=1x22r_projet_3", "1x22r_projet_3", "Projet3$$$");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


/*             {
              $dbName = "1x22r_projet_3";
              $username = "1x22r_projet_3";
              $password = "Projet3$$$";

              try 
              {
                $bdd = new PDO("mysql:host=1x22r.myd.infomaniak.com;dbname=$dbName", $username, $password);
              }
              catch (PDOException $e) 
              {
                echo $e->getMessage();
              }