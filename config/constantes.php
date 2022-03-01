<?php
/**
* Chemin sur dossier racine du projet
*/
define("ROOT",str_replace("Public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));

// */Chemin vers les controllers et models*/

define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);

///++++++  chemin vers le dossier templates du projet+++++///

define("PATH_VIEWS",ROOT."Templates".DIRECTORY_SEPARATOR);

///++++++Chemin vers Json db.json sur data+++++///

define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

///++++++Chemin pour inclure des images, css, js sur le dossier public+++++///

define("WEBROOT",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));

///++++++Chemin vers les formulaires+++++///

define("PATH_POST","http://localhost:8080");

var_dump(ROOT);




