<?php
if(isset($_REQUEST['controllers'])){
    switch($_REQUEST['controllers']){
        case "securite" :
            require_once(PATH_SRC."controllers/securite.controllers.php");
            break;

       
        case "user" :
            require_once(PATH_SRC."controllers/user.controllers.php");
            break;

    }

}else {
    require_once(PATH_SRC."controllers/securite.controllers.php");

    
}
