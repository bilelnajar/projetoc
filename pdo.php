<?php
    $bdd = new PDO("mysql:host=1x22r.myd.infomaniak.com;dbname=1x22r_projet_3", "1x22r_projet_3", "Projet3$$$");
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
